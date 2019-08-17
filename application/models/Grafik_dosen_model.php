<?php
class Grafik_dosen_model extends CI_Model{

	function get_data_ti(){
        // $query = $this->db->query("SELECT absen.nim_id, SUM(absen.hadir) AS hadir, SUM(absen.alpa) AS alpa, user_mahasiswa.nama, user_mahasiswa.jurusan_id FROM  absen INNER JOIN user_mahasiswa ON absen.nim_id = user_mahasiswa.nim GROUP BY nim_id");

        $jurusan = $this->session->userdata('dosen_jurusan');
        $nik = $this->session->userdata('nik');
        $this->db->select('absen.absen_kelas_id, sum(absen.hadir) as hadir, absen.nik_id_id, kelas.kelas_id, kelas.kelas_nama, kelas.jurusan_id');
        $this->db->from('absen');
        $this->db->join('kelas', 'absen.absen_kelas_id=kelas.kelas_id');
        $this->db->where('kelas.jurusan_id', $jurusan);
        $this->db->where('nik_id_id', $nik);
        $this->db->group_by('absen_kelas_id');
        $query = $this->db->get();

        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

		function get_data_tm(){
					// $query = $this->db->query("SELECT absen.nim_id, SUM(absen.hadir) AS hadir, SUM(absen.alpa) AS alpa, user_mahasiswa.nama, user_mahasiswa.jurusan_id FROM  absen INNER JOIN user_mahasiswa ON absen.nim_id = user_mahasiswa.nim GROUP BY nim_id");

					$jurusan = 124;
					$this->db->select('absen.absen_kelas_id, sum(absen.hadir) as hadir,  sum(absen.alpa) as alpa, kelas.kelas_id, kelas.kelas_nama, kelas.jurusan_id ');
					$this->db->from('absen');
					$this->db->join('kelas', 'absen.absen_kelas_id=kelas.kelas_id');
					$this->db->where('kelas.jurusan_id', $jurusan);
					$this->db->group_by('absen_kelas_id');
					$query = $this->db->get();

					if($query->num_rows() > 0){
							foreach($query->result() as $data2){
									$hasil2[] = $data2;
							}
							return $hasil2;
					}
			}

			function get_data_tp(){
						// $query = $this->db->query("SELECT absen.nim_id, SUM(absen.hadir) AS hadir, SUM(absen.alpa) AS alpa, user_mahasiswa.nama, user_mahasiswa.jurusan_id FROM  absen INNER JOIN user_mahasiswa ON absen.nim_id = user_mahasiswa.nim GROUP BY nim_id");

						$jurusan = 125;
						$this->db->select('absen.absen_kelas_id, sum(absen.hadir) as hadir,  sum(absen.alpa) as alpa, kelas.kelas_id, kelas.kelas_nama, kelas.jurusan_id ');
						$this->db->from('absen');
						$this->db->join('kelas', 'absen.absen_kelas_id=kelas.kelas_id');
						$this->db->where('kelas.jurusan_id', $jurusan);
						$this->db->group_by('absen_kelas_id');
						$query = $this->db->get();

						if($query->num_rows() > 0){
								foreach($query->result() as $data3){
										$hasil3[] = $data3;
								}
								return $hasil3;
						}
				}

				function get_data_rpl(){
							// $query = $this->db->query("SELECT absen.nim_id, SUM(absen.hadir) AS hadir, SUM(absen.alpa) AS alpa, user_mahasiswa.nama, user_mahasiswa.jurusan_id FROM  absen INNER JOIN user_mahasiswa ON absen.nim_id = user_mahasiswa.nim GROUP BY nim_id");

							$jurusan = 126;
							$this->db->select('absen.absen_kelas_id, sum(absen.hadir) as hadir,  sum(absen.alpa) as alpa, kelas.kelas_id, kelas.kelas_nama, kelas.jurusan_id ');
							$this->db->from('absen');
							$this->db->join('kelas', 'absen.absen_kelas_id=kelas.kelas_id');
							$this->db->where('kelas.jurusan_id', $jurusan);
							$this->db->group_by('absen_kelas_id');
							$query = $this->db->get();

							if($query->num_rows() > 0){
									foreach($query->result() as $data4){
											$hasil4[] = $data4;
									}
									return $hasil4;
							}
					}

					function get_data_mnf(){
								// $query = $this->db->query("SELECT absen.nim_id, SUM(absen.hadir) AS hadir, SUM(absen.alpa) AS alpa, user_mahasiswa.nama, user_mahasiswa.jurusan_id FROM  absen INNER JOIN user_mahasiswa ON absen.nim_id = user_mahasiswa.nim GROUP BY nim_id");

								$jurusan = 127;
								$this->db->select('absen.absen_kelas_id, sum(absen.hadir) as hadir,  sum(absen.alpa) as alpa, kelas.kelas_id, kelas.kelas_nama, kelas.jurusan_id ');
								$this->db->from('absen');
								$this->db->join('kelas', 'absen.absen_kelas_id=kelas.kelas_id');
								$this->db->where('kelas.jurusan_id', $jurusan);
								$this->db->group_by('absen_kelas_id');
								$query = $this->db->get();

								if($query->num_rows() > 0){
										foreach($query->result() as $data5){
												$hasil5[] = $data5;
										}
										return $hasil5;
								}
						}

}
