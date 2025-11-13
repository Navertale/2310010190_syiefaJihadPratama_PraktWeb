<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi_model extends CI_Model {

    public function getAll()
    {
        return $this->db->get('prodi')->result_array();
    }

    public function insert($data)
    {
        return $this->db->insert('prodi', $data);
    }

    public function getById($id)
    {
        return $this->db->get_where('prodi', ['id_prodi' => $id])->row_array();
    }

    public function updateData($id, $data)
    {
        $this->db->where('id_prodi', $id);
        return $this->db->update('prodi', $data);
    }

    public function deleteData($id)
    {
        return $this->db->delete('prodi', ['id_prodi' => $id]);
    }
}
