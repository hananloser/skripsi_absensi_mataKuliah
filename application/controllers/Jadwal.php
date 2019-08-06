<?php defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{ 
    function __construct()
    {
        parent::__construct();
        $this->load->model(['jadwal_m','frek_m', 'asisten_m']);
    }

    public function index()
    {
        $data['row'] = $this->jadwal_m->get();
        
        $this->template->load('template', 'jadwal/jadwal_data' ,$data);
    } 

    public function add(){
        $jadwal = new stdClass();
        $jadwal->id_jadwal = null;
        $jadwal->tanggal = null;
        $jadwal->mulai = null;
        $jadwal->selesai = null;
        $jadwal->id_frek = null;
        $jadwal->id_asisten= null;
        
        $frek = $this->frek_m->get();
        $asisten = $this->asisten_m->get();
        $data = array(
            'page' => 'add',
            'row' => $jadwal,
            'frek' => $frek,
            'asisten' => $asisten,
        );
        $this->template->load('template', 'jadwal/jadwal_form', $data);
    }

    public function edit($id)
    {
        $query = $this->jadwal_m->get($id);
        if($query->num_rows() > 0){
            $jadwal = $query->row();
            $frek = $this->frek_m->get();
            $asisten = $this->asisten_m->get();
            $data = array(
                'page' => 'edit',
                'row' => $jadwal,
                'frek' => $frek,
                'asisten' => $asisten,
            );
            $this->template->load('template', 'jadwal/jadwal_form', $data);
        } else{
            echo "<script>alert('Data tidak ditemukan');</script>";
            echo "<script>window.location='" . site_url('jadwal') . "';</script>";
        }
    }

    public function jadwal_process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])){
            $this->jadwal_m->add($post);
        } elseif(isset($_POST['edit'])){
            $this->jadwal_m->edit($post);
        }

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil disimpan');</script>";
        }
        echo "<script>window.location='" . site_url('jadwal') . "';</script>";
    }

    public function delete($id)
    {
        
        $this->jadwal_m->delete($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='" . site_url('jadwal') . "';</script>";
    }
}
