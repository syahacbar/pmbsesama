<!doctype html>
<html>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Registrasi - Portal PMB Oline UNIPA</title>
  <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
  <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

  <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>

  <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <!-- Custom CSS -->
  <link href="<?php echo base_url(); ?>assets/frontend/css/register-page.css" rel="stylesheet" />
  <style>
    img.img-profile {
      width: 75px;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
    }

    .col-sm-6.profile {
      display: flex;
      justify-content: end;
      align-items: center;
    }

    @media (max-width: 570px) {
      .col-sm-12.fotopas .col-sm-6 {
        width: 50%;
      }
    }

    /* NAVIGATION BAR */
    .navbar-brand {
      padding: 14px 20px;
      font-size: 16px
    }

    .navbar-nav {
      width: 100%
    }

    .nav-item {
      padding: 0;
      text-align: center
    }

    .nav-link {
      padding-bottom: 10px
    }

    .v-line {
      background-color: gray;
      width: 1px;
      height: 20px
    }

    .navbar-collapse.collapse.in {
      display: block !important
    }

    @media (max-width: 576px) {
      .nav-item {
        width: 100%;
        text-align: left
      }

      .v-line {
        display: none
      }
    }

    div#navbarNav ul {
      right: 0 !important;
      margin-right: 0;
      display: flex;
      justify-content: end;
    }

    .dropdown-item {
      display: block;
      width: 100%;
      clear: both;
      font-weight: 400;
      color: #212529;
      text-align: inherit;
      white-space: nowrap;
      background-color: transparent;
      border: 0;
      padding: 10px 15px;
      text-align: right;
    }

    .carousel-caption {
      position: initial !important;
      z-index: 10;
      padding: 0;
      color: rgba(78, 77, 77, 0.856);
      text-align: center;
      font-size: 1.2rem;
      font-style: italic;
      font-weight: bold;
      line-height: 2rem;
    }

    .social-contact.ml-4.ml-sm-auto a {
      color: #fff;
    }

    div#navbarNav a.nav-link i {
      margin-right: 5px;
      color: #000;
      font-size: 16px;
    }

    div#navbarNav a.nav-link {
      color: #000;
      font-size: 16px;
    }

    li.nav-item.active a {
      color: #673ab7 !important;

    }

    li.nav-item.active a i {
      color: #673ab7 !important;
    }

    @media (min-width: 886px) {
      .navbar-expand-sm .navbar-toggler {
        display: none !important;
      }
    }

    .navbar-toggler {
      padding: 0 !important;
      font-size: 1.25rem;
      line-height: 1;
      background-color: transparent;
      border: 1px solid transparent;
      border-radius: .25rem;
      margin: 0 !important;
    }

    @media (min-width: 886px) {
      .navbar-expand-sm .navbar-collapse {
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
      }
    }

    .navbar-light .navbar-toggler-icon {
      background-image: url(assets/frontend/img/nav-button.png) !important;
      font-size: 24px;

    }

    .navbar-light .navbar-toggler {
      border: 2px solid #673ab7 !important;
      padding: 2px 8px !important;
    }

    .row.px-3.remember-password {
      margin-top: 15px;
    }

    .navbar-dark .navbar-brand {
      color: #000;
      font-weight: bold;
      padding: 0;
    }

    .bg-black {
      background-color: #ffffff;
    }

    #logo {
      width: 50px;
      height: auto;
      border-radius: 4px;
    }

    body.snippet-body {
      background-color: transparent;
      background-image: url(assets/frontend/img/pmb-bg.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }

    @media (min-width: 990px) {
      .container-fluid.px-1.px-md-5.px-lg-1.px-xl-5.py-5.mx-auto {
        padding: 0 3rem 3rem 3rem !important;
        margin: 0 !important;
      }
    }

    .card2.card.border-0.px-4.py-5.register-card {
      padding-top: 0 !important;
    }

    .container-fluid.px-1.px-md-5.px-lg-1.px-xl-5.py-5.mx-auto .card.card0.border-0 {
      box-shadow: none;
      width: 90%;
      margin: 0 5%;
      padding-top: 25px;
    }

    @media (min-width: 1200px) {

      .pl-xl-5,
      .px-xl-5 {
        padding: 0 10rem !important;
      }
    }

    .navbar-dark .navbar-brand:focus,
    .navbar-dark .navbar-brand:hover {
      color: #000;
    }

    .container-fluid {
      margin-top: 20px;
    }

    .card.px-0.pt-4.pb-0.mt-3.mb-3 {
      border: 0;
    }

    div#navbarNav ul a.nav-link svg {
      margin-right: 5px;
    }

    @media (min-width: 1032px) {
      .navbar-expand-sm .navbar-toggler {
        display: none;
      }
    }

    .container-fluid.px-1.px-md-5.px-lg-1.px-xl-5.mx-auto .card.card0.border-0 {
      box-shadow: none;
      width: 80%;
      margin: 0 10%;
      padding-top: 25px;
    }

    .navbar-collapse.collapse.show li.nav-item {
      width: 100%;
      /* text-align: right; */
      padding: 10px 0;
    }

    .social-contact.ml-4.ml-sm-auto a {
      color: #fff;
    }

    @media (min-width: 992px) {
      .navbar-expand-lg .navbar-collapse {
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
        justify-content: end;
      }
    }

    div#navbarResponsive i {
      margin-right: 5px;
      color: #673ab7;
    }

    div#navbarResponsive a {
      color: #673ab7;
    }

    .navbar-collapse.collapse.show a {
      text-align: left;
      padding: 10px 0 !important;
    }

    .container-fluid.nav-unipa {
      padding: 0 !important;
    }

    nav#mainNav {
      padding: 0 !important;
    }

    .collapse.navbar-collapse a.nav-link {
      padding: 0 20px !important;
    }

    .card2.card.border-0.px-4.py-5.loginPage {
      padding: 10px 0 !important;
      margin: 10px 10px 10px 15px;
    }

    .navbar-collapse.collapse.show a.nav-link {
      padding: 0 !important;
    }

    @media (max-width: 670px) {
      .container-fluid.px-1.px-md-5.px-lg-1.px-xl-5.mx-auto .card.card0.border-0 {
        box-shadow: none;
        width: 90%;
        margin: 0 5%;
        padding-top: 25px;
      }
    }

    nav.navbar.navbar-expand-lg.navbar-light.fixed-top.py-3.navbar-shrink {
      background-color: #fff;
    }

    nav.navbar.navbar-expand-lg.navbar-light.fixed-top.py-3 {
      background-color: #fff;
    }

    @media (max-width: 386px) {
      a.navbar-brand {
        display: none;
      }
    }

    .card.px-0.pb-0.mb-3 {
      border: 0;
    }

    .collapse.navbar-collapse ul.navbar-nav.ms-auto.my-2.my-lg-0 li {
      display: flex;
      justify-content: center !important;
      align-items: center;
    }

    .collapse.navbar-collapse.show ul.navbar-nav.ms-auto.my-2.my-lg-0 li {
      display: flex;
      justify-content: start !important;
      align-items: center;
    }

    .collapse.navbar-collapse ul.navbar-nav.ms-auto.my-2.my-lg-0 {
      display: flex;
      justify-content: end !important;
      align-items: center;
    }

    .navbar-collapse.collapse.show ul.navbar-nav.ms-auto.my-2.my-lg-0 {
      display: flex;
      justify-content: start !important;
      align-items: center;
    }

    .navbar-light .navbar-brand {
      color: rgba(0, 0, 0, .9);
      font-weight: bold;
      padding: 14px 15px !important;
    }

    .modal-backdrop.show {
      opacity: 0;
    }

    /* Modal Logout */
    .modal-backdrop.fade {
      opacity: 0;
    }

    .modal-backdrop {
      position: initial;
      top: 0;
      left: 0;
      z-index: 999 !important;
      width: 100vw;
      height: 100vh;
    }

    div#logoutModal {
      backdrop-filter: brightness(0.5);
    }

    button.navbar-toggler.navbar-toggler-right.collapsed {
      border: 2px solid #fd7e14 !important;
      outline: none !important;
    }

    button.navbar-toggler.navbar-toggler-right.collapsed:focus {
      border: 0 !important;
    }

    .card2.card.border-0.px-4.py-5 {
      border: 0 !important;
    }

    .register-card {
      margin: 30px 0 0 0 !important;
    }
  </style>

