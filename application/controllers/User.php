<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public $path='user';

	 public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
    }

	public function index()
	{
		$data['total_rows']=$this->user_model->get_count();    //总的内容 条数

		$data['list'] = $this->user_model->get_list();
		$this->load->view($this->path.'/list',$data);
	}

	public function add()
	{

		$this->load->view($this->path.'/add');
	}
	public function addone()
	{
	    
	    if($this->user_model->add_user()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="添加失败";
	    }
	    echo json_encode($data);
	}


	public function setuse()
	{

	    if($this->user_model->set_use()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);
	}
	public function edit()
	{
		$data['info'] = $this->user_model->getinfo();
		$this->load->view($this->path.'/edit',$data);
	}

	public function update()
	{

		if($this->user_model->update()>0){
			$data['status']="true";
		}else{
			$data['status']="操作失败";
		}
		echo json_encode($data);

	}
	public function cpass()
	{
		$data['info'] = $this->user_model->getinfo();

		$this->load->view($this->path.'/password',$data);
	}
	
	

}
