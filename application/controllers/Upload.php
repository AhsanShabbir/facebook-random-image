<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model("authenticate");
                 $this->load->model('manager_model');
                 $this->config->load('henna'); 
                 $this->load->model('common');
                 $this->user = $this->session->user;
                $this->load->helper(array('form', 'url'));
                if(!$this->authenticate->checkManager()){
                 $this->session->set_flashdata('msg',"Authentication Required");
                        redirect(base_url('/login/again'));
                        die();
                 }
        }

        public function index()
        {
                $this->load->view('Manager/upload_form', array('error' => ' ' ));
        }

        public function do_upload()
        {
                

                //$this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                       $error = array('error' => $this->upload->display_errors());
                       $this->session->set_flashdata('error',$error['error']);
                        //$this->load->view('Manager/upload_form', $error);
                        redirect(base_url('manager/manage_gallery?msg=failed'));
                }
                else
                {       
                        $caption = $this->input->post('caption');
                        $data = array('upload_data' => $this->upload->data());
                        $myData = array("caption" => $caption,
                                        "path" => $data['upload_data']['file_name']);
                        @$this->db->insert('images', $myData);
                        $this->session->set_flashdata('msg',"Image uploaded Successfully");
                        redirect(base_url('manager/manage_gallery?msg=success'));
                        
                }
        }
}
?>