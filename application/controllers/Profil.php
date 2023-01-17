<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in2();
        $this->load->model('User_model');
        // $this->load->model('Feedback_model');
        // $this->load->model('Poli_model');
        $this->load->model('Customer_model');

    }
    public function index()
    {
        $data['judul'] = "Profil";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['feedback'] = $this->Feedback_model->get();
        // $data['poli'] = $this->Poli_model->get();
        $data['customer'] = $this->Customer_model->get();
        // $data['jlh'] = $this->Feedback_model->jumlahfeedback();
        
        $this->load->view("layout/header", $data);
        $this->load->view("profil/vw_profil", $data);
        $this->load->view("layout/footer", $data);
    }
    
    function tambah_feedback()
    {
        $data['judul'] = "Halaman Feedback";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['feedback'] = $this->Feedback_model->get();
        $data['jlh'] = $this->Feedback_model->jumlahfeedback();

        $this->form_validation->set_rules('masukan', 'Masukan', 'required', [
            'required' => 'Masukan Wajib diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("profil/vw_tambah_feedback", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'masukan' => $this->input->post('masukan'),
            ];
            $this->Feedback_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Feedback Berhasil Ditambah!</div>');
            redirect('Profil/tambah_feedback');
        }
    }

    function poli_user()
    {
        $data['judul'] = "Daftar Poli";
        $data['poli'] = $this->Poli_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("profil/vw_poli_user", $data);
        $this->load->view("layout/footer", $data);
    }

    function dokter_user()
    {
        $data['judul'] = "Daftar Dokter";
        $data['dokter'] = $this->Dokter_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("profil/vw_dokter_user", $data);
        $this->load->view("layout/footer", $data);
    }

    }
