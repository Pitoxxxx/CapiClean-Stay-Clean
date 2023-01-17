<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Feedback extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('User_model');
        $this->load->model('Feedback_model');

    }
    public function index()
    {
        $data['judul'] = "Halaman Feedback";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['feedback'] = $this->Feedback_model->get();
        $data['jlh'] = $this->Feedback_model->jumlahfeedback();
        
        $this->load->view("layout/header", $data);
        $this->load->view("feedback/vw_feedback", $data);
        $this->load->view("layout/footer", $data);
    }
}
