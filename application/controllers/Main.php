<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Base.php';
class Main extends Base {
	  public function __construct()
    {
        parent::__construct();
//        $this->load->model('manager_model');
//        $this->load->model('role_model');
//        $this->load->model('cmenu_model');
        
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
        $where_role = "3";//1001,增删改查
	    if($this->if_role($menu_name,$where_role) != 1){
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
