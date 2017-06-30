<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Authenticate extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                
        }



        public function checkManager(){
                if($this->session->has_userdata('user')){
                //CHECKING IF ANY USER IS LOGGED IN
                $user = $this->session->user;
                if($user['manager']=='1'){
                    //CHECKING IF LOGGED IN USER IS MANAGER OR MEDICAL REP. IF MANAGER THEN IT IS OK
                    //FALSE OTHERWISE
                    return TRUE;
                }else{
                    return FALSE;
                }
            }

        }

        public function checkUser(){
            if($this->session->has_userdata('user')){
                //CHECKING IF ANY USER IS LOGGED IN
                $user = $this->session->user;
                if($user['manager']=='0'){
                    //CHECKING IF LOGGED IN USER IS MANAGER OR MEDICAL REP. IF MEDICAL REP THEN IT IS OK
                    //FALSE OTHERWISE
                    return TRUE;
                }else{
                    return FALSE;
                }
            }
               

        }

        public function checkSession(){
            if($this->checkManager()){
                redirect(base_url('manager'));
                die();
            }
            if($this->checkUser()){
                redirect(base_url('user'));
                die();
            }

            if(!$this->session->has_userdata('user')){
                redirect(base_url('login/again'));
            }

        }



        public function verify($tbl, $credentials){

        	$result = $this->db->get_where($tbl, array("email"    => $credentials['email'],
        									 		 "password" => $credentials['password']));
  			$count =  $result->num_rows();
        	
        	$data = $result->row_array();
        	//var_dump($data);

        	if($count>0){
        		if($tbl == "admins")
        			{return true;}
        		else{
        			$user = array(
        						  "id"	   => $data['id'],
        						  "name"   => $data['name'],
        						  "email"   => $data['email'],
        						  "manager" => $data['manager'],
        						  

        						  );
        			return $user;
        		}

        	}else{
        		return false;
        	}
        }

}
