<?php
class Grafik_dosen_model extends CI_Model{

	function get_data(){
        // $query = $this->db->query("SELECT absen.nim_id, SUM(absen.hadir) AS hadir, SUM(absen.alpa) AS alpa, user_mahasiswa.nama, user_mahasiswa.jurusan_id FROM  absen INNER JOIN user_mahasiswa ON absen.nim_id = user_mahasiswa.nim GROUP BY nim_id");

        $jurusan = $this->session->userdata('dosen_jurusan');
        $nik = $this->session->userdata('nik');
        $this->db->select('absen.absen_kelas_id, sum(absen.hadir) as hadir, sum(absen.alpa) as alpa, sum(absen.izin) as izin, absen.nik_id_id, kelas.kelas_id, kelas.kelas_nama, kelas.jurusan_id');
        $this->db->from('absen');
        $this->db->join('kelas', 'absen.absen_kelas_id=kelas.kelas_id');
        $this->db->where('kelas.jurusan_id', $jurusan);
        $this->db->where('nik_id_id', $nik);
        $this->db->group_by('absen_kelas_id');
        $query = $this->db->get();
				return	$query;
        // if($query->num_rows() > 0){
        //     foreach($query->result() as $data){
        //         $hasil[] = $data;
        //     }
        //     return $hasil;
        // }
    }

}
