<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Masuk - Portal PMB Oline UNIPA</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>

    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>

    <!-- Custome CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/login-page.css">
</head>

<body class='snippet-body'>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5 gambarSlider">
                        <div id="demo" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="carousel-caption">
                                        <img src="<?php echo base_url();?>/assets/upload/slider/ecampuz_default_slideshow_82305.jpg" alt="login">
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <img src="<?php echo base_url();?>/assets/upload/slider/rektorat_89137.jpg" alt="login1">
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <img src="<?php echo base_url();?>/assets/upload/slider/rektorat2_40982.jpg" alt="login2">
                                    </div>
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#demo" data-slide="prev"><i class='fas fa-arrow-left'></i></a>
                            <a class="carousel-control-next" href="#demo" data-slide="next"><i class='fas fa-arrow-right'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5 loginPage">
                        <div class="row mb-4 px-3">
                            <h4 class="mb-0 mr-4 mt-2">Portal PMB Online</h4>
                        </div>
                        <?php echo form_open("auth/login");?>
                        <div class="row px-3 mb-4"> 
                            <small class="text-center">Silakan Login Untuk Mengisi Formulir Pendaftaran</small>
                        </div>
                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm">Nomor Pendaftaran</h6></label>
                            <input class="mb-4" type="text" name="identity" placeholder="Ketik nomor pendaftaran di sini"></div>
                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm">Kata Sandi</h6></label>
                            <input type="password" name="password" placeholder="Ketik kata sandi di sini">
                        </div>

                        <div class="row px-3">
                            <div class="custom-control custom-checkbox custom-control-inline"><input id="chk1" type="checkbox" name="chk" class="custom-control-input"><label for="chk1" class="custom-control-label text-sm">Ingatkan Saya</label></div><a href="#" class="ml-auto mb-0 text-sm">Lupas kata sandi?</a>
                        </div>

                        <div class="row px-3 loginRegister">
                            <button type="submit" class="btn btn-blue text-center">MASUK</button>
                            <small class="font-weight-bold">Belum punya akun? <a href="<?php echo site_url('register');?>" class="text-danger ">DAFTAR DI SINI</a></small>
                        </div>
                        <?php echo form_close();?>

                    </div>
                </div>

            </div>


            <div class="row d-flex agendaInformasi">
                <div class="col-md-6">
                    <div class="card2 card border-0 px-4 py-5 agenda">
                        <div class="row mb-4 px-3">
                            <h4 class="mb-0 mr-4 mt-2">Agenda Penerimaan Mahasiswa Baru</h4>
                        </div>
                        <div class="row px-3 mb-4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                <a href="#" class="text-danger">Selengkapnya</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card2 card border-0 px-4 py-5 informasiTerbaru">
                        <div class="row mb-4 px-3">
                            <h4 class="mb-0 mr-4 mt-2">Informasi</h4>
                        </div>
                        <div class="row px-3 mb-4">
                            <div>
                                <h6>SK Penetapan Kelulusan Lokal 2021</h6>
                                <button class="btn btn-info"><i class="fa fa-download"></i> Download</button>
                            </div>
                        </div>
                        <div class="row px-3 mb-4">
                            <div>
                                <h6>Prosedur Registrasi Ulang Calon Mahasiswa Jalur Lokal 2021</h6>
                                <button class="btn btn-info"><i class="fa fa-download"></i> Download</button>
                            </div>
                        </div>
                        <div class="row px-3 mb-4">
                            <div>
                                <a href="#">Selengkapnya ...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-blue py-4 bagianfoter">
                <div class="row px-3"><small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2021. Portal PMB Online</small>
                    <div class="social-contact ml-4 ml-sm-auto">
                        <a href="https://www.facebook.com" class="fab fa-facebook mr-4 text-sm"></a>
                        <a href="https://www.youtube.com/channel/UCMUwurM_TmzyCT_gCMT3Kyw" class="fab fa-youtube mr-4 text-sm"></a>
                        <a href="https://www.twitter.com" class="fab fa-twitter mr-4 text-sm"></a>
                        <a href="https://www.instagram.com" class="fab fa-instagram mr-4 mr-sm-5 text-sm"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
</body>

</html>