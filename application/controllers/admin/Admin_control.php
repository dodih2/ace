<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_control extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in') !== TRUE) {
			redirect('login');
		}
		$this->load->model('grafik_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$x['data']=$this->grafik_model->get_data_ti();
		$x['data2']=$this->grafik_model->get_data_tm();
		$x['data3']=$this->grafik_model->get_data_tp();
		$x['data4']=$this->grafik_model->get_data_rpl();
		$x['data5']=$this->grafik_model->get_data_mnf();
		$this->load->view('admin/konten/v_admin_body',$x);
	}

	public function body_dosen()
	{
		$data["user_dosen"] = $this->user_dosen_model->getAll();
		$this->load->view("admin/konten/v_dosen_managemen", $data);
	}

}

/* End of file Produk.php */
/* Location: ./application/controllers/admin/Produk.php */
