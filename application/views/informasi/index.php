<!doctype html>
<html>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Informasi - Portal PMB Oline UNIPA</title>
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
    .bg-blue.py-4.bagianfoter {
    background-color: #673ab7;
    box-shadow: 0px 4px 8px 0px #757575;
    position: fixed;
    width: 100%;
    margin: 0;
    left: 0;
    bottom: 0;
}
  </style>
</head>

<body class='snippet-body'>
  <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">

      <!-- Navigation-->
      <?php $this->load->view('pendaftar/navbar'); ?>
      <div class="row d-flex">
        <div class="col-lg-12">
          <div class="card2 card border-0 px-0 py-0">
            <h4 class="mb-0 mr-4 mt-2 mb-3">Informasi Panduan Penerimaan Mahasiswa Baru (PMB)</h4>
            <div class="alert alert-info alert-dismissible fade show" role="alert">
              <strong>Penting!</strong> Silakan unduh file-file panduan di bawah ini.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="row d-flex unduhInformasi">
        <div class="col-lg-12">
          <table class="table">
            <tbody>
              <?php $no = 1;
              foreach ($informasi as $in) { ?>
                <tr>
                  <td width="20px"><?php echo $no++; ?></td>
                  <td><?php echo $in['judul']; ?></td>
                  <td width="110px">
                    <a href="<?php echo base_url('assets/upload/informasi/') . $in['file']; ?>" target="_blank" class="btn btn-info btn-icon-split btn-sm downloadform">
                      <span class="icon text-white-50">
                        <i class="fas fa-download"></i>
                      </span>
                      <span class="text">Unduh</span>
                    </a>
                  </td>
                <?php } ?>
                </tr>
                <!-- <tr>
                <th width="20px" scope="row">2</th>
                <td>Informasi Panduan Penerimaan Mahasiswa Baru (PMB)</td>
                <td width="110px">
                  <a href="#" class="btn btn-info btn-icon-split btn-sm downloadform">
                    <span class="icon text-white-50">
                      <i class="fas fa-download"></i>
                    </span>
                    <span class="text">Unduh</span>
                  </a>
                </td>
              </tr>
              <tr>
                <th width="20px" scope="row">3</th>
                <td>Informasi Panduan Penerimaan Mahasiswa Baru (PMB)</td>
                <td width="110px">
                  <a href="#" class="btn btn-info btn-icon-split btn-sm downloadform">
                    <span class="icon text-white-50">
                      <i class="fas fa-download"></i>
                    </span>
                    <span class="text">Unduh</span>
                  </a>
                </td>
              </tr> -->
            </tbody>
          </table>
        </div>
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