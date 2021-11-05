<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post_M extends CI_Model
{
	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Post_M');
	}


	public function search($key)
	{

		$this->db->select('*');
		$this->db->from('tbl_barang');
		$this->db->like('nama_barang', $key);
		$this->db->or_like('keterangan', $key);
		$this->db->or_like('tanggal_dibuat', $key);
		$this->db->or_like('jumlah', $key);

		return $this->db->get()->result();
	}
}