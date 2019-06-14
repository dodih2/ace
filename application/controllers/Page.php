<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    if ($this->session->userdata('logged_in') !== TRUE) {
      redirect('login');
    }
  }

  function index(){

    if ($this->session->userdata('level')==='1') {
      redirect('admin/admin_control');
    }else {
      echo "Access Denied";
    }
  }

  function staff(){
    //Allowing access to staff Only
    if ($this->session->userdata('level')==='2') {
      $this->load->view('dosen/home');
    }else {
      echo "Access Denied";
    }
  }

}
