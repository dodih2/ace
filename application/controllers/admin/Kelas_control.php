<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_control extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('datatables'); //load library ignited-datatable
    $this->load->model('kelas_model'); // load model kelas_model
  }

  function index()
  {
    $x['jurusan'] = $this->kelas_model->get_jurusan();
    $this->load->view('admin/konten/v_kelas', $x);
  }

  function get_kelas_json(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->kelas_model->get_all_kelas();
  }

  function simpan(){
    $data = array(
      'kelas_id' => $this->input->post('data_id'),
      'jurusan_id' => $this->input->post('jurusan'),
      'kelas_nama' => $this->input->post('data_nama')
    );
    $this->db->insert('kelas', $data);
    redirect('admin/kelas_control');
  }

  function update(){
    $kode = $this->input->post('data_id');
    $data = array(
      'jurusan_id' => $this->input->post('jurusan'),
      'kelas_nama' => $this->input->post('data_nama')
    );
    $this->db->where('kelas_id', $kode);
    $this->db->update('kelas', $data);
    redirect('admin/kelas_control');
  }

  function delete(){
    $kode = $this->input->post('data_id');
    $this->db->where('kelas_id', $kode);
    $this->db->delete('kelas');
    redirect('admin/kelas_control');
  }

}
