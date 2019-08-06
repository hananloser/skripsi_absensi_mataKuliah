<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asisten extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
        $this->load->model('asisten_m');
        $this->load->helper(array('form', 'url'));
    }

	public function index()
	{
        $data['row'] = $this->asisten_m->get();

		$this->template->load('template','asisten/asisten_data', $data);
    } 
    
    public function add(){
        $asisten = new stdClass();
        $asisten->id_asisten = null;
        $asisten->stambuk = null;
        $asisten->nama = null;
		$asisten->jk = null;
		$asisten->hp = null;
        $asisten->alamat = null;
        $asisten->foto = null;
        $asisten->level = null;
		$asisten->password=null;
        $data = array(
            'page' => 'add',
            'row' => $asisten
        );
        $this->template->load('template', 'asisten/asisten_form', $data);
    }
    
    public function edit($id=null)
    {
        $query = $this->asisten_m->get($id);
        if($query->num_rows() > 0){
            $asisten = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $asisten
            );
            $this->template->load('template', 'asisten/asisten_form', $data);
        } else{
            echo "<script>alert('Data tidak ditemukan');</script>";
            echo "<script>window.location='" . site_url('asisten') . "';</script>";
        }
    }

    public function asisten_process()
    {
        $config['upload_path']  = './upload/asisten/';
        $config['allowed_types']  = 'gif|jpg|png|jpeg';
        $config['max_size']  = 2048;
        $config['file_name']  = 'asisten-'.date('ymd').'-'.substr(md5(rand()),0,10);
        $this->load->library('upload', $config);

        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])){
            if(@$_FILES['foto']['name'] != null){
                if($this->upload->do_upload('foto')){
                    $post['foto'] = $this->upload->data('file_name');
                    $this->asisten_m->add($post); 
                    if ($this->db->affected_rows() > 0) {
                       $this->session->set_flashdata('success', 'Data berhasil disimpan');
                    }
                    redirect('asisten');
                }else{
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('asisten/add');
                }
                
            } else{
                $post['foto'] = null;
                $this->asisten_m->add($post); 
                if ($this->db->affected_rows() > 0) {
                   $this->session->set_flashdata('success', 'Data berhasil disimpan');
                }
                redirect('asisten');
            }
            
        } elseif(isset($_POST['edit'])){
            if(@$_FILES['foto']['name'] != null){
                if($this->upload->do_upload('foto')){
                    
                    $asisten = $this->asisten_m->get($post['id'])->row();
                    if($jasa->foto != null){
                        $target_file = './upload/asisten/'.$asisten->foto;
                        unlink($target_file);
                    }

                    $post['foto'] = $this->upload->data('file_name');
                    $this->asisten_m->edit($post); 
                    if ($this->db->affected_rows() > 0) {
                       $this->session->set_flashdata('success', 'Data berhasil diedit');
                    }
                    redirect('asisten');
                }else{
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('asisten/edit');
                }
                
            } else{
                $post['foto'] = null;
                $this->asisten_m->edit($post); 
                if ($this->db->affected_rows() > 0) {
                   $this->session->set_flashdata('success', 'Data berhasil diedit');
                }
                redirect('asisten');
            }
        }
    }

    public function delete($id)
    {
        $asisten = $this->asisten_m->get($id)->row();
        if($asisten->foto != null){
            $target_file = './upload/asisten/'.$asisten->foto;
            unlink($target_file);
        }

        $this->asisten_m->delete($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }
        redirect('asisten');
    }
}
