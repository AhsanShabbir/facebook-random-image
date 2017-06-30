<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{	$this->load->model('authenticate');
	   //redirect logged in users to their respective panel
	   $this->authenticate->checkSession();
		
	}

	public function again(){
		$this->load->view('main_login');
	}


	public function auth(){
		$this->load->model('authenticate');

		// setting post data in an array called data
		// and access the array in models etc

		$data = $this->input->post();



		if(@$data['email'] && @$data['password']){

			$Credentials = array("email"	=> $data['email'],
							 	 "password" => md5($data['password'])
							 );
		   $user = $this->authenticate->verify("users", $Credentials);
		    

		   //checking if user exist
		   if($user){
		   	//$sessionData = $user;
		   	$this->session->set_userdata('user', $user);

		   	 if($user['manager']== 1){

		   	 	//user is manager so redirect it to manager panel
		   	 	
		   	 	redirect(base_url("manager"));
		   	 }else{
		   	 	redirect(base_url("user"));
		   	 }

		   	die();
		   }else{
		  $this->session->set_flashdata('msg',"Invalid Username or Password");
		  redirect(base_url('/login/again'));

		   	die();
		   }

		}else{
			//post data is missing username and password
			print_r('Credentials are missing');
			die();
		}
		
	}
}
