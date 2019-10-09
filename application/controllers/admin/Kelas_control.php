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
    $kodekelas = $this->input->post('data_id');
    $jurusan = $this->input->post('jurusan');
    $sql = $this->db->query("select kelas_id from kelas where kelas_id='$kodekelas'");
    $sql2 = $this->db->query("select kelas_id, jurusan_id from kelas where kelas_id='$kodekelas' AND jurusan_id='$jurusan'");
    $cek_kelas = $sql->num_rows();
    $cek_kelas2 = $sql2->num_rows();
    if ($cek_kelas > 0){
        $this->session->set_flashdata('message','Maaf data sudah ada');
        redirect('admin/kelas_control');
    } elseif ($cek_kelas2 > 0) {
      $this->session->set_flashdata('message','Maaf data sudah ada');
      redirect('admin/kelas_control');
    } else {
      $data = array(
        'kelas_id' => $this->input->post('data_id'),
        'jurusan_id' => $this->input->post('jurusan'),
        'kelas_nama' => $this->input->post('data_nama')
      );
      $this->session->set_flashdata('message','Data berhasil disimpan');
        $this->db->insert('kelas', $data);
        redirect('admin/kelas_control');
  }
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
