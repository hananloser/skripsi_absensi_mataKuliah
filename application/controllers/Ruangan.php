<?php defined('BASEPATH') or exit('No direct script access allowed');

class Ruangan extends CI_Controller
{ 
    function __construct()
    {
        parent::__construct();
        $this->load->model('ruangan_m');
    }

    public function index()
    {
        $data['row'] = $this->ruangan_m->get();
        $this->template->load('template', 'ruangan/ruangan_data' ,$data);
    } 

    public function add(){
        $ruangan = new stdClass();
        $ruangan->id_ruangan = null;
        $ruangan->ruangan = null;
     
        $data = array(
            'page' => 'add',
            'row' => $ruangan
        );
        $this->template->load('template', 'ruangan/ruangan_form', $data);
    }

    public function edit($id)
    {
        $query = $this->ruangan_m->get($id);
        if($query->num_rows() > 0){
            $ruangan = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $ruangan
            );
            $this->template->load('template', 'ruangan/ruangan_form', $data);
        } else{
            echo "<script>alert('Data tidak ditemukan');</script>";
            echo "<script>window.location='" . site_url('ruangan') . "';</script>";
        }
    }

    public function ruangan_process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])){
            $this->ruangan_m->add($post);
        } elseif(isset($_POST['edit'])){
            $this->ruangan_m->edit($post);
        }

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil disimpan');</script>";
        }
        echo "<script>window.location='" . site_url('ruangan') . "';</script>";
    }

    public function delete($id)
    {
       
        $this->ruangan_m->delete($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='" . site_url('ruangan') . "';</script>";
    }
}
