<?php
require_once 'Base_model.php';

class Menu_model extends Base_model
{
    public $table = 'menu';
    public $id;
    public $name;
    public $price;

    public function __construct()
    {   
        parent::__construct();
        $this->load->database();

        // $this->load->library('session');
        // $is_manager = isset($_SESSION['is_manager'])?$_SESSION['is_manager']:0;
        // $mid = isset($_SESSION['mid'])?$_SESSION['mid']:0;
        // $deptid = isset($_SESSION['deptid'])?$_SESSION['deptid']:0;

        // if(empty($is_manager)){
        //     $this->datascope[] = $mid;
        //     // var_dump($this->datascope);exit;
        // }elseif(!empty($deptid)){

        // }

    }

    public function getall()
    {
        $query = $this->db->get($this->table);

        return $query->result_array();

    }
    public function getallname()
    {
        $this->db->where('is_del', '0');
        $query = $this->db->get($this->table);

        $return = $query->result_array();

//        var_dump($return);die();
        $getallname = array();
        foreach ($return as $k => $v){
            $getallname[$k]['id'] = $v["id"];
            $getallname[$k]['name'] = $v["name"];
            $getallname[$k]['role'] = "0000";
        }
//        var_dump($getallname);die();
        return $getallname;
    }

    public function getinfo($id)
    {
        $this->db->where('id', $id);
        if(!empty($this->datascope)){
            $this->db->where_in('mid', $this->datascope);//数据范围
        }
        $query = $this->db->get($this->table);

        return $query->row();

    }
    public function get_name($id)
    {
        $this->db->where('id', $id);
//        $this->db->where('is_del', '0');
        if(!empty($this->datascope)){
            $this->db->where_in('mid', $this->datascope);//数据范围
        }
        $query = $this->db->get($this->table);
        return $query->row('name');

    }
    public function get_name_info($data)
    {
        foreach ($data as $key=>$v){
            $data[$key]['name'] = $this->get_name($v['id']);
        }
        return $data;
    }

}


