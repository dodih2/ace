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
    $jurus = $this->session->userdata('dosen_jurusan');
    $this->datatables->select('nim, nama, jenis_kelamin, user_kelas_id, alamat, jurusan_id, email, kelas_id, kelas_nama, id_jurusan, nama_jurusan');
    $this->datatables->from('user_mahasiswa');
    $this->datatables->join('kelas','user_mahasiswa.user_kelas_id=kelas_id');
    $this->datatables->join('jurusan','user_mahasiswa.jurusan_id=id_jurusan');
    $this->datatables->add_column('view','<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-nim="$1" data-nama="$2" data-jk="$3" data-kelas="$4" data-alamat="$5" data-jurusan="$6" data-email="$7">Edit</a> <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-nim="$1">Hapus</a>','nim, nama, jenis_kelamin, user_kelas_id, alamat,jurusan_id,email, kelas_id, kelas_nama, id_jurusan, nama_jurusan');
    return $this->datatables->generate();
  }

}
