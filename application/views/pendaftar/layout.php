<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Formulir - Portal PMB Oline UNIPA</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <!-- <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/form-pendaftaran.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/login-page.css">

    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

    <link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>


    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dropzone.css') ?>">
    <script type="text/javascript" src="<?php echo base_url('assets/dropzone.js') ?>"></script>

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

        .navbar-dark .navbar-toggler-icon {
            background-image: url(../assets/frontend/img/nav-button.png) !important;
            font-size: 24px;

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
    </style>
</head>

<body class='snippet-body'>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-9 col-md-10 col-lg-10 col-xl-8 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pb-0 mb-3">
                    <!-- Navigation-->
                    <div class="container-fluid nav-unipa">
                        <nav class="navbar navbar-expand-lg navbar-light py-3" id="mainNav">
                            <div class="logo-nama">
                                <img src="<?php echo base_url('assets/frontend/img/logo_unipa.png') ?>" alt=""><a class="navbar-brand" href="<?php echo base_url('') ?>">&nbsp; UNIVERSITAS PAPUA</a>
                            </div>
                            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <div class="collapse navbar-collapse" id="navbarResponsive">
                                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                                    <li class="nav-item"><a class="nav-link" href="#about"><i class="fa fa-home"></i> Beranda</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#services"><i class="fa fa-calendar-o"></i> Agenda</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#portfolio"><i class="fa fa-info-circle"></i> Informasi</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#contact"><i class="fa fa-bullhorn"></i> Pengumuman</a></li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw text-gray-400"></i>
                                            Keluar
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>


                <!-- Container -->

                <!-- Begin Page Content -->
                <?php
                if (isset($_view) && $_view)
                    $this->load->view($_view);
                ?>
                <!-- /.container-fluid -->