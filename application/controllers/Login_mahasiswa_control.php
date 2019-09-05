<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_mahasiswa_control extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('login_mahasiswa_model');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('v_login_mahasiswa2');
  }

  function auth(){
    // $email = $this->input->post('email',TRUE);
    $nim = $this->input->post('nim', TRUE);
    $password = $this->input->post('password', TRUE);
    $validate = $this->login_mahasiswa_model->validate($nim, $password);
    if ($validate->num_rows() > 0 ) {
      $data = $validate->row_array();
      $nim = $data['nim'];
      $nama = $data['nama'];
      $user_kelas_id = $data['user_kelas_id'];
      $jenis_kelamin = $data['jenis_kelamin'];
      $ttl = $data['ttl'];
      $email = $data['email'];
      $alamat = $data['alamat'];
      $semester = $data['semester'];
      $jurusan_id = $data['jurusan_id'];
      $sesdata = array(
        'nim' => $nim,
        'nama' => $nama,
        'user_kelas_id' => $user_kelas_id,
        'jenis_kelamin' => $jenis_kelamin,
        'ttl' => $ttl,
        'alamat' => $alamat,
        'jurusan_id' => $jurusan_id,
        'email'    => $email,
        'semester'    => $semester,
        'logged_in'=> TRUE
      );
      $this->session->set_userdata($sesdata);
      // access login for admin
      redirect('mahasiswa/body_control');
  }else {
    echo $this->session->set_flashdata('msg','NIM or PASSWORD SALAH!!!');
    redirect('login_mahasiswa_control');
  }
  }
  function logout(){
    $this->session->sess_destroy();
    redirect('login_mahasiswa_control');
  }
}
