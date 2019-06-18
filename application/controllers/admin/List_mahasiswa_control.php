<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_mahasiswa_control extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('logged_in') !== TRUE) {
      redirect('login');
    }
    $this->load->library('datatables'); //load library ignited-datatable
    $this->load->model('user_mahasiswa_model'); // load model user_mahasiswa_model
  }

  function index()
  {
    $x['user_mahasiswa'] = $this->user_mahasiswa_model->get_nim();
    $this->load->view('admin/konten/v_mahasiswa_managemen', $x);
  }

  function get_mahasiswa_json(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->user_mahasiswa_model->get_all_mahasiswa();
  }

  function simpan(){
    $data = array(
      'nim' => $this->input->post('data_nim'),
      'nama' => $this->input->post('data_nama'),
      'jenis_kelamin'=> $this->input->post('data_jk'),
      'kelas' => $this->input->post('data_kelas'),
      'alamat' => $this->input->post('data_alamat'),
      'jurusan' => $this->input->post('data_jurusan'),
      'email' => $this->input->post('data_email')
    );
    $this->db->insert('user_mahasiswa', $data);
    redirect('admin/list_mahasiswa_control');
  }

  function update(){
    $kode = $this->input->post('data_nim');
    $data = array(
      'nama' => $this->input->post('data_nama'),
      'jenis_kelamin'=> $this->input->post('data_jk'),
      'kelas' => $this->input->post('data_kelas'),
      'alamat' => $this->input->post('data_alamat'),
      'jurusan' => $this->input->post('data_jurusan'),
      'email' => $this->input->post('data_email')
    );
    $this->db->where('nim', $kode);
    $this->db->update('user_mahasiswa', $data);
    redirect('admin/list_mahasiswa_control');
  }

  function delete(){
    $kode = $this->input->post('data_nim');
    $this->db->where('nim', $kode);
    $this->db->delete('user_mahasiswa');
    redirect('admin/list_mahasiswa_control');
  }

}