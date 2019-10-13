<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen_control extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('logged_in') !== TRUE) {
      redirect('login_mahasiswa_control');
    }
    $this->load->library('datatables'); //load library ignited-datatable
    $this->load->model('absen_mahasiswa_model'); // load model absen_mahasiswa_model
  }

  function index()
  {
    $x['user_mahasiswa'] = $this->absen_mahasiswa_model->get_mahasiswa();
    $x['kelas'] = $this->absen_mahasiswa_model->get_kelas();
    $x['jadwal'] = $this->absen_mahasiswa_model->get_jadwal();
    $x['absen'] = $this->absen_mahasiswa_model->get_absen();
    $this->load->view('mahasiswa/konten/v_absen_mahasiswa', $x);

  }

  function get_absen_json(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->absen_mahasiswa_model->get_all_absen();
  }

  function get_absen_jsonn(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->absen_mahasiswa_model->get_all_absenn();
  }

  function simpan(){
    $tanggal_sekarang = Date('Y-m-d');
    $mulai_kuliah = $this->input->post('data_mulai');
    $sql2 = $this->db->query("select tanggal2, mulai_kuliah from absen where tanggal2='$tanggal_sekarang' and mulai_kuliah='$mulai_kuliah'");
    $cek_absen = $sql2->num_rows();
    if ($cek_absen > 0) {
      $this->session->set_flashdata('message','Anda sudah presensi di perkuliahan sekarang');
      redirect('mahasiswa/absen_control');
    } else{
    $data = array(
      'nik_id_id' => $this->input->post('data_nik'),
      'nim_id' => $this->session->userdata('nim'),
      'absen_kelas_id' => $this->session->userdata('user_kelas_id'),
      'hadir' => $this->input->post('data_hadir'),
      'alpa' => $this->input->post('data_alpa'),
      'izin' => $this->input->post('data_izin'),
      'ket_telat' => $this->input->post('data_telat'),
      'keterangan' => $this->input->post('data_keterangan'),
      'tanggal2' => Date('Y-m-d'),
      'absen_konfirmasi' => 1,
      'absen_kode_matkul' => $this->input->post('data_matkul'),
      'mulai_kuliah' => $this->input->post('data_mulai')

    );
    $this->db->insert('absen', $data);
    // $kode = $this->input->post('data_nim');
    // $data2 = array('konfirmasi' => 2);
    // $this->db->where('nim', $kode);
    // $this->db->update('user_mahasiswa', $data2);
    redirect('mahasiswa/absen_control');
  }
  }

  function simpan2(){
    $kode = $this->input->post('data_id');
    $data = array(
      'hadir' => $this->input->post('data_hadir2'),
      'alpa' => $this->input->post('data_alpa2'),
      'izin' => $this->input->post('data_izin2'),
      'keterangan' => $this->input->post('data_keterangan')
    );
    $this->db->where('id_absen', $kode);
    $this->db->update('absen', $data);
    redirect('mahasiswa/absen_control');
  }

  function simpan_otomatis(){
    $data2 = array('konfirmasi' => 1);
    $this->db->update('user_mahasiswa', $data2);
    redirect('mahasiswa/absen_control');
  }

}
