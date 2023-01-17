<?php
defined('BASEPATH') or exit('No direct scripts allowed');

class Karyawan_model extends CI_Model
{
    public $table = 'karyawan';
    public $id = 'karyawan.id';
    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        // $this->db->select('p.*, pl.nama_poli as nama_poli,d.nama_dokter as nama_dokter');
        // $this->db->from('pasien p');
        // $this->db->join('poli pl', 'p.nama_poli = pl.id');
        // $this->db->join('dokter d','p.nama_dokter = d.id');
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
	{
		$this->db->from($this->table);
		$this->db->where($this->id, $id);
		$query = $this->db->get();
		return $query->row_array();
	}

    public function getPoli()
    {
        $this->db->from('Poli');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getDokter($idp)
	{
		$this->db->from('Dokter');
		$this->db->where('nama_poli', $idp);
		$query = $this->db->get();
		return $query->result_array();
	}
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    public function tkaryawan()
	{
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->num_rows();
	}
}