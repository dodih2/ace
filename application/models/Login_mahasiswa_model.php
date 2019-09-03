<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_mahasiswa_model extends CI_Model{

  function validate($nim, $password){
    $this->db->where("(nim = '$nim' OR email='$nim')");
    $this->db->where('password', $password);
    $result = $this->db->get('user_mahasiswa', 1);
    return $result;
  }

}
