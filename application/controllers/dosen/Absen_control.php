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
    $x['absen'] = $this->absen_dosen_model->get_absen();
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
    $data = array(
      'id_absen' => $this->input->post('data_id'),
      'hadir' => $this->input->post('data_hadir'),
      'nik' => $this->input->post('data_nik')
    );
    $this->db->insert('absen', $data);
    redirect('dosen/absen_control');
  }

  function delete(){
    $kode = $this->input->post('data_id');
    $this->db->where('id_absen', $kode);
    $this->db->delete('absen');
    redirect('dosen/absen_control');
  }

}
