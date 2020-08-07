<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mquotes extends CI_Controller {

    public $path='mquotes';
	public function __construct()
    {
        parent::__construct();
        $this->load->model('mquotes_model');
        $this->load->helper('url_helper');
    }

	public function index()
	{
		$data['total_rows']=$this->mquotes_model->get_count();    //总的内容 条数
		$data['list'] = $this->mquotes_model->get_list('DESC');
		$this->load->view($this->path.'/list',$data);
	}

	public function add()
	{

		$this->load->view($this->path.'/add');
	}
	public function addone()
	{

	    if($this->mquotes_model->add()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="添加失败";
	    }
	    echo json_encode($data);
	}

	public function delall()
	{

	    if($this->mquotes_model->del()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);
	}



	public function edit()
	{
        $data['info'] = $this->mquotes_model->getinfo();
		$this->load->view($this->path.'/edit',$data);
	}
	public function update()
	{

	    if($this->mquotes_model->update()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);

	}


}
