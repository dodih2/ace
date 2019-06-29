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
    $x['jadwal'] = $this->jadwal_model->get_jadwal();
    $this->load->view('admin/konten/test', $x);
  }

  function get_jadwal_json(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->jadwal_model->get_all_jadwal();
  }

  function simpan(){
    $data = array(
      'id_hari' => $this->input->post('data_id'),
      'nama_hari' => $this->input->post('data_nama'),
      'kode_matkul' => $this->input->post('data_kode'),
      'kelas' => $this->input->post('data_kelas'),
      'semester' => $this->input->post('data_semester'),
      'nik' => $this->input->post('data_nik'),
      'jam_mulai' => $this->input->post('data_jamm'),
      'jam_selesai' => $this->input->post('data_jams'),
      'jam_istirahat' => $this->input->post('data_jami'),
      'id_ruangan' => $this->input->post('data_ruang'),
      'id_jurusan' => $this->input->post('data_jurusan')
    );
    $this->db->insert('jadwal', $data);
    redirect('admin/jadwal_control');
  }

  function update(){
    $kode = $this->input->post('data_id');
    $data = array(
      'nama_hari' => $this->input->post('data_nama'),
      'kode_matkul' => $this->input->post('data_kode'),
      'kelas' => $this->input->post('data_kelas'),
      'semester' => $this->input->post('data_semester'),
      'nik' => $this->input->post('data_nik'),
      'jam_mulai' => $this->input->post('data_jamm'),
      'jam_selesai' => $this->input->post('data_jams'),
      'jam_istirahat' => $this->input->post('data_jami'),
      'id_ruangan' => $this->input->post('data_ruang'),
      'id_jurusan' => $this->input->post('data_jurusan')
    );
    $this->db->where('id_hari', $kode);
    $this->db->update('jadwal', $data);
    redirect('admin/jadwal_control');
  }

  function delete(){
    $kode = $this->input->post('data_id');
    $this->db->where('id_hari', $kode);
    $this->db->delete('jadwal');
    redirect('admin/jadwal_control');
  }

}
