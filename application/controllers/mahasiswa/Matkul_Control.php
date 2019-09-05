<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matkul_control extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('datatables'); //load library ignited-datatable
    $this->load->model('matkul_mahasiswa_model'); // load model matkul_mahasiswa_model
  }

  function index()
  {
    $x['mata_kuliah'] = $this->matkul_mahasiswa_model->get_matkul();
    $x['jurusan'] = $this->matkul_mahasiswa_model->get_jurusan();
    $this->load->view('mahasiswa/konten/v_matkul_mahasiswa', $x);
  }

  function get_matkul_json(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->matkul_mahasiswa_model->get_all_matkul();
  }

  function simpan(){
    $data = array(
      'id_matkul' => $this->input->post('data_id'),
      'nama_matkul' => $this->input->post('data_nama'),
      'jenis_perkuliahan'=> $this->input->post('data_jp'),
      'sks' => $this->input->post('data_sks'),
      'semester' => $this->input->post('data_semester'),
      'jurusan' => $this->input->post('data_jurusan')
    );
    $this->db->insert('mata_kuliah', $data);
    redirect('mahasiswa/matkul_control');
  }

  function update(){
    $kode = $this->input->post('data_id');
    $data = array(
      'nama_matkul' => $this->input->post('data_nama'),
      'jenis_perkuliahan'=> $this->input->post('data_jp'),
      'sks' => $this->input->post('data_sks'),
      'semester' => $this->input->post('data_semester'),
      'jurusan' => $this->input->post('data_jurusan')
    );
    $this->db->where('id_matkul', $kode);
    $this->db->update('mata_kuliah', $data);
    redirect('mahasiswa/matkul_control');
  }

  function delete(){
    $kode = $this->input->post('data_id');
    $this->db->where('id_matkul', $kode);
    $this->db->delete('mata_kuliah');
    redirect('mahasiswa/matkul_control');
  }

}
