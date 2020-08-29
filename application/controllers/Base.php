<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {
	  public function __construct()
    {
        parent::__construct();
        // $this->load->model('Member_model');
        $this->load->helper('url_helper');
        
        $this->load->library('session');
        
        $controller = $this->router->class;
        $action = $this->router->method;
        // echo $controller.$action;exit;
        //没有登陆回到登陆页面
        if(!isset($_SESSION['username'])&&$controller!="login")
        {
            redirect($this->config->item("base_url")."login");

        }

       
       
        

    }
    public function if_role($menu_name,$where_role){
        $this->load->model('manager_model');
        $this->load->model('role_model');
        $this->load->model('cmenu_model');
        $menu_id = $this->cmenu_model->get_id_name($menu_name);
        $info = $this->manager_model->get_id_role($_SESSION['mid']);
        $role = $this->role_model->get_id_role($info['rid']);
        $result_role = "1";
        if(!empty($role['menu'])&&count($role['menu'])>0){
            $role_info = json_decode($role['menu'],true);
            //查询当前菜单ID在该角色权限数据内的role数据
            foreach ($role_info as $k=>$v){
                if($v['id'] == $menu_id){
                    $role_menu = $v;
                }
            }
            //1111,增删改查
            $result_role = substr($role_menu['role'],$where_role,1);
            return $result_role;
        }
        return $result_role;
    }

}
