<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelayanan extends CI_Controller
{

	public function index()
	{
		$data2['title'] = 'Pemesanan';
		$data2['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('templates/header', $data2);
		$this->load->view('templates/sidebar', $data2);
		$this->load->view('templates/topbar', $data2);
		$this->load->view('pelayanan/index', $data2);
		$this->load->view('templates/footer');
		
	}
}