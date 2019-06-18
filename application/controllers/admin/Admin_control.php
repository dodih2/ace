<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_control extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in') !== TRUE) {
			redirect('login');
		}
		$this->load->model("user_dosen_model");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('admin/konten/v_admin_body');
	}

	public function body_dosen()
	{
		$data["user_dosen"] = $this->user_dosen_model->getAll();
		$this->load->view("admin/konten/v_dosen_managemen", $data);
	}

}

/* End of file Produk.php */
/* Location: ./application/controllers/admin/Produk.php */
