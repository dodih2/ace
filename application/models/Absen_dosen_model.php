<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen_dosen_model extends CI_Model{

  function get_mahasiswa(){ //ambil data nik dari tabel user_mahasiswa
    $hsl = $this->db->get('user_mahasiswa');
    return $hsl;
  }

  function get_kelas(){ //ambil data nik dari tabel user_mahasiswa
    $hsl = $this->db->get('kelas');
    return $hsl;
  }

  function get_jadwal(){ //ambil data nik dari tabel user_mahasiswa
    $hsl = $this->db->get('jadwal');
    return $hsl;
  }

  function get_all_absen(){ //ambil data mahasiswa dari tabel dari tabel user_mahasiswa
    $hari = Date('D');
    $id = $this->session->userdata('nik');
    $this->datatables->select('id_absen, hadir, alpa, izin, keterangan, nik_id, kelas_id, nim, id_jadwal, konfirmasi, nama, kelas_nama, nama_hari, jam_mulai, jam_selesai');
    $this->datatables->from('absen');
    $this->datatables->join('user_mahasiswa','absen.nim_id=user_mahasiswa.nim');
    $this->datatables->join('kelas', 'absen.kelas=kelas.kelas_id');
    $this->datatables->join('jadwal', 'absen.jadwal_id=jadwal.id_jadwal');
    // $this->datatables->where('konfirmasi', 2);
    $this->datatables->where("(nik = '$id' AND NOW() BETWEEN jam_mulai AND jam_selesai)");
    $this->datatables->like('nama_hari', $hari);
    $this->datatables->add_column('view','<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-id_absen="$1" data-hadir="$2" data-alpa="$3" data-izin="$4" data-keterangan="$5" data-nik="$6" data-kelas="$7" data-nim="$8" data-jadwal="$9">Edit</a> <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-id_absen="$1">Hapus</a>','id_absen, hadir, alpa, izin, keterangan, nik_id, kelas_id, nim, id_jadwal, konfirmasi, nama, kelas_nama, nama_hari, jam_mulai, jam_selesai');
    return $this->datatables->generate();
  }

}
