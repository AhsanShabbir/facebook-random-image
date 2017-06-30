<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
        //$this->load->model('webData');
		 parent::__construct();
         $this->load->model('webData');
 }

	public function index(){
        $images = $this->webData->getImages();
        $viewData = array();
        $data = array(
            "title"  => "Henna by Khushbu",
            "images" => $images,
            "view"   => "khushbu/main",
            "viewData" => $viewData);
        $this->load->view('khushbu/template', $data);

		
	}
    public function about(){
        $images = $this->webData->getImages();
        $viewData = array();
        $data = array(
            "title"  => "About Khushbu",
            "images" => $images,
            "view"   => "khushbu/about",
            "viewData" => $viewData);
        $this->load->view('khushbu/template', $data);

        
    }
     public function contact(){
        $images = $this->webData->getImages();
        $viewData = array();
        $data = array(
            "title"  => "Contact us",
            "images" => $images,
            "view"   => "khushbu/contact",
            "viewData" => $viewData);
        $this->load->view('khushbu/template', $data);

        
    }
    public function portfolio(){
        $images = $this->webData->getImages();
        $viewData = array();
        $data = array(
            "title"  => "Henna by Khushbu",
            "images" => $images,
            "view"   => "khushbu/portfolio",
            "viewData" => $viewData);
        $this->load->view('khushbu/template', $data);

        
    }

    public function booking(){
        $data = array("view" => "khushbu/booking",
                    "title" => "Booking Steps",
                 "viewData" => array());
        $this->load->view('khushbu/template', $data);
    }

}