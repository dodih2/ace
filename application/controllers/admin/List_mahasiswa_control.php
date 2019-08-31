<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_mahasiswa_control extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('datatables'); //load library ignited-datatable
    $this->load->model('user_mahasiswa_model'); // load model user_mahasiswa_model
  }

  function index()
  {
    $x['kelas'] = $this->user_mahasiswa_model->get_nim();
    $x['jurusan'] = $this->user_mahasiswa_model->get_jurusan();
    $this->load->view('admin/konten/v_mahasiswa_managemen', $x);
  }

  function index1()
  {
    $x['kelas'] = $this->user_mahasiswa_model->get_nim();
    $x['jurusan'] = $this->user_mahasiswa_model->get_jurusan();
    $this->load->view('admin/konten/v_mahasiswa_managemen_ti', $x);
  }

  function index2()
  {
    $x['kelas'] = $this->user_mahasiswa_model->get_nim();
    $x['jurusan'] = $this->user_mahasiswa_model->get_jurusan();
    $this->load->view('admin/konten/v_mahasiswa_managemen_tm', $x);
  }

  function index3()
  {
    $x['kelas'] = $this->user_mahasiswa_model->get_nim();
    $x['jurusan'] = $this->user_mahasiswa_model->get_jurusan();
    $this->load->view('admin/konten/v_mahasiswa_managemen_tp', $x);
  }

  function index4()
  {
    $x['kelas'] = $this->user_mahasiswa_model->get_nim();
    $x['jurusan'] = $this->user_mahasiswa_model->get_jurusan();
    $this->load->view('admin/konten/v_mahasiswa_managemen_rpl', $x);
  }

  function index5()
  {
    $x['kelas'] = $this->user_mahasiswa_model->get_nim();
    $x['jurusan'] = $this->user_mahasiswa_model->get_jurusan();
    $this->load->view('admin/konten/v_mahasiswa_managemen_manufaktur', $x);
  }

  function get_mahasiswa_json(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->user_mahasiswa_model->get_all_mahasiswa();
  }

  function get_mahasiswa_ti_json(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->user_mahasiswa_model->get_all_mahasiswa_ti();
  }

  function get_mahasiswa_tm_json(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->user_mahasiswa_model->get_all_mahasiswa_tm();
  }

  function get_mahasiswa_tp_json(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->user_mahasiswa_model->get_all_mahasiswa_tp();
  }

  function get_mahasiswa_rpl_json(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->user_mahasiswa_model->get_all_mahasiswa_rpl();
  }

  function get_mahasiswa_manufaktur_json(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->user_mahasiswa_model->get_all_mahasiswa_manufaktur();
  }

  function simpan(){
    $data = array(
      'nim' => $this->input->post('data_nim'),
      'nama' => $this->input->post('data_nama'),
      'jenis_kelamin'=> $this->input->post('data_jk'),
      'user_kelas_id' => $this->input->post('kelas'),
      'semester' => $this->input->post('data_semester'),
      'alamat' => $this->input->post('data_alamat'),
      'jurusan_id' => $this->input->post('jurusan'),
      'email' => $this->input->post('data_email')
    );
    $this->db->insert('user_mahasiswa', $data);
    // $data2 = array(
    //   'nim' => $this->input->post('data_nim'),
    //   'kelas_id' => $this->input->post('kelas'),
    //   'jurusan_id' => $this->input->post('jurusan'),
    //   'konfirmasi' => 2
    // );
    // $this->db->insert('absen', $data2);
    redirect('admin/list_mahasiswa_control');
  }

  function simpanti(){
    $data = array(
      'nim' => $this->input->post('data_nim'),
      'nama' => $this->input->post('data_nama'),
      'jenis_kelamin'=> $this->input->post('data_jk'),
      'user_kelas_id' => $this->input->post('kelas'),
      'semester' => $this->input->post('data_semester'),
      'alamat' => $this->input->post('data_alamat'),
      'jurusan_id' => 123,
      'email' => $this->input->post('data_email')
    );
    $this->db->insert('user_mahasiswa', $data);
    redirect('admin/list_mahasiswa_control/index1');
  }

  function simpantm(){
    $data = array(
      'nim' => $this->input->post('data_nim'),
      'nama' => $this->input->post('data_nama'),
      'jenis_kelamin'=> $this->input->post('data_jk'),
      'user_kelas_id' => $this->input->post('kelas'),
      'semester' => $this->input->post('data_semester'),
      'alamat' => $this->input->post('data_alamat'),
      'jurusan_id' => 124,
      'email' => $this->input->post('data_email')
    );
    $this->db->insert('user_mahasiswa', $data);
    redirect('admin/list_mahasiswa_control/index2');
  }

  function simpantp(){
    $data = array(
      'nim' => $this->input->post('data_nim'),
      'nama' => $this->input->post('data_nama'),
      'jenis_kelamin'=> $this->input->post('data_jk'),
      'user_kelas_id' => $this->input->post('kelas'),
      'semester' => $this->input->post('data_semester'),
      'alamat' => $this->input->post('data_alamat'),
      'jurusan_id' => 125,
      'email' => $this->input->post('data_email')
    );
    $this->db->insert('user_mahasiswa', $data);
    redirect('admin/list_mahasiswa_control/index3');
  }

  function simpanrpl(){
    $data = array(
      'nim' => $this->input->post('data_nim'),
      'nama' => $this->input->post('data_nama'),
      'jenis_kelamin'=> $this->input->post('data_jk'),
      'user_kelas_id' => $this->input->post('kelas'),
      'semester' => $this->input->post('data_semester'),
      'alamat' => $this->input->post('data_alamat'),
      'jurusan_id' => 126,
      'email' => $this->input->post('data_email')
    );
    $this->db->insert('user_mahasiswa', $data);
    redirect('admin/list_mahasiswa_control/index4');
  }

  function simpanmanufaktur(){
    $data = array(
      'nim' => $this->input->post('data_nim'),
      'nama' => $this->input->post('data_nama'),
      'jenis_kelamin'=> $this->input->post('data_jk'),
      'user_kelas_id' => $this->input->post('kelas'),
      'semester' => $this->input->post('data_semester'),
      'alamat' => $this->input->post('data_alamat'),
      'jurusan_id' => 127,
      'email' => $this->input->post('data_email')
    );
    $this->db->insert('user_mahasiswa', $data);
    redirect('admin/list_mahasiswa_control/index5');
  }



  function update(){
    $kode = $this->input->post('data_nim');
    $data = array(
      'nama' => $this->input->post('data_nama'),
      'jenis_kelamin'=> $this->input->post('data_jk'),
      'user_kelas_id' => $this->input->post('kelas'),
      'semester' => $this->input->post('data_semester'),
      'alamat' => $this->input->post('data_alamat'),
      'jurusan_id' => $this->input->post('jurusan'),
      'email' => $this->input->post('data_email')
    );
    $this->db->where('nim', $kode);
    $this->db->update('user_mahasiswa', $data);
    redirect('admin/list_mahasiswa_control');
  }

  function updateti(){
    $kode = $this->input->post('data_nim');
    $data = array(
      'nama' => $this->input->post('data_nama'),
      'jenis_kelamin'=> $this->input->post('data_jk'),
      'user_kelas_id' => $this->input->post('kelas'),
      'semester' => $this->input->post('data_semester'),
      'alamat' => $this->input->post('data_alamat'),
      'jurusan_id' => $this->input->post('jurusan'),
      'email' => $this->input->post('data_email')
    );
    $this->db->where('nim', $kode);
    $this->db->update('user_mahasiswa', $data);
    redirect('admin/list_mahasiswa_control/index1');
  }

  function updatetm(){
    $kode = $this->input->post('data_nim');
    $data = array(
      'nama' => $this->input->post('data_nama'),
      'jenis_kelamin'=> $this->input->post('data_jk'),
      'user_kelas_id' => $this->input->post('kelas'),
      'semester' => $this->input->post('data_semester'),
      'alamat' => $this->input->post('data_alamat'),
      'jurusan_id' => $this->input->post('jurusan'),
      'email' => $this->input->post('data_email')
    );
    $this->db->where('nim', $kode);
    $this->db->update('user_mahasiswa', $data);
    redirect('admin/list_mahasiswa_control/index2');
  }

  function updatetp(){
    $kode = $this->input->post('data_nim');
    $data = array(
      'nama' => $this->input->post('data_nama'),
      'jenis_kelamin'=> $this->input->post('data_jk'),
      'user_kelas_id' => $this->input->post('kelas'),
      'semester' => $this->input->post('data_semester'),
      'alamat' => $this->input->post('data_alamat'),
      'jurusan_id' => $this->input->post('jurusan'),
      'email' => $this->input->post('data_email')
    );
    $this->db->where('nim', $kode);
    $this->db->update('user_mahasiswa', $data);
    redirect('admin/list_mahasiswa_control/index3');
  }

  function updaterpl(){
    $kode = $this->input->post('data_nim');
    $data = array(
      'nama' => $this->input->post('data_nama'),
      'jenis_kelamin'=> $this->input->post('data_jk'),
      'user_kelas_id' => $this->input->post('kelas'),
      'semester' => $this->input->post('data_semester'),
      'alamat' => $this->input->post('data_alamat'),
      'jurusan_id' => $this->input->post('jurusan'),
      'email' => $this->input->post('data_email')
    );
    $this->db->where('nim', $kode);
    $this->db->update('user_mahasiswa', $data);
    redirect('admin/list_mahasiswa_control/index4');
  }

  function updatemanufaktur(){
    $kode = $this->input->post('data_nim');
    $data = array(
      'nama' => $this->input->post('data_nama'),
      'jenis_kelamin'=> $this->input->post('data_jk'),
      'user_kelas_id' => $this->input->post('kelas'),
      'semester' => $this->input->post('data_semester'),
      'alamat' => $this->input->post('data_alamat'),
      'jurusan_id' => $this->input->post('jurusan'),
      'email' => $this->input->post('data_email')
    );
    $this->db->where('nim', $kode);
    $this->db->update('user_mahasiswa', $data);
    redirect('admin/list_mahasiswa_control/index5');
  }

  function delete(){
    $kode = $this->input->post('data_nim');
    $this->db->where('nim', $kode);
    $this->db->delete('user_mahasiswa');
    redirect('admin/list_mahasiswa_control');
  }

  function deleteti(){
    $kode = $this->input->post('data_nim');
    $this->db->where('nim', $kode);
    $this->db->delete('user_mahasiswa');
    redirect('admin/list_mahasiswa_control/index1');
  }

  function deletetm(){
    $kode = $this->input->post('data_nim');
    $this->db->where('nim', $kode);
    $this->db->delete('user_mahasiswa');
    redirect('admin/list_mahasiswa_control/index2');
  }

  function deletetp(){
    $kode = $this->input->post('data_nim');
    $this->db->where('nim', $kode);
    $this->db->delete('user_mahasiswa');
    redirect('admin/list_mahasiswa_control/index3');
  }

  function deleterpl(){
    $kode = $this->input->post('data_nim');
    $this->db->where('nim', $kode);
    $this->db->delete('user_mahasiswa');
    redirect('admin/list_mahasiswa_control/index4');
  }

  function deletemanufaktur(){
    $kode = $this->input->post('data_nim');
    $this->db->where('nim', $kode);
    $this->db->delete('user_mahasiswa');
    redirect('admin/list_mahasiswa_control/index5');
  }

}
