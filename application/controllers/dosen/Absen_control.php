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

  function simpan(){
    $data = array(
      'id_absen' => $this->input->post('data_id'),
      'hadir' => $this->input->post('data_hadir')
    );
    $this->db->insert('absen', $data);
    redirect('dosen/absen_control');
  }

  function update(){
    $kode = $this->input->post('data_id');
    $data = array(
      'nik_id' => $this->input->post('data_nik'),
      'nim_id' => $this->input->post('data_nim'),
      'kelas' => $this->input->post('data_kelas'),
      'hadir' => $this->input->post('data_hadir'),
      'alpa' => $this->input->post('data_alpa'),
      'izin' => $this->input->post('data_izin'),
      'keterangan' => $this->input->post('data_keterangan'),
      'jadwal_id' => $this->input->post('data_jadwal'),
      'konfirmasi' => 1
    );
    $this->db->where('id_absen', $kode);
    $this->db->update('absen', $data);
    $data2 = array(
      'nik_id' => $this->input->post('data_nik'),
      'nim_id' => $this->input->post('data_nim'),
      'kelas' => $this->input->post('data_kelas'),
      'hadir' => 0,
      'alpa' => 0,
      'izin' => 0,
      'keterangan' => $this->input->post('data_keterangan'),
      'jadwal_id' => $this->input->post('data_jadwal'),
      'konfirmasi' => 2
    );
    $this->db->insert('absen', $data2);
    redirect('dosen/absen_control');
  }

  function delete(){
    $kode = $this->input->post('data_id');
    $this->db->where('id_absen', $kode);
    $this->db->delete('absen');
    redirect('dosen/absen_control');
  }

}
