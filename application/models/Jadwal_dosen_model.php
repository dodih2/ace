<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_dosen_model extends CI_Model{

  function get_jadwal(){ //ambil data nik dari tabel user_mahasiswa
    $hsl = $this->db->get('jadwal');
    return $hsl;
  }

  function get_all_jadwal(){ //ambil data mahasiswa dari tabel dari tabel user_mahasiswa
    $id = $this->session->userdata('nik');
    $jurus = $this->session->userdata('dosen_jurusan');
    $this->datatables->select('id_hari, nama_hari, kode_matkul, kelas, semester, nik, jam_mulai, jam_selesai, jam_istirahat, id_ruangan, id_jurusan');
    $this->datatables->from('jadwal');
    $this->datatables->where("(nik = '$id' AND id_jurusan='$jurus')");
    $this->datatables->add_column('view','<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-id_hari="$1" data-nama_hari="$2" data-kode_matkul="$3" data-kelas="$4" data-semester="$5" data-nik="$6" data-jamm="$7" data-jams="$8" data-jami="$9" data-ruang="$10" data-jurusan="$11">Edit</a> <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-id_hari="$1">Hapus</a>','id_hari, nama_hari, kode_matkul, kelas, semester, nik, jam_mulai, jam_selesai, jam_istirahat, ruangan, jurusan');
    return $this->datatables->generate();
  }

}
