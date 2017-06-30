<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct(){
        //$this->load->model('webData');
         parent::__construct();
         $this->load->model('webData');
        
         $image = $this->webData->image();
         $viewData = array(
            "image" => $image);
         $this->load->view('main', $viewData);
         

 }
 public function index(){
    
 }
 public function name(){

 }

}