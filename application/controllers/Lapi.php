<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class LApi extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
		$this->load->model('rl_model');
	
    }


	public function addrl_post()
	{
//		$start=$this->get('start');
//		$end=$this->get('end');
		$insertdata=$this->_post_args;

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
//		$start=$this->get('start');
//		$end=$this->get('end');
//		$insertdata=$this->_post_args;

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
