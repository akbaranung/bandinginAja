<?php

class User_model extends CI_Model
{
    
    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }

     

}