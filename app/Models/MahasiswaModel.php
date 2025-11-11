<?php
namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id_mahasiswa';

    protected $allowedFields = ['NIM', 'nama_mhs', 'id_prodi'];

    public function getMahasiswa()
    {
        return $this->select('mahasiswa.*, prodi.nama_prodi')
                    ->join('prodi', 'mahasiswa.id_prodi = prodi.id_prodi', 'left')
                    ->findAll();
    }
}