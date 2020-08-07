<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	  public function __construct()
    {
        parent::__construct();
        $this->load->model('Member_model');
        $this->load->helper('url_helper');
        
        $this->load->library('session');
        
        //没有登陆回到登陆页面
        if(!isset($_SESSION['username']))
        {
            redirect("/login");

        }

       
       
        

    }

	public function index()
	{
       

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
