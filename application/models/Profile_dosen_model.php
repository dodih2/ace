<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_dosen_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function load_karyawan(){
    $sql = $this->db->query("SELECT * FROM user_dosen WHERE level = 2");
    return $sql->result_array();
  }

}
