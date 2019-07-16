<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_model extends CI_Model{

  function get_jurusan(){ //ambil data nik dari tabel user_mahasiswa
    $hsl = $this->db->get('jurusan');
    return $hsl;
  }

  function get_all_kelas(){ //ambil data mahasiswa dari tabel dari tabel user_mahasiswa
    $this->datatables->select('kelas_id, kelas_nama, jurusan_id, id_jurusan, nama_jurusan');
    $this->datatables->from('kelas');
    $this->datatables->join('jurusan','kelas.jurusan_id=jurusan.id_jurusan');
    $this->datatables->add_column('view','<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-kelas_id="$1" data-jurusan="$3" data-kelas_nama="$2">Edit</a> <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-kelas_id="$1">Hapus</a>','kelas_id, kelas_nama, id_jurusan, nama_jurusan');
    return $this->datatables->generate();
  }

}
