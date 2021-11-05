<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class M_Admin extends CI_Model{
	public function getDataStasiun(){
		return $this->db->get('stasiun');
	}
}