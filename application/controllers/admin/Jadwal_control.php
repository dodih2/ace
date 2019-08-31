<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_control extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('datatables'); //load library ignited-datatable
    $this->load->model('jadwal_model'); // load model jadwal_model
  }

  function index()
  {
    $x['kelas'] = $this->jadwal_model->get_kelas();
    $x['jurusan'] = $this->jadwal_model->get_jurusan();
    $x['ruangan'] = $this->jadwal_model->get_ruangan();
    $x['jadwal'] = $this->jadwal_model->get_jadwal();
    $x['mata_kuliah'] = $this->jadwal_model->get_matkul();
    $x['user_dosen'] = $this->jadwal_model->get_dosen();
    $this->load->view('admin/konten/v_jadwal', $x);
  }

  function get_jadwal_json(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->jadwal_model->get_all_jadwal();
  }

  function simpan(){
    $data = array(
      'nama_hari' => $this->input->post('data_nama'),
      'kode_matkul' => $this->input->post('data_kode'),
      'kelas' => $this->input->post('kelas'),
      'ruangan_id' => $this->input->post('ruangan'),
      'jurusan_id' => $this->input->post('jurusan'),
      'nik_id' => $this->input->post('data_nik'),
      'jam_mulai' => $this->input->post('data_jamm'),
      'jam_selesai' => $this->input->post('data_jams')
    );
    $this->db->insert('jadwal', $data);
    redirect('admin/jadwal_control');
  }

  function update(){
    $kode = $this->input->post('data_id');
    $data = array(
      'nama_hari' => $this->input->post('data_nama'),
      'kode_matkul' => $this->input->post('data_kode'),
      'kelas' => $this->input->post('kelas'),
      'ruangan_id' => $this->input->post('ruangan'),
      'jurusan_id' => $this->input->post('jurusan'),
      'nik_id' => $this->input->post('data_nik'),
      'jam_mulai' => $this->input->post('data_jamm'),
      'jam_selesai' => $this->input->post('data_jams')
    );
    $this->db->where('id_jadwal', $kode);
    $this->db->update('jadwal', $data);
    redirect('admin/jadwal_control');
  }

  function delete(){
    $kode = $this->input->post('data_id');
    $this->db->where('id_jadwal', $kode);
    $this->db->delete('jadwal');
    redirect('admin/jadwal_control');
  }

}
