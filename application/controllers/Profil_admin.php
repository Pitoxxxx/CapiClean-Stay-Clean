<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Profil_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('User_model');
        // $this->load->model('Feedback_model');
        // $this->load->model('Poli_model');
        // $this->load->model('Dokter_model');
        // $this->load->model('Pasien_model');

    }
    public function index()
    {
        $data['judul'] = "Profil Admin";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['feedback'] = $this->Feedback_model->get();
        // $data['poli'] = $this->Poli_model->get();
        // $data['dokter'] = $this->Dokter_model->get();
        // $data['pasien'] = $this->Pasien_model->get();
        // $data['jlh'] = $this->Feedback_model->jumlahfeedback();
        
        $this->load->view("layout/header", $data);
        $this->load->view("profil/vw_profil_admin", $data);
        $this->load->view("layout/footer", $data);
        
    }

    }
