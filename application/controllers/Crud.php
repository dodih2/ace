<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('datatables'); //load library ignited-datatable
    $this->load->model('crud_model'); // load model crud_model
  }

  function index()
  {
    $x['kategori'] = $this->crud_model->get_kategori();
    $this->load->view('crud_view', $x);
  }

  function get_produck_json(){ //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->crud_model->get_all_produk();
  }

  function simpan(){
    $data = array(
      'barang_kode' => $this->input->post('kode_barang'),
      'barang_nama' => $this->input->post('nama_barang'),
      'barang_harga'=> $this->input->post('harga'),
      'barang_kategori_id' => $this->input->post('kategori')
    );
    $this->db->insert('barang', $data);
    redirect('crud');
  }

  function update(){
    $kode = $this->input->post('kode_barang');
    $data = array(
      'barang_nama' => $this->input->post('nama_barang'),
      'barang_harga'=> $this->input->post('harga'),
      'barang_kategori_id' => $this->input->post('kategori')
    );
    $this->db->where('barang_kode', $kode);
    $this->db->update('barang', $data);
    redirect('crud');
  }

  function delete(){
    $kode = $this->input->post('kode_barang');
    $this->db->where('barang_kode', $kode);
    $this->db->delete('barang');
    redirect('crud');
  }

}
