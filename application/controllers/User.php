<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$data2['title'] = 'My Profile';
		$data2['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('templates/header', $data2);
		$this->load->view('templates/sidebar', $data2);
		$this->load->view('templates/topbar', $data2);
		$this->load->view('user/index', $data2);


		$data['list_nama2'] = $this->db->get('list_nama2')->result();
	}
	public function tambah_hal()
	{
		$this->load->view('user/tambah_hal_mhs');
	}
	public function tambah_edit()
	{
		$this->load->view('user/tambah_edit_mhs');
	}
	public function create()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$data = $this->input->post();


			$this->db->insert('list_nama2', $data);
			redirect('menu');
		} else {

			$data = $this->input->post();
			$data2['title'] = 'Menu Management';
			$data2['user'] = $this->db->get_where('user', ['email' =>
			$this->session->userdata('email')])->row_array();

			$data2['menu'] = $this->db->get('user_menu')->result_array();

			//notif
			$notif = array(
				'judul' => 'Pesanan ditambahkan',
				'pesan' => 'Pesanan',
				'is_read' => 0

			);
			$this->db->insert('list_nama2', $data);
			$this->db->insert('tbl_notif', $notif);


			$this->load->view('templates/header', $data2);
			$this->load->view('templates/sidebar', $data2);
			$this->load->view('templates/topbar', $data2);
			$this->load->view('user/create', $data2);
			$this->load->view('templates/footer');
		}
	}
	public function create3()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$data = $this->input->post();

			$this->db->insert('list_nama', $data);
			redirect('kendaraan');
		} else {
			$data2['title'] = 'Menu Management';
			$data2['user'] = $this->db->get_where('user', ['email' =>
			$this->session->userdata('email')])->row_array();

			$data2['menu'] = $this->db->get('user_menu')->result_array();

			$this->load->view('templates/header', $data2);
			$this->load->view('templates/sidebar', $data2);
			$this->load->view('templates/topbar', $data2);
			$this->load->view('user/create2', $data2);
			$this->load->view('templates/footer');
		}
	}
	public function create2()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$data = $this->input->post();

			$this->db->insert('list_nama2', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success text-center" role="alert">
				Pesanan Berhasil di Kirim!
				</div>');
			redirect('pelayanan');
		} else {

			$data2['title'] = 'Menu Management';
			$data2['user'] = $this->db->get_where('user', ['email' =>
			$this->session->userdata('email')])->row_array();

			$data2['menu'] = $this->db->get('user_menu')->result_array();

			$this->load->view('templates/header', $data2);
			$this->load->view('templates/sidebar', $data2);
			$this->load->view('templates/topbar', $data2);
			$this->load->view('user/create', $data2);
			$this->load->view('templates/footer');
		}
	}
	public function update2($id)
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$data = $this->input->post();


			$this->db->where('id', $id);
			$this->db->update('list_nama2', $data);

			redirect('user'); //halaman
		} else {
			$data['item'] = $this->db->get_where('list_nama2', ['id' => $id])->row();
			$this->load->view('user/update', $data);
		}
	}
	public function update($id)
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$data = $this->input->post();


			$this->db->where('nim', $id);
			$this->db->update('list_nama2', $data);

			redirect('menu'); //halaman
		} else {
			$data['item'] = $this->db->get_where('list_nama2', ['id' => $id])->row();

			$data2['title'] = 'Menu Management';
			$data2['user'] = $this->db->get_where('user', ['email' =>
			$this->session->userdata('email')])->row_array();

			$data2['menu'] = $this->db->get('user_menu')->result_array();

			$this->load->view('templates/header', $data2);
			$this->load->view('templates/sidebar', $data2);
			$this->load->view('user/update', $data);

			$this->load->view('templates/footer');
		}
	}
	public function gmail()
	{
		$this->load->view('user/gmail');
	}
	public function wa($id)
	{

		$data['item'] = $this->db->get_where('list_nama2', ['id' => $id])->row();

		$data2['title'] = 'wa';
		$data2['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data2['menu'] = $this->db->get('user_menu')->result_array();

		$this->load->view('templates/header', $data2);
		$this->load->view('templates/sidebar', $data2);
		$this->load->view('templates/topbar', $data2);
		$this->load->view('user/wa', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success text-center" role="alert">
				Pesan Berhasil di Kirim!
				</div>');
	}
	public function wa3()
	{

		$data2['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data2['menu'] = $this->db->get('user_menu')->result_array();

		$this->load->view('templates/header', $data2);
		$this->load->view('templates/sidebar', $data2);
		$this->load->view('templates/topbar', $data2);
		$this->load->view('user/wa3');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success text-center" role="alert">
				<h4>Pesan Berhasil di Kirim!</h4>
				</div>');
	}
	public function wa2($id)
	{

		$data['item'] = $this->db->get_where('list_nama2', ['id' => $id])->row();


		$data2['title'] = 'wa';
		$data2['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data2['menu'] = $this->db->get('user_menu')->result_array();

		$this->load->view('templates/header', $data2);
		$this->load->view('templates/sidebar', $data2);
		$this->load->view('templates/topbar', $data2);
		$this->load->view('user/wa2', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success text-center" role="alert">
				Pesan Berhasil di Kirim!
				</div>');
	}
	public function delete($id)
	{


		$this->db->where('id', $id);
		$this->db->delete('list_nama2');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success text-center" role="alert">
				Data Berhasil di Hapus!
				</div>');
		redirect('menu');
	}
	public function delete2($nim)
	{
		$this->db->where('nim', $nim);
		$this->db->delete('list_nama');

		redirect('kendaraan');
	}

	public function edit()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data2['title'] = 'Edit Profile';
		$data2['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('name', 'Full Name', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data2);
			$this->load->view('templates/sidebar', $data2);
			$this->load->view('templates/topbar', $data2);
			$this->load->view('user/edit', $data2);
			$this->load->view('templates/footer');
		} else {
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$nohp = $this->input->post('nohp');
			$alamat = $this->input->post('alamat');

			//cek jika ada gbr diupload
			$upload_image = $_FILES['image']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '2048';
				$config['upload_path'] = './assets/img/profile/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				} else {
					echo $this->upload->dispay_errors();
				}
			}

			$this->db->set('name', $name);
			$this->db->set('nohp', $nohp);
			$this->db->set('alamat', $alamat);
			$this->db->where('email', $email);
			$this->db->update('user');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success text-center" role="alert">
				<h4><b>Profile berhasil di edit!</b></h4>
				</div>');
			redirect('user');
		}
	}

	public function email()
	{


		$data2['title'] = 'Menu Management';
		$data2['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();


		$this->load->view('templates/header', $data2);
		$this->load->view('templates/sidebar', $data2);
		$this->load->view('templates/topbar', $data2);
		$this->load->view('email');

		$this->load->view('templates/footer');
	}
	public function sendmail()
	{
		if (isset($_post['submit_email'])) {
			$email = $this->input->post('email');
			$subject = $this->input->post('subject');
			$pesan = $this->input->post('pesan');

			if (!empty($email)) {
				//configuration to email 
				$config = [
					'mailtype' => 'text',
					'charset' => 'iso-8859-1',
					'protocol' => 'smtp',
					'smtp_host' => 'ssl://smtp.googlemail.com',
					'smtp_user' => 'hirmayanti225@gmail.com',
					'smtp_pass' => 'yantiku225',
					'smtp_port' =>  587
				];
				$this->load->library('email', $config);
				$this->email->initialize($config);
				//end config
				$this->email->from('emailfrom');
				$this->email->to($email);
				$this->email->subject($subject);
				$this->email->message($pesan);

				if ($this->email->send()) {
					echo "Email, berhasil dikirimkan";
				} else {
					show_error($this->email->print_debugger());
				}
			}
		}
	}

	public function doa_mandi()
	{
		$this->load->view('doa_mandi');
	}
	public function doa_kafani()
	{
		$this->load->view('doa_kafani');
	}
	public function doa_kubur()
	{
		$this->load->view('doa_kubur');
	}
	public function doa_doa()
	{
		$this->load->view('doa_doa');
	}
}