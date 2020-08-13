<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class System extends CI_Controller {
	public $path='system';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('system_model');
		$this->load->helper('url_helper');
        $this->load->library('session');

	}

	public function index()
	{

		$data['info'] = $this->system_model->getinfo();
		$this->load->view($this->path.'/edit',$data);

//		$data['list'] = $this->system_model->get_list();
//		$this->load->view($this->path.'/list',$data);
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
	public function update()
	{

		if($this->system_model->update()>0){
			$data['status']="true";
		}else{
			$data['status']="操作失败";
		}
		echo json_encode($data);

	}



}
