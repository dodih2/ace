<?php
class Grafik_control extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('grafik_model');
	}
	function index(){
		$x['data']=$this->grafik_model->get_data_ti();
		$this->load->view('admin/konten/v_grafik',$x);
	}
}
