<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Post_M');
	}
	public function index()
	{ {

			$data2['title'] = 'Menu Management';
			$data2['user'] = $this->db->get_where('user', ['email' =>
			$this->session->userdata('email')])->row_array();

			$data['list_nama2'] = $this->db->get('list_nama2')->result();

			$this->load->view('templates/header', $data2);
			$this->load->view('templates/sidebar', $data2);
			$this->load->view('templates/topbar', $data2);
			$this->load->view('menu/index', $data);
			$this->load->view('templates/footer');
		}
	}
	public function search()
	{
		$data2['title'] = 'Menu Management';
		$data2['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$keyword = $this->input->post('keyword');
		$data['user'] = $this->m_menu->get_keyword($keyword);

		$this->load->view('templates/header', $data2);
		$this->load->view('templates/sidebar', $data2);
		$this->load->view('templates/topbar', $data2);
		$this->load->view('menu/index', $data);
		$this->load->view('templates/footer');
	}

	public function skeyword()
	{
		$key = $this->input->post('title');
		$data['tbl_barang'] = $this->Post_M->search($key);

		$data2['title'] = 'Menu Management';
		$data2['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('templates/header', $data2);
		$this->load->view('templates/sidebar', $data2);
		$this->load->view('templates/topbar', $data2);
		$this->load->view('skeyview', $data);
	}
}