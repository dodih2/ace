<?php
Class Laporanpdf extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }

    function index(){
        $pdf = new FPDF('L','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(190,7,'ABSENSI MAHASISWA',0,1,'C');

        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'NIM',1,0);
        $pdf->Cell(27,6,'KELAS',1,0);
        $pdf->Cell(20,6,'HADIR',1,1);
        $pdf->SetFont('Arial','',10);
        $this->db->select('nim_id, absen_kelas_id, sum(hadir) as hadir');
        $this->db->from('absen');
        $this->db->group_by('nim_id');
        $mahasiswa = $this->db->get()->result();
        foreach ($mahasiswa as $row){
            $pdf->Cell(20,6,$row->nim_id,1,0);
            $pdf->Cell(27,6,$row->absen_kelas_id,1,0);
            $pdf->Cell(20,6,$row->hadir,1,1);
        }
        $pdf->Output();
    }
}
