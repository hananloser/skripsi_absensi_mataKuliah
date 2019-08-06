<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi_m extends CI_Model {

    public function get_data_bykode($no_card)
    {
		//$this->db->from('frekuensi');
		//$this->db->join('jadwal', 'jadwal.id_jadwal = frekuensi.id_jadwal');
		//$this->db->join('praktikan', 'praktikan.id_praktikan = frekuensi.id_praktikan');
		$a=$this->db->query("SELECT praktikan.no_card, praktikan.nama, praktikan.foto FROM praktikan JOIN frekuensi
							 ON praktikan.id_praktikan=frekuensi.id_praktikan WHERE praktikan.no_card='$no_card'");
		if($a->num_rows() > 0){
			foreach($a->result() as $data){
				$b = array(
					'no_card' => $data->no_card,
					'nama' => $data->nama,
					'foto' => $data->foto,
				);
				return $b ; 
			}
		}
	}
}


   