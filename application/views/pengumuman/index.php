<!doctype html>
<html>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Pengumuman - Portal PMB Oline UNIPA</title>
  <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
  <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

  <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>

  <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
  
  <link href="<?php echo base_url(); ?>/assets/backend/sweetalert2/sweetalert2.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>/assets/backend/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/backend/sweetalert2/custom-sweetalert.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <!-- Custom CSS -->
  <link href="<?php echo base_url(); ?>assets/frontend/css/register-page.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/frontend/css/agendainfoannounce.css" rel="stylesheet" />

  <style>
.modal-dialog.modal-lg {
    max-width: 600px;
}

.row.pengumuman .lihatHasil,
button#btnSubmit {
    background-color: #673ab7;
    border: 0;
}

.bg-blue.py-4.bagianfoter {
    background-color: #673ab7;
    box-shadow: 0px 4px 8px 0px #757575;
    position: fixed;
    width: 100%;
    margin: 0;
    left: 0;
    bottom: 0;
}

.row.pengumuman {
    display: flex;
    justify-content: center;
    align-items: center;
}

.col-lg-8 .card {
    padding: 25px !important;
    margin-bottom: 250px;
}

.input-group {
  position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #ced4da;
    padding: 0 0 0 10px;
    border-radius: 5px 0 0 5px;
}


/* style glyph */
.input-group .fas.fa-map-marker-alt {
  position: absolute;
  padding: 10px;
  pointer-events: none;
}

.fa-user {
    margin-right: 10px;
    color: #fff;
}

.modal-header {
    background-color: #673ab7;
}

.modal-header h6,
.modal-header span {
  color: #fff;
}
  </style>
</head>

<body class='snippet-body'>
  <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">

      <!-- Navigation-->
      <?php $this->load->view('pendaftar/navbar'); ?>
      <div class="content-pengumuman">
        <div class="row">
          <div class="col-lg-12">
            <div class="card2 card border-0 px-0 py-0">
              <h4 class="mb-0 mr-4 mt-2 mb-3">Pengumuman Test Penerimaan Mahasiswa Baru (PMB) </h4>
              <div class="alert alert-info alert-dismissible text-muted fade show" role="alert">
                <strong>Penting!</strong> Untuk mengecek pengumuman kelulusan, silakan ketikkan nomor Pendaftaran Anda di kolom No. Pendaftaran berikut ini.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row pengumuman">
        <div class="col-lg-8 col-md-10 col-sm-12 col-xm-12 mb-4 d-flex justify-content-center">
          <div class="card px-2 py-2">
              <strong class="card-title">No. Pendaftaran</strong>
              <div class="row d-flex">
                <div class="col-lg-12">
                  <div class="input-group left-addon">
                    <i class="fas fa-user"></i>     
                    <input type="text" name="nopendaftar" class="form-control" id="nopendaftar" placeholder="Ketik Nomor Pendaftaran Anda Di Sini">
                  </div>
                </div>
                <div class="col-lg-12 mt-3">
                  <button type="button" class="btn btn-info btn-icon-split btnlihatHasil">
                    <i class="fas fa-search"></i> Lihat Hasil
                  </button>
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

    <?php if ($this->ion_auth->logged_in()) { ?>
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
  </div>
  </div>

      <!-- Modal Edit User -->
      <div class="modal fade" id="cekPengumuman" tabindex="-1" role="dialog" aria-labelledby="cekPengumumanLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content modal-lg">
                <div class="modal-header">
                    <h6 class="modal-title" id="cekPengumumanLabel">PESERTA LULUS SELEKSI JALUR SESAMA UNIPA TAHUN 2022</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group d-flex align-items-center">
                                    <label class="col-sm-3 m-0" for="username">Nomor Peserta</label>
                                    <input type="text" class="form-control" id="username" name="username" value="" readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group d-flex align-items-center">
                                    <label class="col-sm-3 m-0" for="first_name">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="namauser" name="first_name" value="" readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group d-flex align-items-center">
                                    <label class="col-sm-3 m-0" for="sekolah">Asal Sekolah</label>
                                    <input type="text" class="form-control" id="sekolah" name="sekolah"  value="" readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group d-flex align-items-center">
                                    <label class="col-sm-3 m-0" for="prodi">Program Studi</label>
                                    <input type="prodi" class="form-control" id="prodi" name="prodi"  value="" readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group d-flex align-items-center">
                                    <label class="col-sm-3 m-0" for="jenjang">Jenjang</label>
                                    <input type="text" class="form-control" id="jenjang" name="jenjang"  value="" readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group d-flex align-items-center">
                                    <label class="col-sm-3 m-0" for="fakultas">Fakultas</label>
                                    <input type="fakultas" class="form-control" id="fakultas" name="fakultas" readonly>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" name="submit" id="btnSubmit" class="btn btn-primary"><i class="fas fa-print"></i> Cetak</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
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

<script type="text/javascript">
  $(document).ready(function() {
    $(document).on("click", ".btnlihatHasil", function() {
			var nopendaftar = $('input[name="nopendaftar"]').val();
      $.ajax({
				url: "<?php echo site_url('pengumuman/cekhasil'); ?>",
				type: "POST",
				data: { nopendaftar:nopendaftar },
        success: function(dataResult) {
					var res = JSON.parse(dataResult);
					if (res.statusCode == 1) {
						$('#cekPengumuman').modal('show');
            $('input[name="username"]').val(res.pendaftar.username);
            $('input[name="namauser"]').val(res.pendaftar.username);
            $('input[name="sekolah"]').val(res.pendaftar.username);
            $('input[name="prodi"]').val(res.pendaftar.username);
            $('input[name="jenjang"]').val(res.pendaftar.username);
            $('input[name="fakultas"]').val(res.pendaftar.username);
					} else {
						Swal.fire({
              text: 'No. Pendaftaran Tidak Ditemukan!',
              icon: 'error',
              showCancelButton: false,
            });
					} 
				}
      });
    });
  });


</script>