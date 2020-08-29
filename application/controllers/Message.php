<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Base.php';
class Message extends Base {

    public $path='message';
	public function __construct()
    {
        parent::__construct();
        $this->load->model('message_model');
		// $this->load->helper('url_helper');
        // $this->load->library('session');
		
    }

	public function index()
	{
        $menu_name = "消息列表";
        $where_role = "3";//1001,增删改查
        if($this->if_role($menu_name,$where_role) != 1){
            $this->load->view('404');
        }
		$data['total_rows']=$this->message_model->get_count();    //总的内容 条数
		$data['list'] = $this->message_model->get_list();
		$this->load->view($this->path.'/list',$data);
	}

	public function add()
	{
        $menu_name = "消息列表";
        $where_role = "0";//1001,增删改查
        if($this->if_role($menu_name,$where_role) != 1){
            echo "权限不足!";die();
        }
		$this->load->view($this->path.'/add');
	}
	public function addone()
	{
	    
	    if($this->message_model->add()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="添加失败";
	    }
	    echo json_encode($data);
	}
	
	public function delall()
	{
        $menu_name = "消息列表";
        $where_role = "1";//1001,增删改查
        if($this->if_role($menu_name,$where_role) != 1){
            $data['status'] = "权限不足";
        }else {
            if ($this->message_model->del() > 0) {
                $data['status'] = "true";
            } else {
                $data['status'] = "操作失败";
            }
        }
	    echo json_encode($data);
	}
	

	
	public function edit()
	{
        $menu_name = "消息列表";
        $where_role = "2";//1001,增删改查
        if($this->if_role($menu_name,$where_role) != 1){
            echo "权限不足!";die();
        }
        $data['info'] = $this->message_model->getinfo();
		$this->load->view($this->path.'/edit',$data);
	}
	public function update()
	{
	    
	    if($this->message_model->update()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);
	    
	}


}
