<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_control extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("user_dosen_model");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('admin/konten/body');
	}

	public function body_dosen()
	{
		$data["user_dosen"] = $this->user_dosen_model->getAll();
		$this->load->view("admin/konten/b_dosen", $data);
	}

}

/* End of file Produk.php */
/* Location: ./application/controllers/admin/Produk.php */
