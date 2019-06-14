<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('login_model');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('v_login');
  }

  function auth(){
    // $email = $this->input->post('email',TRUE);
    $username = $this->input->post('username', TRUE);
    $password = $this->input->post('password', TRUE);
    $validate = $this->login_model->validate($username, $password);
    if ($validate->num_rows() > 0 ) {
      $data = $validate->row_array();
      $name = $data['nama'];
      $email = $data['email'];
      $username = $data['username'];
      $level = $data['level'];
      $sesdata = array(
        'nama'     => $nama,
        'username' => $name,
        'email'    => $email,
        'level'    => $level,
        'logged_in'=> TRUE
      );
      $this->session->set_userdata($sesdata);
      // access login for admin
      if ($level === '1') {
        redirect('admin/admin_control');

      // access login for staff
    }elseif ($level === '2') {
        redirect('dosen/home');
      // access login for author
    }
  }else {
    echo $this->session->set_flashdata('msg','Username or Password is wrong');
    redirect('login');
  }
  }
  function logout(){
    $this->session->sess_destroy();
    redirect('login');
  }
}
