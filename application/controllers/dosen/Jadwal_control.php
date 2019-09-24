<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_control extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('datatables'); //load library ignited-datatable
    $this->load->model('jadwal_dosen_model'); // load model jadwal_model
  }

  function index()
  {
    $x['kelas'] = $this->jadwal_dosen_model->get_kelas();
    $x['jurusan'] = $this->jadwal_dosen_model->get_jurusan();
    $x['ruangan'] = $this->jadwal_dosen_model->get_ruangan();
    $this->load->view('dosen/konten/v_jadwal', $x);
  }

  function get_jadwal_json(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->jadwal_dosen_model->get_all_jadwal();
  }

  function update(){
  $kode = $this->input->post('data_id');
  $data = array(
    'toleransi' => $this->input->post('toleransi')
  );
  $this->db->where('id_jadwal', $kode);
  $this->db->update('jadwal', $data);
  redirect('dosen/jadwal_control');
}


}
