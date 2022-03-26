<?php
$pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetTitle('Kartu Akun '.$username.' - Portal PMB Online UNIPA');
$pdf->SetHeaderMargin(20);
$pdf->SetTopMargin(10);
$pdf->setFooterMargin(15);
$pdf->SetAutoPageBreak(true, 20);
$pdf->SetAuthor('Author');
$pdf->SetDisplayMode('real', 'default');
$pdf->setPrintHeader(false);
//$pdf->setPrintFooter(false);
$pdf->SetMargins(20, 20, 20, true);

$pdf->AddPage('P', 'A4');

$html = '
<style>
	span.kop{
		font-weight:bold;
		font-size:18px;
	}
	div.text-justify {
	  text-align: justify;
	  text-justify: inter-word;
	}
</style>
<table border=0 align="center" width="100%" cellspacing="5">
	<tr>
		<td align="left" width="15%"><img src="'.base_url().'assets/frontend/img/unipa.png" width="50"></td>
		<td align="left" width="85%">
			<span class="kop">UNIVERSITAS PAPUA</span>
			<br>Jl. Gunung Salju Amban Manokwari Papua Barat <br>Kode Pos 98314 MANOKWARI
		</td>
	</tr>
	<tr>
		<td colspan="2"><hr></td>
	</tr>
</table>
<table border=0 align="center" width="100%" cellspacing="10px">
	<tr>
		<td>
			<h1>KONFIRMASI PENDAFTARAN</h1>
		</td>
	</tr>
	<tr>
		<td align="left">
		<div class="text-justify">Terimakasih atas kepercayaan anda mendaftar di Universitas Papua. Berikut kami informasikan data pendaftaran anda sebagai berikut :</div>
		</td>
	</tr>
</table>

<table border=0 align="center" width="100%" cellspacing="10px">
	<tr align="left">
		<td width="25%">Nama Lengkap</td>
		<td width="3%">:</td>
		<td>'.strtoupper($namalengkap).'</td>
	</tr>
	<tr align="left">
		<td>Username</td>
		<td>:</td>
		<td><strong>'.$username.'</strong></td>
	</tr>
	<tr align="left">
		<td>Password</td>
		<td>:</td>
		<td><strong>'.$password.'</strong></td>
	</tr>
	<tr align="left">
		<td>Email</td>
		<td>:</td>
		<td>'.$email.'</td>
	</tr>
	<tr align="left">
		<td>Nomor HP</td>
		<td>:</td>
		<td>'.$nohp.'</td>
	</tr>
</table>
<table border=0 align="center" width="100%" cellspacing="10px">
	<tr align="left">
		<td><div class="text-justify">Silakan akses <a href="https://pmb.unipa.ac.id/pmbsesama" class="text-danger ">https://pmb.unipa.ac.id/pmbsesama</a>. Masukkan username dan password di atas untuk login dan melengkapi formulir biodata pendaftaran.</div></td>
	</tr>
	<tr align="left">
		<td>Informasi lebih lanjut silahkan menghubungi panitia PMB UNIVERSITAS PAPUA. <br>Terimakasih.</td>
	</tr>
</table>
';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('Kartu Akun '.$username.'- Portal PMB Online UNIPA.pdf', 'I');