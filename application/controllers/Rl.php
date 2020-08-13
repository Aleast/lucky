<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Base.php';

class Rl extends Base {
	public $path='rl';

	 public function __construct()
    {
        parent::__construct();
        // $this->load->model('user_model');
		$this->load->model('manager_model');
        $this->load->model('rl_model');
		
        // $this->load->library('session');
        // $this->load->helper('url_helper');
    }

	public function index()
	{	
		// var_dump($this->session->get_userdata());exit;
		$data['total_rows']=$this->rl_model->get_count();    //总的内容 条数

		$data['list'] = $this->rl_model->get_list();
		$this->load->view($this->path.'/list',$data);
	}

	public function add()
	{
		$data['mids'] = $this->manager_model->get_user();
		// var_dump($mids);exit;
		$this->load->view($this->path.'/add',$data);
	}
	public function addone()
	{
	    
	    if($this->rl_model->add_rl()>0){
		
			$data['status']="true";
			
	        
	    }else{
	        $data['status']="添加失败";
	    }
	    echo json_encode($data);
	}


	public function setuse()
	{

	    if($this->rl_model->set_use()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);
	}
	public function edit()
	{
		$data['info'] = $this->rl_model->getinfo();
		// var_dump($data['info']->phone);exit;
		$data['mids'] = $this->manager_model->get_user();
		// $data['rl']  = $this->rl_model->get_info($data['info']->phone);
		// var_dump($data);exit;
		$this->load->view($this->path.'/edit',$data);
	}

	public function update()
	{
		// echo $this->input->post_get('id', true);exit;
		if($this->rl_model->update_rl()>0){
			$data['status']="true";
		}else{
			$data['status']="操作失败";
		}
		echo json_encode($data);

	}
	public function cpass()
	{
		$data['info'] = $this->rl_model->getinfo();

		$this->load->view($this->path.'/password',$data);
	}

	public function delall()
	{
	    
	    if($this->rl_model->del()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);
	}
	
	

}
