<?php

class Api_model extends CI_Model
{
	public $table = 'priceview';

	public function __construct()
	{
		$this->load->database();
	}

	public function gethot()
	{


		$sql="UPDATE system set hot=hot+1 where id=1";
		$this->db->query($sql);

		$this->db->where("id",1);
		$query = $this->db->get('system');



		return $query->row();

	}
	public function getPeriodQuote($qid,$order='ASC',$start='',$end=''){

		$this->db->where('is_del', "0");//0没有删除
		$this->db->where('qid', $qid);//0没有删除

		$end = $end.' 23:59:59';
		$this->db->order_by('addtime ', $order);//0没有删除
		if($start!=''&&$end!=''){
			$end = $end.' 23:59:59';
			$this->db->where('addtime between "'.$start.'" and "'.$end.'"');
		}
    $query = $this->db->get('quotesline');
		return $query->result_array();




	}

	public function cpoyData($qid)
	{


		$this->db->where('qid', $qid);
		$this->db->where('is_del', "0");//0没有删除
		$this->db->limit(1);
		$this->db->order_by('addtime','desc');
		$query = $this->db->get('quotesline');

		$ss= $query->row();




		if(date("Y-m-d",strtotime($ss->addtime))==date("Y-m-d",time())){
				return 0;
		}else{


			$price=$ss->price;
			$data = array(
				'qid' => $qid,
				'price' => $price,
				//'addtime' => now(),
				'oldprice'=>$price,
				'updown'=>0,
				'upp'=>0
			);



		   	//更新主表
		  	$updata = array(

				'price' => $price,
				'oldprice'=>$price,
				'updown'=>0,
				'upp'=>0
			);
			$this->db->where('id',$qid);
		 	//更新数据
		 	$this->db->update('quotes', $updata);





			return $this->db->replace('quotesline', $data);
		}

		//

	}
	public function getQidlist()
	{


		$this->db->distinct();
		$this->db->select('qid');
		$query = $this->db->get('quotesline');
		return $query->result_array();

	}




	public function search_bytime($table,$start,$end,$qid)
	{
		$this->db->where('is_del', "0");//0没有删除
		$this->db->where('qid', $qid);//0没有删除
		$this->db->limit(10);//0没有删除
		$where = "date(addtime) between '".$start."' and '".$end."'";
		$this->db->where($where);
		$query = $this->db->get($table);
		return $query->result_array();

	}

	public function checkToday($uid)
	{


		$sql="SELECT count(1) as a from priceview where addtime >=(NOW() - interval `interval` MINUTE) and is_del=0 and uid=".$uid;
//		$this->db->where('is_del', "0");//0没有删除
//		$this->db->where('uid', $uid);//0没有删除
//		$where = "to_days(addtime) = to_days(now())";
//		$this->db->where($where);

		$res = $this->db->query($sql);
		return $res->row();

	}


	public function search_list($table,$keyword)
	{
		$this->db->where('is_del', "0");//0没有删除
		$this->db->like('name', $keyword);//0没有删除
		$query = $this->db->get($table);
		return $query->result_array();

	}

	/*
	 * $year 年份
	 * $type 品牌
	 * $sta 新，老酒
	 */

	public function search_list_quotes($year,$type,$sta)
	{
		$this->db->where('is_del', "0");//0没有删除

		if($year==''||$year=="全部") {
		}else{
			$this->db->like('year', $year);//0没有删除
		}

		if($type==''||$type=="全部"){

		}else{
			$this->db->like('name', $type);//0没有删除
		}

		if($sta==''||$sta=="全部") {

		}else{
			//$where = "date(addtime) between '".$start."' and '".$end."'";

		}

		$query = $this->db->get('quotes');

		//echo $this->db->last_query();

		return $query->result_array();

	}

	/*
	 * $year 年份
	 * $type 品牌
	 * $sta 新，老酒
	 */

	public function quotes_order_list($orderinfo,$descinfo,$page,$row)
	{
		$this->db->where('is_del', "0");//0没有删除

		if($page==1){
			$this->db->limit($row,0);
		}else{
			$this->db->limit($row,$page*$row);
		}



//		if($pid=='') {
//		}else{
//			$this->db->like('pid', $pid);//0没有删除
//		}

		if($orderinfo==''){
			$this->db->order_by('sort', "desc");//0没有删除
		}else{
			$this->db->order_by($orderinfo, $descinfo);//0没有删除
		}


		$query = $this->db->get('quotes');

		return $query->result_array();

	}



	/*
	 * $year 年份
	 * $type 品牌
	 * $sta 新，老酒
	 */

	public function quotes_list($pname)
	{
		$this->db->where('is_del', "0");//0没有删除

//		if($pid=='') {
//		}else{
//			$this->db->like('pid', $pid);//0没有删除
//		}

		if($pname==''){

		}else{
			$this->db->like('name', $pname);//0没有删除
		}


		$query = $this->db->get('quotes');

		//echo $this->db->last_query();

		return $query->result_array();

	}


	public function quotesbyid_list($classid)
	{
		$this->db->where('is_del', "0");//0没有删除

//		if($pid=='') {
//		}else{
//			$this->db->like('pid', $pid);//0没有删除
//		}

		if($classid==''){

		}else{
			$this->db->where('classid', $classid);//0没有删除
		}

		$this->db->order_by('sort', "desc");//没有删除
		$query = $this->db->get('quotes');

		//echo $this->db->last_query();

		return $query->result_array();

	}



	public function get_count()
	{

		$this->db->where('is_del', "0");//0没有删除
		return $this->db->count_all($this->table);

	}

	public function get_count_by($table)
	{

		$this->db->where('is_del', "0");//0没有删除
		return $this->db->count_all_results($table);

	}
	public function get_count_by_pid($table,$pid)
	{

		$this->db->where('pid', $pid);//0没有删除
		$this->db->where('is_del', "0");//0没有删除


		//echo $this->db->last_query();

		return $this->db->count_all_results($table);

	}
	public function search_list_by_pid($table,$pid)
	{

		$this->db->where($table.'.is_del', "0");//0没有删除
		$this->db->where($table.'.pid', $pid);//0没有删除
		$this->db->order_by($table.'.addtime','desc');
		$this->db->from($table);

		$this->db->join('wxuser', $table.'.uid = wxuser.id');


		$query = $this->db->get();
		return $query->result_array();

	}

	public function get_list($page,$row)
	{


		if($page==1){
			//$this->db->limit($row,$page);
			//$this->db->where('is_del', "0");//0没有删除
			$sql="SELECT uid,nickName,avatarUrl,phone,hot,type,price,volume,addtime,name,area from priceview where is_del=0
					group by uid,nickName,avatarUrl,phone,hot,type,price,volume,addtime,name,area order by addtime desc limit 0,".$row;

		}else{

			$sql="SELECT uid,nickName,avatarUrl,phone,hot,type,price,volume,addtime,name,area from priceview where is_del=0
					group by uid,nickName,avatarUrl,phone,hot,type,price,volume,addtime,name,area order by addtime desc limit ".($page-1)*$row.",".$row;

			//$this->db->limit($row,$page*$row);
		}


		$query = $this->db->query($sql);
		return $query->result_array();

	}



	public function getinfo($id,$table)
	{
		//$this->id = $this->input->post_get('id', true);// please read the below note
		$this->db->where('id', $id);
		$query = $this->db->get($table);

		return $query->row();

	}


}
