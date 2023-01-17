<?php
defined('BASEPATH') or exit('No direct scripts allowed');

class Poli_model extends CI_Model
{
    public $table = 'poli';
    public $id = 'poli.id';
    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
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
    public function tpoli()
	{
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->num_rows();
	}
    // function charts()
	// {
	// 	$this->db->select('pl.nama_poli as poli, count(k.id) as tot');
	// 	$this->db->from('karyawan k, poli pl');
	// 	$this->db->where('k.nama_poli = pl.id');
	// 	$this->db->group_by('k.nama_poli');
	// 	$query = $this->db->get();
	// 	return $query->result_array();
	// }
}