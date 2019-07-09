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
    $nik = $this->input->post('nik', TRUE);
    $password = $this->input->post('password', TRUE);
    $validate = $this->login_model->validate($nik, $password);
    if ($validate->num_rows() > 0 ) {
      $data = $validate->row_array();
      $nik = $data['nik'];
      $nama = $data['nama'];
      $j_k = $data['j_k'];
      $email = $data['email'];
      $alamat = $data['alamat'];
      $level = $data['level'];
      $sesdata = array(
        'nik' => $nik,
        'nama'     => $nama,
        'j_k' => $j_k,
        'alamat' => $alamat,
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
        redirect('dosen/test');
      // access login for author
    }
  }else {
    echo $this->session->set_flashdata('msg','NIK/EMAIL or PASSWORD SALAH!!!');
    redirect('login');
  }
  }
  function logout(){
    $this->session->sess_destroy();
    redirect('login');
  }
}
