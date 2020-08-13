<?php

class Base_model extends CI_Model
{
    public $datascope=[];

    public function __construct()
    {   
        parent::__construct();
        $this->load->library('session');
        $is_manager = isset($_SESSION['is_manager'])?$_SESSION['is_manager']:0;
        $mid = isset($_SESSION['mid'])?$_SESSION['mid']:0;
        $deptid = isset($_SESSION['deptid'])?$_SESSION['deptid']:0;

        if(empty($is_manager)){
            $this->datascope[] = $mid;
            // var_dump($this->datascope);exit;
        }elseif(!empty($deptid)){

        }

    }

   

    
    

}


