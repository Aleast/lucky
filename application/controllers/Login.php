<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Base.php';

class Login extends Base {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->model('manager_model');
        // $this->load->helper('url_helper');
        // $this->load->library('session');

    }

	public function index()
	{


		$this->load->view('login');
	}

	public function gotoc()
	{
		
		 $row= $this->manager_model->get_userinfo();
		// var_dump($row); 
		$data['status']=$row;
		//设置session
        if (isset($row))
        {     
         
            $sdata = array(
                'mid'  => $row->id,
                'is_manager'     => $row->is_manager,
				'username' => $row->username,
				'deptid' => $row->deptid
            );

            $this->session->set_userdata($sdata);

     		$data['status']='true';
        }else{
        	$data['status']='密码错误';
        }

		
		echo json_encode($data);
	}

	public function out()
	{
		// echo 'out';exit;
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('mid');
		$this->session->unset_userdata('is_manager');
		$this->session->unset_userdata('deptid');
		// session_destroy();
		redirect("http://39.105.156.161/login");
		// return redirect()->to('/login');
		// return redirect()->back();
	}


			
}
