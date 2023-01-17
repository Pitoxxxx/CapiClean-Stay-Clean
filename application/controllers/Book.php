<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Book extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in2();
        $this->load->model('User_model');
        $this->load->model('Customer_model');
        $this->load->model('Karyawan_model');
        $this->load->model('Orderan_model');
    }
    public function index(){
        $data['judul'] = "Halaman Profil";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['karyawan'] = $this->Karyawan_model->get();
        $this->load->view("book/header", $data);
        $this->load->view("profil/vw_profil_user", $data);
        $this->load->view("layout/footer");
    }
    public function tambah(){
        $data['judul'] = "Halaman Tambah Pesanan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['karyawan'] = $this->Karyawan_model->get();
        $data['customer'] = $this->Customer_model->get();
        $this->form_validation->set_rules('no_hp', 'No. Hp', 'required|integer', ['required' => 'No Hp Customer Wajib di isi','integer' => 'NO HP harus Angka']);
        $this->form_validation->set_rules('nama', 'Nama Petugas', 'required', ['required' => 'Nama Petugas Wajib di isi']);
        $this->form_validation->set_rules('tanggal', 'Tanggal Kerja Pekerja', 'required', ['required' => 'Tanggal Kerja Pekerja Wajib di isi']);
        $this->form_validation->set_rules('paket', 'Paket', 'required', ['required' => 'Paket Wajib di isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("book/header", $data);
            $this->load->view("book/vw_tambah_book", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama_customer' => $this->input->post('nama_customer'),
                'id_user' => $this->session->userdata('id'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'nama' => $this->input->post('nama'),
                'tanggal' => $this->input->post('tanggal'),
                'paket' => $this->input->post('paket'),
                'catatan' => $this->input->post('catatan'),

            ];
        $this->Orderan_model->insert($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pesanan Berhasil Ditambah!</div>');
        redirect('Book/');
    }
}
}