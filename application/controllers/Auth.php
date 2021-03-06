<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		
		$this->load->view('login');
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])){
			$this->load->model('asisten_m');
			$query = $this->asisten_m->login($post);
			if($query->num_rows() > 0){
				$row = $query->row();
				$params = array (
					'id_asisten' => $row->id_asisten,
					'level' => $row->level,
					'nama' => $row->nama
				);
				$this->session->set_userdata($params);
				echo "<script>
						alert('Selamat Login Berhasil');
						window.location='".site_url('dashboard')."';
						</script>";
			}else{
				echo "<script>
						alert('Login Gagal, Username atau Password Salah');
						window.location='".site_url('auth/login')."';
						</script>";
			}
		}
	}

	public function logout()
	{
		$params = array('id_asisten', 'level', 'nama');
		$this->session->unset_userdata($params);
		redirect('home');
	}
}
