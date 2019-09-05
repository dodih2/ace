<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_dosen_model extends CI_Model{

  function get_jurusan(){ //ambil data nik dari tabel user_mahasiswa
    $hsl = $this->db->get('jurusan');
    return $hsl;
  }

  function get_kelamin(){ //ambil data nik dari tabel user_mahasiswa
    $hsl = $this->db->get('user_dosen');
    return $hsl;
  }

  function get_all_dosen(){ //ambil data mahasiswa dari tabel dari tabel user_mahasiswa
    $this->datatables->select('nik, nama, j_k, level, alamat, email, password, id_jurusan, nama_jurusan,waktu_input');
    $this->datatables->from('user_dosen');
    $this->datatables->join('jurusan','user_dosen.dosen_jurusan=id_jurusan');
    $this->datatables->where('level','2');
    $this->datatables->add_column('view','<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-nik="$1" data-nama="$2" data-jk="$3" data-level="$4" data-alamat="$5" data-jurusan="$7" data-email="$6" data-password="$8">Edit</a> <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-nik="$1">Hapus</a>','nik, nama, j_k, level, alamat, email, id_jurusan, password, nama_jurusan');
    return $this->datatables->generate();
  }

}
