<?php defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal_m  extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->join('frek_class', 'frek_class.id_frek = jadwal.id_frek');
        $this->db->join('asisten', 'asisten.id_asisten = jadwal.id_asisten');
        if ($id != null) {
            $this->db->where('id_jadwal', $id);
        }
        $query = $this->db->get();
        return $query;
    }

   
    public function add($post)
    {
        $params = [
            'tanggal' => $post['tanggal'],
            'mulai' => $post['mulai'],
            'selesai' => $post['selesai'],
            'id_frek' => $post['frek'],
            'id_asisten' => $post['asisten']
        ];
        $this->db->insert('jadwal', $params);
    }

    public function edit($post)
    {
        $params = [
            'tanggal' => $post['tanggal'],
            'mulai' => $post['mulai'],
            'selesai' => $post['selesai'],
            'id_frek' => $post['frek'],
            'id_asisten' => $post['asisten']
        ];
        $this->db->where('id_jadwal', $post['id']);
        $this->db->update('jadwal', $params);
    }

    public function delete($id)
    {
        $this->db->where('id_jadwal', $id);
        $this->db->delete('jadwal');
    }
}