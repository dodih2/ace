<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_dosen_model extends CI_Model{

  function get_nik(){ //ambil data nik dari tabel user_mahasiswa
    $hsl = $this->db->get('user_dosen');
    return $hsl;
  }

  function get_all_dosen(){ //ambil data mahasiswa dari tabel dari tabel user_mahasiswa
    $this->datatables->select('nik, nama, j_k, level, alamat, dosen_jurusan, email, password');
    $this->datatables->from('user_dosen');
    $this->datatables->where('level','2');
    $this->datatables->add_column('view','<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-nik="$1" data-nama="$2" data-jk="$3" data-level="$4" data-alamat="$5" data-jurusan="$6" data-email="$7" data-password="$8">Edit</a> <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-nik="$1">Hapus</a>','nik, nama, j_k, level, alamat, dosen_jurusan, email');
    return $this->datatables->generate();
  }

}
