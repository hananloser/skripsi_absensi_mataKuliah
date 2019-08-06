<?php

Class Fungsi {
    protected $ci;

     function __construct(){
        $this->ci =& get_instance();
    }

     function user_login(){
        $this->ci->load->model('asisten_m');
        $user_id = $this->ci->session->userdata('id_asisten');
        $user_data = $this->ci->asisten_m->get('$user_id')->row();
        return $user_data;
    }

   
}