<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Userapi extends RestController {

	public  $appid='wxa3427aab54b6e296';
	public  $secret='86aa8b48bafe41f0c2f74a086931d849';
	public  $OK = 0;
	public  $IllegalAesKey = -41001;
	public  $IllegalIv = -41002;
	public  $IllegalBuffer = -41003;
	public  $DecodeBase64Error = -41004;

	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->load->model('mquotes_model');
		$this->load->model('quotes_model');
		$this->load->model('pclass_model');
		$this->load->model('addbuy_model');
		$this->load->model('addsell_model');
		$this->load->model('message_model');
		$this->load->model('wxuser_model');
		$this->load->model('api_model');
		$this->load->model('userapi_model');
		$this->load->model('history_model');
		$this->load->model('follow_model');
		$this->load->model('followp_model');
		$this->load->model('addqiu_model');
		$this->load->model('addchu_model');

	}


	public function addqiu_post()
	{

		$insertdata=$this->_post_args;


		//大盘指数
		$list= $this->userapi_model->ApiAdd('addqiu',$insertdata);
		// Check if the users data store contains users
		if ( $list )
		{

			// Set the response and exit
			$this->response( $list, 201 );
		}
		else
		{
			// Set the response and exit
			$this->response(['status' => false,'message' => 'No users were found'],404);
		}

	}


	public function addchu_post()
	{

		$insertdata=$this->_post_args;


		//大盘指数
		$list= $this->userapi_model->ApiAdd('addchu',$insertdata);
		// Check if the users data store contains users
		if ( $list )
		{

			// Set the response and exit
			$this->response( $list, 201 );
		}
		else
		{
			// Set the response and exit
			$this->response(['status' => false,'message' => 'No users were found'],404);
		}

	}



	/**
	 * 检验数据的真实性，并且获取解密后的明文.
	 * @param $encryptedData string 加密的用户数据
	 * @param $iv string 与用户数据一同返回的初始向量
	 * @param $data string 解密后的原文
	 *
	 * @return int 成功0，失败返回对应的错误码
	 */
	public function decryptData( $encryptedData, $iv,$sessionKey, &$data )
	{
		if (strlen($sessionKey) != 24) {
			return $this->IllegalAesKey;
		}
		$aesKey=base64_decode($sessionKey);


		if (strlen($iv) != 24) {
			return $this->IllegalIv;
		}
		$aesIV=base64_decode($iv);

		$aesCipher=base64_decode($encryptedData);

		$result=openssl_decrypt( $aesCipher, "AES-128-CBC", $aesKey, 1, $aesIV);

		$dataObj=json_decode( $result );
		if( $dataObj  == NULL )
		{
			return $this->IllegalBuffer;
		}
		if( $dataObj->watermark->appid != $this->appid )
		{
			return $this->IllegalBuffer;
		}
		$data = $result;
		return $this->OK;
	}

	public function getopenid_post()
	{

		$insertdata=$this->_post_args;

		$code=$insertdata['code'];

		$curl=curl_init();
		$url='https://api.weixin.qq.com/sns/jscode2session?appid='.$this->appid.'&secret='.$this->secret.'&js_code='.$code.'&grant_type=authorization_code';
		curl_setopt($curl,CURLOPT_URL,$url);
		curl_setopt($curl,CURLOPT_HEADER,false);
		curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
		$data=curl_exec($curl);
		curl_close($curl);


		// Check if the users data store contains users
		if ( $data )
		{

			$data = json_decode($data, true);

			$insertdata['openid']=$data['openid'];
			$insertdata['session_key']=$data['session_key'];

			//判断是否存在
			$has= $this->wxuser_model->ApiGetInfo($data['openid']);



			if($has){

				//多设置一个id
				$data['uid']=$has->id;

				//直接返回openid
				$this->response( $data, 201 );

			}else{
				$res= $this->wxuser_model->ApiAdd($insertdata);
				if($res){


					//多设置一个res返回的id
					$data['uid']=$res;



					// Set the response and exit
					$this->response( $data, 201 );
				}else{
					// Set the response and exit
					$this->response(['status' => false,'message' => '写入数据失败'],404);
				}
			}



		}
		else
		{
			// Set the response and exit
			$this->response(['status' => false,'message' => '验证失败'],404);
		}

	}
	public function userdata_get()
	{
		$uid=$this->get('uid');
		//echo $uid;
		$history= $this->userapi_model->get_count('history',$uid);
		$discuss= $this->userapi_model->get_count('discuss',$uid);
		$follow= $this->userapi_model->get_count('follow',$uid);

		$list=array("history"=>$history,"discuss"=>$discuss,"follow"=>$follow);
		// Check if the users data store contains users
		if ( $list )
		{
			// Set the response and exit
			$this->response( $list, 200 );
		}
		else
		{
			// Set the response and exit
			$this->response(['status' => false,'message' => 'No users were found'],404);
		}

	}

	public function follow_get()
	{
		$uid=$this->get('uid');
		//大盘指数
		$list= $this->userapi_model->get_list_follow('follow',$uid);
		// Check if the users data store contains users
		if ( $list )
		{
			// Set the response and exit
			$this->response( $list, 200 );
		}
		else
		{
			// Set the response and exit
			$this->response(['status' => false,'message' => 'No users were found'],404);
		}

	}
	public function followp_get()
	{
		$uid=$this->get('uid');
		//大盘指数
		$list= $this->userapi_model->get_list_followp('followp',$uid);
		// Check if the users data store contains users
		if ( $list )
		{
			// Set the response and exit
			$this->response( $list, 200 );
		}
		else
		{
			// Set the response and exit
			$this->response(['status' => false,'message' => 'No users were found'],404);
		}

	}
	public function followcancel_get()
	{
		$id=$this->get('id');
		//大盘指数
		$list= $this->follow_model->ApiDel($id);
		// Check if the users data store contains users
		if ( $list )
		{
			// Set the response and exit
			$this->response( $list, 200 );
		}
		else
		{
			// Set the response and exit
			$this->response(['status' => false,'message' => 'No users were found'],404);
		}

	}
	public function followpcancel_get()
	{
		$id=$this->get('id');
		//大盘指数
		$list= $this->followp_model->ApiDel($id);
		// Check if the users data store contains users
		if ( $list )
		{
			// Set the response and exit
			$this->response( $list, 200 );
		}
		else
		{
			// Set the response and exit
			$this->response(['status' => false,'message' => 'No users were found'],404);
		}

	}

	//收藏
	public function history_get()
	{
		//大盘指数
		$uid = $this->get('uid');
		$list= $this->history_model->get_list($uid);
		// Check if the users data store contains users
		if ( $list )
		{
			// Set the response and exit
			$this->response( $list, 200 );
		}
		else
		{
			// Set the response and exit
			$this->response(['status' => false,'message' => 'No users were found'],404);
		}

	}


	//收藏
	public function addfollowp_post()
	{

		$insertdata=$this->_post_args;

		//\\\\\\\\\\\\\\print_r($insertdata);

		//判断是否存在
		$has= $this->userapi_model->ApiGetInfo($insertdata['uid'],$insertdata['fuid']);

		//增加下热度
		$uid=$insertdata['fuid'];
		$table='wxuser';
		$cc=$this->userapi_model->ApiHot($uid,$table);
//		echo $insertdata['uid'];
//		echo $insertdata['fuid'];

//		print_r($has);
//		exit;
		if($has){
			//存在就取消
			$list= $this->userapi_model->ApiDel($has->id,'followp');
		}else{
			//大盘指数
			$list= $this->followp_model->ApiAdd($insertdata);
		}

		// Check if the users data store contains users
		if ( $list )
		{
			// Set the response and exit
			$this->response( $list, 201 );
		}
		else
		{
			// Set the response and exit
			$this->response(['status' => false,'message' => 'No users were found'],404);
		}

	}
	//历史
	public function addhistory_post()
	{
		$insertdata=$this->_post_args;

		//大盘指数
		$list= $this->history_model->ApiAdd($insertdata);
		// Check if the users data store contains users
		if ( $list )
		{
			// Set the response and exit
			$this->response( $list, 201 );
		}
		else
		{
			// Set the response and exit
			$this->response(['status' => false,'message' => 'No users were found'],404);
		}

	}
	//历史
	public function addfollow_post()
	{
		$insertdata=$this->_post_args;

		//大盘指数
		$list= $this->follow_model->ApiAdd($insertdata);
		// Check if the users data store contains users
		if ( $list )
		{
			// Set the response and exit
			$this->response( $list, 201 );
		}
		else
		{
			// Set the response and exit
			$this->response(['status' => false,'message' => 'No users were found'],404);
		}

	}


	//历史
	public function addphone_post()
	{
		$insertdata=$this->_post_args;

		$id=$insertdata['id'];

		$sessionKey = $insertdata['session_key'];
		$encryptedData = $insertdata['encryptedData'];
		$iv = $insertdata['iv'];
		$data = '';

		$errCode = $this->decryptData($encryptedData, $iv,$sessionKey, $data );

		if ($errCode == 0) {
		//$data
			/*
				* countryCode: "1"
				* phoneNumber: "+12026300025"//带国家编号的手机号码
				* purePhoneNumber: "2026300025"
			 */
			$data = json_decode($data, true);
			$updata['phone']=$data['phoneNumber'];
			$updata['id']=$id;
		// Check if the users data store contains users
		if ( $updata )
			{
				//判断是否存在
				//大盘指数
				$this->userapi_model->ApiUpdate('wxuser',$updata,$id);
				// Set the response and exit
				$this->response( $updata, 201 );
			}else
			{
				// Set the response and exit
				$this->response(['status' => false,'message' => '获取数据失败'],404);
			}
		} else {
			// Set the response and exit
			$this->response(['status' => false,'message' =>$errCode],404);
		}
	}
	//历史
	public function adddiscuss_post()
	{
		$insertdata=$this->_post_args;
		//大盘指数
		$list1= $this->userapi_model->ApiAdd('discuss',$insertdata);
		// Check if the users data store contains users


		if ( $list1 )
		{

			$insertdata['name']='用户消息';

			$list2= $this->userapi_model->ApiAdd('message',$insertdata);

			// Set the response and exit
			$this->response( $list2, 201 );
		}
		else
		{
			// Set the response and exit
			$this->response(['status' => false,'message' => 'No users were found'],404);
		}

	}
	//历史
	public function discuss_get()
	{

		$pid=$this->get('pid');
		//大盘指数
		$list= $this->userapi_model->get_list_discuss($pid);
		// Check if the users data store contains users
		if ( $list )
		{
			// Set the response and exit
			$this->response( $list, 200 );
		}
		else
		{
			// Set the response and exit
			$this->response(['status' => false,'message' => 'No users were found'],404);
		}

	}

	public  function  todayhas_get(){

		$uid=$this->get('uid');
		//查询最近一条的时间
		$res=$this->userapi_model->ApiGetPriceInfo($uid,'','priceview');

		if($res){

			$useday=date('Y-m-d',strtotime($res->addtime));
			$today=date("Y-m-d");
			$data['useday']=$useday;
			$data['today']=$today;

			if($useday==$today){
				$this->response(['status' => true,'message' =>$data],200);
			}else{
				$this->response(['status' => false,'message' => $data],200);
			}
		}else{
			$this->response(['status' => false,'message' => 'No users were found'],404);
		}

	}

	public function apicheck_get()
	{
		$uid=$this->get('uid');


		$wxuser= $this->api_model->getinfo($uid,'wxuser');
		$aa=$this->api_model->checkToday($uid);


		$arr['a']= $aa->a;
		$arr['interval']= $wxuser->interval;
		$arr['is_use']= $wxuser->is_use;

		//echo $list->a;

		if ( $arr )
		{
			// Set the response and exit
			$this->response( ['status' => true,'message' =>$arr ], 200 );
		}
		else
		{
			// Set the response and exit
			$this->response(['status' => false,'message' => 'No users were found'],404);
		}

	}
	public function message_get()
	{
		$uid=$this->get('uid');
		$page=$this->get('page');
		//大盘指数
		$list= $this->userapi_model->get_message_list($uid,$page,20);

		// Check if the users data store contains users
		if ( $list )
		{
			// Set the response and exit
			$this->response( $list, 200 );
		}
		else
		{
			// Set the response and exit
			$this->response(['status' => false,'message' => 'No users were found'],404);
		}

	}


}
