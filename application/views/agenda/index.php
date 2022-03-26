<!doctype html>
<html lang="en">

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Agenda - Portal PMB Oline UNIPA</title>
  <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
  <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

  <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>

  <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <!-- Custom CSS -->
  <link href="<?php echo base_url(); ?>assets/frontend/css/register-page.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/frontend/css/agendainfoannounce.css" rel="stylesheet" />
  <style>
    .h-100 {
      height: 100% !important;
      border-radius: 5px;
      object-fit: cover;
    }

    .card-deck.infoAgenda .col-lg-8 {
      padding: 0;
    }

    .g-color {
      color: #57ac42
    }

    .pic {
      height: 70px;
      width: 70px;
      border: 2px solid #ddd;
      border-radius: 5px
    }


    .textmuted {
      color: #797878;
      font-size: 14px
    }

    .btn.btn-primary:hover {
      background-color: #673ab7;
      color: white;
      border: 2px solid transparent
    }

    input::placeholder {
      font-size: 13px;
      padding-left: 5px
    }

    input[type="text"] {
      border: 1px solid #ddd;
      outline: none
    }

    .btn.btn-green {
      background-color: #57ac42;
      color: white;
      font-size: .8rem;
      border: none;
      border-radius: 0
    }

    .btn.btn-green:hover {
      background-color: #9cdf8c;
      color: white
    }

    .nav.nav-tabs .nav-item .nav-link {
      color: #57ac42
    }

    .nav.nav-tabs .nav-item .nav-link:hover {
      background-color: #9cdf8c;
      color: white
    }

    .row.mx-2.mb-3.infoAgenda {
      margin: 10px 0 !important;
      padding: 0 !important;
      /* box-shadow: 0 2px 3px rgb(10 10 10 / 10%), 0 0 0 1px rgb(10 10 10 / 10%); */
    }

    .row.mx-2.mb-3.infoAgenda .border-top {
      border-top: 0 !important;
    }

    .row.mx-2.mb-3.infoAgenda .d-flex.align-items-center.justify-content-center.ms-auto {
      justify-content: end !important;
    }

    .row.mt-3.ms-1 {
      box-shadow: 0 2px 3px rgb(10 10 10 / 10%), 0 0 0 1px rgb(10 10 10 / 10%);
      padding: 10px;
    }

    .infoAgenda .alert.alert-info.alert-dismissible.fade.show {
      margin-bottom: 0;
    }

    .infoAgenda .col-md-3.mb-lg-0.mb-2.ms-0.photo {
      padding-left: 0;
    }
  </style>
</head> 

<body class='snippet-body'>
  <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">

      <!-- Navigation-->
      <?php $this->load->view('pendaftar/navbar'); ?>


      <div class="row d-flex">
        <div class="col-lg-12 infoAgenda">
          <div class="card2 card border-0 px-0 py-0">
            <h4 class="mb-0 mr-4 mt-2 mb-3">Agenda Penerimaan Mahasiswa Baru</h4>
            <div class="alert alert-info alert-dismissible fade show" role="alert">
              Berikut beberapa agenda yang berkaitan dengan Penerimaan Mahasiswa Baru Jalur Sesama
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="row mx-2 mb-3 infoAgenda">
        <?php foreach ($agenda as $ag) { ?>
          <div class="col-md-12 mb-3">
            <div class="border-top">
              <div class="row mt-3 ms-1">
                <div class=" col-md-3 mb-lg-0 mb-2 ms-0 photo"> <img src="<?php echo base_url('assets/upload/agenda/') . $ag['gambar']; ?>" alt="" class="w-100 h-100"> </div>
                <div class="col-md-8 col-12 d-flex flex-column px-0">
                  <h5><?php echo $ag['judul']; ?></h5>
                  <div class="px-lg-2 pb-4 textmuted"><?php echo $ag['isi_agenda']; ?>
                    <a href="<?php echo base_url('agenda/detail/') . $ag['id']; ?>" target="_blank" class="btn btn-info btn-icon-split btn-sm btnAgenda">
                      <span class="text">Selengkapnya </span>
                      <span class="icon text-white-50 fasbtnAgenda">
                        <i class="fas fa-arrow-right"></i>
                      </span>
                    </a>
                  </div>
                  <!-- 
                <div class="d-flex align-items-center justify-content-center ms-auto">
                </div> -->
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>


      <?php if ($this->ion_auth->logged_in()) { ?>
        <!-- Modal Logout -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Info</h5>
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

  <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>