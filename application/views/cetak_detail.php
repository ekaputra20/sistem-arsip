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
$this->fpdf->SetFont('Times', 'B', 23);

/* Kita akan membuat header dari halaman pdf yang kita buat
  -------------- Header Halaman dimulai dari baris ini -----------------------------
 */

$this->fpdf->Cell(27, 0.9 , 'Perpustakaan Universitas Gadjah Mada', 0, 0, 'C');

// fungsi Ln untuk membuat baris baru
$this->fpdf->Ln();
$this->fpdf->SetFont('Times', 'B', 15);
$this->fpdf->Cell(27, 0.5, 'Arsip Kegiatan Perpustakaan UGM', 0, 0, 'C');

$this->fpdf->Ln();
//$this->fpdf->Cell(19, 0.5, 'homepage : www.ganesys.com email : info@ganesys.com', 0, 0, 'C');

/* Fungsi Line untuk membuat garis */
$this->fpdf->Line(2, 3.5, 28, 3.5);
$this->fpdf->Line(2, 3.60, 28, 3.60);

/* -------------- Header Halaman selesai ------------------------------------------------ */


/* setting header table */
$this->fpdf->Ln(1);
$this->fpdf->SetFont('Times', 'B', 14);

$this->fpdf->ln();
$this->fpdf->ln();
$this->fpdf->Cell(5, 1, 'Nama Kegiatan', 0, 'LR', 'L');
$this->fpdf->Cell(1,1,':',0,'LR','C');
$this->fpdf->Cell(20, 1, $record->subjek, 0, 'LR', 'L');
$this->fpdf->ln();
$this->fpdf->ln();

$this->fpdf->Cell(5, 1, 'Tanggal Kegiatan', 0, 'LR', 'L');
$this->fpdf->Cell(1,1,':',0,'LR','C');
$this->fpdf->Cell(20, 1, tgl_indo($record->tgl_kegiatan), 0, 'LR', 'L');
$this->fpdf->ln();
$this->fpdf->ln();

$this->fpdf->Cell(5, 1, 'Tempat Kegiatan', 0, 'LR', 'L');
$this->fpdf->Cell(1,1,':',0,'LR','C');
$this->fpdf->Cell(20, 1, $record->tempat, 0, 'LR', 'L');
$this->fpdf->ln();
$this->fpdf->ln();

$this->fpdf->Cell(5, 1, 'Dibuat Oleh', 0, 'LR', 'L');
$this->fpdf->Cell(1,1,':',0,'LR','C');
$this->fpdf->Cell(20, 1, $record->userNamaLengkap, 0, 'LR', 'L');
$this->fpdf->ln();
$this->fpdf->ln();


/* generate hasil query disini */

// $this->fpdf->Ln();
// $this->fpdf->SetFont('Times', '', 12);





 
  

//  $this->fpdf->ln(1);

// $this->fpdf->Cell(0, 0.7, 'Nama Kegiatan'.$record->subjek, 1,'LR', 'L');
// 
// $this->fpdf->Cell(0, 0.7, 'Tanggal Kegiatan'.$record->tgl_kegiatan, 1,'LR', 'L');
// 
// $this->fpdf->Cell(0, 0.7, 'Deskripsi Kegiatan'.$record->deskripsi, 1,'LR', 'L');
// $this->fpdf->ln();
// $this->fpdf->Cell(0, 0.7,'Pembuat'.$record->userNamaLengkap, 1,'LR', 'L');
// $this->fpdf->ln();




 /* generate hasil query disini */


     //$this->fpdf->Ln();
     $this->fpdf->SetFont('Times', '', 12);
    
     $this->fpdf->Cell;                                                                                      
      //$this->fpdf->Cell(.$record->subjek , 0, 1);
// //     $this->fpdf->Cell(3, 1,  1, 'LR', 'C');
// //     $this->fpdf->Cell(3, 1, $record->deskripsi, 1, 'LR', 'C');
// //     $this->fpdf->Cell(4, 1, , 1, 'LR', 'C');

 
  
$this->fpdf->Ln();

/* setting posisi footer 3 cm dari bawah */
$this->fpdf->SetY(-3);

/* setting font untuk footer */
$this->fpdf->SetFont('Times', '', 10);
 
$this->fpdf->Cell(27, 0, 'Halaman ' . $this->fpdf->PageNo() . '/{nb}', 0, 0, 'R');

/* generate pdf jika semua konstruktor, data yang akan ditampilkan, dll sudah selesai */
ob_clean();
$this->fpdf->Output("laporan-detail-skegiatan.pdf", "I");
?>
