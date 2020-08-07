<?php

class Userapi_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function get_list_followp($table,$uid)
	{
		$this->db->where('is_del', "0");//0没有删除
		$this->db->where("uid",$uid);
		$this->db->where("fuid !=",$uid);

		$query = $this->db->get($table);
		return $query->result_array();

	}
	public function get_list_follow($table,$uid)
	{
		$this->db->where('is_del', "0");//0没有删除
		$this->db->where("uid",$uid);
		$query = $this->db->get($table);
		return $query->result_array();

	}
	public function get_list_discuss($pid)
	{
		$this->db->where('discuss.is_del', "0");//0没有删除
		$this->db->where('discuss.pid', $pid);//0没有删除
		$this->db->order_by('discuss.addtime','desc');
		$this->db->from('discuss');
		$this->db->select('discuss.addtime as addtime,discuss.content as content,wxuser.nickName as nickName');


		$this->db->join('wxuser', 'discuss.uid = wxuser.id');




		$query = $this->db->get();
		return $query->result_array();

	}

	public function ApiUpdate($table,$data,$id)
	{
//		$data = array(
//			'nickName' => $this->input->post_get('nickName', true),
//			'avatarUrl' => $this->input->post_get('avatarUrl', true),
//			'gender' => $this->input->post_get('gender', true),
//			'province' => $this->input->post_get('province', true),
//			'city' => $this->input->post_get('city', true),
//			'country' => $this->input->post_get('country', true),
//			'openid' => $this->input->post_get('openid', true),
//
//		);

		$this->db->where('id', $id);
		$this->db->update($table, $data);

		return $this->db->affected_rows();

	}


	public function get_message_list($uid,$page,$row)
	{
		$this->db->where('message.is_del', "0");//0没有删除

		$this->db->where('message.pid', $uid);
		$this->db->or_where('message.pid', 0);

		if($page==1){
			$this->db->limit($row,0);
		}else{
			$this->db->limit($row,$page*$row);
		}
		$this->db->select('message.*,wxuser.phone');

		$this->db->order_by('message.addtime', 'desc');

		//$data=$this->db->from('message')->join('wxuser','message.uid=wxuser.id')->result_array();

		//$query = $this->db->get('message');

		$this->db->from('message');
		$this->db->join('wxuser', 'message.uid = wxuser.id');
		$query = $this->db->get();

		//echo $this->db->last_query();



		return $query->result_array();


	}
	public function ApiAdd($table,$data)
	{

		$this->db->replace($table, $data);

		return $this->db->affected_rows();;

	}


	//查询最近一条的时间
	public function ApiGetPriceInfo($uid,$type,$table)
	{
		$this->db->where('is_del', 0);
		$this->db->where('uid', $uid);
		//类型不为空白，直接返回一条
		if($type!=''){
			$this->db->where('type', $type);
		}
		//
		$this->db->order_by('addtime', 'desc');
		//LIMIT 1
		$this->db->limit(1);//查询1条数据

		$query = $this->db->get($table);
		return $query->row();

	}


	//followp的接口
	public function ApiGetInfo($uid,$fuid)
	{
		$this->db->where('is_del', 0);
		$this->db->where('uid', $uid);
		$this->db->where('fuid', $fuid);

		$query = $this->db->get('followp');

		return $query->row();

	}


	public function get_count($table,$uid)
	{

		//统计
		$this->db->where('is_del', "0");//0没有删除
		$this->db->where('uid', $uid);//0没有删除

		return $this->db->count_all_results($table);

	}

	public function get_list($table)
	{
		$this->db->where('is_del', "0");//0没有删除
		$query = $this->db->get($table);
		return $query->result_array();

	}

	public function ApiHot($id,$table){

		$this->db->where('id', $id);
		$this->db->set('hot','hot +1',FALSE);
		$this->db->update($table);

		return $this->db->affected_rows();
	}


	public function ApiDel($id,$table)
	{


		$this->db->set('is_del', '1');
		$this->db->where_in('id', $id);
		$this->db->update($table);

		return $this->db->affected_rows();;

	}

	public function getinfo($table,$uid)
	{

		$this->db->where('uid', $uid);
		$query = $this->db->get($table);

		return $query->row();

	}


}
