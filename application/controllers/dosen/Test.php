<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    if ($this->session->userdata('logged_in') !== TRUE) {
      redirect('login');
    }
  }

  function index()
  {
    $this->load->view('dosen/konten/body');
  }

}
