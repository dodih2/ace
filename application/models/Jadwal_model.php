<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_model extends CI_Model{

  function get_jurusan(){ //ambil data nik dari tabel user_mahasiswa
    $hsl = $this->db->get('jurusan');
    return $hsl;
  }

  function get_ruangan(){ //ambil data nik dari tabel user_mahasiswa
    $hsl2 = $this->db->get('ruangan');
    return $hsl2;
  }

  function get_kelas(){ //ambil data nik dari tabel user_mahasiswa
    $hsl3 = $this->db->get('kelas');
    return $hsl3;
  }
  function get_all_jadwal(){ //ambil data mahasiswa dari tabel dari tabel user_mahasiswa
    $this->datatables->select('id_jadwal, nama_hari, kode_matkul, kelas_id, id_ruangan, id_jurusan, nik, jam_mulai, jam_selesai, kelas_nama, nama_ruangan, nama_jurusan');
    $this->datatables->from('jadwal');
    $this->datatables->join('kelas', 'jadwal.kelas=kelas_id');
    $this->datatables->join('jurusan','jadwal.jurusan_id=id_jurusan');
    $this->datatables->join('ruangan','jadwal.ruangan_id=id_ruangan');
    $this->datatables->add_column('view','<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-id_jadwal="$1" data-nama_hari="$2" data-kode_matkul="$3" data-kelas="$4" data-ruangan="$5" data-jurusan="$6" data-semester="$7" data-nik="$8" data-jam_mulai="$9" data-jam_selesai="$$10">Edit</a> <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-id_jadwal="$1">Hapus</a>','id_jadwal, nama_hari, kode_matkul, kelas_id, id_ruangan, id_jurusan, nik, jam_mulai, jam_selesai, kelas_nama, nama_ruangan, nama_jurusan');
    return $this->datatables->generate();
  }

}
