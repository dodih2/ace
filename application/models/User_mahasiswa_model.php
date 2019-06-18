<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_mahasiswa_model extends CI_Model{

  function get_nim(){ //ambil data nim dari tabel user_mahasiswa
    $hsl = $this->db->get('user_mahasiswa');
    return $hsl;
  }

  function get_all_mahasiswa(){ //ambil data mahasiswa dari tabel dari tabel user_mahasiswa
    $this->datatables->select('nim, nama, jenis_kelamin, kelas, alamat, jurusan, email');
    $this->datatables->from('user_mahasiswa');
    $this->datatables->add_column('view','<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-nim="$1" data-nama="$2" data-jk="$3" data-kelas="$4" data-alamat="$5" data-jurusan="$6" data-email="$7">Edit</a> <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-nim="$1">Hapus</a>','nim, nama, jenis_kelamin, kelas, alamat,jurusan,email');
    return $this->datatables->generate();

  }

}
