<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->database();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->getAll();
        $this->load->view('mahasiswa_view', $data);
    }

    public function tambah()
    {
         $this->load->model('Prodi_model');
         $data['prodi'] = $this->Prodi_model->getAll();
         $this->load->view('mahasiswa_tambah', $data);
    }

    public function simpan()
    {
        
        $data = [
        'NIM' => $this->input->post('NIM'),
        'nama_mhs' => $this->input->post('nama_mhs'),
        'id_prodi' => $this->input->post('id_prodi')
    ];
    $this->Mahasiswa_model->insert($data);
    $this->session->set_flashdata('success', 'Data mahasiswa berhasil ditambahkan!');
    redirect('mahasiswa');
    }

    public function edit($id)
    {
        $this->load->model('Prodi_model');
    $data['prodi'] = $this->Prodi_model->getAll();
    $data['mhs'] = $this->Mahasiswa_model->getById($id);
    $this->load->view('mahasiswa_edit', $data);

    }

    public function update($id)
    {
       $data = [
        'NIM'       => $this->input->post('NIM'),
        'nama_mhs'  => $this->input->post('nama_mhs'),
        'id_prodi'  => $this->input->post('id_prodi')
        
    ];

    $this->Mahasiswa_model->updateData($id, $data);
    $this->session->set_flashdata('success', '✏️ Data mahasiswa berhasil diperbarui!');
    redirect('mahasiswa');
    }

    public function hapus($id)
    {
        $this->Mahasiswa_model->deleteData($id);
        redirect('mahasiswa');
    }

    public function cetak()
    {
    $data['mahasiswa'] = $this->Mahasiswa_model->getAll();
    $this->load->view('mahasiswa_cetak', $data);
    }

}
