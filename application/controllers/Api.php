<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
		$this->load->model('mquotes_model');
		$this->load->model('quotes_model');
		$this->load->model('quotesline_model');
		$this->load->model('pclass_model');
		$this->load->model('addbuy_model');
		$this->load->model('addsell_model');

		$this->load->model('message_model');
		$this->load->model('wxuser_model');
		$this->load->model('api_model');
    $this->load->model('history_model');
    $this->load->model('hot_model');

    }

	public function mqhot_get()
	{
		//大盘指数
		$list= $this->api_model->gethot();

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


    public function mq_get()
    {

			$day= $this->mquotes_model->get_m_list('day');
			$week= $this->mquotes_model->get_m_list('week');
			$month= $this->mquotes_model->get_m_list('month');

      		$hday= $this->hot_model->get_m_list('day');
			$hweek= $this->hot_model->get_m_list('week');
			// $hmonth= $this->hot_model->get_m_list('month');

			//大盘指数
			$list= $this->mquotes_model->getlimit();
      		$hot = $this->hot_model->getlimit();




			$res['nowprice']=$list->price;
			$res['up']=$list->updown;
			$res['upp']=$list->upp;
      		$res['hot'] = $hot->hot;


	 

			if($day&&((int)$day[0]['price'])!=0){
				
				$res['dup']=floor(($res['nowprice']-(int)$day[0]['price'])*100/(int)$day[0]['price']);
			}else{
				$res['dup']=0;
			}
	 



			if($hday&&(int)$hday[0]['hot']!=0){
				
			//echo $hday[0]['hot'];
				$res['upfy']=floor(($res['hot'])*100/(int)$hday[0]['hot']);
 			}else{
				$res['upfy']=0;
  			}
  
      	
 

			if($week&&((int)$week[0]['price'])!=0){
				$res['weekup']=floor(($res['nowprice']-(int)$week[0]['price'])*100/(int)$week[0]['price']);

				// if($res['weekup']==-551){
				// 	$res['weekup']=0;
				// 	$res['upfw']=0;
				// }
			}else{
				$res['weekup']=0;

			}
	


      if($hweek&&(int)$hweek[0]['hot']!=0){

			//echo $hweek[0]['hot'];
			//echo $res['hot'];
        	$res['upfw']=floor(($res['hot'])*100/(int)$hweek[0]['hot']);
      }else{
        $res['upfw']=0;
      }

			if(((int)$month[0]['price'])!=0){
				$res['mup']=floor(($res['nowprice']-(int)$month[0]['price'])*100/(int)$month[0]['price']);
			}else{
				$res['mup']=0;
			}

			//大盘指数
			$hotinfo= $this->hot_model->gethot();
      // print_r($hotinfo[0]['hot']);
      // exit;
			$res['hot']=$hotinfo->hot;

			//print_r($res);
			// Check if the users data store contains users
			if ( $res )
			{
				// Set the response and exit
				$this->response( $res, 200 );
			}
			else
			{
				// Set the response and exit
				$this->response(['status' => false,'message' => 'No users were found'],404);
			}
    }
	public function copyData_get()
	{
		$list=$this->api_model->getQidlist();
		foreach ($list as $v){
			$this->api_model->cpoyData($v['qid']);
		}
	}
	public function mqlist_get()
	{
		//大盘指数
    $order = $this->get('order');
    $start = $this->get('start');
    $end = $this->get('end');
		$list= $this->mquotes_model->get_list($order,$start,$end);

		$arr=array();
		foreach ($list as $v){
			$arr['categories'][]=date('d',strtotime($v['addtime']));;
			$arr['data'][]=$v['price'];
		}
		$listall['line']=$arr;
		$listall['table']=$list;
		// Check if the users data store contains users
		if ( $listall )
		{
			// Set the response and exit
			$this->response( $listall, 200 );
		}
		else
		{
			// Set the response and exit
			$this->response(['status' => false,'message' => 'No users were found'],404);
		}

	}


	public function quotes_get()
	{
		$orderinfo=$this->get('orderinfo');
		$descinfo=$this->get('descinfo');
		$page=$this->get('page');
		//大盘指数
		$list= $this->api_model->quotes_order_list($orderinfo,$descinfo,$page,20);
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
	public function search_get()
	{
		$keyword=$this->get('keyword');
		//大盘指数
		$list= $this->api_model->search_list('quotes',$keyword);
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
	public function count_get()
	{
		//大盘指数
		$buyc= $this->api_model->get_count_by('addbuy');
		$sellc= $this->api_model->get_count_by('addsell');
		// Check if the users data store contains users
		$list['b']=$buyc;
		$list['s']=$sellc;

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

	public function searchb_get()
	{
		$pid=$this->get('pid');
		//大盘指数
		$countb= $this->api_model->get_count_by_pid('addqiu',$pid);

		$counta=$this->api_model->get_count_by_pid('addchu',$pid);

//		print_r($counta);
//		print_r($countb);

		$da['b']=$countb;
		$da['s']=$counta;

		$da['alist'] = $this->api_model->search_list_by_pid('addqiu',$pid);

		$da['blist']=$this->api_model->search_list_by_pid('addchu',$pid);



		// Check if the users data store contains users
		if ( $da )
		{
			// Set the response and exit
			$this->response( $da, 200 );
		}
		else
		{
			// Set the response and exit
			$this->response(['status' => false,'message' => 'No users were found'],404);
		}

	}

	public function searchlinebytime_post()
	{
//		$start=$this->get('start');
//		$end=$this->get('end');
		$insertdata=$this->_post_args;

		//大盘指数
		$list= $this->api_model->search_bytime('quotesline',$insertdata['start'],$insertdata['end'],$insertdata['qid']);
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
	public function searchmainbytime_post()
	{
//		$start=$this->get('start');
//		$end=$this->get('end');
		$insertdata=$this->_post_args;

		//大盘指数
		$list= $this->api_model->search_bytime('mquotes',$insertdata['start'],$insertdata['end']);
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

	public function quotesinfo_get()
	{
		$id=$this->get('id');
		//大盘指数
		$list= $this->quotes_model->getApiInfo($id);
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
	public function quoteslinelist_get()
	{
		$qid=$this->get('qid');
    $order=$this->get('order');
		$start=$this->get('start');
		$end=$this->get('end');

		//大盘指数
		//$list= $this->quotesline_model->get_list($qid);
		$list=$this->api_model->getPeriodQuote($qid,$order,$start,$end);

		// Check if the users data store contains users

		$arr=array();
		foreach ($list as $v){


			$arr['categories'][]=date('d',strtotime($v['addtime']));;
			$arr['data'][]=$v['price'];
		}

		$listall['line']=$arr;
		$listall['table']=$list;
		//array_push($list,$arr);
		if ( $listall )
		{
			// Set the response and exit
			$this->response( $listall, 200 );
		}
		else
		{
			// Set the response and exit
			$this->response(['status' => false,'message' => 'No users were found'],404);
		}

	}
	public function quotesline_get()
	{
		$qid=$this->get('qid');
		//大盘指数
		$list= $this->quotesline_model->get_list($qid);
		$arr=array();
		foreach ($list as $v){


			$arr['categories'][]=date('m-d',strtotime($v['addtime']));;
			$arr['data'][]=$v['price'];
		}


		// Check if the users data store contains users
		if ( $arr )
		{
			// Set the response and exit
			$this->response( $arr, 200 );
		}
		else
		{
			// Set the response and exit
			$this->response(['status' => false,'message' => 'No users were found'],404);
		}

	}

	//浏览加1
	public function quotesview_get()
	{
		$id=$this->get('id');
		//大盘指数
		$list= $this->quotes_model->UpdateView($id);
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

	public function system_get()
	{
		//大盘指数
		$list= $this->api_model->getinfo(1,'system');
		// Check if the users data store contains users
		if ( $list )
		{
			// Set the response and exit
			$this->response( $list, 200 );
		}
		else
		{
			// Set the response and exi
			$this->response(['status' => false,'message' => 'No users were found'],404);
		}

	}

	public function pclass_get()
	{
		//大盘指数
		$list= $this->pclass_model->get_list();
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



	public function price_get()
	{
		$page=$this->get('page');
    $uid=$this->get('uid');

		//大盘指数
		$list= $this->api_model->get_list($page,20);

//		$res=array();
//
//		foreach($list as  $vo){
//
//			foreach($res as $value ){
//
//				if($value['uid']==$vo['uid']){
//					continue 2;//如果存在就跳出本次循环
//				}
//			}
////			array_push($res,array("uid"=>$vo['uid'],
////				"nickName"=>$vo['nickName'],
////				"avatarUrl"=>$vo['avatarUrl']
////				));
//			//$res=;
//
//			$arr1=array();
//			$arr2=array();
//
//
//
//			foreach($list as  $vo2){
//
//
//
//				if($vo['uid']==$vo2['uid']){
//
//					if($vo2['type']=='b'){
//
//
//
//						array_push($arr1,array("name"=>$vo2['name'],
//							"price"=>$vo2['price'],
//							"volume"=>$vo2['volume']));
//
////						$rs['alist'][]=array("name"=>$vo2['name'],
////							"price"=>$vo2['price'],
////							"volume"=>$vo2['volume']);
//
//
//					}else{
//
//						array_push($arr2,array("name"=>$vo2['name'],
//							"price"=>$vo2['price'],
//							"volume"=>$vo2['volume']));
//
//					}
//
//				}
//
//			}
//
//			$start_time = time();
//			$end_time=strtotime($vo['addtime']);
//			$t=$start_time-$end_time;//现在时间-发布时间 获取时间差
//
//			$f=array(
//				'31536000'=>'年',
//				'2592000'=>'个月',
//				'604800'=>'星期',
//				'86400'=>'天',
//				'3600'=>'小时',
//				'60'=>'分钟',
//				'1'=>'秒'
//			);
//
//			if($t<60){
//				$q='1分钟';
//			}else if(3600>$t&&$t>60){
//				$q='1小时';
//			}else if(86400>$t&&$t>3600){
//				$q='1天内';
//			}else if(2592000>$t&&$t>86400){
//				$q='1月内';
//			}else{
//				$q='超过一个月';
//			}
//
//
//			array_push($res,array("uid"=>$vo['uid'],
//				"nickName"=>$vo['nickName'],
//				"avatarUrl"=>$vo['avatarUrl'],
//				"phone"=>$vo['phone'],
//				"addtime"=>$q,
//				"hot"=>$vo['hot'],
//				"alist"=>$arr1,
//				"blist"=>$arr2
//
//			));
//
//
//
//
//		}


		//print_r($res);



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




	//=============================================================


	public function addbuy_post()
	{

		$insertdata=$this->_post_args;


		//大盘指数
		$list= $this->addbuy_model->ApiAdd($insertdata);
		// Check if the users data store contains users
		if ( $list )
		{
      $historydata = [
        'pid'=>$list,
        'uid'=>$insertdata['uid'],
        'pname'=>$insertdata['name'],
        'is_buy'=>1
      ];
      $this->history_model->ApiAdd($historydata);

			// Set the response and exit
			$this->response( $list, 201 );
		}
		else
		{
			// Set the response and exit
			$this->response(['status' => false,'message' => 'No users were found'],404);
		}

	}
	public function addsell_post()
	{

		$insertdata=$this->_post_args;

		//
		$list= $this->addsell_model->ApiAdd($insertdata);
		// Check if the users data store contains users
		if ( $list )
		{
      $historydata = [
        'pid'=>$list,
        'uid'=>$insertdata['uid'],
        'pname'=>$insertdata['name'],
        'is_buy'=>0
      ];
      $this->history_model->ApiAdd($historydata);
			// Set the response and exit
			$this->response( $list, 201 );
		}
		else
		{
			// Set the response and exit
			$this->response(['status' => false,'message' => 'No users were found'],404);
		}

	}


	public function quoteslist_get()
	{

		$pname=urldecode($this->get('pname'));

		$list= $this->api_model->quotes_list($pname);

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
	public function quoteslistbyid_get()
	{

		$classid=$this->get('classid');

		$list= $this->api_model->quotesbyid_list($classid);

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

	public function byclass_get()
	{
		$year=$this->get('year');
		$type=urldecode($this->get('type'));
		$sta=urldecode($this->get('sta'));
		//
		$list= $this->api_model->search_list_quotes($year,$type,$sta);


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



}
