<?php defined('BASEPATH') or exit('No direct script access allowed');

class Frek extends CI_Controller
{ 
    function __construct()
    {
        parent::__construct();
        $this->load->model(['frek_m', 'praktikum_m', 'ruangan_m']);
    }

    public function index()
    {
        $data['row'] = $this->frek_m->get();
        
        $this->template->load('template', 'frek/frek_data' ,$data);
    } 

    public function add(){
        $frek = new stdClass();
        $frek->id_frek = null;
        $frek->frek = null;
        $frek->id_praktikum = null;
        $frek->id_ruangan = null;
        
        
        $praktikum = $this->praktikum_m->get();
        $ruangan = $this->ruangan_m->get();
        $data = array(
            'page' => 'add',
            'row' => $frek,
            'praktikum' => $praktikum,
            'ruangan' => $ruangan,
        );
        $this->template->load('template', 'frek/frek_form', $data);
    }

    public function edit($id)
    {
        $query = $this->frek_m->get($id);
        if($query->num_rows() > 0){
            $frek = $query->row();
            $praktikum = $this->praktikum_m->get();
            $ruangan = $this->ruangan_m->get();
            $data = array(
                'page' => 'edit',
                'row' => $frek,
                'praktikum' => $praktikum,
                'ruangan' => $ruangan,
            );
            $this->template->load('template', 'frek/frek_form', $data);
        } else{
            echo "<script>alert('Data tidak ditemukan');</script>";
            echo "<script>window.location='" . site_url('frek') . "';</script>";
        }
    }

    public function frek_process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])){
            $this->frek_m->add($post);
        } elseif(isset($_POST['edit'])){
            $this->frek_m->edit($post);
        }

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil disimpan');</script>";
        }
        echo "<script>window.location='" . site_url('frek') . "';</script>";
    }

    public function delete($id)
    {
        
        $this->frek_m->delete($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='" . site_url('frek') . "';</script>";
    }
}
