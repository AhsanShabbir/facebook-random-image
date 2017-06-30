<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Common extends CI_Model {

    public function listImages(){
        $this->db->order_by("id","desc");
        $data = $this->db->get('images');
        $images = $data->result_array();
        return $images;
    }
   
}
