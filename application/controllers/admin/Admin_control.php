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
		$data=$this->grafik_model->get_data_ti()->result();
		$x['data'] = json_encode($data);
		$data2=$this->grafik_model->get_data_tm()->result();
		$x['data2'] = json_encode($data2);
		$data3=$this->grafik_model->get_data_tp()->result();
		$x['data3'] = json_encode($data3);
		$data4=$this->grafik_model->get_data_rpl()->result();
		$x['data4'] = json_encode($data4);
		$data5=$this->grafik_model->get_data_mnf()->result();
		$x['data5'] = json_encode($data5);
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
