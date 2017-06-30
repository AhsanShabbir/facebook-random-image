<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class WebData extends CI_Model {
    public function getImages(){
        $this->db->order_by('id','desc');
        $data = $this->db->get('images');
        $images = $data->result_array();
        return $images;
    }

    public function count_images(){
        $this->db->order_by('id','desc');
        $images = $this->db->get('images');
        $count = $images->num_rows();
        return $count;
    }

    public function image(){
        
        $this->db->order_by("id", "random");
        $images = $this->db->get('images');
        $arr = $images->first_row();
        return $arr;
    }
}
