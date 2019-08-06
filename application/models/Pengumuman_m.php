<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman_m  extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('pengumuman');
        if ($id != null) {
            $this->db->where('id_pengumuman', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'judul' => $post['judul'],
            'deskripsi' => $post['deskripsi']
        ];
        $this->db->insert('pengumuman', $params);
    }

    public function edit($post)
    {
        $params = [
            'judul' => $post['judul'],
            'deskripsi' => $post['deskripsi']
            
        ];
        $this->db->where('id_pengumuman', $post['id']);
        $this->db->update('pengumuman', $params);
    }

    public function delete($id)
    {
        $this->db->where('id_pengumuman', $id);
        $this->db->delete('pengumuman');
    }
}