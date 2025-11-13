<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Prodi_model');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['prodi'] = $this->Prodi_model->getAll();
        $this->load->view('prodi_view', $data);
    }

    public function tambah()
    {
        $this->load->view('prodi_tambah');
    }

    public function simpan()
    {
        $data = [
            'nama_prodi' => $this->input->post('nama_prodi')
        ];
        $this->Prodi_model->insert($data);
        $this->session->set_flashdata('success', '✅ Data prodi berhasil ditambahkan!');
        redirect('prodi');
    }

    public function edit($id)
    {
        $data['prodi'] = $this->Prodi_model->getById($id);
        $this->load->view('prodi_edit', $data);
    }

    public function update($id)
    {
        $data = [
            'nama_prodi' => $this->input->post('nama_prodi')
        ];
        $this->Prodi_model->updateData($id, $data);
        $this->session->set_flashdata('success', '✏️ Data prodi berhasil diperbarui!');
        redirect('prodi');
    }

    public function hapus($id)
    {
        $this->Prodi_model->deleteData($id);
        $this->session->set_flashdata('success', '🗑️ Data prodi berhasil dihapus!');
        redirect('prodi');
    }
}
