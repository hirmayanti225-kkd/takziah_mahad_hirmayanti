<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{



	public function index()
	{

		$data2['title'] = 'Dashbord';
		$data2['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('templates/header', $data2);
		$this->load->view('templates/sidebar', $data2);
		$this->load->view('templates/topbar', $data2);
		$this->load->view('admin/index', $data2);
		$this->load->view('templates/footer');



		$data['list_nama2'] = $this->db->get('list_nama2')->result();
	}
	public function kel_kendaraan()
	{
		$data['title'] = 'Kelola Kendaraan';
		$data2['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('templates/header', $data2);
		$this->load->view('templates/sidebar', $data2);
		$this->load->view('templates/topbar', $data2);
		$this->load->view('user/kel_kendaraan', $data2);
		$this->load->view('templates/footer');



		$data['list_nama2'] = $this->db->get('list_nama2')->result();
	}
}