<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen_dosen_model extends CI_Model{

  function get_absen(){ //ambil data nik dari tabel user_mahasiswa
    $hsl = $this->db->get('absen');
    return $hsl;
  }

  function get_all_absen(){ //ambil data mahasiswa dari tabel dari tabel user_mahasiswa
    $this->datatables->select('id_absen,hadir, alpa, izin, ket_telat, keterangan, waktu, nik, nim, kelas_id, jurusan_id, ruangan_id, kode_matkul, tanggal');
    $this->datatables->from('absen');
    $this->datatables->add_column('view','<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-id_absen="$1" data-hadir="$2" data-alpa="$3" data-izin="$4" data-ket_telat="$5" data-keterangan="$6" data-waktu="$7" data-nik="$8" data-nim="$9" data-kelas_id="$10" data-jurusan_id="$11" data-ruangan_id="$12" data-kode_matkul="$13" data-tanggal="$14" >Edit</a> <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-id_absen="$1">Hapus</a>','id_absen,hadir, alpa, izin, ket_telat, keterangan, waktu, nik, nim, kelas_id, jurusan_id, ruangan_id, kode_matkul, tanggal');
    return $this->datatables->generate();
  }

}
