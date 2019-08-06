<?php defined('BASEPATH') or exit('No direct script access allowed');
 
class Frekuensi_m  extends CI_Model
{
    public function get($id=null)
    {
         
        $this->db->select('*');
        $this->db->from('frekuensi');
        $this->db->join('jadwal', 'jadwal.id_jadwal = frekuensi.id_jadwal');
        $this->db->join('praktikan', 'praktikan.id_praktikan = frekuensi.id_praktikan');
        $this->db->join('frek_class', 'frek_class.id_frek = jadwal.id_frek');
        if ($id != null) {
            $this->db->where('id_frekuensi', $id);

        }
        $query = $this->db->get();
        return $query;
    }
    
    public function find_by_id($id) {

        $this->db->select('*');
        $this->db->from('frekuensi'); 
        $this->db->join('jadwal', 'jadwal.id_jadwal = frekuensi.id_jadwal');
        $this->db->join('praktikan', 'praktikan.id_praktikan = frekuensi.id_praktikan');
        $this->db->join('frek_class', 'frek_class.id_frek = jadwal.id_frek');
        $this->db->where('frekuensi.id_jadwal', $id);
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $id_praktikan = $this->input->post('praktikan[]');
        $id_jadwal = $this->input->post('jadwal[]');

        $jum_prak = count($id_praktikan);
        for ($i=0;$i<$jum_prak;$i++){
            $data = array(
                'id_praktikan' => $id_praktikan[$i],
                'id_jadwal' => $id_jadwal
             );
            $this->db->insert('frekuensi',$data);
        }
    }

    public function delete($id)
    {
        $this->db->where('id_frekuensi', $id);
        $this->db->delete('frekuensi');
    }

}