<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Base.php';

class Cmenu extends Base {
	public $path='cmenu';

	public function __construct()
    {
        parent::__construct();
		$this->load->model('cmenu_model');
		$this->load->model('role_model');
		
		// $this->load->helper('url_helper');
        // $this->load->library('session');
		
    }

	public function index()
	{
		
		$data['total_rows']=$this->cmenu_model->get_count();  
		$data['list'] = $this->cmenu_model->get_list();
		$this->load->view($this->path.'/list',$data);
	}

	public function add()
    {
        $data['menu']=  $this->menu_model->getallname();
//        var_dump($data['menu']); die();
        $this->load->view($this->path.'/add',$data);
    }
    public function addone()
    {

        if($this->cmenu_model->add_menu()>0){

            $data['status']="true";


        }else{
            $data['status']="添加失败";
        }
        echo json_encode($data);
    }


	
	// public function delall()
	// {
	    
	//     if($this->menu_model->del_user()>0){
	//         $data['status']="true";
	//     }else{
	//         $data['status']="操作失败";
	//     }
	//     echo json_encode($data);
	// }
	
	// public function setuse()
	// {
	    
	//     if($this->menu_model->set_use()>0){
	//         $data['status']="true";
	//     }else{
	//         $data['status']="操作失败";
	//     }
	//     echo json_encode($data);
	// }

	
	public function edit()
	{
		$data['info'] = $this->menu_model->getinfo();
		// $data['deptids'] = $this->dept_model->get_list();

		$this->load->view($this->path.'/edit',$data);
	}
	public function update()
	{
	    // echo $this->input->post_get('is_manager', TRUE);exit;
	    if($this->cmenu_model->update()>0){
	        $data['status']="true";
	    }elseif($this->cmenu_model->update()==-2){
	        $data['status']="名称已存在";
		}else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);
	    
	}
	

	// public function refreshinvitecode(){
	// 	if($_SESSION['is_del']!=1 ){
	// 		echo 'no auth';
	// 		return;
	// 	}
	// 	$emptyinvitecode = $this->menu_model->get_empty_invitecode_list();
		
	// 	foreach($emptyinvitecode as $k => $v){
	// 	// 	echo '<pre>';
	// 	// var_dump($v);
	// 	// echo '</pre>';
	// 	// exit;
	// 		$this->menu_model->addinvitecode($v['id']);
	// 	}
	// }

	// public function updateurl(){
	// 	if($_SESSION['is_del']!=1){
	// 		echo 'no auth';
	// 		return;
	// 	}
	// 	$list = $this->menu_model->get_slash_name_list();
		
	// 	foreach($list as $k => $v){
	// 	// 	echo '<pre>';
	// 	// var_dump($v);
	// 	// echo '</pre>';
	// 	// exit;
	// 		$username = explode('-',$v['name']);
			
	// 		$this->menu_model->updateurl($v['id'],$name[0],$name[1]);
	// 	}
	// }
}
