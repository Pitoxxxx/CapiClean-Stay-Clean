<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan_admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		is_logged_in();
		$this->load->model('Orderan_model');
		$this->load->model('User_model');
		$this->load->model('Karyawan_model');
	}

	public function index() {
		$data['judul']="Halaman Pesanan";
		$data['user']=$this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
		$data['orderan']=$this->Orderan_model->get();
		$this->load->view("layout/header", $data);
		$this->load->view("pesanan/vw_pesanan_admin", $data);
		$this->load->view("layout/footer", $data);
	}

	function hapus($id) {
		$this->Orderan_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data pesanan Berhasil Dihapus!</div>');
		redirect('Pesanan_admin');
	}

	function edit($id)
    {
		$data['judul']="Halaman Edit Pesanan";
		$data['karyawan']=$this->Karyawan_model->get();
		$data['orderan']=$this->Orderan_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('nama_customer', 'Nama Customer', 'required', ['required'=> 'Nama Customer Wajib di isi']);
		$this->form_validation->set_rules('alamat', 'Alamat Customer', 'required', ['required'=> 'Alamat Customer Wajib di isi']);
		$this->form_validation->set_rules('no_hp', 'No. Hp', 'required|integer', ['required'=> 'No Hp Customer Wajib di isi', 'integer'=> 'NO HP harus Angka']);
		$this->form_validation->set_rules('nama', 'Nama Petugas', 'required', ['required'=> 'Nama Petugas Wajib di isi']);
		$this->form_validation->set_rules('tanggal', 'Tanggal Kerja Pekerja', 'required', ['required'=> 'Tanggal Kerja Pekerja Wajib di isi']);
		$this->form_validation->set_rules('paket', 'Paket', 'required', ['required'=> 'Paket Wajib di isi']);
		$this->form_validation->set_rules('catatan', 'Catatan', 'required', ['required'=> 'Catatan Wajib di isi']);
		$this->form_validation->set_rules('status', 'Status', 'required', ['required'=> 'Status Wajib di isi']);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("book/vw_ubah_book", $data);
            $this->load->view("layout/footer", $data);
        } else {
			$data=[ 'nama_customer'=>$this->input->post('nama_customer'),
			'alamat'=>$this->input->post('alamat'),
			'no_hp'=>$this->input->post('no_hp'),
			'nama'=>$this->input->post('nama'),
			'tanggal'=>$this->input->post('tanggal'),
			'paket'=>$this->input->post('paket'),
			'catatan'=>$this->input->post('catatan'),
			'status'=>$this->input->post('status'),
		];
			
            $id = $this->input->post('id');
            $this->Orderan_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pesanan Berhasil Diubah!</div>');
            redirect('Pesanan_admin');
        }
    }

	// function edit($id) {
	// 	$data['judul']="Halaman Edit Pesanan";
	// 	$data['karyawan']=$this->Karyawan_model->get();
	// 	$data['orderan']=$this->Orderan_model->getById($id);
	// 	$data['user']=$this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();

	// 	$this->form_validation->set_rules('nama_customer', 'Nama Customer', 'required', ['required'=> 'Nama Customer Wajib di isi']);
	// 	$this->form_validation->set_rules('alamat', 'Alamat Customer', 'required', ['required'=> 'Alamat Customer Wajib di isi']);
	// 	$this->form_validation->set_rules('no_hp', 'No. Hp', 'required|integer', ['required'=> 'No Hp Customer Wajib di isi', 'integer'=> 'NO HP harus Angka']);
	// 	$this->form_validation->set_rules('nama', 'Nama Petugas', 'required', ['required'=> 'Nama Petugas Wajib di isi']);
	// 	$this->form_validation->set_rules('tanggal', 'Tanggal Kerja Pekerja', 'required', ['required'=> 'Tanggal Kerja Pekerja Wajib di isi']);
	// 	$this->form_validation->set_rules('paket', 'Paket', 'required', ['required'=> 'Paket Wajib di isi']);
	// 	$this->form_validation->set_rules('catatan', 'Catatan', 'required', ['required'=> 'Catatan Wajib di isi']);
	// 	$this->form_validation->set_rules('status', 'Status', 'required', ['required'=> 'Status Wajib di isi']);

	// 	if ($this->form_validation->run()==false) {
	// 		$this->load->view("layout/header", $data);
	// 		$this->load->view("book/vw_ubah_book", $data);
	// 		$this->load->view("layout/footer");
	// 	}

	// 	else {
	// 		$data=[ 'nama_customer'=>$this->input->post('nama_customer'),
	// 		'alamat'=>$this->input->post('alamat'),
	// 		'no_hp'=>$this->input->post('no_hp'),
	// 		'nama'=>$this->input->post('nama'),
	// 		'tanggal'=>$this->input->post('tanggal'),
	// 		'paket'=>$this->input->post('paket'),
	// 		'catatan'=>$this->input->post('catatan'),
	// 		'status'=>$this->input->post('status'),
	// 		];

	// 		$id=$this->input->post('id');
	// 		$this->Orderan_model->update(['id'=> $id], $data);
	// 		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pesanan Berhasil Diubah!</div>');
	// 		redirect('Pesanan_admin');
	// 	}
	// }
}
