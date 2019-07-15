<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen_control extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('datatables'); //load library ignited-datatable
  }

  function index()
  {
    $this->load->view('dosen/konten/v_absen');
  }


}
