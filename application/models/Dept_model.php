<?php

class Dept_model extends CI_Model
{
    public $table = 'dept';
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
        //var_dump($insertdata);


        $addtime=time();
                $data = array(
                    'name'=>$this->input->post_get('name', true),
                    'pid'=>$this->input->post_get('pid', true),
                    'addtime' => $addtime
                );
      
            $this->db->replace($this->table, $data);
           // echo $this->db->last_query();


            return $this->db->affected_rows();
    } 

    public function del()
    {
        $delllist = $this->input->post_get('dellist', true);

        $this->db->set('is_del', '1');
        $this->db->where_in('id', $delllist);
        $this->db->update($this->table);
        return $this->db->affected_rows();
    }

    public function update()
    {
        $data = array(
            'name'=>$this->input->post_get('name', true),
            'pid'=>$this->input->post_get('pid', true),
            'addtime' => $addtime
        );

        $id = $this->input->post_get('id', true);

        $this->db->where('id', $id);
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

}


