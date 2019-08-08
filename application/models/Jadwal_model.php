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

  function get_jadwal(){ //ambil data nik dari tabel user_mahasiswa
    $hsl3 = $this->db->get('jadwal');
    return $hsl3;
  }

  function get_matkul(){ //ambil data nik dari tabel user_mahasiswa
    $hsl3 = $this->db->get('mata_kuliah');
    return $hsl3;
  }

  function get_dosen(){ //ambil data nik dari tabel user_mahasiswa
    $hsl3 = $this->db->get('user_dosen');
    return $hsl3;
  }

  function get_all_jadwal(){ //ambil data mahasiswa dari tabel dari tabel user_mahasiswa
    $this->datatables->select('id_jadwal, nama_hari, id_matkul, kelas_id, id_ruangan, id_jurusan, nik, jam_mulai, jam_selesai, nama_matkul, kelas_nama, nama_ruangan, nama_jurusan, nama');
    $this->datatables->from('jadwal');
    $this->datatables->join('mata_kuliah', 'jadwal.kode_matkul=id_matkul');
    $this->datatables->join('kelas', 'jadwal.kelas=kelas_id');
    $this->datatables->join('jurusan','jadwal.jurusan_id=id_jurusan');
    $this->datatables->join('ruangan','jadwal.ruangan_id=id_ruangan');
    $this->datatables->join('user_dosen','jadwal.nik_id=nik');
    $this->datatables->add_column('view','<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-id_jadwal="$1" data-nama_hari="$2" data-matkul="$3" data-kelas="$4" data-ruangan="$5" data-jurusan="$6" data-nik="$7" data-jam_mulai="$8" data-jam_selesai="$9">Edit</a> <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-id_jadwal="$1">Hapus</a>','id_jadwal, nama_hari, id_matkul, kelas_id, id_ruangan, id_jurusan, nik, jam_mulai, jam_selesai, nama_matkul, kelas_nama, nama_ruangan, nama_jurusan, nama');
    return $this->datatables->generate();
  }

}
