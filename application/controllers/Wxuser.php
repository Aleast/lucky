<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wxuser extends Base {
	public $path='user';

	 public function __construct()
    {
        parent::__construct();
        $this->load->model('wxuser_model');
        $this->load->helper('url_helper');
    }

	public function index()
	{
		$data['total_rows']=$this->wxuser_model->get_count();    //总的内容 条数

		$data['list'] = $this->wxuser_model->get_list();
		$this->load->view($this->path.'/list',$data);
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
		$data['info'] = $this->wxuser_model->getinfo();
		$this->load->view($this->path.'/edit',$data);
	}

	public function update()
	{

		if($this->wxuser_model->update()>0){
			$data['status']="true";
		}else{
			$data['status']="操作失败";
		}
		echo json_encode($data);

	}
	
	

}