</head>

<body class='snippet-body'>
  <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
      <!-- Navigation-->
      <div class="container-fluid nav-unipa">
        <nav class="navbar navbar-expand-lg navbar-light py-3" id="mainNav">
          <div class="logo-nama">
            <img src="<?php echo base_url('assets/frontend/img/logo_unipa.png') ?>" alt=""><a class="navbar-brand" href="<?php echo base_url('') ?>">&nbsp; UNIVERSITAS PAPUA</a>
          </div>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
              <li class="nav-item"><a class="nav-link" href="<?php echo base_url('auth/login') ?>"><i class="fa fa-home"></i> Beranda</a></li>
              <li class="nav-item"><a class="nav-link" href="#services"><i class="fa fa-calendar-o"></i> Agenda</a></li>
              <li class="nav-item"><a class="nav-link" href="#portfolio"><i class="fa fa-info-circle"></i> Informasi</a></li>
              <li class="nav-item"><a class="nav-link" href="#contact"><i class="fa fa-bullhorn"></i> Pengumuman</a></li>

              <?php if ($this->ion_auth->logged_in()) { ?>

                <li class="nav-item">
                  <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw text-gray-400"></i>
                    Keluar
                  </a>
                </li>
              <?php }  ?>

            </ul>
          </div>
        </nav>
      </div>

      <div class="row d-flex">
        <div class="col-lg-6">
          <div class="card2 card border-0 px-4 py-5 register-card">
            <div class="row mb-4 px-3">
              <h4 class="mb-0 mr-4 mt-2">Pendaftaran Calon Mahasiswa</h4>
            </div>
            <div class="row px-3 mb-4">
              <small class="text-left">Bidang/isian yang bertanda bintang (*) wajib untuk diisi. Pastikan semua data yang Anda isi sudah benar karena tidak dapat diubah setelah terkirim.</small>
            </div>

            <form method="post" action="<?php echo site_url('auth/create_user'); ?>">
              <div class="row px-3">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nama Lengkap *</label>
                    <input name="namalengkap" type="text" class="form-control" placeholder="Ketikkan nama lengkap Anda di sini" required>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nomor Telp./HP *</label>
                    <input name="nohpregister" type="text" class="form-control" placeholder="Ketikkan nomor HP Anda di sini" required>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Email *</label>
                    <input name="email" type="text" class="form-control" placeholder="Ketikkan email Anda di sini" required>
                    <small>Isi dengan email aktif.</small>
                  </div>
                </div>

                <div class="col-sm-6">
                  <label>Jalur Masuk</label>
                  <div class="form-group">
                    <select name="jalurmasuk" class="form-select" aria-label="Default select example" disabled>
                      <option value=""> -- Pilih -- </option>
                      <?php
                      $selectjalurmasuk = 'SESAMA';

                      foreach ($jalurmasuk as $j) { ?>
                        <option value="<?php echo $j['id']; ?>" <?php echo ($j['jalurmasuk'] == $selectjalurmasuk) ? 'selected' : ''; ?>><?php echo $j['jalurmasuk']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <input type="hidden" name="jalurmasuk" value="3">
                <input type="hidden" name="gelombang" value="1">
                <input type="hidden" name="kelompokujian" value="1">

                <!-- <div class="col-sm-4">
                  <label>Gelombang</label>
                  <div class="form-group">
                    <select name="gelombang" class="form-select" aria-label="Default select example" required>
                      <option value=""> -- Pilih -- </option>
                      <?php //foreach ($gelombang as $g) { 
                      ?>
                        <option value="<?php //echo $g['id']; 
                                        ?>"><?php //echo $g['gelombang']; 
                                            ?></option>
                      <?php // } 
                      ?>
                    </select>
                  </div>
                </div>


                <div class="col-sm-4">
                  <label>Kelompok Ujian</label>
                  <div class="form-group">
                    <select name="kelompokujian" class="form-select" aria-label="Default select example" required>
                      <option value=""> -- Pilih -- </option>
                      <?php // foreach ($kelompokujian as $k) { 
                      ?>
                        <option value="<?php // echo $k['id']; 
                                        ?>"><?php // echo $k['kelompokujian']; 
                                            ?></option>
                      <?php //} 
                      ?>
                    </select>
                  </div>
                </div> -->

                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Kode Verifikasi</label>
                    <input name="captcha" type="text" class="form-control" placeholder="" required>
                  </div>
                </div>

                <div class="col-sm-12">
                  <label>Konfirmasi *</label>
                  <div class="row px-3 mb-4">
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input id="chk1" type="checkbox" name="chk" class="custom-control-input" required>
                      <label for="chk1" class="custom-control-label text-sm">Dengan ini menyatakan bahwa semua data yang diisikan adalah benar serta menyetujui semua syarat dan ketentuan.</label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mb-3 px-3 loginRegister">
                <div class="col-sm-4">
                  <button type="submit" class="btn btn-blue text-center">DAFTAR</button>
                </div>
                <div class="">
                  <small class="font-weight-bold">Sudah punya akun? <a href="<?php echo site_url('auth'); ?>" class="text-danger ">LOGIN</a></small>
                </div>
              </div>
          </div>
          </form>
        </div>

        <div class="col-lg-6 slider">
          <div class="card2 card border-0 px-4 py-5 gambarSlider">
            <div id="demo" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="carousel-caption">
                    <img src="<?php echo base_url(); ?>/assets/upload/slider/ecampuz_default_slideshow_82305.jpg" alt="login">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="carousel-caption">
                    <img src="<?php echo base_url(); ?>/assets/upload/slider/rektorat_89137.jpg" alt="login1">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="carousel-caption">
                    <img src="<?php echo base_url(); ?>/assets/upload/slider/rektorat2_40982.jpg" alt="login2">
                  </div>
                </div>
              </div>

              <a class="carousel-control-prev" href="#demo" data-slide="prev"><i class='fas fa-arrow-left'></i></a>
              <a class="carousel-control-next" href="#demo" data-slide="next"><i class='fas fa-arrow-right'></i></a>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>