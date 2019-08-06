<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Praktikan_m extends CI_Model {
 
    public function get($id = null)
    {
        $this->db->from('praktikan');
        if($id != null){
            $this->db->where('id_praktikan', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'stambuk' => $post['stambuk'],
            'no_card' => $post['no_card'],
            'nama'   => $post['nama'],
            'jk'    => $post['jk'],
            'hp'   => $post['hp'],
            'alamat' => $post['alamat'],
            'foto' =>  $post['foto'],
            'password' =>  sha1($post['stambuk'])

        ];
        $this->db->insert('praktikan', $params);
    }

    public function edit($post)
    {
        $params = [
            'stambuk' => $post['stambuk'],
            'no_card'   => $post['no_card'],
            'nama' =>  $post['nama'],
            'jk' => $post['jk'],
            'hp'   => $post['hp'],
            'alamat' =>  $post['alamat']
        ];
        if($post['foto'] != null){
            $params['foto'] = $post['foto'];
        }
        $this->db->where('id_praktikan', $post['id']);
        $this->db->update('praktikan', $params);
    }

    public function delete($id)
    {
        $this->db->where('id_praktikan', $id);
        $this->db->delete('praktikan');
    }
}
