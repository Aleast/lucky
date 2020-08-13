<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Base.php';

class Manager extends Base {
	public $path='manager';

	public function __construct()
    {
        parent::__construct();
        $this->load->model('manager_model');
		// $this->load->helper('url_helper');
        // $this->load->library('session');
		
    }

	public function index()
	{
		$data['total_rows']=$this->manager_model->get_count();  
		$data['list'] = $this->manager_model->get_user();
		$this->load->view($this->path.'/list',$data);
	}

	public function add()
	{

		$this->load->view($this->path.'/add');
	}
	public function addone()
	{
	    
	    if($this->manager_model->add_user()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="添加失败";
	    }
	    echo json_encode($data);
	}
	
	public function delall()
	{
	    
	    if($this->manager_model->del_user()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);
	}
	
	public function setuse()
	{
	    
	    if($this->manager_model->set_use()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);
	}

	
	public function edit()
	{
		$data['info'] = $this->manager_model->getinfo();
		$this->load->view($this->path.'/edit',$data);
	}
	public function update()
	{
	    
	    if($this->manager_model->update()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);
	    
	}
	public function cpass()
	{
		$data['info'] = $this->manager_model->getinfo();
		
		$this->load->view($this->path.'/password',$data);
	}
	public function uppass()
	{
	    
	    if($this->manager_model->uppass()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);
	    
	}
}
