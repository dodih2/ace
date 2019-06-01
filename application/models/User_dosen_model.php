<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_dosen_model extends CI_Model
{

  private $_table = "user_dosen";

  public $nik;
  public $nama;
  public $j_k;

  public function rules(){
    return[
      ['field' => 'nama',
      'label' => 'Nama',
      'rules' => 'required'],

      ['field' => 'nama',
      'label' => 'Nama',
      'rules' => 'required'],

      ['field' => 'j_k',
      'label' => 'Jenis kelamin',
      'rules' => 'required']
    ];
  }

  public function getAll(){
    return $this->db->get($this->_table)->result();
  }

  public function getById($id){
    return $this->db->get_where($this->_table, ["nik" => $id])->row();
  }

  public function save()
  {
    $post = $this->input->post();
    $this->nik = $post["nik"];
    $this->nama = $post["nama"];
    $this->j_k = $post["j_k"];
    $this->db->insert($this->_table, $this);
  }

  public function update()
  {
      $post = $this->input->post();
      $this->nik = $post["id"];
      $this->nama = $post["nama"];
      $this->j_k = $post["j_k"];
      $this->db->update($this->_table, $this, array('nik' => $post['id']));
  }

  public function delete($id)
  {
      return $this->db->delete($this->_table, array("nik" => $id));
  }


}
