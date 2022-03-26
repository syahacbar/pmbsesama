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
$pdf->SetMargins(20, 20, 20, true);

$pdf->AddPage('P', 'A4');
$CI = &get_instance();
$CI->load->model(['M_prodi']);
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
<table border="0" align="center" width="100%" cellspacing="5">
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
<table border="0" align="center" width="100%" cellspacing="10px">
	<tr>
		<td>
			<span class="kop">KARTU TANDA PESERTA SESAMA</span><br><strong>TAHUN AKADEMIK '.$peserta->tahunakademik.'</strong>
		</td>
	</tr>
</table>
<br><br>
<table border="0" width="100%">
	<tr>
		<td width="20%"><img src="'.base_url('assets/upload/profile/') . $peserta->fotoprofil.'" width="50"></td>
		<td width="80%"> 
			<table border="0" align="left" width="100%">
				<tr>
					<td width="27%">Nama Lengkap</td>
					<td width="3%">:</td>
					<td width="70%">'.strtoupper($peserta->namalengkap).'</td>
				</tr>
				<tr>
					<td>No. Pendaftaran</td>
					<td>:</td>
					<td>'.$peserta->username.'</td>
				</tr>
				<tr>
					<td>Tempat Tgl. Lahir</td>
					<td>:</td>
					<td>'.$peserta->lokasi_tempatlahir . ", " . date_indo($peserta->tgl_lahir).'</td>
				</tr>
				<tr>
					<td>Pilihan Prodi</td>
					<td>:</td>
					<td>
						<ol type="number">
							<li>'.$CI->M_prodi->get_by_id($peserta->prodipilihan1)->namaprodi.'</li>
							<li>'.$CI->M_prodi->get_by_id($peserta->prodipilihan2)->namaprodi.'</li>
							<li>'.$CI->M_prodi->get_by_id($peserta->prodipilihan3)->namaprodi.'</li>
						</ol>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<br><br><br><br><br>
<table border="0" width="100%" align="center">
	<tr>
		<td width="50%"></td>
		<td width="50%">Manokwari, '.date_indo(date("Y-m-d")).'</td>
	</tr>
	<tr>
		<td>Tanda Tangan Pendaftar,<br><br><br></td>
		<td>Petugas Verifikasi,<br><br><br></td>
	</tr>
	<tr>
		<td>('.$peserta->namalengkap.')</td>
		<td>(...............................)</td>
	</tr>
</table>
';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('KARTU PESERTA '.$peserta->username.'.pdf', 'I');

?>