<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Customer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Customer_model');
        // $this->load->model('Poli_model');
        $this->load->model('User_model');
        $this->load->model('Feedback_model');

    }
    function index()
    {
        $data['judul'] = "Halaman Customer";
        $data['customer'] = $this->Customer_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['jlh'] = $this->Feedback_model->jumlahfeedback();
        $this->load->view("layout/header", $data);
        $this->load->view("customer/vw_customer", $data);
        $this->load->view("layout/footer", $data);
    }

    function tambah()
    {
        $data['judul'] = "Halaman Tambah Customer";
        $data['customer'] = $this->Customer_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('nama_customer', 'Nama Customer', 'required', [
            'required' => 'Nama Customer Wajib diisi',
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
            'required' => 'Jenis Kelamin Customer Wajib diisi',
        ]);
        $this->form_validation->set_rules('no_hp', 'No. HP', 'required', [
            'required' => 'Nomor HP  Wajib diisi',
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat Customer', 'required', [
            'required' => 'Alamat Customer Wajib diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("customer/vw_tambah_customer", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama_customer' => $this->input->post('nama_customer'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
            ];
            // $upload_image = $_FILES['gambar']['name'];
            // if ($upload_image) {
            //     $config['allowed_types'] = 'gif|jpg|png|PNG|jpeg';
            //     $config['max_size'] = '2048';
            //     $config['upload_path'] = './assets/images/dokter/';
            //     $this->load->library('upload', $config);
            //     if ($this->upload->do_upload('gambar')) {
            //         $new_image = $this->upload->data('file_name');
            //         $this->db->set('gambar', $new_image);
            //     } else {
            //         echo $this->upload->display_errors();
            //     }
            // }
            $this->Customer_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Customer Berhasil Ditambah!</div>');
            redirect('Customer');
        }
    }
    function hapus($id)
    {
        $this->Customer_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Customer tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Customer Berhasil Dihapus!</div>');
        }
        redirect('Customer');
    }


    function edit($id)
    {
        $data['judul'] = "Halaman Edit Customer";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['poli'] = $this->Poli_model->get();
        $data['customer'] = $this->Customer_model->getById($id);
        // $data['jlh'] = $this->Feedback_model->jumlahfeedback();
        $this->form_validation->set_rules('nama_customer', 'Nama Customer', 'required', ['required' => 'Nama Customer Wajib di isi',]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', ['required' => 'Jenis Kelamin Wajib di isi',]);
        $this->form_validation->set_rules('no_hp', 'No HP', 'required|numeric', ['required' => 'No HP Karyawan harus Isi', 'numeric' => "No HP harus Angka"]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Alamat Karyawan Wajib di isi',]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("customer/vw_ubah_customer", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama_customer' => $this->input->post('nama_customer'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
            ];
            // $upload_image = $_FILES['gambar']['name'];
            // if ($upload_image) {
            //     $config['allowed_types'] = 'gif|jpg|png';
            //     $config['max_size'] = '2048';
            //     $config['upload_path'] = './assets/images/dokter/';
            //     $this->load->library('upload', $config);
            //     if ($this->upload->do_upload('gambar')) {
            //         $old_image = $data['dokter']['gambar'];
            //         if ($old_image != 'default.jpg') {
            //             unlink(FCPATH . 'assets/images/dokter/' . $old_image);
            //         }
            //         $new_image = $this->upload->data('file_name');
            //         $this->db->set('gambar', $new_image);
            //     } else {
            //         echo $this->upload->display_errors();
            //     }
            // }

            $id = $this->input->post('id');
            $this->Customer_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Customer Berhasil Diubah!</div>');
            redirect('Customer');
        }
    }
}