<!doctype html>
<html>
 
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Kartu Peserta <?php echo $peserta->username;?></title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/frontend/css/konfirmasi-regis.css" rel="stylesheet" />

</head>

<body class='snippet-body' onload="window.print();">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-9 col-md-10 col-lg-10 col-xl-8 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3 card-header">
                    <header>
                        <div class="row">
                            <div class="col-2">
                                <img src="https://i.postimg.cc/Rh4XYxYK/download.png" alt="logo_unipa">
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
                                <img src="https://2.bp.blogspot.com/-o6kYQGkFGL4/V_tSrlJT3aI/AAAAAAAAAEw/VbuqPUJLWXMZ5_4xuy_RzIntG-0OWm4YwCLcB/s1600/Neli%2BNurhalisa.jpg" alt="foto_pas_mahasiswa">
                            </div>
                            <div class="col-md-9">
                                <h5>KARTU TANDA PESERTA SESAMA <br>Tahun Akademik <?php echo $peserta->tahunakademik;?></h5>
                                <table class="table tabelidentitas">
                                    <tbody>
                                        <tr>
                                            <td>Nama</td>
                                            <td>:</td>
                                            <td><?php echo $peserta->namalengkap;?></td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Pendaftaran</td>
                                            <td>:</td>
                                            <td><?php echo $peserta->username;?></td>
                                        </tr>
                                            <td>Tempat/Tgl Lahir</td>
                                            <td>:</td>
                                            <td><?php echo $peserta->lokasi_tempatlahir.", ".date_indo($peserta->tgl_lahir);?></td>
                                        </tr>
                                        <tr>
                                            <td>Program Studi</td>
                                            <td>:</td>
                                            <?php
                                            $CI =& get_instance();
                                            $CI->load->model('M_prodi');
                                            //$prodi= $CI->M_prodi->get_by_id($parameter)->result_array(); 
                                            ?>  
                                            <td>
                                                <span>Pil. 1 : <?php echo $CI->M_prodi->get_by_id($peserta->prodipilihan1)->namaprodi;?></span><br>
                                                <span>Pil. 2 : <?php echo $CI->M_prodi->get_by_id($peserta->prodipilihan2)->namaprodi;?></span><br>
                                                <span>Pil. 3 : <?php echo $CI->M_prodi->get_by_id($peserta->prodipilihan3)->namaprodi;?></span>
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
                                <p>(<?php echo $peserta->namalengkap;?>)</p>
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
    </div>


    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
</body>

</html>