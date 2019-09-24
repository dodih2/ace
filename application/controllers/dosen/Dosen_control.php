<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_control extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in') !== TRUE) {
			redirect('login');
		}
		$this->load->model('grafik_dosen_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data=$this->grafik_dosen_model->get_data()->result();
		$x['data'] = json_encode($data);
		$this->load->view('dosen/konten/dosen_body',$x);
	}

}

/* End of file Produk.php */
/* Location: ./application/controllers/admin/Produk.php */
