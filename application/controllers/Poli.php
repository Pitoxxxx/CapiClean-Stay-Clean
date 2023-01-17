<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Poli extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Poli_model');
        $this->load->model('User_model');
        $this->load->model('Feedback_model');

    }
    function index()
    {
        $data['judul'] = "Halaman Poli";
        $data['poli'] = $this->Poli_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jlh'] = $this->Feedback_model->jumlahfeedback();
        $this->load->view("layout/header", $data);
        $this->load->view("poli/vw_poli", $data);
        $this->load->view("layout/footer", $data);
    }

    function tambah()
    {
        $data['judul'] = "Halaman Tambah Poli";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['poli'] = $this->Poli_model->get();
        $data['jlh'] = $this->Feedback_model->jumlahfeedback();


        
        $this->form_validation->set_rules('nama_poli', 'Nama Poli', 'required', [
            'required' => 'Nama Poli Wajib diisi',
        ]);
        $this->form_validation->set_rules('ruangan', 'Ruangan', 'required', [
            'required' => 'Ruangan Wajib diisi',
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("poli/vw_tambah_poli", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama_poli' => $this->input->post('nama_poli'),
                'ruangan' => $this->input->post('ruangan'),
            ];
            $this->Poli_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Poli Berhasil Ditambah!</div>');
            redirect('Poli');
        }
    }
    function hapus($id)
    {
        $this->Poli_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Poli tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
             $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Poli Berhasil Dihapus!</div>');
        }
        redirect('Poli');
    }


    function edit($id)
    {
        $data['judul'] = "Halaman Edit Poli";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['poli'] = $this->Poli_model->getById($id);
        $data['jlh'] = $this->Feedback_model->jumlahfeedback();

         $this->form_validation->set_rules('nama_poli', 'Nama Poli', 'required', [
            'required' => 'Nama Poli Wajib diisi',
        ]);
        $this->form_validation->set_rules('ruangan', 'Ruangan', 'required', [
            'required' => 'Ruangan Wajib diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("poli/vw_ubah_poli", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama_poli' => $this->input->post('nama_poli'),
                'ruangan' => $this->input->post('ruangan'),
            ];
  
            $id = $this->input->post('id');
            $this->Poli_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Poli Berhasil DiUbah!</div>');
            redirect('Poli');
        }
    }
}