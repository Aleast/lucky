<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Base.php';

class Role extends Base {
    public $path='role';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model');
        $this->load->model('role_model');
        // $this->load->library('phpexcel');



        // $this->load->helper('url_helper');
    }

    public function index()
    {
        // echo $this->config->item("base_url");exit;
        // var_dump($this->session->get_userdata());exit;
        $data['total_rows']=$this->role_model->get_count();    //总的内容 条数

        $data['list'] = $this->role_model->get_list();
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

        if($this->role_model->add_role()>0){

            $data['status']="true";


        }else{
            $data['status']="添加失败";
        }
        echo json_encode($data);
    }


    public function setuse()
    {

        if($this->role_model->set_use()>0){
            $data['status']="true";
        }else{
            $data['status']="操作失败";
        }
        echo json_encode($data);
    }
    public function edit()
    {
        $data['info'] = $this->role_model->getinfo();
        $data['menu'] = $this->role_model->object_to_array($data['info'],true);
        $menu = $this->role_model->simple_json_parser($data['menu']['menu']);
        $data['menu_info']=  $this->menu_model->get_name_info($menu);
//        var_dump($data['info']); die();
        $this->load->view($this->path.'/edit',$data);
    }

    public function update()
    {
        // echo $this->input->post_get('id', true);exit;
        if($this->role_model->update_role()>0){
            $data['status']="true";
        }else{
            $data['status']="操作失败";
        }
        echo json_encode($data);

    }
    public function cpass()
    {
        $data['info'] = $this->role_model->getinfo();

        $this->load->view($this->path.'/password',$data);
    }

    public function delall()
    {

        if($this->role_model->del()>0){
            $data['status']="true";
        }else{
            $data['status']="操作失败";
        }
        echo json_encode($data);
    }

    public function exportdata(){

        // echo 'export';
        $data['list'] = $this->role_model->getExportData();
        // echo '<pre>';
        // var_dump($exportData);

        // echo '<pre>';
        $this->load->view($this->path.'/exportdata',$data);



    }



}
