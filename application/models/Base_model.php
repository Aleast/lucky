<?php

class Base_model extends CI_Model
{
    public $datascope=[];

    public function __construct()
    {   
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $is_manager = isset($_SESSION['is_manager'])?$_SESSION['is_manager']:0;
        $mid = isset($_SESSION['mid'])?$_SESSION['mid']:0;
        $deptid = isset($_SESSION['deptid'])?$_SESSION['deptid']:99999999;

        if(empty($is_manager)){
            $this->datascope[] = $mid;
            // var_dump($this->datascope);exit;
        }elseif(!empty($deptid)&&$deptid!=1){
            $this->datascope = $this->get_dept_users($deptid);
            // var_dump($this->datascope);exit;
        }

    }

    protected function get_dept_users($deptid){
        static $mid_arr = [];
        $this->db->where('is_del','0');
        $this->db->where('deptid',$deptid);
        $query = $this->db->get('manager');
        Dlog_model::save( $this->db->last_query() );
		foreach($query->result_array() as $k =>$v){
            // $mid_arr[] = $v['id'];
            array_push($mid_arr,$v['id']);
        }
        if(!empty($this->get_child_dept($deptid))){
            foreach($this->get_child_dept($deptid) as $k =>$v){
                array_merge($mid_arr,$this->get_dept_users($v['id']));
            }
        }
        return $mid_arr;

    }

    protected function get_child_dept($deptid){
        $this->db->where('is_del','0');
        $this->db->where('pid',$deptid);
        $query = $this->db->get('dept');
        return $query->result_array();
    }

    //判断某表中某字段是否存在某值
    protected function has_exist($class,$value,$table){
        $this->db->where('is_del', "0");//0没有删除
        $this->db->where($class,$value);
        return $this->db->count_all_results($table);
    }

   

    
    

}


