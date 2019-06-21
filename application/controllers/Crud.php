<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('datatables'); //load library ignited-datatable
    $this->load->model('crud_model'); // load model crud_model
  }

  function index()
  {
    $x['kelas'] = $this->crud_model->get_kategori();
    $this->load->view('crud_view', $x);
  }

  function get_produck_json(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->crud_model->get_all_produk();
  }

  function simpan(){
    $data = array(
      'nim' => $this->input->post('nim_data'),
      'nama' => $this->input->post('nama_data'),
      'email'=> $this->input->post('email'),
      'user_kelas_id' => $this->input->post('kelas')
    );
    $this->db->insert('user_mahasiswa', $data);
    redirect('crud');
  }

  function update(){
    $kode = $this->input->post('nim_data');
    $data = array(
      'nama' => $this->input->post('nama_data'),
      'email'=> $this->input->post('email'),
      'alamat' => $this->input->post('alamat_data'),
      'user_kelas_id' => $this->input->post('kelas')
    );
    $this->db->where('nim', $kode);
    $this->db->update('user_mahasiswa', $data);
    redirect('crud');
  }

  function delete(){
    $kode = $this->input->post('nim_data');
    $this->db->where('nim', $kode);
    $this->db->delete('user_mahasiswa');
    redirect('crud');
  }

}
