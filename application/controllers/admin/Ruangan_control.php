<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan_control extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('datatables'); //load library ignited-datatable
    $this->load->model('ruangan_model'); // load model ruangan_model
  }

  function index()
  {
    $x['jurusan'] = $this->ruangan_model->get_jurusan();
    $this->load->view('admin/konten/v_ruangan', $x);
  }

  function get_ruangan_json(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->ruangan_model->get_all_ruangan();
  }

  function simpan(){
    $data = array(
      'id_ruangan' => $this->input->post('data_id'),
      'jurusan_id' => $this->input->post('jurusan'),
      'nama_ruangan' => $this->input->post('data_nama')
    );
    $this->db->insert('ruangan', $data);
    redirect('admin/ruangan_control');
  }

  function update(){
    $kode = $this->input->post('data_id');
    $data = array(
      'jurusan_id' => $this->input->post('jurusan'),
      'nama_ruangan' => $this->input->post('data_nama')
    );
    $this->db->where('id_ruangan', $kode);
    $this->db->update('ruangan', $data);
    redirect('admin/ruangan_control');
  }

  function delete(){
    $kode = $this->input->post('data_id');
    $this->db->where('id_ruangan', $kode);
    $this->db->delete('ruangan');
    redirect('admin/ruangan_control');
  }

}
