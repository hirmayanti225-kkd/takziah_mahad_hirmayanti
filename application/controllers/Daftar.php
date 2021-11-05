<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('person_model', 'person');
	}

	public function index()
	{

		$data2['title'] = 'Menu Management';
		$data2['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['sudah'] = $this->person->count_allv2(1);
		$data['belum'] = $this->person->count_allv2(0);

		$this->load->view('templates/header', $data2);
		$this->load->view('templates/sidebar', $data2);
		$this->load->view('templates/topbar', $data2);
		$this->load->view('daftar');
		$this->load->view('templates/footer');
	}

	public function ajax_list()
	{

		$list = $this->person->get_datatables();
		$data = array();
		$no = $_POST['start'];
		$alamat = '';
		$email = '';
		$tlp = '';
		$ceklis = '';
		foreach ($list as $person) {
			$no++;
			$row = array();
			$row[] = $person->no;
			$row[] = $person->nama;
			$row[] = $person->alamat;
			$row[] = $person->email;
			$row[] = $person->wa;

			if (!empty($person->alamat)) {
				$alamat = $person->alamat . ' - Apakah sudah benar utk detail alamatnya ini ?';
			} else {
				$alamat = 'Mohon Infokan alamat lengkap detailnya ?';
			}

			if (!empty($person->email)) {
				$email = $person->email;
			} else {
				$email = 'Mohon Infokan emailnya ?';
			}

			if ($person->softfile == 0) {
				$ceklis = '<a class="btn btn-sm btn-warning" href="javascript:void(0)" title="Edit" onclick="ceklis(' . "'" . $person->no . "'" . ', 1)"><i class="glyphicon glyphicon-remove"></i></a>';
			} else {
				$ceklis = '<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Edit" onclick="ceklis(' . "'" . $person->no . "'" . ', 0)"><i class="glyphicon glyphicon-ok"></i></a>';
			}

			$tlp = $person->wa;

			$row[] = $ceklis;
			//add html for action
			$row[] = '
			<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person(' . "'" . $person->no . "'" . ')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
			<a class="btn btn-sm btn-success" href="
				https://web.whatsapp.com/send?phone=' . $tlp . '&text=
				Assalamaualaikum,...%0a
				Kami dari Studio Foto Wisuda Parinkrafers, ingin mengkonfirmasi *apakah benar* dengan data berikut, %0a
				(' . $person->no . '), %0a
				Nama : ' . $person->nama . ', %0a
				alamat : ' . $alamat . ', %0a
				email : ' . $email . ', %0a
				dan fotonya dibawah ini..%0a
				Kak Tolong dibantu Konfirmasi Nama Lengkap dan Alamat Rumahnya yak, ditunggu ya kak??terimakasih
			" class="float" target="_blank">
				<i class="glyphicon glyphicon-file"></i> WA
			</a>			
			';


			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->person->count_all(),
			"recordsFiltered" => $this->person->count_filtered(),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_ceklist()
	{
		$data = array(
			'softfile' => $this->input->post('softfile'),
		);

		$this->person->update(array('no' => $this->input->post('no')), $data);

		echo json_encode(array("status" => TRUE));
	}

	public function ajax_edit($id)
	{
		$data = $this->person->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_update()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
			'wa' => $this->input->post('wa'),

		);

		$this->person->update(array('no' => $this->input->post('no')), $data);
		echo json_encode(array("status" => TRUE));
	}
}