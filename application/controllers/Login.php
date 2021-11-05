<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
		$this->load->view('home');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success text-center" role="alert">
				Pesanan Berhasil di Kirim!
				</div>');
	}
	public function doa()
	{
		$this->load->view('doa');
	}
	public function doa_doa()
	{
		$this->load->view('doa_doa');
	}
	public function masuk()
	{
		$this->load->view('setail');
		$this->load->view('masuk');
	}
}