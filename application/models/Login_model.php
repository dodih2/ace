<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{

  function validate($nik, $password){
    $this->db->where("nik = '$nik' or email = '$nik'");
    $this->db->where('password', $password);
    $result = $this->db->get('user_dosen', 1);
    return $result;
  }

}
