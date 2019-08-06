<?php defined('BASEPATH') or exit('No direct script access allowed');

class Ruangan_m  extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('ruang');
        if ($id != null) {
            $this->db->where('id_ruangan', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'ruangan' => $post['ruangan']
        ];
        $this->db->insert('ruang', $params);
    }

    public function edit($post)
    {
        $params = [
            'ruangan' => $post['ruangan']
            
        ];
        $this->db->where('id_ruangan', $post['id']);
        $this->db->update('ruang', $params);
    }

    public function delete($id)
    {
        $this->db->where('id_ruangan', $id);
        $this->db->delete('ruang');
    }
}