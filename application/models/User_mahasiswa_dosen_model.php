<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_mahasiswa_dosen_model extends CI_Model{

  function get_nim(){ //ambil data nim dari tabel user_mahasiswa
    $hsl = $this->db->get('kelas');
    return $hsl;
  }

  function get_jurusan(){
        $hsl2 = $this->db->get('jurusan');
            return $hsl2;
  }

  function get_all_mahasiswa(){ //ambil data mahasiswa dari tabel dari tabel user_mahasiswa
    $this->datatables->select('nim, nama, jenis_kelamin, alamat, email, kelas_id, kelas_nama, id_jurusan, nama_jurusan');
    $this->datatables->from('user_mahasiswa');
    $this->datatables->join('kelas','user_mahasiswa.user_kelas_id=kelas_id');
    $this->datatables->join('jurusan','user_mahasiswa.jurusan_id=id_jurusan');
    return $this->datatables->generate();
  }

}
