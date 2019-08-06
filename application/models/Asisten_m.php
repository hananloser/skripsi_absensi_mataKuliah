<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asisten_m extends CI_Model {

    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('asisten');
        $this->db->where('stambuk', $post['username']);
        $this->db->where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null)
    {
        $this->db->from('asisten');
        if($id != null){
            $this->db->where('id_asisten', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'stambuk' => $post['stambuk'],
            'nama'   => $post['nama'],
            'jk'    => $post['jk'],
            'hp'   => $post['hp'],
            'alamat' => $post['alamat'],
            'foto' =>  $post['foto'],
            'level' => $post['level'] = '2' ,
            'password' =>  sha1($post['stambuk'])

        ];
        $this->db->insert('asisten', $params);
    }

    public function edit($post)
    {
        $params = [
            'stambuk' => $post['stambuk'],
            'nama' =>  $post['nama'],
            'jk' => $post['jk'],
            'hp'   => $post['hp'],
            'alamat' =>  $post['alamat']
        ];
        if($post['foto'] != null){
            $params['foto'] = $post['foto'];
        }
        $this->db->where('id_asisten', $post['id']);
        $this->db->update('asisten', $params);
    }

    public function delete($id)
    {
        $this->db->where('id_asisten', $id);
        $this->db->delete('asisten');
    }
}
