<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{ 
    function __construct()
    {
        parent::__construct();
        $this->load->model('pengumuman_m');
    }

    public function index()
    {
       
        $data['row'] = $this->pengumuman_m->get();
        $this->template->load('template', 'pengumuman/pengumuman_data' ,$data);
    } 

    

    public function add(){
        $pengumuman = new stdClass();
        $pengumuman->id_pengumuman = null;
        $pengumuman->judul = null;
        $pengumuman->deskripsi = null;
     
        $data = array(
            'page' => 'add',
            'row' => $pengumuman
        );
        $this->template->load('template', 'pengumuman/pengumuman_form', $data);
    }

    public function edit($id)
    {
        $query = $this->pengumuman_m->get($id);
        if($query->num_rows() > 0){
            $pengumuman = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $pengumuman
            );
            $this->template->load('template', 'pengumuman/pengumuman_form', $data);
        } else{
            echo "<script>alert('Data tidak ditemukan');</script>";
            echo "<script>window.location='" . site_url('pengumuman') . "';</script>";
        }
    }

    public function pengumuman_process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])){
            $this->pengumuman_m->add($post);
        } elseif(isset($_POST['edit'])){
            $this->pengumuman_m->edit($post);
        }

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil disimpan');</script>";
        }
        echo "<script>window.location='" . site_url('pengumuman') . "';</script>";
    }

    public function delete($id)
    {
        $this->pengumuman_m->delete($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='" . site_url('pengumuman') . "';</script>";
    }
}
