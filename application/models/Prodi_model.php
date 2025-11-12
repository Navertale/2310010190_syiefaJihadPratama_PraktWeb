<?php
class Prodi_model extends CI_Model {

    public function getProdi()
    {
        return $this->db->get('prodi')->result_array();
    }
}
