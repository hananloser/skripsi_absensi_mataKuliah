<?php defined('BASEPATH') or exit('No direct script access allowed');
 
class Absensi extends CI_Controller
{ 
    function __construct()
    {
        parent::__construct();
        $this->load->model(['absensi_m','praktikan_m']);
    }

    public function index()
    {
        //$data['row'] = $this->absensi_m->get(); 
        $this->template->load('template', 'absensi/absensi_form' );
	} 

	function get_praktikan()
	{
        $no_card=$this->input->get('no_card');
        
        $data=$this->absensi_m->get_data_bykode($no_card);
        echo json_encode($data);
    }
}