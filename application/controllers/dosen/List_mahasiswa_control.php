<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_mahasiswa_control extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('datatables'); //load library ignited-datatable
    $this->load->model('user_mahasiswa_model'); // load model user_mahasiswa_model
  }

  function index()
  {
    $x['kelas'] = $this->user_mahasiswa_model->get_nim();
    $x['jurusan'] = $this->user_mahasiswa_model->get_jurusan();
    $this->load->view('dosen/konten/v_mahasiswa_managemen', $x);
  }

  function index1()
  {
    $x['kelas'] = $this->user_mahasiswa_model->get_nim();
    $x['jurusan'] = $this->user_mahasiswa_model->get_jurusan();
    $this->load->view('dosen/konten/v_mahasiswa_managemen_ti', $x);
  }

  function index2()
  {
    $x['kelas'] = $this->user_mahasiswa_model->get_nim();
    $x['jurusan'] = $this->user_mahasiswa_model->get_jurusan();
    $this->load->view('dosen/konten/v_mahasiswa_managemen_tm', $x);
  }

  function index3()
  {
    $x['kelas'] = $this->user_mahasiswa_model->get_nim();
    $x['jurusan'] = $this->user_mahasiswa_model->get_jurusan();
    $this->load->view('dosen/konten/v_mahasiswa_managemen_tp', $x);
  }

  function index4()
  {
    $x['kelas'] = $this->user_mahasiswa_model->get_nim();
    $x['jurusan'] = $this->user_mahasiswa_model->get_jurusan();
    $this->load->view('dosen/konten/v_mahasiswa_managemen_rpl', $x);
  }

  function index5()
  {
    $x['kelas'] = $this->user_mahasiswa_model->get_nim();
    $x['jurusan'] = $this->user_mahasiswa_model->get_jurusan();
    $this->load->view('dosen/konten/v_mahasiswa_managemen_manufaktur', $x);
  }

  function get_mahasiswa_json(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->user_mahasiswa_model->get_all_mahasiswa();
  }

  function get_mahasiswa_ti_json(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->user_mahasiswa_model->get_all_mahasiswa_ti();
  }

  function get_mahasiswa_tm_json(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->user_mahasiswa_model->get_all_mahasiswa_tm();
  }

  function get_mahasiswa_tp_json(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->user_mahasiswa_model->get_all_mahasiswa_tp();
  }

  function get_mahasiswa_rpl_json(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->user_mahasiswa_model->get_all_mahasiswa_rpl();
  }

  function get_mahasiswa_manufaktur_json(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->user_mahasiswa_model->get_all_mahasiswa_manufaktur();
  }

}
