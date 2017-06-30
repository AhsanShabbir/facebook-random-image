<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Manager_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                
        }

        Public function saveImage($data){
            $this->db->insert("images", $data);
            return ($this->db->affected_rows() != 1) ? false : true;
        }

    }