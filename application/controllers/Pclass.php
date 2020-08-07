<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pclass extends CI_Controller {
    public $path='pclass';

	public function __construct()
    {
        parent::__construct();
        $this->load->model('pclass_model');
        $this->load->helper('url_helper');
    }

	public function index()
	{
		$data['list'] = $this->pclass_model->get_list();
		$this->load->view($this->path.'/list',$data);
	}

	public function add()
	{

		$this->load->view($this->path.'/add');
	}

	public function upload()
	{
		$dir='upload';
		// 上传文件到服务器目录
		$config['upload_path'] = './'.$dir;
		// 允许上传哪些类型
		$config['allowed_types'] = 'gif|png|jpg|jpeg';
		// 上传后的文件名，用uniqid()保证文件名唯一
		$config['file_name'] = uniqid();

		// 加载上传库
		$this->load->library('upload', $config);
		// 上传文件，这里的pic是视图中file控件的name属性
		$result = $this->upload->do_upload('pic');
		// 如果上传成功，获取上传文件的信息
		//echo json_encode($result);


		if ($result)
		{
			$res=$this->upload->data();
			$data['code']=0;

			$data['msg']='/'.$dir.'/'.$res['file_name'];
			$data['data']['src']='/'.$dir.'/'.$res['file_name'];
		}else{
			$data['code']=1;
			$data['msg']='false';
			$data['data']['src']='';

		}

		echo json_encode($data);


	}
	public function addone()
	{
	    
	    if($this->pclass_model->add()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="添加失败";
	    }
	    echo json_encode($data);
	}
	
	public function delall()
	{
	    
	    if($this->pclass_model->del()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);
	}
	


	
	public function edit()
	{
        $data['info'] = $this->pclass_model->getinfo();
		$this->load->view($this->path.'/edit',$data);
	}
	public function update()
	{
	    
	    if($this->pclass_model->update()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);
	    
	}

}
