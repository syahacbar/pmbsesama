<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Konfirmasi - Portal PMB Oline UNIPA</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/frontend/css/konfirmasi-regis.css" rel="stylesheet" />
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

</head>

<body class='snippet-body'>
    <div class="container">
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

                    <div class="row konfirmasi">
                        <div class="col-md-12">
                            <h5>KONFIRMASI PENDAFTARAN</h5>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <p>Terimakasih atas kepercayaan anda mendaftar di UNIVERSITAS PAPUA. Berikut kami informasikan data pendaftaran anda sebagai berikut :</p>
                        </div>

                        <div class="col-md-12">

                            <table class="table tabelidentitas">
                                <tbody>
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td>:</td>
                                        <td><?php echo $namalengkap;?></td>
                                    </tr>
                                    <tr>
                                        <td>Username</td>
                                        <td>:</td>
                                        <td><strong><?php echo $username;?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td>:</td>
                                        <td><strong><?php echo $password;?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td><?php echo $email;?></td>
                                    </tr>
                                    <tr>
                                        <td>Nomor HP</td>
                                        <td>:</td>
                                        <td><?php echo $nohp;?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-12">
                            <p>Untuk kenyamanan anda, mohon dapat melakukan pembayaran sebelum waktu jatuh tempo pada tanggal 14 Juni 2021</p>
                            <h5>Nominal Pembayaran : Rp 1,00</h5>
                            <p>Informasi lebih lanjut silahkan menghubungi panitia PMB UNIVERSITAS PAPUA. Terimakasih.</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
</body>

</html>