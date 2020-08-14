<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Base.php';

class Dept extends Base {
	public $path='dept';

	 public function __construct()
    {
        parent::__construct();
        // $this->load->model('user_model');
		// $this->load->model('manager_model');
        $this->load->model('dept_model');
		
        // $this->load->library('session');
        // $this->load->helper('url_helper');
    }

	public function index()
	{	
		// echo $this->config->item("base_url");exit;
		// var_dump($this->session->get_userdata());exit;
		$data['total_rows']=$this->dept_model->get_count();    //总的内容 条数

		$data['list'] = $this->dept_model->get_list();
		// echo '<pre>';
		// var_dump($data['list']);
		// echo '</pre>';
		// exit;
		$this->load->view($this->path.'/list',$data);
	}

	public function add()
	{
		$data['pids'] = $this->dept_model->get_list();
		// var_dump($mids);exit;
		$this->load->view($this->path.'/add',$data);
	}
	public function addone()
	{
	    
	    if($this->dept_model->add()>0){
		
			$data['status']="true";
			
	        
		}elseif($this->dept_model->add()==-1){
		
			$data['status']="部门名称已存在";
			
	        
	    }elseif($this->dept_model->add()==-2){
		
			$data['status']="不能添加部门到无管理权限的部门";
			
	        
	    }else{
	        $data['status']="添加失败";
	    }
	    echo json_encode($data);
	}


	public function setuse()
	{

	    if($this->dept_model->set_use()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);
	}
	public function edit()
	{
		$data['info'] = $this->dept_model->getinfo();
		// var_dump($data['info']->phone);exit;
		$data['pids'] = $this->dept_model->get_list();

		// $data['rl']  = $this->dept_model->get_info($data['info']->phone);
		// var_dump($data);exit;
		$this->load->view($this->path.'/edit',$data);
	}

	public function update()
	{
		// echo $this->input->post_get('id', true);exit;
		if($this->dept_model->update()>0){
			$data['status']="true";
		}elseif($this->dept_model->update()==-1){
			$data['status']="不能修改总公司数据";
		}else{
			$data['status']="操作失败1";
		}
		echo json_encode($data);

	}
	public function cpass()
	{
		$data['info'] = $this->dept_model->getinfo();

		$this->load->view($this->path.'/password',$data);
	}

	public function delall()
	{
	    
	    if($this->dept_model->del()>0){
	        $data['status']="true";
		}elseif($this->dept_model->del()==-1){
	        $data['status']="部门下仍有子部门，不能删除!";

		}elseif($this->dept_model->del()==-2){
	        $data['status']="部门下仍有员工，不能删除!";

		}else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);
	}
	
	

}
