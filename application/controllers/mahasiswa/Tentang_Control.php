<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang_control extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('logged_in') !== TRUE) {
      redirect('login_mahasiswa_control');
    }
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('mahasiswa/konten/v_tentang_mahasiswa');
  }

}
