<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Base.php';

class Manager extends Base {
	public $path='manager';

	public function __construct()
    {
        parent::__construct();
		$this->load->model('manager_model');
        $this->load->model('dept_model');
		
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
		$data['deptids'] = $this->dept_model->get_list();

		$this->load->view($this->path.'/add',$data);
	}
	public function addone()
	{
	    
	    if($this->manager_model->add_user()>0){
	        $data['status']="true";
	    }elseif($this->manager_model->add_user()==-1){
	        $data['status']="用户名已存在";
		}elseif($this->manager_model->add_user()==-2){
	        $data['status']="昵称已存在";
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
		$data['deptids'] = $this->dept_model->get_list();

		$this->load->view($this->path.'/edit',$data);
	}
	public function update()
	{
	    // echo $this->input->post_get('is_manager', TRUE);exit;
	    if($this->manager_model->update()>0){
	        $data['status']="true";
	    }elseif($this->manager_model->update()==-2){
	        $data['status']="昵称已存在";
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
	    }elseif($this->manager_model->uppass()==-1){
	        $data['status']="原密码错误";
	    }else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);
	    
	}
}
