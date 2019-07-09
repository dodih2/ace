<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_control extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  { 
    $this->load->view('dosen/konten/v_profile');
  }

}
