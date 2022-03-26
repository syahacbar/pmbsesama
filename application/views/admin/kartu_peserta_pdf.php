<?php
$pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetTitle('KARTU PESERTA '.$peserta->username);
$pdf->SetHeaderMargin(20);
$pdf->SetTopMargin(10);
$pdf->setFooterMargin(15);
$pdf->SetAutoPageBreak(true, 20);
$pdf->SetAuthor('Author');
$pdf->SetDisplayMode('real', 'default');
$pdf->setPrintHeader(false);
//$pdf->setPrintFooter(false);
$pdf->SetMargins(5, 10, 5, true);

$pdf->AddPage('P', 'A4');
$CI = &get_instance();
$CI->load->model(['M_prodi']);
$html = '
LOGO UNIPA :<br>
<img src="'.base_url().'assets/frontend/img/logo_unipa.png"><br>
UNIVERSITAS PAPUA<br>
Jl. Gunung Salju Amban Manokwari Papua Barat Kode Pos 98314 MANOKWARI<br><br>
KARTU TANDA PESERTA SESAMA<br>
FOTO PESERTA : <br>
<img src="'.base_url('assets/upload/profile/') . $peserta->fotoprofil.'"><br>
Tahun Akademik '.$peserta->tahunakademik.'<br><br>
Nama Lengkap : '.$peserta->namalengkap.'<br>
Nomor Pendaftaran : '.$peserta->username.'<br>
Tempat/Tgl Lahir : '.$peserta->lokasi_tempatlahir . ", " . date_indo($peserta->tgl_lahir).'<br>
Program Studi<br>
Pil. 1 : '.$CI->M_prodi->get_by_id($peserta->prodipilihan1)->namaprodi.'<br>
Pil. 2 : '.$CI->M_prodi->get_by_id($peserta->prodipilihan2)->namaprodi.'<br>
Pil. 3 : '.$CI->M_prodi->get_by_id($peserta->prodipilihan3)->namaprodi.'<br><br>
Manokwari, 21 Agustus 2021<br>
Tanda Tangan Pendaftar<br>
'.$peserta->namalengkap.'
';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('KARTU PESERTA '.$peserta->username.'.pdf', 'I');