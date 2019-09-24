<?php
class Chart_model extends CI_Model{

  //get data from database
  function get_data(){
      $this->db->select('absen_kelas_id,hadir,alpa,izin');
      $this->db->group_by('absen_kelas_id');
      $result = $this->db->get('absen');
      return $result;
  }

}
