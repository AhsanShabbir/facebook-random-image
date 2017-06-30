<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	public function index(){
		$this->session->sess_destroy();
		$this->session->set_flashdata('msg',"User Logged out");
        redirect(base_url('/login/again'));
	}
}