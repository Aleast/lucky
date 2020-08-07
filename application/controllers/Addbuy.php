<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addbuy extends CI_Controller {

    public $path='addbuy';
	public function __construct()
    {
        parent::__construct();
        $this->load->model('addbuy_model');
		$this->load->model('wxuser_model');
        $this->load->helper('url_helper');
    }

	public function index()
	{
		$data['total_rows']=$this->addbuy_model->get_count();    //总的内容 条数

		$data['list'] = $this->addbuy_model->get_list();
		$this->load->view($this->path.'/list',$data);
	}

	public function add()
	{

		$this->load->view($this->path.'/add');
	}
	public function addone()
	{
	    
	    if($this->addbuy_model->add()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="添加失败";
	    }
	    echo json_encode($data);
	}
	
	public function delall()
	{
	    
	    if($this->addbuy_model->del()>0){
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
        $data['info'] = $this->addbuy_model->getinfo();
		$this->load->view($this->path.'/edit',$data);
	}
	public function update()
	{
	    
	    if($this->addbuy_model->update()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);
	    
	}


}
