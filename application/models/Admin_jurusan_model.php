<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_jurusan_model extends CI_Model{

  function get_jurusan(){ //ambil data nik dari tabel user_mahasiswa
    $hsl = $this->db->get('jurusan');
    return $hsl;
  }

  function get_all_jurusan(){ //ambil data mahasiswa dari tabel dari tabel user_mahasiswa
    $this->datatables->select('id_jurusan, nama_jurusan');
    $this->datatables->from('jurusan');
    $this->datatables->add_column('view','<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-id_jurusan="$1" data-nama_jurusan="$2">Edit</a> <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-id_jurusan="$1">Hapus</a>','id_jurusan, nama_jurusan');
    return $this->datatables->generate();
  }

}
