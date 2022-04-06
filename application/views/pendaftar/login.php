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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/login-page.css">

    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

</head>

<body class='snippet-body'>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 mx-auto">
        <div class="card card0 border-0">
            <!-- Navigation-->
            <?php
            if (isset($_view) && $_view)
                $this->load->view($_view);
            ?>

            <!-- Slider dan Login -->
            <?php if (!$this->ion_auth->logged_in()) { ?>
                <div class="row d-flex">
                    <div class="col-lg-6">
                        <div class="card2 card border-0 px-4 py-5 gambarSlider">
                            <div id="demo" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <?php 
                                        if(!empty($slider))
                                        {
                                            $i = 0;
                                            foreach ($slider as $sl) { 
                                            $i++;
                                    ?>
                                        <div class="carousel-item <?php echo ($i==1) ? 'active' : ''; ?>">
                                            <div class="carousel-caption">
                                                <img class="img-thumbnail img-fluid" src="<?php echo base_url('assets/upload/slider/') . $sl['gambar']; ?>">
                                                
                                            </div>
                                        </div>
                                    <?php 
                                            }
                                        } else {
                                    ?>
                                        <div class="carousel-item <?php echo ($i==1) ? 'active' : ''; ?>">
                                            <div class="carousel-caption">
                                                <img width="100" height="150" src="<?php echo base_url('assets/frontend/img/noimage.png'); ?>" alt="">
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>

                                <a class="carousel-control-prev" href="#demo" data-slide="prev"><i class='fas fa-arrow-left'></i></a>
                                <a class="carousel-control-next" href="#demo" data-slide="next"><i class='fas fa-arrow-right'></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card2 card border-0 px-4 py-5 loginPage">
                            <div class="row mb-4 px-3">
                                <h4 class="mb-0 mr-4 mt-2">Portal PMB Online UNIPA</h4>
                            </div>
                            <p><?php echo $this->session->flashdata('message'); ?></p>
                            <?php echo form_open("auth/login"); ?>
                            <div class="row px-3 mb-4">
                                <small class="text-center">Silakan Login Untuk Melengkapi Formulir Pendaftaran</small>
                            </div>
                            <div class="row px-3">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Nomor Pendaftaran</h6>
                                </label>
                                <input class="mb-4" type="text" name="identity" placeholder="Ketik nomor pendaftaran di sini">
                            </div>
                            <div class="row px-3">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Kata Sandi</h6>
                                </label>
                                <input type="password" name="password" placeholder="Ketik kata sandi di sini">
                            </div>

                            <div class="row px-3 remember-password">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input id="chk1" type="checkbox" name="chk" class="custom-control-input">
                                    <label for="chk1" class="custom-control-label text-sm">Ingatkan Saya</label>
                                </div>
                                <a href="<?php echo base_url('auth/forgot_password') ?>" class="ml-auto mb-0 text-sm">Lupas kata sandi?</a>
                            </div>

                            <div class="row px-3 loginRegister">
                                <button type="submit" class="btn btn-blue text-center">MASUK</button>
                                <small class="font-weight-bold">Belum punya akun? <a href="<?php echo site_url('pmbsesama/register'); ?>" class="text-danger" target="_blank
                                ">DAFTAR DI SINI</a></small>
                            </div>
                            <?php echo form_close(); ?>

                        </div>
                    </div>
                </div>
            <?php } else { ?>

                <!-- Slider full -->
                <div class="row d-flex">
                    <div class="col-lg-6">
                        <div class="card2 card border-0 px-4 py-5 gambarSlider">
                            <div id="demo" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                      <?php 
                                      if(!empty($slider))
                                      {
                                        $i = 0;
                                        foreach ($slider as $sl) { 
                                        $i++;
                                        ?>
                                        <div class="carousel-item <?php echo ($i==1) ? 'active' : ''; ?>">
                                            <div class="carousel-caption">
                                                    <img alt="<?php echo $i;?>" src="<?php echo base_url().'assets/upload/slider/'.$sl['gambar']; ?>">
                                                

                                            </div>
                                        </div>
                                     <?php
                                 }
                                      } else {
                                        ?>
                                        <div class="carousel-item active">
                                            <div class="carousel-caption">
                                                    <img width="100" height="150" src="<?php echo base_url('assets/frontend/img/noimage.png'); ?>" alt="">

                                            </div>
                                        </div>
                                <?php } ?>
                                    
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
                            <?php if ($this->ion_auth->in_group('members')) { ?>
                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                    Sesi login Anda belum berakhir. Pastikan semua data telah diisi dengan benar.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="row px-3 loginRegister">
                                    <small class="font-weight-bold">Silakan Cek/Lengkapi Biodata <a href="<?php echo site_url('register/isibiodata'); ?>" class="text-danger ">DI SINI</a></small>
                                </div>
                            <?php } else { ?>

                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                    Sesi login Anda belum berakhir. Silahkan klik tombol keluar untuk mengakhiri sesi.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="row px-3 loginRegister">
                                    <small class="font-weight-bold">Kembali ke panel Admin <a href="<?php echo site_url('administrator'); ?>" class="text-danger ">DI SINI</a></small>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            <?php } ?>

            <div class="row d-flex agendaInformasi">
                <div class="col-md-6 mb-3">
                    <div class="card2 card border-0 px-4 py-5 agenda">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row mb-4 px-3">
                                    <h4 class="mb-0 mr-4 mt-2">Agenda</h4>
                                </div>
                                <table class="table">
                                    <tbody>
                                        <?php foreach ($agenda as $ag) { ?>
                                            <tr>
                                                <td>
                                                    <h6><?php echo $ag['judul']; ?></h6>
                                                    <p class="textmuted"><?php echo $ag['isi_agenda']; ?></p>
                                                </td>
                                                <td>

                                                    <a href="<?php echo base_url('pmbsesama/agenda/') . $ag['id']; ?>" class="btn btn-info btn-sm" target="_blank">Lihat</a>
                                                    </p>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-12 px-0 py-0">
                            <div>
                                <a href="<?php echo site_url('pmbsesama/agenda') ?>">Agenda Lainnya ...</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card2 card border-0 px-4 py-5 informasiTerbaru">
                        <div class="row mb-4 px-3">
                            <h4 class="mb-0 mr-4 mt-2">Informasi</h4>
                        </div>
                        <table class="table">
                            <tbody>
                                <?php foreach ($informasi as $in) : ?>
                                    <tr>
                                        <td><?php echo $in['judul']; ?></td>
                                        <td width="100px">
                                            <a href="<?php echo base_url('assets/upload/informasi/') . $in['file']; ?>" class="btn btn-info btn-icon-split btn-sm downloadform" target="_blank">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-download"></i>
                                                </span>
                                                <span class="text">Unduh</span>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="row px-3 mb-4">
                            <div>
                                <a href="<?php echo site_url('pmbsesama/informasi') ?>" >Informasi Lainnya ...</a>
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

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>