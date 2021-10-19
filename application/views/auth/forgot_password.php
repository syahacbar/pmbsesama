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

      <style>
            .card2.card.border-0.px-4.py-5.loginPage {
                  padding: 10px 0 !important;
                  margin: 10px 0;
            }
      </style>
</head>

<body class='snippet-body'>
      <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 mx-auto">
            <div class="card card0 border-0">
                  <div class="container-fluid nav-unipa">
                        <nav class="navbar navbar-expand-lg navbar-light py-3" id="mainNav">
                              <div class="logo-nama">
                                    <img src="<?php echo base_url('assets/frontend/img/logo_unipa.png') ?>" alt=""><a class="navbar-brand" href="<?php echo base_url('') ?>">&nbsp; UNIVERSITAS PAPUA</a>
                              </div>
                              <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                              <div class="collapse navbar-collapse" id="navbarResponsive">
                                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                                          <li class="nav-item"><a class="nav-link" href="<?php echo base_url('auth/login'); ?>"><i class="fa fa-home"></i> Beranda</a></li>
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


                  <div class="row d-flex mt-3">
                        <div class="col-lg-12">
                              <div class="card2 card border-0 px-4 py-5 loginPage">
                                    <div class="row mb-4 px-3">
                                          <h4 class="mb-0 mr-4 mt-2">Portal PMB Online</h4>
                                    </div>
                                    <?php echo form_open("auth/login"); ?>
                                    <div class="row px-3 mb-4">
                                          <small class="text-center">Silakan isi email Anda di kolom di bawah ini.</small>
                                    </div>
                                    <div class="row px-3">
                                          <label class="mb-1">
                                                <h6 class="mb-0 text-sm">Email</h6>
                                          </label>
                                          <input class="mb-4" type="text" name="identity" placeholder="Ketik email Anda di sini">
                                    </div>

                                    <div class="row px-3 loginRegister">
                                          <button type="submit" class="btn btn-blue text-center">Reset Kata Sandi</button>
                                          <small class="font-weight-bold">Kembali ke halaman <a href="<?php echo site_url('register'); ?>" class="text-danger" target="_blank
                                ">DI SINI</a></small>
                                    </div>
                                    <?php echo form_close(); ?>

                              </div>
                        </div>
                  </div>

                  <?php if ($this->ion_auth->logged_in()) { ?>
                        <!-- Modal Logout -->
                        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                          <div class="modal-header">
                                                <h5 class="modal-title" id="logoutModalLabel">Info</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">×</span>
                                                </button>
                                          </div>
                                          <div class="modal-body">Yakin ingin keluar? Pilih "Ya" jika ingin keluar.</div>
                                          <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                                                <a class="btn btn-primary" href="<?php echo site_url('auth/logout'); ?>">Ya</a>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  <?php }  ?>

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
</body>
<!-- <h1><?php // echo lang('forgot_password_heading'); 
            ?></h1>
<p><?php // echo sprintf(lang('forgot_password_subheading'), $identity_label); 
      ?></p>

<div id="infoMessage"><?php //echo $message; 
                        ?></div>


<?php //echo form_open("auth/forgot_password"); 
?>

<p>
      <label for="identity"><?php // echo (($type == 'email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label)); 
                              ?></label> <br />
      <?php //echo form_input($identity); 
      ?>
</p> -->

<!-- Navigation-->


<!-- <p><?php //echo form_submit('submit', lang('forgot_password_submit_btn')); 
            ?></p>

<?php // echo form_close(); 
?> -->

<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>