<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addsell extends CI_Controller {

    public $path='addsell';
	public function __construct()
    {
        parent::__construct();
        $this->load->model('addsell_model');
		$this->load->model('wxuser_model');
        $this->load->helper('url_helper');
    }

	public function index()
	{

		$data['total_rows']=$this->addsell_model->get_count();    //总的内容 条数

		$data['list'] = $this->addsell_model->get_list();
		$this->load->view($this->path.'/list',$data);
	}

	public function add()
	{

		$this->load->view($this->path.'/add');
	}
	public function addone()
	{
	    
	    if($this->addsell_model->add()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="添加失败";
	    }
	    echo json_encode($data);
	}
	
	public function delall()
	{
	    
	    if($this->addsell_model->del()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);
	}

	public function setuse()
	{

		if($this->wxuser_model->set_use()>0){
			$data['status']="true";
		}else{
			$data['status']="操作失败";
		}
		echo json_encode($data);
	}
	
	public function edit()
	{
        $data['info'] = $this->addsell_model->getinfo();
		$this->load->view($this->path.'/edit',$data);
	}
	public function update()
	{
	    
	    if($this->addsell_model->update()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);
	    
	}


}
