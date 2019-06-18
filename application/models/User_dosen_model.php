<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_dosen_model extends CI_Model
{

  private $_table = "user_dosen";

  public $nik;
  public $password;
  public $dosen_jurusan;
  public $level;

  public function rules(){
    return[
      ['field' => 'nik',
      'label' => 'Nik',
      'rules' => 'numeric'],

      ['field' => 'password',
      'label' => 'Password',
      'rules' => 'required'],

      ['field' => 'dosen_jurusan',
      'label' => 'Dosen_Jurusan',
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
    $this->dosen_jurusan = $post["dosen_jurusan"];
    $this->level = 2;
    $this->password = $post["password"];
    $this->db->insert($this->_table, $this);
  }

  public function update()
  {
      $post = $this->input->post();
      $this->nik = $post["id"];
      $this->dosen_jurusan = $post["dosen_jurusan"];
      $this->password = $post["password"];
      $this->db->update($this->_table, $this, array('nik' => $post['id']));
  }

  public function delete($id)
  {
      return $this->db->delete($this->_table, array("nik" => $id));
  }


}
