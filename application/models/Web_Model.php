<?php
class Web_Model extends CI_Model
{
  public function datamodel()
  {
    $load  = $this->db->query("SELECT * FROM tb_pilihan ORDER BY no ASC");
    // $count  = $this->db->query("SELECT * , (
    // SELECT COUNT(tb_pilih.id_pilih)) AS jumlah
    // FROM
    // tb_pilihan
    // INNER JOIN tb_pilih
    // ON
    // tb_pilihan.nisn = tb_pilih.nisn
    // INNER JOIN tb_siswa
    // ON 
    // tb_siswa.username = tb_pilih.username
    // GROUP BY tb_pilih.nisn
    // ORDER BY tb_pilihan.no ASC
    // ");
    // return $count->result_array();
    return $load->result_Array();
  }

  public function countpemilih()
  {
    $count  = $this->db->query("SELECT COUNT(username) AS jumlah FROM tb_siswa");
    return $count->result_array();
  }

  public function countvote()
  {
    $count  = $this->db->query("SELECT COUNT(username) AS jumlah FROM view_vote");
    return $count->result_array();
  }

  public function hasilvote()
  {
    $count  = $this->db->query("SELECT * , (
		SELECT COUNT(tb_pilih.id_pilih)) AS jumlah
		FROM
		tb_pilihan
		INNER JOIN tb_pilih
		ON
		tb_pilihan.nisn = tb_pilih.nisn
		INNER JOIN tb_siswa
		ON 
		tb_siswa.username = tb_pilih.username
		GROUP BY tb_pilih.nisn
		ORDER BY tb_pilihan.no ASC
		");
    return $count->result_array();
  }
  public function persenvote()
  {
    $count  = $this->db->query("SELECT COUNT(username) AS jumlah FROM view_vote");
    return $count->result_array();
  }
}
