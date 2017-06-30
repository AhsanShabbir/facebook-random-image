<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {
 
	public $user;
	public $packages;
	public $images;
	public function __construct(){
		 parent::__construct();
		 $this->load->model("authenticate");
		 $this->load->model('manager_model');
		 $this->config->load('henna'); 
		 $this->load->model('common');
		 $this->user = $this->session->user;
		 
		 $this->images = $this->common->listImages();

		 if(!$this->authenticate->checkManager()){
            $this->session->set_flashdata('msg',"Authentication Required");
		 	redirect(base_url('/login/again'));
		 	die('Nice Try!!');
		 }


	}

	public function index(){
	 redirect(base_url('/manager/manage_gallery'));
	}

    public function manage_gallery(){

        $viewData = array("images" => $this->images);
        
        $data = array(
                      "user" => $this->user,
                      "view"     => "Manager/manage_gallery",
                      "viewData" => $viewData,
                     );
        
        $this->load->view('Manager/template', $data);

    }

    public function delete_image(){
        $id= $this->input->get('id');
        $id = intval($id);
        $this->db->where('id', $id);
        $this->db->delete('images');
        $this->session->set_flashdata('info',"Image deleted");
        redirect(base_url('Manager/manage_gallery'));

    }

    public function manage_packages(){

    }

}