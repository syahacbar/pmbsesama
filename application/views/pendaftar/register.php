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

  <!-- Custom CSS -->
  <link href="<?php echo base_url(); ?>assets/frontend/css/register-page.css" rel="stylesheet" />

</head>

<body class='snippet-body'>
  <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
      <div class="row d-flex">
        <div class="col-lg-6">
          <div class="card2 card border-0 px-4 py-5">
            <div class="row mb-4 px-3">
              <h4 class="mb-0 mr-4 mt-2">Pendaftaran Calon Mahasiswa</h4>
            </div>
            <div class="row px-3 mb-4">
              <small class="text-left">Bidang/isian yang bertanda bintang (*) wajib untuk diisi. Pastikan semua data yang Anda isi sudah benar karena tidak dapat diubah setelah terkirim.</small>
            </div>

            <form method="post" action="<?php echo site_url('auth/create_user'); ?>">
              <div class="row px-3">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nama Lengkap *</label>
                    <input name="namalengkap" type="text" class="form-control" placeholder="Ketikkan nama lengkap Anda di sini" required>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nomor Telp./HP *</label>
                    <input name="nohpregister" type="text" class="form-control" placeholder="Ketikkan nomor HP Anda di sini" required>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Email *</label>
                    <input name="email" type="text" class="form-control" placeholder="Ketikkan email Anda di sini" required>
                    <small>Isi dengan email aktif.</small>
                  </div>
                </div>

                <div class="col-sm-4">
                  <label>Jalur Masuk</label>
                  <div class="form-group">
                    <select name="jalurmasuk" class="form-select" aria-label="Default select example" required>
                      <option value=""> -- Pilih -- </option>
                      <?php foreach ($jalurmasuk as $j) { ?>
                        <option value="<?php echo $j['id']; ?>"><?php echo $j['jalurmasuk']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="col-sm-4">
                  <label>Gelombang</label>
                  <div class="form-group">
                    <select name="gelombang" class="form-select" aria-label="Default select example" required>
                      <option value=""> -- Pilih -- </option>
                      <?php foreach ($gelombang as $g) { ?>
                        <option value="<?php echo $g['id']; ?>"><?php echo $g['gelombang']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>


                <div class="col-sm-4">
                  <label>Kelompok Ujian</label>
                  <div class="form-group">
                    <select name="kelompokujian" class="form-select" aria-label="Default select example" required>
                      <option value=""> -- Pilih -- </option>
                      <?php foreach ($kelompokujian as $k) { ?>
                        <option value="<?php echo $k['id']; ?>"><?php echo $k['kelompokujian']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

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
                  <small class="font-weight-bold">Sudah punya akun? <a href="<?php echo base_url('auth'); ?>" class="text-danger ">LOGIN</a></small>
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