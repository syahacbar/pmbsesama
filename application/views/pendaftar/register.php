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

  <script src='https://www.google.com/recaptcha/api.js?hl=id'></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <!-- Custom CSS -->
  <link href="<?php echo base_url(); ?>assets/frontend/css/register-page.css" rel="stylesheet" />

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
              <li class="nav-item"><a class="nav-link" href="<?php echo site_url('auth/login'); ?>"><i class="fa fa-home"></i> Beranda</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo site_url('agenda'); ?>"><i class="fa fa-calendar-o"></i> Agenda</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo site_url('informasi'); ?>"><i class="fa fa-info-circle"></i> Informasi</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo site_url('pengumuman'); ?>"><i class="fa fa-bullhorn"></i> Pengumuman</a></li>


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
                    <input name="namalengkap" type="text" class="form-control" placeholder="Ketikkan nama lengkap Anda di sini" value="<?php echo ($nama_lengkap) ? $nama_lengkap : ''; ?>" required>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nomor Telp./HP *</label>
                    <input name="nohpregister" type="text" class="form-control" placeholder="Ketikkan nomor HP Anda di sini" value="<?php echo ($nohpregister) ? $nohpregister : ''; ?>" required>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Email *</label>
                    <input name="email" type="text" class="form-control" placeholder="Ketikkan email Anda di sini" value="<?php echo ($email) ? $email : ''; ?>" required>
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

                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Kode Verifikasi</label>
                    <?php echo $recaptcha; ?>
                    <small id="captchahelp" class="form-text text-danger"><?php echo ($errorcaptcha != NULL) ? $errorcaptcha : ""; ?></small>
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
                    <img src="<?php echo base_url(); ?>/assets/upload/slider/rektorat_unipa.jpg" alt="login">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="carousel-caption">
                    <img src="<?php echo base_url(); ?>/assets/upload/slider/banner2-1-scaled.jpg" alt="login1">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="carousel-caption">
                    <img src="<?php echo base_url(); ?>/assets/upload/slider/banner-scaled1.jpg" alt="login2">
                  </div>
                </div>
              </div>

              <!-- <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="carousel-caption">
                    <img class="img-thumbnail img-fluid" src="<?php // echo base_url('assets/upload/slider/rektorat_unipa.jpg'); 
                                                              ?>">
                  </div>
                </div>

                <?php // foreach ($slider as $sl) { 
                ?>
                  <div class="carousel-item">
                    <div class="carousel-caption">
                      <?php // if ($sl) { 
                      ?>
                        <img class="img-thumbnail img-fluid" src="<?php // echo base_url('assets/upload/slider/') . $sl['gambar']; 
                                                                  ?>">
                      <?php // } else { 
                      ?>
                        <img width="100" height="150" src="<?php // echo base_url('assets/upload/slider/no-image.png'); 
                                                            ?>" alt="">
                      <?php // } 
                      ?>

                    </div>
                  </div>
                <?php // } 
                ?>
              </div> -->


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