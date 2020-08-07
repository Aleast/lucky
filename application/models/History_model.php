<?php

class History_model extends CI_Model
{
	public $table = 'history';
	public function __construct()
	{
		$this->load->database();
	}

	public function get_count()
	{

		$this->db->where('is_del', "0");//0没有删除
		return $this->db->count_all_results($this->table);

	}

	public function get_list($uid='')
	{
		if($uid){
				$this->db->where('is_del', "0")->where('uid',$uid);//0没有删除
		}else{
				$this->db->where('is_del', "0");//0没有删除
		}
		// $this->db->where('is_del', "0");//0没有删除
		$query = $this->db->get($this->table);
		return $query->result_array();

	}


	public function ApiAdd($data)
	{


		$this->db->replace($this->table, $data);

		return $this->db->affected_rows();;

	}

	public function ApiDel($id)
	{

		$this->db->set('is_del', '1');

		$this->db->where_in('id', $id);
		$this->db->update($this->table);

		return $this->db->affected_rows();;

	}


	public function getinfo()
	{
		$this->id = $this->input->post_get('id', true);// please read the below note
		$this->db->where('id', $this->id);
		$query = $this->db->get($this->table);

		return $query->row();

	}


}
