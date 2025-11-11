<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use App\Models\ProdiModel;

class Mahasiswa extends BaseController
{
    protected $mhsModel;
    protected $prodiModel;

    public function __construct()
    {
        helper('url');
        $this->mhsModel = new MahasiswaModel();
        $this->prodiModel = new ProdiModel();
    }

    public function index()
    {
        $data['mahasiswa'] = $this->mhsModel->getMahasiswa();
        return view('mahasiswa_view', $data);
    }

    // CREATE
    public function tambah()
    {
        $data['prodi'] = $this->prodiModel->findAll();
        return view('mahasiswa_tambah', $data);
    }

    public function simpan()
    {
        $this->mhsModel->save([
            'NIM' => $this->request->getPost('NIM'),
            'nama_mhs' => $this->request->getPost('nama_mhs'),
            'id_prodi' => $this->request->getPost('id_prodi')
        ]);
         session()->setFlashdata('success', 'Data berhasil ditambahkan ✅');
        return redirect()->to(base_url('mahasiswa'));
    }

    // EDIT
    public function edit($id)
    {
        $data['mhs'] = $this->mhsModel->find($id);
        $data['prodi'] = $this->prodiModel->findAll();

        return view('mahasiswa_edit', $data);
    }

    public function updateData($id)
    {
        $this->mhsModel->update($id, [
            'NIM' => $this->request->getPost('NIM'),
            'nama_mhs' => $this->request->getPost('nama_mhs'),
            'id_prodi' => $this->request->getPost('id_prodi')
        ]);
        session()->setFlashdata('success', 'Data berhasil diupdate ✏️');
        return redirect()->to(base_url('mahasiswa'));
    }

    // DELETE
    public function hapus($id)
    {
        $this->mhsModel->delete($id);
        session()->setFlashdata('success', 'Data berhasil dihapus 🗑️');
        return redirect()->to(base_url('mahasiswa'));
    }

    // CETAK
    public function cetak()
    {
        $data['mahasiswa'] = $this->mhsModel->getMahasiswa();
        return view('mahasiswa_print', $data);
    }
}
