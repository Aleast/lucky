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

}
