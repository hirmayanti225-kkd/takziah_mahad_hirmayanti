<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notif extends CI_Controller
{
	public function index()
	{


		$data2['title'] = 'My Profile';
		$data2['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['notif'] = $this->db->get('tbl_notif')->result_array();


		$this->load->view('templates/header', $data2);
		$this->load->view('templates/sidebar', $data2);
		$this->load->view('templates/topbar', $data2);
		$this->load->view('notif/index', $data);
		$this->load->view('templates/footer');
	}
	public function tandaisudahdibaca($id)
	{
		$data = [
			'is_read' => 1
		];
		$this->db->update('tbl_notif', $data, ['id' => $id]);
		$this->session->set_flashdata('msg', '<div class="alert alert-success"><h4 class="text-center"><b>Notif berhasil diperbaharui</b></h4></div>');
		return redirect(base_url('notif/index'));
	}
	public function tandaisudahdibacasemua()
	{
		$notif = $this->db->get_where('tbl_notif', ['is_read' => 0])->result_array();
		for ($i = 0; $i < count($notif); $i++) {
			$data = [
				'is_read' => 1
			];
			$this->db->update('tbl_notif', $data, ['id' => $notif[$i]['id']]);
		}
		$this->session->set_flashdata('msg', '<div class="alert alert-success"><h4 class="text-center"><b>Notif berhasil diperbaharui</b></h4></div>');
		return redirect(base_url('notif/index'));
	}
	public function delete($id)
	{


		$this->db->where('id', $id);
		$this->db->delete('tbl_notif');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success text-center" role="alert">
				Data Berhasil di Hapus!
				</div>');
		redirect('notif/index');
	}
}