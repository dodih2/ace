<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test2 extends CI_Controller{

  function index()
  {
    $this->load->view("admin/coba/test");
  }

}
