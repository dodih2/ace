<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan_model extends CI_Model{

  function get_jurusan(){ //ambil data nik dari tabel user_mahasiswa
    $hsl = $this->db->get('jurusan');
    return $hsl;
  }

  function get_all_ruangan(){ //ambil data mahasiswa dari tabel dari tabel user_mahasiswa
    $this->datatables->select('id_ruangan, nama_ruangan, id_jurusan, nama_jurusan');
    $this->datatables->from('ruangan');
    $this->datatables->join('jurusan','jurusan_id=id_jurusan');
    $this->datatables->add_column('view','<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-id_ruangan="$1" data-jurusan="$3" data-nama_ruangan="$2">Edit</a> <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-id="$1">Hapus</a>','id_ruangan, nama_ruangan, id_jurusan, nama_jurusan');
    return $this->datatables->generate();
  }

}
