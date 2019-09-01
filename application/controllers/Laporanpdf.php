<?php
Class Laporanpdf extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }

    function index(){
        $pdf = new FPDF('P','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(190,7,'ABSENSI MAHASISWA POLINDRA',0,1,'C');

        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',11);
        $pdf->Cell(20,7,'NIM',1,0,'C');
        $pdf->Cell(20,7,'NAMA',1,0,'C');
        $pdf->Cell(27,7,'KELAS',1,0,'C');
        $pdf->Cell(20,7,'HADIR',1,0,'C');
        $pdf->Cell(20,7,'ALPA',1,0,'C');
        $pdf->Cell(20,7,'IZIN',1,0,'C');
        $pdf->Cell(38,7,'MATA KULIAH',1,0,'C');
        $pdf->Cell(22,7,'SEMESTER',1,1,'C');
        $pdf->SetFont('Arial','',10);
        $this->db->select('absen.nim_id, sum(absen.hadir) as hadir, sum(absen.alpa) as alpa,sum(absen.izin) as izin, absen.nim_id, user_mahasiswa.nim, user_mahasiswa.nama, user_mahasiswa.semester, mata_kuliah.id_matkul, mata_kuliah.nama_matkul, kelas.kelas_id, kelas.kelas_nama');
        $this->db->from('absen');
        $this->db->join('user_mahasiswa', 'absen.nim_id=nim');
        $this->db->join('kelas','absen_kelas_id=kelas_id');
        $this->db->join('mata_kuliah', 'absen.absen_kode_matkul=mata_kuliah.id_matkul');
        $this->db->group_by('nim_id');
        $this->db->order_by('nim_id', 'ASC');
        $this->db->order_by('nama', 'ASC');
        $this->db->order_by('kelas_nama', 'ASC');
        $mahasiswa = $this->db->get()->result();
        foreach ($mahasiswa as $row){
            $pdf->Cell(20,6,$row->nim_id,1,0,'C');
            $pdf->Cell(20,6,$row->nama,1,0);
            $pdf->Cell(27,6,$row->kelas_nama,1,0);
            $pdf->Cell(20,6,$row->hadir,1,0,'C');
            $pdf->Cell(20,6,$row->alpa,1,0,'C');
            $pdf->Cell(20,6,$row->izin,1,0,'C');
            $pdf->Cell(38,6,$row->nama_matkul,1,0);
            $pdf->Cell(22,6,$row->semester,1,1,'C');
        }
        $pdf->Output();
    }
}
