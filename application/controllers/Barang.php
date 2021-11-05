<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
	public function index()
	{
		$data2['title'] = 'My Profile';
		$data2['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['barang'] = $this->db->get('tbl_barang')->result_array(); //utk menampilkan dari inputan

		$this->load->view('templates/header', $data2);
		$this->load->view('templates/sidebar', $data2);
		$this->load->view('templates/topbar', $data2);
		$this->load->view('barang/index', $data);
		$this->load->view('templates/footer');
	}
	public function tambah()
	{
		$data2['title'] = 'My Profile';
		$data2['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['barang'] = $this->db->get('tbl_barang')->result_array(); //utk menampilkan dari inputan

		$this->load->view('templates/header', $data2);
		$this->load->view('templates/sidebar', $data2);
		$this->load->view('templates/topbar', $data2);
		$this->load->view('barang/tambah', $data);
		$this->load->view('templates/footer');
	}
	public function simpanbarang()
	{
		$data = [
			'nama_barang' => htmlspecialchars($this->input->post('nama_barang'), TRUE),
			'keterangan' => htmlspecialchars($this->input->post('keterangan'), TRUE),
			'tanggal_dibuat' => time(),
			'jumlah' => htmlspecialchars($this->input->post('jumlah'), TRUE),
		];

		//1=sudah dibaca
		//0=blm dibaca
		$notif = [
			'judul' => 'Data ditambahkan',
			'pesan' => 'Data ' . $this->input->post('nama_barang') . ' ditambahkan pada ' . date('D, d-M-Y, H:i', $data['tanggal_dibuat']) . '.',
			'is_read' => 0
		];
		$this->db->insert('tbl_barang', $data);
		$this->db->insert('tbl_notif', $notif);
		$this->session->set_flashdata('msg', '<div class="alert alert-success text-center m-3"><h4>Undangan Berhasil di Kirim</h4></div>');
		return redirect(base_url('barang/tambah'));
	}
	public function hapusbarang($id)
	{
		$barang = $this->db->get_where('tbl_barang', ['id' => $id])->row_array();
		//1=sudah dibaca
		//0=blm dibaca
		$notif = [
			'judul' => 'Data dihapus',
			'pesan' => 'Data' . $barang['nama_barang'] . ' dihapus pada ' . date('D, d-M-Y, H:i', time()) . '.',
			'is_read' => 0
		];
		$this->db->delete('tbl_barang', ['id' => $id]);
		$this->db->insert('tbl_notif', $notif);

		$this->session->set_flashdata('msg', '<div class="alert alert-success text-center"><h4>Barang berhasil dihapus</h4></div>');

		return redirect((base_url('barang/index')));
	}
}