<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_mahasiswa_model extends CI_Model{

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
        // $tgl = Date('D',strtotime('+2 days')); menambahkan waktu 2 hari
    $tgl = date('D');
    $id = $this->session->userdata('user_kelas_id');
    $jurus = $this->session->userdata('jurusan_id');
    $this->datatables->select('id_jadwal, nama_hari, kode_matkul, nik_id, jam_mulai, jam_selesai, kelas, kelas_nama, id_ruangan, nama_ruangan, id_jurusan, nama_jurusan, id_matkul, nama_matkul');
    $this->datatables->from('jadwal');
    $this->datatables->join('kelas', 'jadwal.kelas=kelas_id');
    $this->datatables->join('jurusan','jadwal.jurusan_id=id_jurusan');
    $this->datatables->join('ruangan','jadwal.ruangan_id=id_ruangan');
    $this->datatables->join('mata_kuliah','jadwal.kode_matkul=id_matkul');
    // $this->datatables->where("(nik = '$id' AND id_jurusan='$jurus' AND NOW() BETWEEN jam_mulai AND jam_selesai)"); menurut jam sekarang
    $this->datatables->where('nama_hari', $tgl);
    return $this->datatables->generate();
  }



}
