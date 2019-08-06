<?php defined('BASEPATH') or exit('No direct script access allowed');
 
class Frekuensi extends CI_Controller
{ 
    function __construct()
    {
        parent::__construct();
        $this->load->model(['frekuensi_m', 'jadwal_m', 'praktikan_m', 'frek_m']);
    }

    public function index()
    {
        //$data['row'] = $this->frekuensi_m->get();
        $data['row'] = $this->jadwal_m->get(); 

        $this->template->load('template', 'frekuensi/frekuensi_data' ,$data);
    } 

    public function tampil_data($id)
    {
        
        $data['row'] = $this->frekuensi_m->find_by_id($id);
       //$data['row'] = $this->frek_m->get();
       // $data['row'] = $this->praktikan_m->get();

        $this->template->load('template', 'frekuensi/frekuensi_data_tampil' ,$data);
    }

    public function add()
    {
        $data['row'] = $this->frekuensi_m->get();
        

        $frekuensi = new stdClass();
        $frekuensi->id_frekuensi = null;
        $frekuensi->id_jadwal = null;
        $frekuensi->id_praktikan = null;
        
        
        $jadwal = $this->jadwal_m->get();
        $praktikan = $this->praktikan_m->get();
        $data = array(
            'page' => 'add',
            'row' => $frekuensi,
            'jadwal' => $jadwal,
            'praktikan' => $praktikan,
        );
        $this->template->load('template', 'frekuensi/frekuensi_form', $data);
    }

    
    public function frekuensi_process()
    {
        $post = $this->input->post(null, TRUE);
       
            $this->frekuensi_m->add($post);
    
        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil disimpan');</script>";
        }
        echo "<script>window.location='" . site_url('frekuensi') . "';</script>";
    }

    public function delete($id)
    {
        
        $this->frekuensi_m->delete($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='" . site_url('frekuensi/tampil_data') . "';</script>";
    }
}