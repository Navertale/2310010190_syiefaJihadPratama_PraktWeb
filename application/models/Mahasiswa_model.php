<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

    public function getAll()
    {
        $this->db->select('mahasiswa.*, prodi.nama_prodi');
        $this->db->from('mahasiswa');
        $this->db->join('prodi', 'mahasiswa.id_prodi = prodi.id_prodi', 'left');
        return $this->db->get()->result_array();
    }

    public function insert($data)
    {
        return $this->db->insert('mahasiswa', $data);
    }

    public function getById($id)
    {
        return $this->db->get_where('mahasiswa', ['id_mahasiswa' => $id])->row_array();
    }

    public function updateData($id, $data)
    {
        $this->db->where('id_mahasiswa', $id);
        return $this->db->update('mahasiswa', $data);
    }

    public function deleteData($id)
    {
        return $this->db->delete('mahasiswa', ['id_mahasiswa' => $id]);
    }
}
