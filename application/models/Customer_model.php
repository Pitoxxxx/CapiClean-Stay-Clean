<?php defined('BASEPATH') or exit('No direct scripts allowed');

class Customer_model extends CI_Model {
	public $table='customer';
	public $id='customer.id';

	public function __construct() {
		parent::__construct();
	}

	public function get() {
		//     $this->db->select('d.*, pl.nama_poli as nama_poli');
		//     $this->db->from('customer c');
		//     $this->db->join('poli pl', 'd.nama_poli = pl.id');
		$this->db->from($this->table);
		$query=$this->db->get();
		return $query->result_array();
	}

	public function getById($id) {
		$this->db->from($this->table);
		$this->db->where('id', $id);
		$query=$this->db->get();
		return $query->row_array();
	}

	public function getByPoli($nama_poli) {
		$this->db->from($this->table);
		$this->db->where('nama_poli', $nama_poli);
		$query=$this->db->get();
		return $query->result_array();
	}

	public function update($where, $data) {
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function insert($data) {
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function delete($id) {
		$this->db->where($this->id, $id);
		$this->db->delete($this->table);
		return $this->db->affected_rows();
	}

	public function tcustomer() {
		$this->db->from($this->table);
		$query=$this->db->get();
		return $query->num_rows();
	}
}
