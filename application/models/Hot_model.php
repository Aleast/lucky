<?php

class Hot_model extends CI_Model
{
	public $table = 'hot';
	public function __construct()
	{
		$this->load->database();
	}

	public function get_m_list($t)
	{
		// $this->db->where('is_del', "0");//0没有删除

		if($t==='day'){
			$where = "TO_DAYS( NOW( )) - TO_DAYS( addtime)  >0";

		}else if($t==='week'){
			$where = "YEARWEEK(date_format(addtime,'%Y-%m-%d'),1)+1 = YEARWEEK(now())+1";

		}else if($t==='month'){
			$where = "PERIOD_DIFF(date_format(now(),'%Y%m'),date_format(addtime,'%Y%m'))=1";

		}
		$this->db->where($where);

		//$this->db->limit(1);
		$this->db->select_sum('hot');
		$query = $this->db->get($this->table);
		
		// print_r($query->result_array());


		return $query->result_array();

	}



	public function gethot()
	{
		// $this->db->where('is_del', "0");//0没有删除
		//$this->db->limit(1);
		$addtime = date("Y-m-d",time());
		$this->db->where("addtime like",$addtime.'%');
		// $query = $this->db->get($this->table);
		// print_r($query);
		// print_r($this->db->last_query());
		// print_r($this->db->count_all_results($this->table));
		// print_r($this->db->last_query());
		// exit;

		if($this->db->count_all_results($this->table)){
			$sql="UPDATE hot set hot=hot+1 where addtime like '$addtime%'";
			$this->db->query($sql);
		}else{
			$sql="INSERT INTO hot set hot=1,addtime = '$addtime'";
			$this->db->query($sql);
		}
		// print_r($this->db->last_query());
		// exit;

		$this->db->select_sum('hot');
		$query = $this->db->get($this->table);



			// print_r($query->result_array());


		return $query->row();

	}

	public function  getlimit($addtime=''){
		$this->db->limit(1);
		$this->db->order_by('addtime','desc');
		// $this->db->where('is_del', "0");
		if($addtime){
			$this->db->where('addtime <',$addtime);
		}
		$query = $this->db->get($this->table);
		return $query->row();
		}



}
