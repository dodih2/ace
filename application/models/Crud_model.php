<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model{

  function get_kategori(){ //ambil data kategori dari tabel kategori
    $hsl = $this->db->get('kelas');
    return $hsl;
  }

  function get_all_produk(){ //ambil data barang dari tabel barang yang akan di generate ke datatable
    $this->datatables->select('nim,nama,alamat,email,kelas_id,kelas_nama');
    $this->datatables->from('user_mahasiswa');
    $this->datatables->join('kelas','user_kelas_id=kelas_id');
    $this->datatables->add_column('view','<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-nim="$1" data-nama="$2" data-alamat="$3" data-email="$4" data-kelas="$5" >Edit</a><a href="[removed]void(0);" class="hapus_record btn btn-danger btn-xs" data-nim="$1">Hapus</a>','nim,nama,alamat,email,kelas_id,kelas_nama');
    return $this->datatables->generate();

  }

}
