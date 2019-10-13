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
        $pdf->Cell(270,5,'ABSENSI MAHASISWA POLINDRA',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1,'L');
        $pdf->SetFont('Arial','B',11);
        $pdf->Cell(10,7,'',0,0,'C');
        $pdf->Cell(10,7,'NO',1,0,'C');
        $pdf->Cell(20,7,'NIM',1,0,'C');
        $pdf->Cell(60,7,'NAMA',1,0,'C');
        $pdf->Cell(17,7,'KELAS',1,0,'C');
        $pdf->Cell(8,7,'H',1,0,'C');
        $pdf->Cell(8,7,'A',1,0,'C');
        $pdf->Cell(8,7,'I',1,0,'C');
        $pdf->Cell(20,7,'KOMPEN',1,0,'C');
        $pdf->Cell(22,7,'SEMESTER',1,1,'C');
        $pdf->SetFont('Arial','',10);
        $nik = $this->session->userdata('nik');
        $this->db->select("absen.nim_id,  cast(sum(absen.hadir/6) as int) as hadir, cast(sum(absen.alpa/6) as int) as alpa, cast(sum(absen.izin/6) as int) as izin, cast(sum(ket_telat/6) as decimal(10, 0)) as ket_telat, user_mahasiswa.nim, user_mahasiswa.nama, user_mahasiswa.semester, mata_kuliah.id_matkul, mata_kuliah.nama_matkul, kelas.kelas_id, kelas.kelas_nama, absen.nik_id_id");
        $this->db->from('absen');
        $this->db->join('user_mahasiswa', 'absen.nim_id=nim');
        $this->db->join('kelas','absen_kelas_id=kelas_id');
        $this->db->join('jadwal','absen_kelas_id=kelas');
        $this->db->join('mata_kuliah', 'absen.absen_kode_matkul=mata_kuliah.id_matkul');
        $this->db->group_by('nim_id');
        $this->db->order_by('nim_id', 'ASC');
        $this->db->order_by('nama', 'ASC');
        $this->db->order_by('kelas_nama', 'ASC');
        $this->db->where('nik_id_id', $nik);
        $mahasiswa = $this->db->get()->result();
        $no = 1;
        foreach ($mahasiswa as $row){
            $pdf->Cell(10,6,'',0,0,'C');
            $pdf->Cell(10,6,$no++,1,0,'C');
            $pdf->Cell(20,6,$row->nim_id,1,0,'C');
            $pdf->Cell(60,6,$row->nama,1,0);
            $pdf->Cell(17,6,$row->kelas_nama,1,0,'C');
            $pdf->Cell(8,6,$row->hadir,1,0,'C');
            $pdf->Cell(8,6,$row->alpa,1,0,'C');
            $pdf->Cell(8,6,$row->izin,1,0,'C');
            $pdf->Cell(20,6,$row->ket_telat,1,0,'C');
            $pdf->Cell(22,6,$row->semester,1,1,'C');
        }
        $pdf->Output();
    }
}


// SEC_TO_TIME(SUM(TIME_TO_SEC(ket_telat))) as ket_telat
// cast(time_to_sec(ket_telat) / (60) as decimal(10, 0) as ket_telat
