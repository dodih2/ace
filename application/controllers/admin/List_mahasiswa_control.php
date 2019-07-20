<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_mahasiswa_control extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('datatables'); //load library ignited-datatable
    $this->load->model('user_mahasiswa_model'); // load model user_mahasiswa_model
  }

  function index()
  {
    $x['kelas'] = $this->user_mahasiswa_model->get_nim();
    $x['jurusan'] = $this->user_mahasiswa_model->get_jurusan();
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
      'user_kelas_id' => $this->input->post('kelas'),
      'semester' => $this->input->post('data_semester'),
      'alamat' => $this->input->post('data_alamat'),
      'jurusan_id' => $this->input->post('jurusan'),
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
      'user_kelas_id' => $this->input->post('kelas'),
      'semester' => $this->input->post('data_semester'),
      'alamat' => $this->input->post('data_alamat'),
      'jurusan_id' => $this->input->post('jurusan'),
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
