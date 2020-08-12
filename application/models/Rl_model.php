<?php

class Rl_model extends CI_Model
{
    public $table = 'rl';
    public $id;
    public $name;
    public $price;

    public function __construct()
    {
        $this->load->database();
    }

    public function get_count()
    {

        $this->db->where('is_del', "0");//0没有删除
        return $this->db->count_all_results($this->table);

    }
    public function get_list()
    {
        $this->db->where('is_del', "0");//0没有删除
		$this->db->order_by('addtime', 'asc');//0没有删除
        $query = $this->db->get($this->table);
        return $query->result_array();

    }
   

    public function add($insertdata)
    {

        // $cid = $this->input->post_get('cid', true);
        // $cphone =$this->input->post_get('cphone', true);
        // $mid=$this->input->post_get('mid', true);
        // $addtime =$this->input->post_get('addtime', true);

                // $data = array(
                //     'cid' => $cid,
                //     'cphone'=>$cphone,
                //     'addtime' => $addtime,
                //     'mid'=>$mid,
                // );

      
            $this->db->replace($this->table, $insertdata);
            return $this->db->affected_rows();;
    } 

    public function add_rl()
    {

        $data = array(
            'cid' =>  $this->input->post_get('cid', TRUE),
            'mid' => $this->input->post_get('mid', TRUE),
            'cphone' => $this->input->post_get('phone', TRUE),
        );

        $this->db->replace($this->table, $data);
       
        return $this->db->affected_rows();;
        
    }

    public function del()
    {
        $delllist = $this->input->post_get('dellist', true);

        $this->db->set('is_del', '1');
        $this->db->where_in('id', $delllist);
        $this->db->update($this->table);

        return $this->db->affected_rows();;

    }

    public function update()
    {
        $data = array(

            'cid' => $this->input->post_get('cid', true),
            'cphone' => $this->input->post_get('cphone', true),
            'mid'=>$this->input->post_get('mid', true),
            'addtime'=>$this->input->post_get('addtime', true),
            'mname'=>$this->input->post_get('mname', true)
        );

        $id = $this->input->post_get('id', true);

        $this->db->where('id', $id);
        $this->db->update($this->table, $data);

        return $this->db->affected_rows();

    }

    public function update_rl()
    {
        $data = array(

            'cid' =>  $this->input->post_get('cid', TRUE),
            'mid' => $this->input->post_get('mid', TRUE),
            'cphone' => $this->input->post_get('phone', TRUE),
        );

        $cphone = $this->input->post_get('phone', true);

        $this->db->where('cphone', $cphone);
        $this->db->update($this->table, $data);

        return $this->db->affected_rows();

    }


    public function getinfo()
    {
        $this->id = $this->input->post_get('id', true);// please read the below note
        $this->db->where('id', $this->id);
        $query = $this->db->get($this->table);

        return $query->row();

    }
	public function getRlInfo($id)
	{

		$this->db->where('id', $id);
		$query = $this->db->get($this->table);
		return $query->row();

	}



    public function info()
    {
        $this->id = $this->input->post_get('id', true);// please read the below note
        $this->db->where('id', $this->id);
        $query = $this->db->get($this->table);
        return $query->row();

    }

    public function get_info($cphone)
    {
        
        $this->db->where('cphone', $cphone);
        $query = $this->db->get($this->table);
        return $query->row();

    }

}


