<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen_control extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('datatables'); //load library ignited-datatable
    $this->load->model('absen_dosen_model'); // load model absen_dosen_model
  }

  function index()
  {
    $x['user_mahasiswa'] = $this->absen_dosen_model->get_mahasiswa();
    $x['kelas'] = $this->absen_dosen_model->get_kelas();
    $x['jadwal'] = $this->absen_dosen_model->get_jadwal();
    $this->load->view('dosen/konten/v_absen', $x);
    
  }

  function get_absen_json(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->absen_dosen_model->get_all_absen();
  }

  function get_absen_jsonn(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->absen_dosen_model->get_all_absenn();
  }

  function simpan(){
    $data = array(
      'nik_id_id' => $this->session->userdata('nik'),
      'nim_id' => $this->input->post('data_nim'),
      'absen_kelas_id' => $this->input->post('data_kelas'),
      'hadir' => $this->input->post('data_hadir'),
      'alpa' => $this->input->post('data_alpa'),
      'izin' => $this->input->post('data_izin'),
      'keterangan' => $this->input->post('data_keterangan')
    );
    $this->db->insert('absen', $data);
    $kode = $this->input->post('data_nim');
    $data2 = array('konfirmasi' => 2);
    $this->db->where('nim', $kode);
    $this->db->update('user_mahasiswa', $data2);
    redirect('dosen/absen_control');
  }

  function simpan2(){
    $kode = $this->input->post('data_id');
    $data = array(
      'hadir' => $this->input->post('data_hadir2'),
      'alpa' => $this->input->post('data_alpa2'),
      'izin' => $this->input->post('data_izin2'),
      'keterangan' => $this->input->post('data_keterangan')
    );
    $this->db->where('id_absen', $kode);
    $this->db->update('absen', $data);
    redirect('dosen/absen_control');
  }

}
