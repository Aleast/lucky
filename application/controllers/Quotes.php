<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quotes extends CI_Controller {

    public $path='quotes';
	public function __construct()
    {
        parent::__construct();
        $this->load->model('quotes_model');
		$this->load->model('quotesline_model');
		$this->load->model('pclass_model');
        $this->load->helper('url_helper');
    }


	/**
	 * 内容列表界面
	 * 参数 $page 表示的是当前页的其实数量
	 * @param unknown $page
	 */

	public function index()
	{

//		$this->load->library('pagination');                //加载分页类
//		$config['base_url']=site_url('quotes/index');         //地址路径
//		$config['total_rows']=$this->quotes_model->get_count();    //总的内容 条数
//		$config['per_page']=10;                                    //每页显示数量，默认显示10条
//		$this->pagination->initialize($config);                   //加载配置信息
//		$data=array('page'=>$this->pagination->create_links());   //要显示到界面的分页信息
//		$this->load->view($this->path.'/list',$data);
		$data['total_rows']=$this->quotes_model->get_count();    //总的内容 条数
	
		$data['list'] = $this->quotes_model->get_list();

		$this->load->view($this->path.'/list',$data);
	}

	public function add()
	{

		$data['list'] = $this->pclass_model->get_list();
		//print_r($data);
		$this->load->view($this->path.'/add',$data);
	}
	public function addone()
	{
	    
	    if($this->quotes_model->add()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="添加失败";
	    }
	    echo json_encode($data);
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

	public function showline()
	{
		$pid=$this->input->post_get('id', true);

		$data['list'] = $this->quotesline_model->get_list($pid);

		$this->load->view($this->path.'/showline',$data);
	}
	public function addline()
	{
		$pid=$this->input->post_get('id', true);

		$res=$this->quotesline_model->getone($pid);

		if($res){
			$data['info']=$res;
			$data['pid']=$pid;
			$this->load->view($this->path.'/editline',$data);
		}else{
			$data['pid']=$pid;
			$this->load->view($this->path.'/addline',$data);
		}
		

		

	

	}
	//添加行情
	public function addlinedo()
	{

	

		if($this->quotesline_model->add()>0){

			$this->quotes_model->update_price();


			$data['status']="true";
		}else{
			$data['status']="添加失败";
		}
		echo json_encode($data);
	}


	public function editlinedo()
	{

		if($this->quotesline_model->update()>0){
			$this->quotes_model->update_price();
	        $data['status']="true";
	    }else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);

	}
	
	public function delall()
	{
	    
	    if($this->quotes_model->del()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);
	}
	

	
	public function edit()
	{
		$data['list'] = $this->pclass_model->get_list();

        $data['info'] = $this->quotes_model->getinfo();
		$this->load->view($this->path.'/edit',$data);
	}
	public function update()
	{
	    
	    if($this->quotes_model->update()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);
	    
	}


}
