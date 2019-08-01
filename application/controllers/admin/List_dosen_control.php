<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_dosen_control extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('logged_in') !== TRUE) {
      redirect('login');
    }
    $this->load->library('datatables'); //load library ignited-datatable
    $this->load->model('user_dosen_model'); // load model user_dosen_model
  }

  function index()
  {
    $x['jurusan'] = $this->user_dosen_model->get_jurusan();
    $this->load->view('admin/konten/v_dosen_managemen', $x);
  }

  function get_dosen_json(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->user_dosen_model->get_all_dosen();
  }


// Simpan data Dosen
  function simpan(){
    $data = array(
      'nik' => $this->input->post('data_nik'),
      'level' => $this->input->post('data_level'),
      'dosen_jurusan' => $this->input->post('jurusan'),
      'password' => $this->input->post('data_password')
    );
    $this->db->insert('user_dosen', $data);
    redirect('admin/list_dosen_control');
  }


  function update(){
    $kode = $this->input->post('data_nik');
    $data = array(
      'nama' => $this->input->post('data_nama'),
      'j_k'=> $this->input->post('data_jk'),
      'level' => $this->input->post('data_level'),
      'alamat' => $this->input->post('data_alamat'),
      'dosen_jurusan' => $this->input->post('jurusan'),
      'email' => $this->input->post('data_email')
    );
    $this->db->where('nik', $kode);
    $this->db->update('user_dosen', $data);
    redirect('admin/list_dosen_control');
  }

  function delete(){
    $kode = $this->input->post('data_nik');
    $this->db->where('nik', $kode);
    $this->db->delete('user_dosen');
    redirect('admin/list_dosen_control');
  }

}
