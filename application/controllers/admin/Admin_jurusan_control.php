<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_jurusan_control extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('datatables'); //load library ignited-datatable
    $this->load->model('admin_jurusan_model'); // load model admin_jurusan_model
  }

  function index()
  {
    $x['jurusan'] = $this->admin_jurusan_model->get_jurusan();
    $this->load->view('admin/konten/v_jurusan', $x);
  }

  function get_jurusan_json(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->admin_jurusan_model->get_all_jurusan();
  }

  function simpan(){
    $data = array(
      'id_jurusan' => $this->input->post('data_id'),
      'nama_jurusan' => $this->input->post('data_nama')
    );
    $this->db->insert('jurusan', $data);
    redirect('admin/admin_jurusan_control');
  }

  function update(){
    $kode = $this->input->post('data_id');
    $data = array(
      'nama_jurusan' => $this->input->post('data_nama')
    );
    $this->db->where('id_jurusan', $kode);
    $this->db->update('jurusan', $data);
    redirect('admin/admin_jurusan_control');
  }

  function delete(){
    $kode = $this->input->post('data_id');
    $this->db->where('id_jurusan', $kode);
    $this->db->delete('jurusan');
    redirect('admin/admin_jurusan_control');
  }

}
