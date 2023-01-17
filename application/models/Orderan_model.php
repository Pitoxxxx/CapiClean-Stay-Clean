<?php defined('BASEPATH') or exit('No direct scripts allowed');

class Orderan_model extends CI_Model {
	public $table='orderan';
	public $id='orderan.id';
	

	public function __construct() {
		parent::__construct();
	}

	public function get() {
		$this->db->from($this->table);
		$query=$this->db->get();
		return $query->result_array();
	}

	public function getCus()
    {
        $id = $this->session->userdata('id');
        $this->db->select('o.*, s.nama as nama');
        $this->db->from('orderan o');
        $this->db->join('user s', 'o.id_user = s.id');
        $this->db->where('o.id_user', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
	// public function get()
	// {
	//     $this->db->from($this->table);
	//     $query = $this->db->get();
	//     return $query->result_array();
	// }
	public function getById($id) {
		$this->db->from($this->table);
		$this->db->where('id', $id);
		$query=$this->db->get();
		return $query->row_array();
	}

	public function getByCus($nama_customer) {
		$this->db->from($this->table);
		$this->db->where('nama_customer', $nama_customer);
		$query=$this->db->get();
		return $query->result_array();
	}
	
	public function update($where, $data)
    {
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

    public function tpesanan()
	{
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->num_rows();
	}
}
