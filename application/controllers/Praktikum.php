<?php defined('BASEPATH') or exit('No direct script access allowed');

class Praktikum extends CI_Controller
{ 
    function __construct()
    {
        parent::__construct();
        $this->load->model('praktikum_m');
    }

    public function index()
    {
        $data['row'] = $this->praktikum_m->get();
        $this->template->load('template', 'praktikum/praktikum_data' ,$data);
    } 

    public function add(){
        $praktikum = new stdClass();
        $praktikum->id_praktikum = null;
        $praktikum->praktikum = null;
     
        $data = array(
            'page' => 'add',
            'row' => $praktikum
        );
        $this->template->load('template', 'praktikum/praktikum_form', $data);
    }

    public function edit($id)
    {
        $query = $this->praktikum_m->get($id);
        if($query->num_rows() > 0){
            $praktikum = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $praktikum
            );
            $this->template->load('template', 'praktikum/praktikum_form', $data);
        } else{
            echo "<script>alert('Data tidak ditemukan');</script>";
            echo "<script>window.location='" . site_url('praktikum') . "';</script>";
        }
    }

    public function praktikum_process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])){
            $this->praktikum_m->add($post);
        } elseif(isset($_POST['edit'])){
            $this->praktikum_m->edit($post);
        }

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil disimpan');</script>";
        }
        echo "<script>window.location='" . site_url('praktikum') . "';</script>";
    }

    public function delete($id)
    {
        $this->praktikum_m->delete($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='" . site_url('praktikum') . "';</script>";
    }
}
