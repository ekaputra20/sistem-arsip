<?php

ob_start();
/* setting zona waktu */
date_default_timezone_set('Asia/Jakarta');

/* konstruktor halaman pdf sbb :
  P  = Orientasinya "Potrait"
  cm = ukuran halaman dalam satuan centimeter
  A4 = Format Halaman

  jika ingin mensetting sendiri format halamannya, gunakan array(width, height)
  contoh : $this->fpdf->FPDF("P","cm", array(20, 20));
 */

$this->fpdf->FPDF("L", "cm", "A4");

// kita set marginnya dimulai dari kiri, atas, kanan. jika tidak diset, defaultnya 1 cm
$this->fpdf->SetMargins(2, 2, 2, 2);


/* AliasNbPages() merupakan fungsi untuk menampilkan total halaman
  di footer, nanti kita akan membuat page number dengan format : number page / total page
 */
$this->fpdf->AliasNbPages();

// AddPage merupakan fungsi untuk membuat halaman baru
$this->fpdf->AddPage();

// Setting Font : String Family, String Style, Font size
$this->fpdf->SetFont('Times', 'B', 22);

/* Kita akan membuat header dari halaman pdf yang kita buat
  -------------- Header Halaman dimulai dari baris ini -----------------------------
 */
// $src = base_url() . 'assets/images/ugm.png';
//$src2 = base_url() . 'assets/img/logo2.png';
//$this->fpdf->ImagePngWithAlpha($src, 55, 100, 100, 0);
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// D) same as C), but using Image()-method that recognizes the alpha channel
// $this->fpdf->Image($src, 55, 190, 100, 0, 'PNG');
// $this->fpdf->Image($src, 5, 1.5, -140);
$this->fpdf->Cell(27, 0.9 , 'Perpustakaan Universitas Gadjah Mada', 0, 0, 'C');

// fungsi Ln untuk membuat baris baru
$this->fpdf->Ln();
$this->fpdf->SetFont('Times', 'B', 15);
$this->fpdf->Cell(27, 0.5, 'Arsip Kegiatan Perpustakaan UGM', 0, 0, 'C');
// $this->fpdf->Image($src, 55, 190, 100, 0, 'PNG');
//$this->fpdf->Image($src2, 22, 0.5, -140);
//$this->fpdf->Ln();
/* Setting ulang Font : String Family, String Style, Font size
  kenapa disetting ulang ???
  jika tidak disetting ulang, ukuran font akan mengikuti settingan sebelumnya.
  tetapi karena kita menginginkan settingan untuk penulisan alamatnya berbeda,
  maka kita harus mensetting ulang Font nya.
  jika diatas settingannya : helvetica, 'B', '12'
  khusus untuk penulisan alamat, kita setting : helvetica, '', 10
  yang artinya string stylenya normal / tidak Bold dan ukurannya 10
  // */
//$this->fpdf->SetFont('helvetica', '', 10);
//$this->fpdf->Cell(27, 0.5, 'Jl. bla-bla bla-bla bla', 0, 0, 'C');

$this->fpdf->Ln();
//$this->fpdf->Cell(19, 0.5, 'homepage : www.ganesys.com email : info@ganesys.com', 0, 0, 'C');

/* Fungsi Line untuk membuat garis */
$this->fpdf->Line(2, 3.5, 29, 3.5);
$this->fpdf->Line(2, 3.60, 29, 3.60);

/* -------------- Header Halaman selesai ------------------------------------------------ */

$this->fpdf->Ln(1);
$this->fpdf->SetFont('Times', 'B', 9);
if ($_SESSION['bulan'] == '01') {
    $bul = 'Januari';
} elseif ($_SESSION['bulan'] == '02') {
    $bul = 'Februari';
} elseif ($_SESSION['bulan'] == '03') {
    $bul = 'Maret';
} elseif ($_SESSION['bulan'] == '04') {
    $bul = 'April';
} elseif ($_SESSION['bulan'] == '05') {
    $bul = 'Mei';
} elseif ($_SESSION['bulan'] == '06') {
    $bul = 'Juni';
} elseif ($_SESSION['bulan'] == '07') {
    $bul = 'Juli';
} elseif ($_SESSION['bulan'] == '08') {
    $bul = 'Agustus';
} elseif ($_SESSION['bulan'] == '09') {
    $bul = 'September';
} elseif ($_SESSION['bulan'] == '10') {
    $bul = 'Oktober';
} elseif ($_SESSION['bulan'] == '11') {
    $bul = 'November';
} elseif ($_SESSION['bulan'] == '12') {
    $bul = 'Desember';
}
// $aDate = explode('-', date());
// $pecah1 = $aDate[2];
// $pecah2 = $aDate[1];
// $pecah3 = $aDate[0];
// $tgl = $pecah1 - $pecah2 - $pecah3;

// $this->fpdf->SetFont('Times', 'B', 20);
// $this->fpdf->Cell(27, 0.7, 'Panitia', 0, 0, 'C');
// $this->fpdf->Ln();
// $no = 1;
// foreach ($pdf as $data) {
// $this->fpdf->Cell(27, 0.7, $data['namaKegiatan'], 0, 0, 'C');
// $no++;
// }
// $this->fpdf->Ln();


/* setting header table */
$this->fpdf->Ln(1);
$this->fpdf->SetFont('Times', 'B', 14);
$this->fpdf->Cell(1, 1, 'No', 1, 'LR', 'C');
$this->fpdf->Cell(23, 1, 'Nama Kegiatan', 1, 'LR', 'C');
$this->fpdf->Cell(3, 1, 'Tanggal', 1, 'LR', 'C');


/* generate hasil query disini */
$no = 1;
foreach ($record as $data) {

    $this->fpdf->Ln();
    $this->fpdf->SetFont('Times', '', 12);
    $this->fpdf->Cell(1, 1, $no, 1, 'LR', 'C');
    $this->fpdf->Cell(23, 1, $data['subjek'], 1, 'LR', 'L');
    $this->fpdf->Cell(3, 1, $data['tgl_kegiatan'], 1, 'LR', 'C');
 
  
    $no++;
}

$this->fpdf->Ln();
//$this->fpdf->SetFont('Times', 'B', 12);
//$this->fpdf->Cell(25, 6, 'Mengetahui', 0, 0, 'R');
//$this->fpdf->Ln();
//$this->fpdf->SetFont('Times', 'B', 12);
//$this->fpdf->Cell(25.3, -7, 'Manager HRD', 0, 0, 'R');
//$this->fpdf->Ln();
//$this->fpdf->SetFont('Times', 'B', 12);
//$this->fpdf->Cell(25.3, 11.1, 'Ir. Eka R Priaga', 0, 0, 'R');
/* setting posisi footer 3 cm dari bawah */
$this->fpdf->SetY(-3);

/* setting font untuk footer */
$this->fpdf->SetFont('Times', '', 10);

$this->fpdf->Cell(27, 0, 'Halaman ' . $this->fpdf->PageNo() . '/{nb}', 0, 0, 'R');

/* generate pdf jika semua konstruktor, data yang akan ditampilkan, dll sudah selesai */
ob_clean();
$this->fpdf->Output("laporankegiatan.pdf", "I");
?>
