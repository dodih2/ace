<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen_mahasiswa_model extends CI_Model{

  function get_mahasiswa(){ //ambil data nik dari tabel user_mahasiswa
    $hsl = $this->db->get('user_mahasiswa');
    return $hsl;
  }

  function get_kelas(){ //ambil data nik dari tabel user_mahasiswa
    $hsl = $this->db->get('kelas');
    return $hsl;
  }

  function get_jadwal(){ //ambil data nik dari tabel user_mahasiswa
    $kelas = $this->session->userdata('user_kelas_id');
    $hari = date('D');
    $this->db->select('nama_hari,nik_id,jam_mulai,jam_selesai, kelas, id_matkul, nama_matkul');
    $this->db->from('jadwal');
    $this->db->join('mata_kuliah','kode_matkul=id_matkul');
    $this->db->where("(nama_hari = '$hari' AND NOW() BETWEEN jam_mulai AND jam_selesai)");
    $this->db->where('kelas', $kelas);
    $hsl = $this->db->get();
    return $hsl;
  }
  // function get_all_absen(){ //ambil data mahasiswa dari tabel dari tabel user_mahasiswa
  //   $hari = Date('D');
  //   $id = $this->session->userdata('nik');
  //   $this->datatables->select('id_absen, hadir, alpa, izin, keterangan, nik_id_id, kelas_id, nim, id_jadwal, nama, kelas_nama, nama_hari, jam_mulai, jam_selesai');
  //   $this->datatables->from('absen');
  //   $this->datatables->join('user_mahasiswa','absen.nim_id=user_mahasiswa.nim');
  //   $this->datatables->join('kelas', 'absen.kelas=kelas_id');
  //   $this->datatables->join('jadwal', 'absen.jadwal_id=id_jadwal');
  //   // $this->datatables->where('konfirmasi', 2);
  //   $this->datatables->where('nik_id_id',$id);
  //   $this->datatables->like('nama_hari', $hari);
  //   $this->datatables->add_column('view','<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-id_absen="$1" data-hadir="$2" data-alpa="$3" data-izin="$4" data-keterangan="$5" data-nik="$6" data-kelas="$7" data-nim="$8" data-jadwal="$9">Edit</a> <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-id_absen="$1">Hapus</a>','id_absen, hadir, alpa, izin, keterangan, nik_id_id, kelas_id, nim, id_jadwal, nama, kelas_nama, nama_hari, jam_mulai, jam_selesai');
  //   return $this->datatables->generate();
  // }

  function get_all_absen(){
    $hari = date('D');
    // $id = $this->session->userdata('nik');
    $this->datatables->select('nim, nama, kelas, kelas_id, nik_id, nama_hari, kelas_nama, kode_matkul');
    $this->datatables->from('user_mahasiswa');
    $this->datatables->join('jadwal', 'user_mahasiswa.user_kelas_id=jadwal.kelas');
    $this->datatables->join('kelas', 'user_mahasiswa.user_kelas_id=kelas.kelas_id');
    // $this->datatables->where('nik_id', $id);
    $this->datatables->where("(nama_hari = '$hari' AND NOW() BETWEEN jam_mulai AND jam_selesai)");
    $this->datatables->add_column('view','<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-nim="$1" data-nama="$2" data-kelas="$3" data-matkul="$9">Absen</a>','nim, nama, kelas, kelas_id, nik_id, nama_hari, kelas_nama, konfirmasi,kode_matkul');
    return $this->datatables->generate();
  }

  function get_all_absenn(){ //ambil data mahasiswa dari tabel dari tabel user_mahasiswa
    $nim = $this->session->userdata('nim');
    $kelas = $this->session->userdata('user_kelas_id');
    $matkul = $this->input->post('data_matkul');
    $hari = Date('D');
    $tanggal = Date('Y-m-d');
    $this->datatables->select('id_absen, nik_id_id, hadir, alpa, izin, ket_telat, keterangan, tanggal, , tanggal2, kelas, jam_mulai, jam_selesai, nama_hari, kelas_id, kelas_nama, nim, nama, absen_konfirmasi, kode_matkul');
    $this->datatables->from('absen');
    $this->datatables->join('jadwal', 'absen.absen_kelas_id=jadwal.kelas');
    $this->datatables->join('kelas','absen.absen_kelas_id=kelas.kelas_id');
    $this->datatables->join('user_mahasiswa','absen.nim_id=user_mahasiswa.nim');
    $this->datatables->where("(nama_hari = '$hari' AND NOW() BETWEEN jam_mulai AND jam_selesai)");
    $this->datatables->where('nim_id', $nim);
    return $this->datatables->generate();
  }

}
