<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Formulir - Portal PMB Oline UNIPA</title>
    
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/select2-bootstrap.min.css">

    <link href="<?php echo base_url(); ?>/assets/backend/sweetalert2/sweetalert2.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>/assets/backend/sweetalert2/sweetalert2.min.js"></script>

    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/form-pendaftaran.css">

    <link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>
  <script src='https://www.google.com/recaptcha/api.js?hl=id'></script>


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
            background-image: url(../assets/frontend/img/nav-button.png) !important;
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

        .container-fluid.px-1.px-md-5.px-lg-1.px-xl-5.py-5.mx-auto {
            background-image: url(http://simunipa.unipa.ac.id/gtadmisi/assets/versi_3.0/img/background.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
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

        /* div#logoutModal {
            backdrop-filter: brightness(0.5);
        } */

        button.navbar-toggler.navbar-toggler-right.collapsed {
            border: 2px solid #fd7e14 !important;
            outline: none !important;
        }

        button.navbar-toggler.navbar-toggler-right.collapsed:focus {
            border: 0 !important;
        }

        /* Dropzone */
        .dropzone {
            min-height: 150px;
            border: 0;
            background: white;
            padding: 0;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        div#exampleModal {
            backdrop-filter: brightness(0.5);
        }

        form#image-upload .dz-message:before {
            content: " ";
            background-image: url(../assets/upload/fotopas/profile_default.svg) !important;
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            display: block;
            height: 80px;
            margin: 10px 0;
        }

        .dropzone .dz-message {
            text-align: center;
            margin: 0;
        }

        .nama-smta .select2-container--bootstrap {
            width: 100% !important;
        }

        .nama-smta span.select2-selection.select2-selection--single {
            height: 40px !important;
        }
    </style>
</head>

<body class='snippet-body'>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-9 col-md-10 col-lg-10 col-xl-8 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pb-0 mb-3">
                    <!-- Navigation-->
                    <!-- <?php
                            // if (isset($_view) && $_view)
                            //   $this->load->view($_view);
                            ?> -->

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
                </div>

                <div class="card px-0 pt-4 pb-0 mt-3 mb-3 form-wizard">
                    <h2 id="heading">FORMULIR BIODATA MAHASISWA BARU <?php echo $username; ?></h2>
                    <p>Lengkapi data di bawah ini dengan benar</p>
                    <form id="msform">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account">
                                <strong>Informasi Pribadi</strong>
                            </li>
                            <li id="personal">
                                <strong>Riwayat Pendidikan</strong>
                            </li>
                            <li id="payment">
                                <strong>Data Orang Tua</strong>
                            </li>
                            <li id="wali">
                                <strong>Data Wali</strong>
                            </li>
                            <li id="confirm">
                                <strong>Verifikasi</strong>
                            </li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br>
                        <!-- fieldsets -->
                        <?php foreach ($biodata as $row) : ?>

                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fs-title">Data Pribadi</h2>
                                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                Pastikan data yang Anda isi telah sesuai dengan data yang tercantum pada ijazah. Bidang/isian yang bertanda bintang (*) wajib untuk diisi.
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 fotopas">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Pas Foto</label><br>
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaluploadfoto">Unggah Foto</button>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 profile">
                                                    <?php form_open_multipart('user/next1') ?>
                                                    <?php if ($row['fotoprofil'] == NULL) { ?>
                                                        <img class="img-profile" src="<?php echo base_url('/assets/upload/profile/profil_default.svg'); ?>">
                                                    <?php } else { ?>
                                                        <img class="img-profile" src="<?php echo base_url('/assets/upload/profile/') . $row['fotoprofil']; ?>">
                                                    <?php } ?>
                                                </div>

                                            </div>
                                        </div>

                                        <div class=" col-sm-6">
                                            <div class="form-group">
                                                <label>Nama Lengkap *</label>
                                                <input name="namalengkap" type="text" class="form-control" placeholder="" value="<?php echo strtoupper($row['namalengkap']); ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>NISN (Nomor Induk Siswa Nasional) *</label>
                                                <input name="nisn_pendaftar" id="nisn_pendaftar" type="text" class="form-control" placeholder="" value="<?php echo $row['nisn_pendaftar']; ?>" required>
                                                <small>Ketik NISN Anda.</small>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 jeniskelamin">
                                            <label>Jenis Kelamin</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input jenkel" type="radio" name="jeniskelamin" id="jeniskelamin" value="Laki-laki" <?php echo ($row['jeniskelamin'] == 'Laki-laki') ? 'checked' : ''; ?>>
                                                        <label class="form-check-label" for="exampleRadios1">Laki-Laki</label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input jenkel" type="radio" name="jeniskelamin" id="jeniskelamin" value="Perempuan" <?php echo ($row['jeniskelamin'] == 'Perempuan') ? 'checked' : ''; ?>>
                                                        <label class="form-check-label" for="exampleRadios1">Perempuan</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>NIK/No. KTP *</label>
                                                <input id="nik" name="nik" type="text" class="form-control" placeholder="" required value="<?php echo $row['nik']; ?>">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Agama</label>
                                                <select id="agama" name="agama" class="form-select" aria-label="Default select example">
                                                    <option <?php echo ($row['agama'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                    <?php foreach ($agama as $ag) : ?>
                                                        <option value="<?php echo $ag['idagama']; ?>" <?php echo ($row['agama'] == $ag['idagama']) ? 'selected' : ''; ?>><?php echo $ag['agama']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Suku *</label>
                                                <select name="suku" id="suku" class="form-select" aria-label="Default select example">
                                                    <option <?php echo ($row['suku'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                    <option value="Papua" <?= $row['suku'] == 'Papua' ? ' selected="selected"' : ''; ?>>Papua</option>
                                                    <option value="Non Papua" <?= $row['suku'] == 'Non Papua' ? ' selected="selected"' : ''; ?>>Non Papua</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Status Menikah *</label>
                                                <select id="statusmenikah" name="statusmenikah" class="form-select" aria-label="Default select example">
                                                    <option <?php echo ($row['statusmenikah'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                    <?php foreach ($statusmenikah as $sm) : ?>
                                                        <option value="<?php echo $sm['idstatusmenikah']; ?>" <?php echo ($row['statusmenikah'] == $sm['idstatusmenikah']) ? 'selected' : ''; ?>><?php echo $sm['status']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fs-title">Pilihan Program Studi</h2>
                                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                Bidang/isian yang bertanda bintang (*) wajib untuk diisi.
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Pilihan 1 *</label>
                                                <select id="prodipilihan1" name="prodipilihan1" class="form-select" aria-label="Default select example">
                                                    <option <?php echo ($row['prodipilihan1'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                    <?php foreach ($prodi as $pr1) : ?>
                                                        <option value="<?php echo $pr1['idprodi']; ?>" <?php echo ($row['prodipilihan1'] == $pr1['idprodi']) ? 'selected' : ''; ?>><?php echo $pr1['namaprodi']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Pilihan 2</label>
                                                <select id="prodipilihan2" name="prodipilihan2" class="form-select" aria-label="Default select example">
                                                    <option <?php echo ($row['prodipilihan2'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                    <?php foreach ($prodi as $pr2) : ?>
                                                        <option value="<?php echo $pr2['idprodi']; ?>" <?php echo ($row['prodipilihan2'] == $pr2['idprodi']) ? 'selected' : ''; ?>><?php echo $pr2['namaprodi']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Pilihan 3</label>
                                                <select id="prodipilihan3" name="prodipilihan3" class="form-select" aria-label="Default select example">
                                                    <option <?php echo ($row['prodipilihan3'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                    <?php foreach ($prodi as $pr3) : ?>
                                                        <option value="<?php echo $pr3['idprodi']; ?>" <?php echo ($row['prodipilihan3'] == $pr3['idprodi']) ? 'selected' : ''; ?>><?php echo $pr3['namaprodi']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fs-title">Tempat Tanggal Lahir</h2>
                                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                Isi tempat lahir Anda dengan nama Kota, bukan lokasi lahir.
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class=" col-sm-4">
                                            <div class="form-group">
                                                <label>Provinsi *</label>
                                                <select name="provtempatlahir" id="provtempatlahir" class="form-select" aria-label="Default select example">
                                                    <option <?php echo ($row['prov_tempatlahir'] == '') ? 'selected' : ''; ?> value="0"> -- Pilih -- </option>
                                                    <?php foreach ($provinsi as $prov) : ?>
                                                        <option value="<?php echo $prov['kode']; ?>" <?php echo ($row['prov_tempatlahir'] == $prov['kode']) ? 'selected' : ''; ?>><?php echo $prov['nama']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Kabupaten/Kota *</label>
                                                <input type="hidden" name="h_kabtempatlahir" id="h_kabtempatlahir" value="<?php echo $row['kab_tempatlahir'];?>">
                                                <select name="kabtempatlahir" id="kabtempatlahir" class="form-select" aria-label="Default select example">
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Tempat Lahir *</label>
                                                <input name="lokasi_tempatlahir" id="lokasi_tempatlahir" type="text" class="form-control" value="<?php echo $row['lokasi_tempatlahir']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Tanggal Lahir *</label><br>
                                                <input type="date" name="tanggallahir" id="tanggallahir" class="datepicker" data-date-format="yyyy-MM-dd" value="<?php echo $row['tgl_lahir']; ?>">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fs-title">Tempat Tinggal</h2>
                                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                Bidang/isian yang bertanda bintang (*) wajib untuk diisi.
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Negara Tinggal *</label>
                                                <input name="negaratinggal" id="negaratinggal" type="text" class="form-control" placeholder="" required value="<?php echo $row['negara_tempattinggal']; ?>">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Provinsi *</label>
                                                <select name="provtempattinggal" id="provtempattinggal" class="form-select" aria-label="Default select example">
                                                    <option <?php echo ($row['prov_tempattinggal'] == '') ? 'selected' : ''; ?> value="0"> -- Pilih -- </option>
                                                    <?php foreach ($provinsi as $prov) : ?>
                                                        <option value="<?php echo $prov['kode']; ?>" <?php echo ($row['prov_tempattinggal'] == $prov['kode']) ? 'selected' : ''; ?>><?php echo $prov['nama']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Kabupaten/Kota *</label>
                                                <input type="hidden" name="h_kabtempattinggal" id="h_kabtempattinggal" value="<?php echo $row['kab_tempattinggal'];?>">
                                                <select name="kabtempattinggal" id="kabtempattinggal" class="form-select" aria-label="Default select example">
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Kecamatan/Distrik *</label>
                                                <input type="hidden" name="h_kectempattinggal" id="h_kectempattinggal" value="<?php echo $row['kec_tempattinggal'];?>">
                                                <select name="kectempattinggal" id="kectempattinggal" class="form-select" aria-label="Default select example">
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Kelurahan/Desa *</label>
                                                <input type="hidden" name="h_destempattinggal" id="h_destempattinggal" value="<?php echo $row['des_tempattinggal'];?>">
                                                <select name="destempattinggal" id="destempattinggal" class="form-select" aria-label="Default select example">
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Kode Pos</label>
                                                <input name="kodepos" id="kodepos" type="text" class="form-control" placeholder="" value="<?php echo $row['kodepos_tempattinggal']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Alamat *</label>
                                                <textarea name="alamattempattinggal" id="alamattempattinggal" row="2" type="text" class="form-control" placeholder="" required><?php echo $row['alamat_tempattinggal']; ?></textarea>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Alamat Tinggal Lain</label>
                                                <textarea name="alamatlaintempattinggal" id="alamatlaintempattinggal" type="text" rows="2" class="form-control" placeholder="" required><?php echo $row['alamatlain_tempattinggal']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fs-title">Data Tambahan</h2>
                                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                Bidang/isian yang bertanda bintang (*) wajib untuk diisi.
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>No. Telp./HP *</label>
                                                <input name="nohp" id="nohp" type="text" class="form-control" placeholder="" required value="<?php echo $nohp; ?>">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Alamat Email *</label>
                                                <input name="email" id="email" type="email" class="form-control" placeholder="" required value="<?php echo $email; ?>">
                                                <small>Email Aktif</small>
                                            </div>
                                        </div>

                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label>Tinggi Badan *</label>
                                                <input name="tinggibadan" id="tinggibadan" type="text" class="form-control" placeholder="" value="<?php echo $row['tinggibadan']; ?>" required>
                                                <small>Satuan cm. Contoh: 165</small>
                                            </div>
                                        </div>

                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label>Berat Badan *</label>
                                                <input name="beratbadan" id="beratbadan" type="text" class="form-control" placeholder="" value="<?php echo $row['beratbadan']; ?>" required>
                                                <small>Satuan kg. Contoh: 60</small>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <input type="button" name="next1" id="next1" class="next action-button" value="Lanjut" />
                            </fieldset>



                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fs-title">Identitas Sekolah:</h2>
                                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                Bidang/isian yang bertanda bintang (*) wajib untuk diisi.
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Tahun Lulus SMTA *</label>
                                                <select name="tahunlulussmta" id="tahunlulussmta" class="form-select" aria-label="Default select example">
                                                    <option <?php echo ($row['tahunlulus_smta'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                    <?php
                                                    $thn_skr = date('Y');
                                                    for ($x = $thn_skr; $x >= 2000; $x--) {
                                                    ?>
                                                        <option value="<?php echo $x ?>" <?php echo ($row['tahunlulus_smta'] == $x) ? 'selected' : ''; ?>><?php echo $x ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Jurusan SMTA *</label>
                                                <select class="form-select" name="jurusansmta" id="jurusansmta" aria-label="Default select example">
                                                    <option <?php echo ($row['jurusansmta'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                    <?php foreach ($jurusansmta as $jur) : ?>
                                                        <option value="<?php echo $jur['idjurusansmta']; ?>" <?php echo ($row['jurusansmta'] == $jur['idjurusansmta']) ? 'selected' : ''; ?>><?php echo $jur['namajurusan']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Jenis SMTA *</label>
                                                <select name="jenissmta" id="jenissmta" class="form-select" aria-label="Default select example">
                                                    <option <?php echo ($row['jenissmta'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                    <?php foreach ($jenissmta as $jen) : ?>
                                                        <option value="<?php echo $jen['idjenissmta']; ?>" <?php echo ($row['jenissmta'] == $jen['idjenissmta']) ? 'selected' : ''; ?>><?php echo $jen['namajenissmta']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nama SMTA </label>
                                                <input name="namasmta" id="namasmta" type="text" class="form-control" value="<?php echo $row['namasmta']; ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>NPSN (Nomor Pokok Sekolah Nasional)</label>
                                                <input name="npsnsmta" id="npsnsmta" type="text" class="form-control" value="<?php echo $row['npsnsmta']; ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Provinsi SMTA </label>
                                                <input name="provinsismta" id="provinsismta" type="text" class="form-control" value="<?php echo $row['provinsismta']; ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Alamat SMTA </label>
                                                <input name="alamatsmta" id="alamatsmta" type="text" class="form-control" value="<?php echo $row['alamatsmta']; ?>" readonly>
                                            </div>
                                        </div>

                                        

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <h4 class="fs-title">Nilai Rata-Rata Rapor</h4>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Kelas XI semeseter 1</label>
                                                <input name="nrapor1" id="nrapor1" type="text" class="form-control" placeholder="" value="<?php echo $row['nrapor1']; ?>" required></input>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Kelas XI semeseter 2</label>
                                                <input name="nrapor2" id="nrapor2" type="text" class="form-control" placeholder="" value="<?php echo $row['nrapor2']; ?>" required></input>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Kelas XII semeseter 1</label>
                                                <input name="nrapor3" id="nrapor3" type="text" class="form-control" placeholder="" value="<?php echo $row['nrapor3']; ?>" required></input>
                                            </div>
                                        </div>

                                        <div class="dropzone dokrapor col-sm-12 mb-5" id="upload-dokumen">
                                            <div class="form">
                                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                    <small>Unggah file rapor dalam format .pdf dengan ukuran maksimal 5 MB. Penamaan file "Rapor-Username", contoh: <b>Rapor - 2022330001</b> </small>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div name="userfile" class="dz-message">
                                                    <h6> Klik atau Drop file ke sini</h6>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <input type="button" name="next2" id="next2" class="next action-button" value="Lanjut" />
                                <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fs-title">Biodata Orang Tua</h2>
                                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                Silakan isi data orang tua Anda sesuai dengan bidang-bidang yang diminta.
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <h4>Biodata Ayah</h4>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>NIK/No. KTP Ayah</label>
                                                <input name="nikayah" id="nikayah" type="text" class="form-control" placeholder="" value="<?php echo $row['nik_ayah']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nama Ayah *</label>
                                                <input name="namaayah" id="namaayah" type="text" class="form-control" placeholder="" value="<?php echo $row['nama_ayah']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Pendidikan Ayah *</label>
                                                <select name="pendidikanayah" id="pendidikanayah" class="form-select" aria-label="Default select example">
                                                    <option <?php echo ($row['pendidikan_ayah'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                    <?php foreach ($pendidikanortu as $pd) : ?>
                                                        <option value="<?php echo $pd['idpendidikan']; ?>" <?php echo ($row['pendidikan_ayah'] == $pd['idpendidikan']) ? 'selected' : ''; ?>><?php echo $pd['namajenjang']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <small>Pendidikan terakhir</small>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Pekerjaan Ayah *</label>
                                                <select name="pekerjaanayah" id="pekerjaanayah" class="form-select" aria-label="Default select example">
                                                    <option <?php echo ($row['pekerjaan_ayah'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                    <?php foreach ($pekerjaanortu as $pk) : ?>
                                                        <option value="<?php echo $pk['idpekerjaan']; ?>" <?php echo ($row['pekerjaan_ayah'] == $pk['idpekerjaan']) ? 'selected' : ''; ?>><?php echo $pk['namapekerjaan']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Alamat Kantor Ayah *</label>
                                                <textarea name="alamatkantorayah" id="alamatkantorayah" type="text" class="form-control" placeholder="" value="<?php echo $row['alamatkantor_ayah']; ?>" required><?php echo $row['alamatkantor_ayah']; ?></textarea>
                                                <small>Alamat kantor Ayah, maksimal 50 karakter.</small>
                                            </div>
                                        </div>
                                        </select>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4>Biodata Ibu</h4>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>NIK/No. KTP Ibu</label>
                                                <input name="nikibu" type="text" class="form-control" placeholder="" value="<?php echo $row['nik_ibu']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nama Ibu *</label>
                                                <input name="namaibu" id="namaibu" type="text" class="form-control" placeholder="" value="<?php echo $row['nama_ibu']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Pendidikan Ibu *</label>
                                                <select name="pendidikanibu" id="pendidikanibu" class="form-select" aria-label="Default select example">
                                                    <option <?php echo ($row['pendidikan_ibu'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                    <?php foreach ($pendidikanortu as $pd) : ?>
                                                        <option value="<?php echo $pd['idpendidikan']; ?>" <?php echo ($row['pendidikan_ibu'] == $pd['idpendidikan']) ? 'selected' : ''; ?>><?php echo $pd['namajenjang']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <small>Pendidikan terakhir</small>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Pekerjaan Ibu *</label>
                                                <select name="pekerjaanibu" id="pekerjaanibu" class="form-select" aria-label="Default select example">
                                                    <option <?php echo ($row['pekerjaan_ibu'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                    <?php foreach ($pekerjaanortu as $pk) : ?>
                                                        <option value="<?php echo $pk['idpekerjaan']; ?>" <?php echo ($row['pekerjaan_ibu'] == $pk['idpekerjaan']) ? 'selected' : ''; ?>><?php echo $pk['namapekerjaan']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Penghasilan Orang Tua*</label>
                                                <select name="penghasilanortu" id="penghasilanortu" class="form-select" aria-label="Default select example">
                                                    <option <?php echo ($row['penghasilan_ortu'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                    <?php foreach ($penghasilanortu as $ph) : ?>
                                                        <option value="<?php echo $ph['idpenghasilan']; ?>" <?php echo ($row['penghasilan_ortu'] == $ph['idpenghasilan']) ? 'selected' : ''; ?>><?php echo $ph['penghasilan']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <small>Penghasilan Orang Tua Per Bulan</small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4>Alamat Orang Tua</h4>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Provinsi *</label>
                                                        <select name="provortu" id="provortu" class="form-select" aria-label="Default select example">
                                                            <option <?php echo ($row['provinsi_tempattinggalortu'] == '') ? 'selected' : ''; ?> value="0"> -- Pilih -- </option>
                                                            <?php foreach ($provinsi as $prov) : ?>
                                                                <option value="<?php echo $prov['kode']; ?>" <?php echo ($row['provinsi_tempattinggalortu'] == $prov['kode']) ? 'selected' : ''; ?>><?php echo $prov['nama']; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Kabupaten/Kota *</label>
                                                        <input type="hidden" name="h_kabupatenortu" id="h_kabupatenortu" value="<?php echo $row['kab_tempattinggalortu'];?>">
                                                        <select name="kabupatenortu" id="kabupatenortu" class="form-select" aria-label="Default select example">
                                                            <option value=""></option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Kecamatan/Distrik *</label>
                                                        <input type="hidden" name="h_kecamatanortu" id="h_kecamatanortu" value="<?php echo $row['kec_tempattinggalortu'];?>">
                                                        <select name="kecamatanortu" id="kecamatanortu" class="form-select" aria-label="Default select example">
                                                           <option value=""></option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Kode Pos *</label>
                                                        <input name="kodeposortu" id="kodeposortu" type="text" class="form-control" placeholder="" value="<?php echo $row['kodepost_tempattinggalortu']; ?>" required>
                                                        <small>Kode pos tempat tinggal orang tua saat ini</small>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Alamat Orang Tua *</label>
                                                        <textarea name="alamatortu" id="alamatortu" type="text" class="form-control" placeholder="" value="<?php echo $row['alamat_ortu']; ?>" required><?php echo $row['alamat_ortu']; ?></textarea>
                                                        <small>Alamat tinggal orang tua saat ini. Maksimal 50 karakter.</small>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>No. Telp./HP *</label>
                                                        <input name="nohportu" id="nohportu" type="text" class="form-control" placeholder="" value="<?php echo $row['nohp_ortu']; ?>" required>
                                                        <small>Nomor telp atau handphone orang tua yang bisa dihubungi</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <input type="button" name="next3" id="next3" class="next action-button" value="Lanjut" />
                                <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fs-title">Biodata Wali</h2>
                                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                Silakan isi data wali Anda sesuai dengan bidang-bidang yang diminta.
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>


                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nama Wali</label>
                                                <input name="namawali" id="namawali" type="text" class="form-control" placeholder="" value="<?php echo $row['nama_wali']; ?>">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Pekerjaan Wali</label>
                                                <select name="pekerjaanwali" id="pekerjaanwali" class="form-select" aria-label="Default select example">
                                                    <option <?php echo ($row['pekerjaan_wali'] == '') ? 'selected' : ''; ?> value="0"> -- Pilih -- </option>
                                                    <?php foreach ($pekerjaanortu as $pk) : ?>
                                                        <option value="<?php echo $pk['idpekerjaan']; ?>" <?php echo ($row['pekerjaan_wali'] == $pk['idpekerjaan']) ? 'selected' : ''; ?>><?php echo $pk['namapekerjaan']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Penghasilan Wali</label>
                                                <select name="penghasilanwali" id="penghasilanwali" class="form-select" aria-label="Default select example">
                                                    <option <?php echo ($row['penghasilan_wali'] == '') ? 'selected' : ''; ?> value="0"> -- Pilih -- </option>
                                                    <?php foreach ($penghasilanortu as $ph) : ?>
                                                        <option value="<?php echo $ph['idpenghasilan']; ?>" <?php echo ($row['penghasilan_wali'] == $ph['idpenghasilan']) ? 'selected' : ''; ?>><?php echo $ph['penghasilan']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>No. HP Wali</label>
                                                <input name="nohp_wali" id="nohp_wali" type="text" class="form-control" placeholder="" value="<?php echo $row['nama_wali']; ?>">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Alamat Wali</label>
                                                <textarea name="alamatwali" id="alamatwali" type="text" rows="2" class="form-control" placeholder="" value="<?php echo $row['alamat_wali']; ?>"></textarea>
                                                <small>Alamat wali saat ini. Maksimal 50 karakter.</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="next4" id="next4" class="next action-button" value="Lanjut" />
                                <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fs-title">Konfirmasi</h2>
                                        </div>

                                        <table class="table tabelkonfirmasi">
                                            <tbody>
                                                <tr>
                                                    <td>Tanggal Pendaftaran</td>
                                                    <td>:</td>
                                                    <td><?php echo date("d-F-Y"); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Kode Verifikasi</td>
                                                    <td>:</td>
                                                    <td>
                                                        <?php echo $recaptcha; ?>
                                                        <small id="captchahelp" class="form-text text-danger"><?php echo ($errorcaptcha != NULL) ? $errorcaptcha : ""; ?></small>
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Kebijakan</td>
                                                    <td>:</td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox custom-control-inline">
                                                            <input id="chk1" type="checkbox" name="chk" class="custom-control-input" required>
                                                            <label for="chk1" class="custom-control-label text-sm">Dengan ini saya menyatakan bahwa data yang saya isikan adalah data yang sebenarnya, jika di kemudian hari ternyata data yang saya isikan terbukti tidak benar maka saya bersedia digugurkan dan diproses sesuai aturan perundang-undangan.</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                                <input type="button" name="next5" id="next5"  class="next action-button btn btn-primary" value="Simpan">

                                <input type="button" name="previous" class="previous action-button-previous" value="Kembali" />
                            </fieldset>
                        <?php endforeach; ?>

                    </form>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal" id="modaluploadfoto" tabindex="-1" role="dialog" aria-labelledby="modaluploadfotolabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modaluploadfotolabel">Unggah Foto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="dropzone uploadfoto" id="image-upload">
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <small>Rasio Foto : 4 x 6, atau max resolusi 300px x 450px, dengan max size : 200kb, Tipe file : jpg, jpeg, png.</small>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="dz-message">
                                <h6> Klik atau Drop gambar ke sini</h6>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button id="uploadFile" type="button" class="btn btn-primary">Upload</button>
                        <button id="closeModal" type="button" class="btn btn-default">Kembali</button>
                    </div>
                </div>
            </div>
        </div>


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
                        <a class="btn btn-primary" href="<?php echo site_url('auth/logout/pendaftar'); ?>">Ya</a>
                    </div>
                </div>
            </div>
        </div>
        <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


        <script type='text/javascript'>
            $(document).ready(function() {
                var current_fs, next_fs, previous_fs; //fieldsets
                var opacity;
                var current = 1;
                var steps = $("fieldset").length;
                setProgressBar(current);
                $(".next").click(function() {
                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();
                    //Add Class Active
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                    //show the next fieldset
                    next_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate({
                        opacity: 0
                    }, {
                        step: function(now) {
                            // for making fielset appear animation
                            opacity = 1 - now;
                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });
                            next_fs.css({
                                'opacity': opacity
                            });
                        },
                        duration: 500
                    });
                    setProgressBar(++current);
                });
                $(".previous").click(function() {
                    current_fs = $(this).parent();
                    previous_fs = $(this).parent().prev();
                    //Remove class active
                    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
                    //show the previous fieldset
                    previous_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate({
                        opacity: 0
                    }, {
                        step: function(now) {
                            // for making fielset appear animation
                            opacity = 1 - now;
                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });
                            previous_fs.css({
                                'opacity': opacity
                            });
                        },
                        duration: 500
                    });
                    setProgressBar(--current);
                });

                function setProgressBar(curStep) {
                    var percent = parseFloat(100 / steps) * curStep;
                    percent = percent.toFixed();
                    $(".progress-bar").css("width", percent + "%")
                }
                $(".submit").click(function() {
                    return false;
                })
            });
        </script>

        <!-- Date Picker - Tanggal lahir -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script>
            $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4'
            });
        </script>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {

                $("#provtempatlahir").change(function() {
                    var url = "<?php echo site_url('register/add_ajax_kab'); ?>/" + $(this).val();
                    $('#kabtempatlahir').load(url);
                    return false;
                });

                var provtempatlahir = $("#provtempatlahir").val();
                if (provtempatlahir != "0")
                {
                    //set selected kab by data from db
                    var url = "<?php  echo site_url('register/add_ajax_kab'); ?>/" + provtempatlahir +"/" + $("#h_kabtempatlahir").val();
                    $('#kabtempatlahir').load(url);
                }
               

                $("#provtempattinggal").change(function() {
                    var url = "<?php echo site_url('register/add_ajax_kab'); ?>/" + $(this).val();
                    $('#kabtempattinggal').load(url);
                    return false;
                });

                var provtempattinggal = $("#provtempattinggal").val();
                if (provtempattinggal != "0")
                {
                    //set selected kab by data from db
                    var url = "<?php  echo site_url('register/add_ajax_kab'); ?>/" + provtempattinggal +"/" + $("#h_kabtempattinggal").val();
                    $('#kabtempattinggal').load(url);
                }

                $("#provortu").change(function() {
                    var url = "<?php echo site_url('register/add_ajax_kab'); ?>/" + $(this).val();
                    $('#kabupatenortu').load(url);
                    return false;
                });

                var provortu = $("#provortu").val();
                if (provortu != "0")
                {
                //set selected kab by data from db
                    var url = "<?php echo site_url('register/add_ajax_kab'); ?>/" + provortu +"/" + $("#h_kabupatenortu").val();
                    $('#kabupatenortu').load(url);
                }
                $("#kabupatenortu").change(function() {
                    var url = "<?php echo site_url('register/add_ajax_kec'); ?>/" + $(this).val();
                    $('#kecamatanortu').load(url);
                    return false;
                });

                var h_kabupatenortu = $("#h_kabupatenortu").val();
                if (h_kabupatenortu != "")
                {
                //set selected kec by data from db
                    var url = "<?php echo site_url('register/add_ajax_kec'); ?>/" + h_kabupatenortu +"/" + $("#h_kecamatanortu").val();
                        $('#kecamatanortu').load(url);
                }
                
                $("#kabtempattinggal").change(function() {
                    var url = "<?php echo site_url('register/add_ajax_kec'); ?>/" + $(this).val();
                    $('#kectempattinggal').load(url);
                    return false;
                });

                var h_kabtempattinggal = $("#h_kabtempattinggal").val();
                if (h_kabtempattinggal != "")
                {
                //set selected kec by data from db
                    var url = "<?php  echo site_url('register/add_ajax_kec'); ?>/" + h_kabtempattinggal +"/" + $("#h_kectempattinggal").val();
                    $('#kectempattinggal').load(url);
                }


                $("#kectempattinggal").change(function() {
                    var url = "<?php echo site_url('register/add_ajax_des'); ?>/" + $(this).val();
                    $('#destempattinggal').load(url);
                    return false;
                });

                var h_kectempattinggal = $("#h_kectempattinggal").val();
                if (h_kectempattinggal != "")
                {
                    //set selected kec by data from db
                    var url = "<?php  echo site_url('register/add_ajax_des'); ?>/" + h_kectempattinggal +"/" + $("#h_destempattinggal").val();
                    $('#destempattinggal').load(url);
                }

                // $("input[name='namasmta']").val();

                // $("#namasmta").select2({
                //     theme: "bootstrap",
                //     placeholder: '-- Pilih SMTA --',
                //     minimumInputLength: 1,
                //     ajax: {
                //         url: "<?php //echo site_url('register/searchSMTA');?>",
                //         dataType: 'json',
                //         delay: 250,
                //         processResults: function (data) {
                //             return {
                //                 results: data
                //             };
                //         },
                //         cache: true
                //     }
                // });

                

                $('#next1').on('click', function() {
                    $("#next1").attr("disabled", "disabled");
                    var jenkel = $(".jenkel:checked").val();
                    var nik = $("input[name='nik']").val();
                    var nisn_pendaftar = $("input[name='nisn_pendaftar']").val();
                    var agama = $("select[name='agama']").val();
                    var suku = $("select[name='suku']").val();
                    var statusmenikah = $("select[name='statusmenikah']").val();
                    var nohp = $("input[name='nohp']").val();
                    var email = $("input[name='email']").val();
                    var prodipilihan1 = $("select[name='prodipilihan1']").val();
                    var prodipilihan2 = $("select[name='prodipilihan2']").val();
                    var prodipilihan3 = $("select[name='prodipilihan3']").val();
                    var prov_tempatlahir = $("select[name='provtempatlahir']").val();
                    var kab_tempatlahir = $("select[name='kabtempatlahir']").val();
                    var lokasi_tempatlahir = $("input[name='lokasi_tempatlahir']").val();
                    var tgl_lahir = $("input[name='tanggallahir']").val();
                    var negara_tempattinggal = $("input[name='negaratinggal']").val();
                    var prov_tempattinggal = $("select[name='provtempattinggal']").val();
                    var kab_tempattinggal = $("select[name='kabtempattinggal']").val();
                    var kec_tempattinggal = $("select[name='kectempattinggal']").val();
                    var des_tempattinggal = $("select[name='destempattinggal']").val();
                    var kodepos_tempattinggal = $("input[name='kodepos']").val();
                    var alamat_tempattinggal = $("textarea[name='alamattempattinggal']").val();
                    var alamatlain_tempattinggal = $("textarea[name='alamatlaintempattinggal']").val();
                    var tinggibadan = $("input[name='tinggibadan']").val();
                    var beratbadan = $("input[name='beratbadan']").val();


                    $.ajax({
                        url: "<?php echo site_url('register/next1'); ?>",
                        type: "POST",
                        data: {
                            nisn_pendaftar: nisn_pendaftar,
                            jenkel: jenkel,
                            nik: nik,
                            agama: agama,
                            suku: suku,
                            statusmenikah: statusmenikah,
                            nohp: nohp,
                            email: email,
                            prodipilihan1: prodipilihan1,
                            prodipilihan2: prodipilihan2,
                            prodipilihan3: prodipilihan3,
                            prov_tempatlahir: prov_tempatlahir,
                            kab_tempatlahir: kab_tempatlahir,
                            lokasi_tempatlahir: lokasi_tempatlahir,
                            tgl_lahir: tgl_lahir,
                            negara_tempattinggal: negara_tempattinggal,
                            prov_tempattinggal: prov_tempattinggal,
                            kab_tempattinggal: kab_tempattinggal,
                            kec_tempattinggal: kec_tempattinggal,
                            des_tempattinggal: des_tempattinggal,
                            kodepos_tempattinggal: kodepos_tempattinggal,
                            alamat_tempattinggal: alamat_tempattinggal,
                            alamatlain_tempattinggal: alamatlain_tempattinggal,
                            tinggibadan: tinggibadan,
                            beratbadan: beratbadan,



                        },
                        //cache: false,
                        success: function(dataResult) {
                            var dataResult = JSON.parse(dataResult);
                            if (dataResult.statusCode == 1) {
                                $("#next1").removeAttr("disabled");
                                $('#fupForm').find('input:text').val('');
                                $("#success").show();
                                $('#success').html('Data added successfully !');

                                $(".BoxLulus").hide();
                                $(".BoxBelumLulus").hide();
                            } else {
                                alert("Error occured !");
                            }

                        }
                    });
                });


                $('#next2').on('click', function() {
                    $("#next2").attr("disabled", "disabled");
                    var tahunlulussmta = $("select[name='tahunlulussmta']").val();
                    var jurusansmta = $("select[name='jurusansmta']").val();
                    var jenissmta = $("select[name='jenissmta']").val();
                    // var namasmta = $("select[name='namasmta']").val();
                    // var nisnsmta = $("input[name='nisnsmta']").val();
                    // var provinsismta = $("input[name='provinsismta']").val();
                    // var alamatsmta = $("textarea[name='alamatsmta']").val();
                    var nrapor1 = $("input[name='nrapor1']").val();
                    var nrapor2 = $("input[name='nrapor2']").val();
                    var nrapor3 = $("input[name='nrapor3']").val();


                    $.ajax({
                        url: "<?php echo site_url('register/next2'); ?>",
                        type: "POST",
                        data: {
                            tahunlulussmta: tahunlulussmta,
                            jurusansmta: jurusansmta,
                            jenissmta: jenissmta,
                            // namasmta: namasmta,
                            // nisnsmta: nisnsmta,
                            // provinsismta: provinsismta,
                            // alamatsmta: alamatsmta,
                            // lulussmta: lulussmta,
                            // nomorijazah: nomorijazah,
                            // uanmtk: uanmtk,
                            // uanbing: uanbing,
                            // uanbind: uanbind,
                            nrapor1: nrapor1,
                            nrapor2: nrapor2,
                            nrapor3: nrapor3,


                        },
                        //cache: false,
                        success: function(dataResult) {
                            var dataResult = JSON.parse(dataResult);
                            if (dataResult.statusCode == 1) {
                                $("#next2").removeAttr("disabled");
                                $('#fupForm').find('input:text').val('');
                                $("#success").show();
                                $('#success').html('Data added successfully !');
                            } else {
                                alert("Error occured !");
                            }

                        }
                    });
                });


                $('#next3').on('click', function() {
                    $("#next3").attr("disabled", "disabled");
                    var nik_ayah = $("input[name='nikayah']").val();
                    var nama_ayah = $("input[name='namaayah']").val();
                    var pendidikanayah = $("select[name='pendidikanayah']").val();
                    var pekerjaanayah = $("select[name='pekerjaanayah']").val();
                    var alamatkantor_ayah = $("textarea[name='alamatkantorayah']").val();
                    var nik_ibu = $("input[name='nikibu']").val();
                    var nama_ibu = $("input[name='namaibu']").val();
                    var pendidikanibu = $("select[name='pendidikanibu']").val();
                    var pekerjaanibu = $("select[name='pekerjaanibu']").val();
                    var penghasilanortu = $("select[name='penghasilanortu']").val();
                    var alamat_ortu = $("textarea[name='alamatortu']").val();
                    var provinsi_ortu = $("select[name='provortu']").val();
                    var kabupaten_ortu = $("select[name='kabupatenortu']").val();
                    var kecamatan_ortu = $("select[name='kecamatanortu']").val();
                    var kodepos_ortu = $("input[name='kodeposortu']").val();
                    var nohp_ortu = $("input[name='nohportu']").val();


                    $.ajax({
                        url: "<?php echo site_url('register/next3'); ?>",
                        type: "POST",
                        data: {
                            nik_ayah: nik_ayah,
                            nama_ayah: nama_ayah,
                            pendidikanayah: pendidikanayah,
                            pekerjaanayah: pekerjaanayah,
                            alamatkantor_ayah: alamatkantor_ayah,
                            nik_ibu: nik_ibu,
                            nama_ibu: nama_ibu,
                            pendidikanibu: pendidikanibu,
                            pekerjaanibu: pekerjaanibu,
                            penghasilanortu: penghasilanortu,
                            alamat_ortu: alamat_ortu,
                            provinsi_ortu: provinsi_ortu,
                            kabupaten_ortu: kabupaten_ortu,
                            kecamatan_ortu: kecamatan_ortu,
                            kodepos_ortu: kodepos_ortu,
                            nohp_ortu: nohp_ortu,


                        },
                        //cache: false,
                        success: function(dataResult) {
                            var dataResult = JSON.parse(dataResult);
                            if (dataResult.statusCode == 1) {
                                $("#next3").removeAttr("disabled");
                                $('#fupForm').find('input:text').val('');
                                $("#success").show();
                                $('#success').html('Data added successfully !');
                            } else {
                                alert("Error occured !");
                            }

                        }
                    });
                });

                $('#next4').on('click', function() {
                    $("#next4").attr("disabled", "disabled");
                    var nama_wali = $("input[name='namawali']").val();
                    var pekerjaanwali = $("select[name='pekerjaanwali']").val();
                    var penghasilanwali = $("select[name='penghasilanwali']").val();
                    var alamat_wali = $("textarea[name='alamatwali']").val();
                    var nohp_wali = $("input[name='nohp_wali']").val();


                    $.ajax({
                        url: "<?php echo site_url('register/next4'); ?>",
                        type: "POST",
                        data: {
                            nama_wali: nama_wali,
                            pekerjaanwali: pekerjaanwali,
                            penghasilanwali: penghasilanwali,
                            alamat_wali: alamat_wali,
                            nohp_wali: nohp_wali,

                        },
                        //cache: false,
                        success: function(dataResult) {
                            var dataResult = JSON.parse(dataResult);
                            if (dataResult.statusCode == 1) {
                                $("#next4").removeAttr("disabled");
                                $('#fupForm').find('input:text').val('');
                                $("#success").show();
                                $('#success').html('Data added successfully !');

                            } else {
                                alert("Error occured !");
                            }

                        }
                    });
                });


               

                $('#next5').on('click', function() {
                    Swal.fire({
                      title: 'Berhasil menyimpan biodata !',
                      text: "Untuk mengetahui hasil seleksi jalur SESAMA, silahkan akses menu pengumuman pada website https://pmb.unipa.ac.id/pmbsesama",
                      icon: 'success',
                      showCancelButton: false,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Keluar'
                    }).then((result) => {
                      if (result.isConfirmed) {
                        window.location.href= "<?php echo site_url('auth/logout/pendaftar'); ?>";
                      }
                    })
                });                
                
                $('#closeModal').click(function() {
                    $('.modal').modal('hide');
                });
            });
        </script>

        <script type="text/javascript">
            Dropzone.autoDiscover = false;

            var foto_upload = new Dropzone(".uploadfoto", {
                url: "<?php echo site_url('register/uploadfotopas') ?>",
                maxFilesize: 1,
                autoProcessQueue: false,
                method: "post",
                acceptedFiles: ".jpeg,.jpg,.png,.gif",
                paramName: "fotopas",
                dictInvalidFileType: "Type file ini tidak dizinkan",
                addRemoveLinks: true,
            });

            $('#uploadFile').click(function() {
                foto_upload.processQueue();
            });

            foto_upload.on("sending", function(file, xhr, formData) {
                // Will send the filesize along with the file as POST data.
                // formData.append("filesize", file.size);
                formData.append("username", "<?php echo $username; ?>");
            });

            foto_upload.on("complete", function(file) {
                window.location.href = "<?php echo site_url('register/isibiodata') ?>";
            });

            var dok_rapor = new Dropzone(".dokrapor", {
                autoProcessQueue: true,
                url: "<?php echo site_url('register/uploadrapor') ?>",
                maxFilesize: 5,
                method: "post",
                acceptedFiles: ".pdf",
                paramName: "filerapor",
                dictInvalidFileType: "Type file ini tidak dizinkan",
                addRemoveLinks: true,
            });

            //Event ketika Memulai mengupload
            dok_rapor.on("sending", function(file, xhr, formData) {
                formData.append("username", <?php echo $username; ?>);
            });
        </script>

</body>

</html>