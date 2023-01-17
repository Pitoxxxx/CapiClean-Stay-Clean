<?php
defined('BASEPATH') or exit('No direct script access allowed');
class dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Customer_model');
        $this->load->model('Karyawan_model');
        $this->load->model('Orderan_model');
        $this->load->model('User_model');
        $this->load->model('Feedback_model');
    }
    function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['customer'] = $this->Customer_model->tcustomer();
        $data['karyawan'] = $this->Karyawan_model->tkaryawan();
        $data['pesanan'] = $this->Orderan_model->tpesanan();
        $data['us'] = $this->User_model->tuser();
        $data['jlh'] = $this->Feedback_model->jumlahfeedback();
        $this->load->view('layout/header', $data);
        $this->load->view('auth/dashboard', $data);
        $this->load->view('layout/footer', $data);
    }
}
