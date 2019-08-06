<?php defined('BASEPATH') or exit('No direct script access allowed');

class Praktikum_m  extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('praktikum');
        if ($id != null) {
            $this->db->where('id_praktikum', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'praktikum' => $post['praktikum']
        ];
        $this->db->insert('praktikum', $params);
    }

    public function edit($post)
    {
        $params = [
            'praktikum' => $post['praktikum']
            
        ];
        $this->db->where('id_praktikum', $post['id']);
        $this->db->update('praktikum', $params);
    }

    public function delete($id)
    {
        $this->db->where('id_praktikum', $id);
        $this->db->delete('praktikum');
    }
}