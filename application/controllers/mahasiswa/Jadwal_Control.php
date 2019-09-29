<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_control extends CI_Controller{
  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('logged_in') !== TRUE) {
			redirect('login_mahasiswa_control');
		}
    $this->load->library('datatables'); //load library ignited-datatable
    $this->load->model('jadwal_mahasiswa_model'); // load model jadwal_model
  }

  function index()
  {
    $x['kelas'] = $this->jadwal_mahasiswa_model->get_kelas();
    $x['jurusan'] = $this->jadwal_mahasiswa_model->get_jurusan();
    $x['ruangan'] = $this->jadwal_mahasiswa_model->get_ruangan();
    $x['jadwal'] = $this->jadwal_mahasiswa_model->get_jadwal();
    $this->load->view('mahasiswa/konten/v_jadwal_mahasiswa', $x);
  }

  function get_jadwal_json(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->jadwal_mahasiswa_model->get_all_jadwal();
  }


}
