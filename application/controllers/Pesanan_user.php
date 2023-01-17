<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan_user extends CI_Controller {
	public function __construct() {
		parent::__construct();
		is_logged_in2();
		$this->load->model('Orderan_model');
		$this->load->model('Book_model');
		$this->load->model('User_model');
	}

	public function index() {
		$data['judul']="Halaman Pesanan";
		$data['user']=$this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
		$data['orderan']=$this->Book_model->getByUser();
		$this->load->view("book/header", $data);
		$this->load->view("pesanan/vw_pesanan_user", $data);
		$this->load->view("layout/footer", $data);
	}

	function hapus($id) {
		$this->Orderan_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data pesanan Berhasil Dihapus!</div>');
		redirect('Pesanan_user');
	}

	
}

