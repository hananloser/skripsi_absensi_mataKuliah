<?php defined('BASEPATH') or exit('No direct script access allowed');

class Frek_m  extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('frek_class');
        $this->db->join('praktikum', 'praktikum.id_praktikum = frek_class.id_praktikum');
        $this->db->join('ruang', 'ruang.id_ruangan = frek_class.id_ruangan');
        if ($id != null) {
            $this->db->where('id_frek', $id);
        }
        $query = $this->db->get();
        return $query;
    }

   
    public function add($post)
    {
        $params = [
            'frek' => $post['frek'],
            'id_praktikum' => $post['praktikum'],
            'id_ruangan' => $post['ruangan']
        ];
        $this->db->insert('frek_class', $params);
    }

    public function edit($post)
    {
        $params = [
            'frek' => $post['frek'],
            'id_praktikum' => $post['praktikum'],
            'id_ruangan' => $post['ruangan']
        ];
        $this->db->where('id_frek', $post['id']);
        $this->db->update('frek_class', $params);
    }

    public function delete($id)
    {
        $this->db->where('id_frek', $id);
        $this->db->delete('frek_class');
    }
}