<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin:*"); 


use chriskacerguis\RestServer\RestController;

class Lapi extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
		$this->load->model('rl_model');
		$this->load->model('manager_model');

	
    }


	public function addrl_post()

	{ 

	//$this->output->set_header("Access-Control-Allow-Origin: * ");

		// $insertdata=$this->_post_args;

//		var_dump($insertdata);
//		$start=$this->get('start');
//		$end=$this->get('end');
		$insertdata=$this->_post_args;
		if(isset($insertdata['mid'])&&!empty($insertdata['mid'])){
			$manager = $this->manager_model->get_user_by_invitecode($insertdata['mid']);
			if(!empty($manager)){
				$insertdata['mid'] = $manager['id'];
			}else{
				$insertdata['mid']=1;
			}		
		}else{
			$insertdata['mid']=2;
		}
		$res= $this->rl_model->add($insertdata);
		// Check if the users data store contains users
		if ( $res )
		{
			// Set the response and exit
			$this->response( $res, 201 );
		}
		else
		{
			
			// Set the response and exit
			$this->response(['status' => false,'message' => 'No Info were found'],404);
		}

	}

	
	public function rl_get()
	{
		//大盘指数
		$res= $this->rl_model->get_list();
		// Check if the users data store contains users
		if ( $res )
		{
			// Set the response and exit
			$this->response( $res, 201 );
		}
		else
		{
			// Set the response and exit
			$this->response(['status' => false,'message' => 'No Info were found'],404);
		}

	}
	
	
	
	



}
