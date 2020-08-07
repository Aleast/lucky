<?php
class Pclass_model extends CI_Model {
    public $table='pclass';
    public $id;
    public $name;
    public $type;
    public function __construct()
    {
        $this->load->database();
    }

    public function get_count()
    {

        $this->db->where('is_del', "0");//0没有删除
        return $this->db->count_all($this->table);

    }

    public function get_list()
    {
        $this->db->where('is_del', "0");//0没有删除
		$this->db->order_by('sort', "desc");//0没有删除
        $query = $this->db->get($this->table);
        return $query->result_array();

    }
    public function add()
    {

        $data = array(
            'img' =>  $this->input->post_get('img', TRUE),
            'name' =>  $this->input->post_get('name', TRUE),
            'type' => $this->input->post_get('type', TRUE),
			'sort' => $this->input->post_get('sort', TRUE)
        );

        $this->db->replace($this->table, $data);

        return $this->db->affected_rows();;

    }
    public function del()
    {
        $delllist=$this->input->post_get('dellist', TRUE);

        $this->db->set('is_del', '1');
        $this->db->where_in('id', $delllist);
        $this->db->update($this->table);

        return $this->db->affected_rows();;

    }

    public function update()
    {
        $data = array(
            'img' =>  $this->input->post_get('img', TRUE),
            'name' =>  $this->input->post_get('name', TRUE),
            'type' => $this->input->post_get('type', TRUE),
			'sort' => $this->input->post_get('sort', TRUE)

        );

        $id=$this->input->post_get('id', TRUE);

        $this->db->where('id', $id);
        $this->db->update($this->table,$data);

        return $this->db->affected_rows();

    }



    public function getinfo()
    {
        $this->id  = $this->input->post_get('id', TRUE);// please read the below note
        $this->db->where('id', $this->id);
        $query = $this->db->get($this->table);

        return $query->row();

    }


    public function info()
    {
        $this->name  = $this->input->post_get('name', TRUE);// please read the below note
        $this->type  = $this->input->post_get('type', TRUE);
        $this->db->where('name', $this->name);
        $this->db->where('type', $this->type);
        $query = $this->db->get($this->table);

        return $query->row();

    }

}


?>
