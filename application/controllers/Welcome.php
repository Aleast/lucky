<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Base.php';

class Welcome extends Base {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('member_model');
        $this->load->model('wxuser_model');
        $this->load->model('addbuy_model');
        $this->load->model('addsell_model');
        $this->load->model('message_model');
        $this->load->model('quotes_model');
        
        // $this->load->helper('url_helper');
        // $this->load->library('session');
        
        //没有登陆回到登陆页面
        if(!isset($_SESSION['username']))
        {
            redirect("/login");
            
        }
        
    }
	public function index()
	{
	    
	    $data['usercount'] = $this->member_model->get_count();
	    $data['inscount'] = $this->wxuser_model->get_count();

        $data['addbuy'] = $this->addbuy_model->get_count();
        $data['addsell'] = $this->addsell_model->get_count();
        $data['message'] = $this->message_model->get_count();
        $data['quotes'] = $this->quotes_model->get_count();
	    
	    $this->load->view('welcome',$data);
	}
}
