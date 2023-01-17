<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Karyawan_model');
        // $this->load->model('Poli_model');
        // $this->load->model('Customer_model');
        $this->load->model('User_model');
        // $this->load->model('Feedback_model');
    }
    
    function index()
    {
        $data['judul']= "Halaman Karyawan";
        $data['user']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['karyawan'] = $this->Karyawan_model->get();
        // $data['customer'] = $this->Customer_model->get();
        // $data['poli'] = $this->Poli_model->get();
        // $data['jlh'] = $this->Feedback_model->jumlahfeedback();

        $this->load->view("layout/header", $data);
        $this->load->view("karyawan/vw_karyawan", $data);
        $this->load->view("layout/footer", $data);
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Karyawan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['poli'] = $this->Poli_model->get();
        // $data['customer'] = $this->Customer_model->get();
        // $data['jlh'] = $this->Feedback_model->jumlahfeedback();
        $this->form_validation->set_rules('nama', 'Nama karyawan', 'required', ['required' => 'Nama Karyawan Wajib di isi',]);
        $this->form_validation->set_rules('ttl', 'Tempat, Tanggal Lahir', 'required', 'required', ['required' => 'Tempat, Tanggal Lahir Karyawan Wajib di isi',]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', ['required' => 'Jenis Kelamin Karyawan Wajib di isi',]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Alamat Karyawan Wajib di isi',]);
        $this->form_validation->set_rules('no_hp', 'No HP', 'required|numeric', ['required' => 'No HP Karyawan harus Isi', 'numeric' => "No HP harus Angka"]);
        $this->form_validation->set_rules('jam_kerja', 'Jam Kerja', 'required', ['required' => 'Jam Kerja Karyawan Wajib di isi',]);
        $this->form_validation->set_rules('hari', 'Hari', 'required', ['required' => 'Hari Kerja Karyawan Wajib di isi',]);
        // $this->form_validation->set_rules('penyakit', 'Penyakit', 'required', ['required' => 'Penyakit Karyawan Wajib di isi',]);
        // $this->form_validation->set_rules('nama_poli', 'Nama Poli', 'required', ['required' => 'Nama Poli Wajib di isi',]);
        // $this->form_validation->set_rules('nama_dokter', 'Nama Dokter', 'required', ['required' => 'Nama Dokter Wajib di isi',]);
       
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("karyawan/vw_tambah_karyawan", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'ttl' => $this->input->post('ttl'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'jam_kerja' => $this->input->post('jam_kerja'),
                'hari' => $this->input->post('hari'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|PNG';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/images/karyawan/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Karyawan_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Karyawan Berhasil Ditambah!</div>');
            redirect('Karyawan');
        }
    }

    function hapus($id) {
        $this->Karyawan_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data karyawan Berhasil Dihapus!</div>');
        redirect('karyawan');

    }
    function edit($id)
    {
        $data['judul'] = "Halaman Edit karyawan";
        $data['karyawan'] = $this->Karyawan_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['poli'] = $this->Poli_model->get();
        // $data['dokter'] = $this->Customer_model->get();
        // $data['jlh'] = $this->Feedback_model->jumlahfeedback();

        $this->form_validation->set_rules('nama', 'Nama karyawan', 'required', ['required' => 'Nama Karyawan Wajib di isi',]);
        $this->form_validation->set_rules('ttl', 'Tempat, Tanggal Lahir', 'required', 'required', ['required' => 'Tempat, Tanggal Lahir Karyawan Wajib di isi',]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', ['required' => 'Jenis Kelamin Karyawan Wajib di isi',]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Alamat Karyawan Wajib di isi',]);
        $this->form_validation->set_rules('no_hp', 'No HP', 'required|numeric', ['required' => 'No HP Karyawan harus Isi', 'numeric' => "No HP harus Angka"]);
        $this->form_validation->set_rules('jam_kerja', 'Jam Kerja', 'required', ['required' => 'Jam Kerja Karyawan Wajib di isi',]);
        $this->form_validation->set_rules('hari', 'Hari', 'required', ['required' => 'Hari Kerja Karyawan Wajib di isi',]);

        // $this->form_validation->set_rules('nama', 'Nama karyawan', 'required', ['required' => 'Nama karyawan Wajib di isi',]);
        // $this->form_validation->set_rules('umur', 'Umur', 'required', 'required', ['required' => 'Umur karyawan Wajib di isi',]);
        // $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', ['required' => 'Jenis Kelamin Wajib di isi',]);
        // $this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Alamat karyawan Wajib di isi',]);
        // $this->form_validation->set_rules('no_hp', 'No HP', 'required|numeric', ['required' => 'No HP harus Isi', 'numeric' => "No HP harus Angka"]);
        // $this->form_validation->set_rules('penyakit', 'Penyakit', 'required', ['required' => 'Penyakit karyawan Wajib di isi',]);
        // $this->form_validation->set_rules('nama_poli', 'Nama Poli', 'required', ['required' => 'Nama Poli Wajib di isi',]);
        // $this->form_validation->set_rules('nama_dokter', 'Nama Dokter', 'required', ['required' => 'Nama Dokter Wajib di isi',]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("karyawan/vw_ubah_karyawan", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'ttl' => $this->input->post('ttl'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'jam_kerja' => $this->input->post('jam_kerja'),
                'hari' => $this->input->post('hari'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|PNG';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/images/karyawan/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['karyawan']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/images/karyawan/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $id = $this->input->post('id');
            $this->Karyawan_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data karyawan Berhasil Diu  bah!</div>');
            redirect('karyawan');
        }
    }
    
    // public function getDokter()
    // {
    //     $idp = $this->input->post('id',TRUE);
    //     $data = $this->Karyawan_model->getDokter($idp);
    //     echo json_encode($data);
    // }

}