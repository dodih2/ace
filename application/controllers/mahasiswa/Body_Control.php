<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Body_control extends CI_Controller{

  public function __construct()
	{
		parent::__construct();
	}
  function index()
  {
    $this->load->view('mahasiswa/konten/v_body_mahasiswa');
  }

}
