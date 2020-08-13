<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Base.php';
class Member extends Base {
	public $path='member';

	public function __construct()
    {
        parent::__construct();
        $this->load->model('member_model');
        // $this->load->helper('url_helper');
    }

	public function index()
	{
		$data['total_rows']=$this->member_model->get_count();  
		$data['list'] = $this->member_model->get_user();
		$this->load->view($this->path.'/list',$data);
	}

	public function add()
	{

		$this->load->view($this->path.'/add');
	}
	public function addone()
	{
	    
	    if($this->member_model->add_user()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="添加失败";
	    }
	    echo json_encode($data);
	}
	
	public function delall()
	{
	    
	    if($this->member_model->del_user()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);
	}
	
	public function setuse()
	{
	    
	    if($this->member_model->set_use()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);
	}

	
	public function edit()
	{
		$data['info'] = $this->member_model->getinfo();
		$this->load->view($this->path.'/edit',$data);
	}
	public function update()
	{
	    
	    if($this->member_model->update()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);
	    
	}
	public function cpass()
	{
		$data['info'] = $this->member_model->getinfo();
		
		$this->load->view($this->path.'/password',$data);
	}
	public function uppass()
	{
	    
	    if($this->member_model->uppass()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);
	    
	}
}
