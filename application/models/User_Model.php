<?php
class User_Model extends CI_Model
{
	public function login($username, $password, $status)
	{
		$condition	= "username=" . "'" . $username . "'" . " AND " . "password=" . "'" . $password . "'" . " AND " . "status=" . "'" . $status . "'";
		$select		= array('username', 'password', 'status');
		$this->db->select($select);
		$this->db->from('tb_siswa');
		$this->db->where($condition);
		$login 		= $this->db->get();

		if ($login->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	public function role($username, $status)
	{
		$condition	= "username=" . "'" . $username . "'" . " AND " . "status=" . "'" . $status . "'";
		$select		= array('username', 'status');
		$this->db->select($select);
		$this->db->from('tb_siswa');
		$this->db->where($condition);
		$login 		= $this->db->get();

		if ($login->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	public function valid($username)
	{
		$condition	= "username=" . "'" . $username . "'";
		$select		= array('username');
		$this->db->select($select);
		$this->db->from('view_vote');
		$this->db->where($condition);
		$login 		= $this->db->get();

		if ($login->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	public function datasiswa()
	{
		$username = $this->session->userdata('username');
		$load = $this->db->query("SELECT * FROM tb_siswa WHERE username = '$username'");
		return $load->result_array();
	}
	public function datamodel()
	{
		$load	= $this->db->query("SELECT * FROM tb_pilihan ORDER BY no ASC");
		return $load->result_Array();
	}
	public function vote($nisn, $username)
	{
		$data			= array(
			'nisn'		=> $nisn,
			'username'	=> $username
		);
		$this->db->insert('tb_pilih', $data);
	}
	public function hadir($username)
	{
		$update = $this->db->query("UPDATE tb_siswa SET hadir='Hadir' WHERE username='$username'");
		return $update;
	}
	public function tglpilih()
	{
		$cektgl = $this->db->query("SELECT tgl FROM tb_datapilketos ");
		return $cektgl->result_array();
	}
}
