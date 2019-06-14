<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{

  function validate($email, $password){
    $this->db->where('user_email', $email);
    $this->db->where('user_password', $password);
    $result = $this->db->get('tbl_users', 1);
    return $result;
  }

}
