<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Base.php';
class Main extends Base {
	  public function __construct()
    {
        parent::__construct();
        $this->load->model('manager_model');
        $this->load->model('role_model');
        $this->load->model('cmenu_model');
        
        // $this->load->library('session');

        // //没有登陆回到登陆页面
        // if(!isset($_SESSION['username']))
        // {
        //     redirect("/login");

        // }

       
       
        

    }

	public function index()
	{
	    $menu_name = "Dashboard";
        $menu_id = $this->cmenu_model->get_id_name($menu_name);
        $info = $this->manager_model->get_id_role($_SESSION['mid']);
        $role = $this->role_model->get_id_role($info['rid']);
        $role_info = json_decode($role['menu'],true);
        //查询当前菜单ID在该角色权限数据内的role数据
        foreach ($role_info as $k=>$v){
            if($v['id'] == $menu_id){
                $role_menu = $v;
            }
        }
        //1111,增删改查
        $reult_role = substr($role_menu['role'],3,1);
	    if($reult_role != 1){
            $this->load->view('404');
        }
		$this->load->view('main');
    }
    public function left()
	{
       

		$this->load->view('left');
    }
    public function top()
	{
       

		$this->load->view('top');
	}
}
