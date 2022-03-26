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
<title>Kartu Peserta '.$peserta->namalengkap.'</title>
<style>
</style>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-9 col-md-10 col-lg-10 col-xl-8 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3 card-header">
                    <header>
                        <div class="row">
                            <div class="col-2">
                                <img src="'.base_url().'assets/frontend/img/logo_unipa.png" alt="logo_unipa">
                            </div>
                            <div class="col-md-10">
                                <h5 id="heading">UNIVERSITAS PAPUA</h5>
                                <p>Jl. Gunung Salju Amban Manokwari Papua Barat Kode Pos 98314 MANOKWARI</p>
                            </div>
                        </div>
                    </header>
                    <hr>
                    <hr>

                    <section class="identitas">
                        <div class="row identitaspeserta">
                            <div class="col-md-3">
                                <img src="'.base_url('assets/upload/profile/') . $peserta->fotoprofil.'" class="img-thumbnail" alt="foto_pas_mahasiswa">
                            </div>
                            <div class="col-md-9">
                                <h5>KARTU TANDA PESERTA SESAMA <br>Tahun Akademik '.$peserta->tahunakademik.'</h5>
                                <table class="table tabelidentitas">
                                    <tbody>
                                        <tr>
                                            <td>Nama</td>
                                            <td>:</td>
                                            <td>'.$peserta->namalengkap.'</td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Pendaftaran</td>
                                            <td>:</td>
                                            <td>'.$peserta->username.'</td>
                                        </tr>
                                        <td>Tempat/Tgl Lahir</td>
                                        <td>:</td>
                                        <td>'.$peserta->lokasi_tempatlahir . ", " . date_indo($peserta->tgl_lahir).'</td>
                                        </tr>
                                        <tr>
                                            <td>Program Studi</td>
                                            <td>:</td>
                                            <td>
                                                <span>Pil. 1 : '.$CI->M_prodi->get_by_id($peserta->prodipilihan1)->namaprodi.'</span><br>
                                                <span>Pil. 2 : '.$CI->M_prodi->get_by_id($peserta->prodipilihan2)->namaprodi.'</span><br>
                                                <span>Pil. 3 : '.$CI->M_prodi->get_by_id($peserta->prodipilihan3)->namaprodi.'</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>


                    <section class="tandatangan">
                        <div class="row tandatangan">
                            <div class="col-md-12">
                                <p>Manokwari, 21 Agustus 2021</p>
                            </div>
                            <div class="col-md-6 ttpeserta">
                                <p>Tanda Tangan Pendaftar</p>
                                <br>
                                <br>
                                <p>('.$peserta->namalengkap.')</p>
                            </div>

                            <div class="col-md-6 ttpetugas">
                                <p>Petugas Verifikasi</p>
                                <br>
                                <br>
                                <p>(.................................)</p>
                            </div>
                        </div>
                        <br>
                        <br>
                    </section>
                </div>
            </div>
        </div>
    </div>';

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('KARTU PESERTA '.$peserta->username.'.pdf', 'I');

?>