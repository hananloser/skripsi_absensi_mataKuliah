<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Praktikan extends CI_Controller {
	 
	function __construct()
    {
        parent::__construct();
        $this->load->model('praktikan_m');
        $this->load->helper(array('form', 'url'));
    }

	public function index()
	{
		
		$data ['row'] = $this->praktikan_m->get();
		$this->template->load('template','praktikan/praktikan_data', $data);
	} 

	public function add(){
        $praktikan = new stdClass();
        $praktikan->id_praktikan = null;
        $praktikan->stambuk = null;
        $praktikan->no_card = null;
        $praktikan->nama = null;
		$praktikan->jk = null;
		$praktikan->hp = null;
        $praktikan->alamat = null;
		$praktikan->foto = null;
		$praktikan->password=null;
        $data = array(
            'page' => 'add',
            'row' => $praktikan
        );
        $this->template->load('template', 'praktikan/praktikan_form', $data);
	}

	public function edit($id)
    {
        $query = $this->praktikan_m->get($id);
        if($query->num_rows() > 0){
            $praktikan = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $praktikan
            );
            $this->template->load('template', 'praktikan/praktikan_form', $data);
        } else{
            echo "<script>alert('Data tidak ditemukan');</script>";
            echo "<script>window.location='" . site_url('praktikan') . "';</script>";
        }
    }
	
	public function praktikan_process()
    {
        $config['upload_path']  = './upload/praktikan/';
        $config['allowed_types']  = 'gif|jpg|png|jpeg';
        $config['max_size']  = 2048;
        $config['file_name']  = 'praktikan-'.date('ymd').'-'.substr(md5(rand()),0,10);
        $this->load->library('upload', $config);

        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])){
            if(@$_FILES['foto']['name'] != null){
                if($this->upload->do_upload('foto')){
                    $post['foto'] = $this->upload->data('file_name');
                    $this->praktikan_m->add($post); 
                    if ($this->db->affected_rows() > 0) {
                       $this->session->set_flashdata('success', 'Data berhasil disimpan');
                    }
                    redirect('praktikan');
                }else{
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('praktikan/add');
                }
                
            } else{
                $post['foto'] = null;
                $this->praktikan_m->add($post); 
                if ($this->db->affected_rows() > 0) {
                   $this->session->set_flashdata('success', 'Data berhasil disimpan');
                }
                redirect('praktikan');
            }
            
        } elseif(isset($_POST['edit'])){
            if(@$_FILES['foto']['name'] != null){
                if($this->upload->do_upload('foto')){
                    
                    $praktikan = $this->praktikan_m->get($post['id'])->row();
                    if($praktikan->foto != null){
                        $target_file = './upload/praktikan/'.$praktikan->foto;
                        unlink($target_file);
                    }

                    $post['foto'] = $this->upload->data('file_name');
                    $this->praktikan_m->edit($post); 
                    if ($this->db->affected_rows() > 0) {
                       $this->session->set_flashdata('success', 'Data berhasil diedit');
                    }
                    redirect('praktikan');
                }else{
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('praktikan/edit');
                }
                
            } else{
                $post['foto'] = null;
                $this->praktikan_m->edit($post); 
                if ($this->db->affected_rows() > 0) {
                   $this->session->set_flashdata('success', 'Data berhasil diedit');
                }
                redirect('praktikan');
            }
        }
	}
	
	public function delete($id)
    {
        $praktikan = $this->praktikan_m->get($id)->row();
        if($praktikan->foto != null){
            $target_file = './upload/praktikan/'.$praktikan->foto;
            unlink($target_file);
        }

        $this->praktikan_m->delete($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }
        redirect('praktikan');
    }

}
