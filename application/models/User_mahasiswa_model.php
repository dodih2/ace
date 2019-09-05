<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_mahasiswa_model extends CI_Model{

  function get_nim(){ //ambil data nim dari tabel user_mahasiswa
    $hsl = $this->db->get('kelas');
    return $hsl;
  }

  function get_jurusan(){
        $hsl2 = $this->db->get('jurusan');
            return $hsl2;
  }

  function get_all_mahasiswa(){ //ambil data mahasiswa dari tabel dari tabel user_mahasiswa
    $this->datatables->select('nim, nama, jenis_kelamin, semester, alamat, email, kelas_id, id_jurusan, kelas_nama, nama_jurusan, password');
    $this->datatables->from('user_mahasiswa');
    $this->datatables->join('kelas','user_mahasiswa.user_kelas_id=kelas_id');
    $this->datatables->join('jurusan','user_mahasiswa.jurusan_id=id_jurusan');
    $this->datatables->add_column('view','<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-nim="$1" data-nama="$2" data-jk="$3" data-semester="$4" data-alamat="$5" data-email="$6" data-kelas="$7" data-jurusan="$8">Edit</a> <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-nim="$1">Hapus</a>','nim, nama, jenis_kelamin, semester, alamat, email, kelas_id, id_jurusan, kelas_nama, nama_jurusan');
    return $this->datatables->generate();
  }

  function get_all_mahasiswa_ti(){ //ambil data mahasiswa dari tabel dari tabel user_mahasiswa
    $this->datatables->select('nim, nama, jenis_kelamin, semester, alamat, email, kelas_id, id_jurusan, kelas_nama, nama_jurusan, password');
    $this->datatables->from('user_mahasiswa');
    $this->datatables->join('kelas','user_mahasiswa.user_kelas_id=kelas_id');
    $this->datatables->join('jurusan','user_mahasiswa.jurusan_id=id_jurusan');
    $this->datatables->where('id_jurusan', '123');
    $this->datatables->add_column('view','<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-nim="$1" data-nama="$2" data-jk="$3" data-semester="$4" data-alamat="$5" data-email="$6" data-kelas="$7" data-jurusan="$8">Edit</a> <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-nim="$1">Hapus</a>','nim, nama, jenis_kelamin, semester, alamat, email, kelas_id, id_jurusan, kelas_nama, nama_jurusan');
    return $this->datatables->generate();
  }

  function get_all_mahasiswa_tm(){ //ambil data mahasiswa dari tabel dari tabel user_mahasiswa
    $this->datatables->select('nim, nama, jenis_kelamin, semester, alamat, email, kelas_id, id_jurusan, kelas_nama, nama_jurusan, password');
    $this->datatables->from('user_mahasiswa');
    $this->datatables->join('kelas','user_mahasiswa.user_kelas_id=kelas_id');
    $this->datatables->join('jurusan','user_mahasiswa.jurusan_id=id_jurusan');
    $this->datatables->where('id_jurusan', '124');
    $this->datatables->add_column('view','<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-nim="$1" data-nama="$2" data-jk="$3" data-semester="$4" data-alamat="$5" data-email="$6" data-kelas="$7" data-jurusan="$8">Edit</a> <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-nim="$1">Hapus</a>','nim, nama, jenis_kelamin, semester, alamat, email, kelas_id, id_jurusan, kelas_nama, nama_jurusan');
    return $this->datatables->generate();
  }

  function get_all_mahasiswa_tp(){ //ambil data mahasiswa dari tabel dari tabel user_mahasiswa
    $this->datatables->select('nim, nama, jenis_kelamin, semester, alamat, email, kelas_id, id_jurusan, kelas_nama, nama_jurusan, password');
    $this->datatables->from('user_mahasiswa');
    $this->datatables->join('kelas','user_mahasiswa.user_kelas_id=kelas_id');
    $this->datatables->join('jurusan','user_mahasiswa.jurusan_id=id_jurusan');
    $this->datatables->where('id_jurusan', '125');
    $this->datatables->add_column('view','<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-nim="$1" data-nama="$2" data-jk="$3" data-semester="$4" data-alamat="$5" data-email="$6" data-kelas="$7" data-jurusan="$8">Edit</a> <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-nim="$1">Hapus</a>','nim, nama, jenis_kelamin, semester, alamat, email, kelas_id, id_jurusan, kelas_nama, nama_jurusan');
    return $this->datatables->generate();
  }

  function get_all_mahasiswa_rpl(){ //ambil data mahasiswa dari tabel dari tabel user_mahasiswa
    $this->datatables->select('nim, nama, jenis_kelamin, semester, alamat, email, kelas_id, id_jurusan, kelas_nama, nama_jurusan, password');
    $this->datatables->from('user_mahasiswa');
    $this->datatables->join('kelas','user_mahasiswa.user_kelas_id=kelas_id');
    $this->datatables->join('jurusan','user_mahasiswa.jurusan_id=id_jurusan');
    $this->datatables->where('id_jurusan', '126');
    $this->datatables->add_column('view','<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-nim="$1" data-nama="$2" data-jk="$3" data-semester="$4" data-alamat="$5" data-email="$6" data-kelas="$7" data-jurusan="$8">Edit</a> <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-nim="$1">Hapus</a>','nim, nama, jenis_kelamin, semester, alamat, email, kelas_id, id_jurusan, kelas_nama, nama_jurusan');
    return $this->datatables->generate();
  }

  function get_all_mahasiswa_manufaktur(){ //ambil data mahasiswa dari tabel dari tabel user_mahasiswa
    $this->datatables->select('nim, nama, jenis_kelamin, semester, alamat, email, kelas_id, id_jurusan, kelas_nama, nama_jurusan, password');
    $this->datatables->from('user_mahasiswa');
    $this->datatables->join('kelas','user_mahasiswa.user_kelas_id=kelas_id');
    $this->datatables->join('jurusan','user_mahasiswa.jurusan_id=id_jurusan');
    $this->datatables->where('id_jurusan', '127');
    $this->datatables->add_column('view','<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-nim="$1" data-nama="$2" data-jk="$3" data-semester="$4" data-alamat="$5" data-email="$6" data-kelas="$7" data-jurusan="$8">Edit</a> <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-nim="$1">Hapus</a>','nim, nama, jenis_kelamin, semester, alamat, email, kelas_id, id_jurusan, kelas_nama, nama_jurusan');
    return $this->datatables->generate();
  }

}
