<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matkul_mahasiswa_model extends CI_Model{

  function get_matkul(){ //ambil data nik dari tabel user_mahasiswa
    $hsl = $this->db->get('mata_kuliah');
    return $hsl;
  }

  function get_jurusan(){ //ambil data nik dari tabel user_mahasiswa
    $hsl = $this->db->get('jurusan');
    return $hsl;
  }

  function get_all_matkul(){ //ambil data mahasiswa dari tabel dari tabel user_mahasiswa
    $jurusan =  $this->session->userdata('jurusan_id');
    $semester =  $this->session->userdata('semester');
    $this->datatables->select('id_matkul, nama_matkul, jenis_perkuliahan, sks, semester, id_jurusan, nama_jurusan');
    $this->datatables->from('mata_kuliah');
    $this->datatables->join('jurusan','mata_kuliah.jurusan=jurusan.id_jurusan');
    $this->datatables->where('jurusan', $jurusan);
    $this->datatables->where('semester', $semester);
    $this->datatables->add_column('view','<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-id_matkul="$1" data-nama_matkul="$2" data-jenis_perkuliahan="$3" data-sks="$4" data-semester="$5", data-jurusan="$6">Edit</a> <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-id_matkul="$1">Hapus</a>','id_matkul, nama_matkul, jenis_perkuliahan, sks, semester, id_jurusan, nama_jurusan');
    return $this->datatables->generate();
  }

}
