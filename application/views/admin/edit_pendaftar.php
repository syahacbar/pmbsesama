<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PMB SESAMA - UNIPA</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>/assets/backend/startbootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>/assets/backend/startbootstrap/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="<?php echo base_url(); ?>/assets/backend/startbootstrap/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style type="text/css">
        .alert.alert-server {
            margin-bottom: 0;
        }

        /* 
		#DataPribadi1 table.table.table-sm tr:nth-child(1) td:nth-child(1) {
			width: 250px;
		} */

        #DataPribadi1 table.table.table-sm tr:nth-child(2) td:nth-child(2) {
            width: 20px;
        }

        .form-group {
            margin-bottom: 1rem;
            display: flex;
            flex-direction: column;
        }

        select,
        input#tanggallahir {
            word-wrap: normal;
            display: block;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #6e707e;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #d1d3e2;
            border-radius: 0.35rem;
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #4e73df;
            background-color: #fff;
            border-color: #dddfeb #dddfeb #fff;
            font-weight: bold;
        }

        h5.fs-title {
            color: #4e73df;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('administrator'); ?>">
                <!--                 <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> -->
                <div class="sidebar-brand-text mx-3">PMB SESAMA</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php echo ($this->uri->segment(2) == "") ? "active" : ""; ?>">
                <a class="nav-link" href="<?php echo site_url('administrator'); ?>">
                    <i class="fas fa-fw fa-laptop"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <?php if ($this->ion_auth->in_group('admin')) { ?>
                <!-- Heading -->
                <div class="sidebar-heading">
                    Pendaftaran
                </div>
                <!-- Data Pendaftar -->
                <li class="nav-item <?php echo ($this->uri->segment(2) == "datapendaftar" || $this->uri->segment(2) == "slider" || $this->uri->segment(2) == "agenda" || $this->uri->segment(2) == "informasi") ? "active" : ""; ?>">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePendaftaran" aria-expanded="true" aria-controls="collapsePendaftaran">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Pendaftaran</span>
                    </a>
                    <div id="collapsePendaftaran" class="collapse <?php echo ($this->uri->segment(2) == "datapendaftar" || $this->uri->segment(2) == "slider" || $this->uri->segment(2) == "agenda" || $this->uri->segment(2) == "informasi") ? "show" : ""; ?>" aria-labelledby="headingPendaftaran" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item <?php echo ($this->uri->segment(2) == "datapendaftar") ? "active" : ""; ?>" href="<?php echo site_url('administrator/datapendaftar'); ?>">Data Pendaftar</a>
                            <a class="collapse-item <?php echo ($this->uri->segment(2) == "slider") ? "active" : ""; ?>" href="<?php echo site_url('administrator/slider'); ?>">Slider Depan</a>
                            <a class="collapse-item <?php echo ($this->uri->segment(2) == "agenda") ? "active" : ""; ?>" href="<?php echo site_url('administrator/agenda'); ?>">Agenda Penerimaan</a>
                            <a class="collapse-item <?php echo ($this->uri->segment(2) == "informasi") ? "active" : ""; ?>" href="<?php echo site_url('administrator/informasi'); ?>">Informasi</a>
                        </div>
                    </div>
                </li>

                <!--                 <li class="nav-item <?php // echo ($this->uri->segment(2) == "pengaturan") ? "active" : ""; 
                                                            ?>">
                <a class="nav-link" href="<?php // echo site_url('administrator/pengaturan'); 
                                            ?>">
                    <i class="fas fa-fw fa-cogs"></i>
                    <span>Pengaturan</span></a>
                </li> -->

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Referensi Data
                </div>

                <!-- Data Pribadi -->
                <li class="nav-item <?php echo ($this->uri->segment(2) == "ref_agama" || $this->uri->segment(2) == "ref_statusmenikah") ? "active" : ""; ?>">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDatapribadi" aria-expanded="true" aria-controls="collapseDatapribadi">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Data Pribadi</span>
                    </a>
                    <div id="collapseDatapribadi" class="collapse <?php echo ($this->uri->segment(2) == "ref_agama" || $this->uri->segment(2) == "ref_statusmenikah") ? "show" : ""; ?>" aria-labelledby="headingDatapribadi" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item <?php echo ($this->uri->segment(2) == "ref_agama") ? "active" : ""; ?>" href="<?php echo site_url('administrator/ref_agama'); ?>">Agama</a>
                            <a class="collapse-item <?php echo ($this->uri->segment(2) == "ref_statusmenikah") ? "active" : ""; ?>" href="<?php echo site_url('administrator/ref_statusmenikah'); ?>">Status Menikah</a>
                        </div>
                    </div>
                </li>


                <!-- Data Pilihan Prodi -->
                <li class="nav-item <?php echo ($this->uri->segment(2) == "ref_fakultas" || $this->uri->segment(2) == "ref_prodi") ? "active" : ""; ?>">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePilihanprodi" aria-expanded="true" aria-controls="collapsePilihanprodi">
                        <i class="fas fa-fw fa-building"></i>
                        <span>Pilihan Program Studi</span>
                    </a>
                    <div id="collapsePilihanprodi" class="collapse <?php echo ($this->uri->segment(2) == "ref_fakultas" || $this->uri->segment(2) == "ref_prodi") ? "show" : ""; ?>" aria-labelledby="headingPilihanprodi" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item <?php echo ($this->uri->segment(2) == "ref_fakultas") ? "active" : ""; ?>" href="<?php echo site_url('administrator/ref_fakultas'); ?>">Data Fakultas</a>
                            <a class="collapse-item <?php echo ($this->uri->segment(2) == "ref_prodi") ? "active" : ""; ?>" href="<?php echo site_url('administrator/ref_prodi'); ?>">Data Prodi</a>
                        </div>
                    </div>
                </li>

                <!-- Data Wilayah -->
                <li class="nav-item <?php echo ($this->uri->segment(2) == "ref_prov" || $this->uri->segment(2) == "ref_kab" || $this->uri->segment(2) == "ref_kec" || $this->uri->segment(2) == "ref_des") ? "active" : ""; ?>">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDatawiayah" aria-expanded="true" aria-controls="collapseDatawiayah">
                        <i class="fas fa-fw fa-map-marked"></i>
                        <span>Data Wilayah</span>
                    </a>
                    <div id="collapseDatawiayah" class="collapse <?php echo ($this->uri->segment(2) == "ref_prov" || $this->uri->segment(2) == "ref_kab" || $this->uri->segment(2) == "ref_kec" || $this->uri->segment(2) == "ref_des") ? "show" : ""; ?>" aria-labelledby="headingDatawiayah" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item <?php echo ($this->uri->segment(2) == "ref_prov") ? "active" : ""; ?>" href="<?php echo site_url('administrator/ref_prov'); ?>">Data Provinsi</a>
                            <a class="collapse-item <?php echo ($this->uri->segment(2) == "ref_kab") ? "active" : ""; ?>" href="<?php echo site_url('administrator/ref_kab'); ?>">Data Kabupaten</a>
                            <a class="collapse-item <?php echo ($this->uri->segment(2) == "ref_kec") ? "active" : ""; ?>" href="<?php echo site_url('administrator/ref_kec'); ?>">Data Kecamatan/Distrik</a>
                            <a class="collapse-item <?php echo ($this->uri->segment(2) == "ref_des") ? "active" : ""; ?>" href="<?php echo site_url('administrator/ref_des'); ?>">Data Kelurahan/Desa</a>
                        </div>
                    </div>
                </li>

                <!-- Identitas Sekolah Asal -->
                <li class="nav-item <?php echo ($this->uri->segment(2) == "ref_jenissmta" || $this->uri->segment(2) == "ref_jurusansmta") ? "active" : ""; ?>">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseIdentitasSekolah" aria-expanded="true" aria-controls="collapseIdentitasSekolah">
                        <i class="fas fa-fw fa-school"></i>
                        <span>Identitas Sekolah</span>
                    </a>
                    <div id="collapseIdentitasSekolah" class="collapse <?php echo ($this->uri->segment(2) == "ref_jenissmta" || $this->uri->segment(2) == "ref_jurusansmta") ? "show" : ""; ?>" aria-labelledby="headingIdentitasSekolah" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item <?php echo ($this->uri->segment(2) == "ref_jenissmta") ? "active" : ""; ?>" href="<?php echo site_url('administrator/ref_jenissmta'); ?>">Jenis SMTA</a>
                            <a class="collapse-item <?php echo ($this->uri->segment(2) == "ref_jurusansmta") ? "active" : ""; ?>" href="<?php echo site_url('administrator/ref_jurusansmta'); ?>">Jurusan SMTA</a>
                        </div>
                    </div>
                </li>

                <!-- Orang Tua / Wali -->
                <li class="nav-item <?php echo ($this->uri->segment(2) == "ref_pendidikanortu" || $this->uri->segment(2) == "ref_pekerjaanortu" || $this->uri->segment(2) == "ref_penghasilanortu") ? "active" : ""; ?>">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrangtua" aria-expanded="true" aria-controls="collapseOrangtua">
                        <i class="fas fa-fw fa-user-friends"></i>
                        <span>Data Orang Tua / Wali</span>
                    </a>
                    <div id="collapseOrangtua" class="collapse <?php echo ($this->uri->segment(2) == "ref_pendidikanortu" || $this->uri->segment(2) == "ref_pekerjaanortu" || $this->uri->segment(2) == "ref_penghasilanortu") ? "show" : ""; ?>" aria-labelledby="headingOrangtua" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item <?php echo ($this->uri->segment(2) == "ref_pendidikanortu") ? "active" : ""; ?>" href="<?php echo site_url('administrator/ref_pendidikanortu'); ?>">Pendidikan Orang Tua</a>
                            <a class="collapse-item <?php echo ($this->uri->segment(2) == "ref_pekerjaanortu") ? "active" : ""; ?>" href="<?php echo site_url('administrator/ref_pekerjaanortu'); ?>">Pekerjaan Orang Tua</a>
                            <a class="collapse-item <?php echo ($this->uri->segment(2) == "ref_penghasilanortu") ? "active" : ""; ?>" href="<?php echo site_url('administrator/ref_penghasilanortu'); ?>">Penghasilan Orang Tua</a>
                        </div>
                    </div>
                </li>
            <?php } else { ?>
                <div class="sidebar-heading">
                    Pendaftaran
                </div>
                <!-- Data Pendaftar -->
                <li class="nav-item <?php echo ($this->uri->segment(2) == "datapendaftar") ? "active" : ""; ?>">
                    <a class="nav-link" href="<?php echo site_url('administrator/datapendaftar'); ?>">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Data Pendaftar</span></a>
                </li>
            <?php } ?>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="<?php echo base_url(); ?>/assets/backend/startbootstrap/img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="<?php echo base_url(); ?>/assets/backend/startbootstrap/img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="<?php echo base_url(); ?>/assets/backend/startbootstrap/img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="<?php echo base_url(); ?>/assets/backend/startbootstrap/img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <?php $user = $this->ion_auth->user()->row(); ?>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $user->first_name; ?></span>
                                <img class="img-profile rounded-circle" src="<?php echo base_url(); ?>/assets/backend/startbootstrap/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                        <?php foreach ($editpendaftar as $ep) : ?>
                            <div class="col-lg-12">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h4 class="m-0 font-weight-bold text-primary">Ubah Data Pendaftar: <?php echo ucwords($ep['namalengkap']); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item px-2" role="presentation">
                                                <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Informasi Pribadi</button>
                                            </li>
                                            <li class="nav-item px-2" role="presentation">
                                                <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Informasi Sekolah</button>
                                            </li>
                                            <li class="nav-item px-2" role="presentation">
                                                <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Data Orang Tua</button>
                                            </li>
                                            <li class="nav-item px-2" role="presentation">
                                                <button class="nav-link" id="dataWali-tab" data-toggle="tab" data-target="#dataWali" type="button" role="tab" aria-controls="dataWali" aria-selected="false">Data Wali</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                <fieldset class="show" id="editDataPribadi1">
                                                    <div class="col-md-12">
                                                        <div class="form-card">
                                                            <div class="row">
                                                                <div class="col-12 mt-4">
                                                                    <h5 class="fs-title">Identitas Pendaftar</h5>
                                                                </div>

                                                                <div class="col-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-sm-2">
                                                                            <div class="row">
                                                                                <div class="col-sm-12 d-flex justify-content-center">
                                                                                    <div class="form-group">
                                                                                        <?php // form_open_multipart('user/next1') 
                                                                                        ?>
                                                                                        <!-- <?php // if ($ep['fotoprofil'] == NULL) { 
                                                                                                ?>
                                                                                            <img width="100" height="100" class="img-profile" src="<?php // echo base_url('assets/upload/fotopas/profile_default.svg'); 
                                                                                                                                                    ?>">
                                                                                        <?php // } else { 
                                                                                        ?>
                                                                                            <img width="100" height="100" class="img-profile" src="<?php // echo base_url('assets/upload/fotopas/') . $ep['fotoprofil']; 
                                                                                                                                                    ?>"> -->
                                                                                        <?php // } 
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12 d-flex justify-content-center">
                                                                                    <div class="form-group">
                                                                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modaluploadfoto">Ubah Foto</button>
                                                                                    </div>
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                        <div class="col-sm-5">
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <div class="form-group">
                                                                                        <label>Nama Lengkap</label>
                                                                                        <input name="namalengkap" type="text" class="form-control" placeholder="" value="<?php echo strtoupper($ep['namalengkap']); ?>">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <div class="form-group">
                                                                                        <label>NIK/No. KTP</label>
                                                                                        <input name="namalengkap" type="text" class="form-control" placeholder="" value="<?php echo $ep['nik']; ?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                        <div class="col-sm-5 profile">
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <div class="form-group">
                                                                                        <label>Nomor Pendaftaran</label>
                                                                                        <input name="namalengkap" type="text" class="form-control" placeholder="" value="<?php echo $ep['username']; ?>">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12 jeniskelamin">
                                                                                    <label>Jenis Kelamin</label>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6">
                                                                                            <div class="form-check">
                                                                                                <input class="form-check-input jenkel" type="radio" name="jeniskelamin" id="jeniskelamin" value="Laki-laki" <?php echo ($ep['jeniskelamin'] == 'Laki-laki') ? 'checked' : ''; ?>>
                                                                                                <label class="form-check-label" for="exampleRadios1">Laki-Laki</label>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-6">
                                                                                            <div class="form-check">
                                                                                                <input class="form-check-input jenkel" type="radio" name="jeniskelamin" id="jeniskelamin" value="Perempuan" <?php echo ($ep['jeniskelamin'] == 'Perempuan') ? 'checked' : ''; ?>>
                                                                                                <label class="form-check-label" for="exampleRadios1">Perempuan</label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label for="agama">Agama</label>
                                                                        <select id="agama" name="agama" class="form-select" aria-label="Default select example">
                                                                            <option <?php echo ($ep['agama'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                                            <?php foreach ($agama as $ag) : ?>
                                                                                <option value="<?php echo $ag['idagama']; ?>" <?php echo ($ep['agama'] == $ag['idagama']) ? 'selected' : ''; ?>><?php echo $ag['agama']; ?></option>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label>Suku *</label>
                                                                        <select name="suku" id="suku" class="form-select" aria-label="Default select example">
                                                                            <option <?php echo ($ep['suku'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                                            <option value="Papua" <?= $ep['suku'] == 'Papua' ? ' selected="selected"' : ''; ?>>Papua</option>
                                                                            <option value="Non Papua" <?= $ep['suku'] == 'Non Papua' ? ' selected="selected"' : ''; ?>>Non Papua</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label>Status Menikah *</label>
                                                                        <select id="statusmenikah" name="statusmenikah" class="form-select" aria-label="Default select example">
                                                                            <option <?php echo ($ep['statusmenikah'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                                            <?php foreach ($statusmenikah as $sm) : ?>
                                                                                <option value="<?php echo $sm['idstatusmenikah']; ?>" <?php echo ($ep['statusmenikah'] == $sm['idstatusmenikah']) ? 'selected' : ''; ?>><?php echo $sm['status']; ?></option>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label>Tempat Lahir</label>
                                                                        <input name="tempatlahir" id="tempatlahir" type="text" class="form-control" placeholder="" value="" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label>Tanggal Lahir</label>
                                                                        <input type="date" name="tanggallahir" id="tanggallahir" class="datepicker" data-date-format="mm/dd/yyyy" value="">
                                                                    </div>
                                                                </div>

                                                                <div class=" col-sm-4 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label>Provinsi *</label>
                                                                        <select name="provtempatlahir" id="provtempatlahir" class="form-select" aria-label="Default select example">
                                                                            <option <?php echo ($ep['prov_tempatlahir'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                                            <?php foreach ($provinsi as $prov) : ?>
                                                                                <option value="<?php echo $prov['kode']; ?>" <?php echo ($ep['prov_tempatlahir'] == $prov['kode']) ? 'selected' : ''; ?>><?php echo $prov['nama']; ?></option>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label>Kabupaten/Kota *</label>
                                                                        <select name="kabtempatlahir" id="kabtempatlahir" class="form-select" aria-label="Default select example">
                                                                            <option <?php echo ($ep['kab_tempatlahir'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                                <div class="col-12 mt-4">
                                                                    <h5 class="fs-title">Program Studi Pilihan</h5>
                                                                </div>

                                                                <div class="col-sm-4 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label>Pilihan 1 *</label>
                                                                        <select id="prodipilihan1" name="prodipilihan1" class="form-select" aria-label="Default select example">
                                                                            <option <?php echo ($ep['prodipilihan1'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                                            <?php foreach ($prodi as $pr1) : ?>
                                                                                <option value="<?php echo $pr1['idprodi']; ?>" <?php echo ($ep['prodipilihan1'] == $pr1['idprodi']) ? 'selected' : ''; ?>><?php echo $pr1['namaprodi']; ?></option>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label>Pilihan 2</label>
                                                                        <select id="prodipilihan2" name="prodipilihan2" class="form-select" aria-label="Default select example">
                                                                            <option <?php echo ($ep['prodipilihan2'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                                            <?php foreach ($prodi as $pr2) : ?>
                                                                                <option value="<?php echo $pr2['idprodi']; ?>" <?php echo ($ep['prodipilihan2'] == $pr2['idprodi']) ? 'selected' : ''; ?>><?php echo $pr2['namaprodi']; ?></option>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label>Pilihan 3</label>
                                                                        <select id="prodipilihan3" name="prodipilihan3" class="form-select" aria-label="Default select example">
                                                                            <option <?php echo ($ep['prodipilihan3'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                                            <?php foreach ($prodi as $pr3) : ?>
                                                                                <option value="<?php echo $pr3['idprodi']; ?>" <?php echo ($ep['prodipilihan3'] == $pr3['idprodi']) ? 'selected' : ''; ?>><?php echo $pr3['namaprodi']; ?></option>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-12 mt-4">
                                                                    <h5 class="fs-title">Tempat Tinggal</h5>
                                                                </div>
                                                                <div class="col-sm-4 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label>Negara Tinggal *</label>
                                                                        <input name="negaratinggal" id="negaratinggal" type="text" class="form-control" placeholder="" required value="<?php echo $ep['negara_tempattinggal']; ?>">
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label>Provinsi *</label>
                                                                        <select name="provtempattinggal" id="provtempattinggal" class="form-select" aria-label="Default select example">
                                                                            <option <?php echo ($ep['prov_tempattinggal'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                                            <?php foreach ($provinsi as $prov) : ?>
                                                                                <option value="<?php echo $prov['kode']; ?>" <?php echo ($ep['prov_tempattinggal'] == $prov['kode']) ? 'selected' : ''; ?>><?php echo $prov['nama']; ?></option>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label>Kabupaten/Kota *</label>
                                                                        <select name="kabtempattinggal" id="kabtempattinggal" class="form-select" aria-label="Default select example">
                                                                            <option <?php echo ($ep['kab_tempattinggal'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                                            <?php foreach ($kabupaten as $kab) : ?>
                                                                                <option value="<?php echo $kab['kode']; ?>" <?php echo ($ep['kab_tempattinggal'] == $kab['kode']) ? 'selected' : ''; ?>><?php echo $kab['nama']; ?></option>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label>Kecamatan/Distrik *</label>
                                                                        <select name="kectempattinggal" id="kectempattinggal" class="form-select" aria-label="Default select example">
                                                                            <option <?php echo ($ep['kec_tempattinggal'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label>Kelurahan/Desa *</label>
                                                                        <select name="destempattinggal" id="destempattinggal" class="form-select" aria-label="Default select example">
                                                                            <option <?php echo ($ep['des_tempattinggal'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label>Kode Pos</label>
                                                                        <input name="kodepos" id="kodepos" type="text" class="form-control" placeholder="" value="<?php echo $ep['kodepos_tempattinggal']; ?>" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label>Alamat *</label>
                                                                        <input name="alamattempattinggal" id="alamattempattinggal" row="8" type="text" class="form-control" placeholder="" value="<?php echo $ep['alamat_tempattinggal']; ?>" required></input>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label>Alamat Tinggal Lain</label>
                                                                        <input name="alamatlaintempattinggal" id="alamatlaintempattinggal" type="text" class="form-control" placeholder="" value="<?php echo $ep['alamatlain_tempattinggal']; ?>" required></input>
                                                                    </div>
                                                                </div>

                                                            </div>


                                                            <div class="row">
                                                                <div class="col-12 mt-4">
                                                                    <h5 class="fs-title">Data Tambahan</h5>
                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label>No. Telp./HP *</label>
                                                                        <input name="nohp" type="text" class="form-control" placeholder="" value="<?php echo $ep['nohp']; ?>">
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label>Alamat Email *</label>
                                                                        <input name="email" type="email" class="form-control" placeholder="" value="<?php echo $ep['email']; ?>">
                                                                        <small>Email Aktif</small>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <label>Tinggi Badan *</label>
                                                                        <input name="tinggibadan" id="tinggibadan" type="text" class="form-control" placeholder="" value="<?php echo $ep['tinggibadan']; ?>" required>
                                                                        <small>Satuan cm. Contoh: 165</small>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <label>Berat Badan *</label>
                                                                        <input name="beratbadan" id="beratbadan" type="text" class="form-control" placeholder="" value="<?php echo $ep['beratbadan']; ?>" required>
                                                                        <small>Satuan kg. Contoh: 60</small>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="d-flex justify-content-end mt-3">
                                                            <button class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </div>
                                            </div>
                                            </fieldset>


                                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                <fieldset id="editDataSekolah1">
                                                    <div class="form-card">
                                                        <div class="row">
                                                            <div class="col-12 mt-4">
                                                                <h5 class="fs-title">Identitas Sekolah:</h5>
                                                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                                    Bidang/isian yang bertanda bintang (*) wajib untuk diisi.
                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>Tahun Lulus SMTA *</label>
                                                                    <select name="tahunlulussmta" id="tahunlulussmta" class="form-select" aria-label="Default select example">
                                                                        <option <?php echo ($ep['tahunlulus_smta'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                                        <?php
                                                                        $thn_skr = date('Y');
                                                                        for ($x = $thn_skr; $x >= 2000; $x--) {
                                                                        ?>
                                                                            <option value="<?php echo $x ?>" <?php echo ($ep['tahunlulus_smta'] == $x) ? 'selected' : ''; ?>><?php echo $x ?></option>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>Jurusan SMTA *</label>
                                                                    <select class="form-select" name="jurusansmta" id="jurusansmta" aria-label="Default select example">
                                                                        <option <?php echo ($ep['jurusansmta'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                                        <?php foreach ($jurusansmta as $jur) : ?>
                                                                            <option value="<?php echo $jur['idjurusansmta']; ?>" <?php echo ($ep['jurusansmta'] == $jur['idjurusansmta']) ? 'selected' : ''; ?>><?php echo $jur['namajurusan']; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>Jenis SMTA *</label>
                                                                    <select name="jenissmta" id="jenissmta" class="form-select" aria-label="Default select example">
                                                                        <option <?php echo ($ep['jenissmta'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                                        <?php foreach ($jenissmta as $jen) : ?>
                                                                            <option value="<?php echo $jen['idjenissmta']; ?>" <?php echo ($ep['jenissmta'] == $jen['idjenissmta']) ? 'selected' : ''; ?>><?php echo $jen['namajenissmta']; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>Nama SMTA *</label>
                                                                    <input name="namasmta" id="namasmta" type="text" class="form-control" placeholder="" value="<?php echo $ep['nama_smta']; ?>" required>
                                                                    <small>Ketik nama SMTA Anda.</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>NISN SMTA *</label>
                                                                    <input name="nisnsmta" id="nisnsmta" type="text" class="form-control" placeholder="" value="<?php echo $ep['nisn_smta']; ?>" required>
                                                                    <small>Ketik NISN SMTA Anda.</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>Provinsi SMTA *</label>
                                                                    <select name="provinsismta" id="provinsismta" class="form-select" aria-label="Default select example">
                                                                        <option <?php echo ($ep['prov_smta'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                                        <?php foreach ($provinsi as $prov) : ?>
                                                                            <option value="<?php echo $prov['kode']; ?>" <?php echo ($ep['prov_smta'] == $prov['kode']) ? 'selected' : ''; ?>><?php echo $prov['nama']; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>Alamat SMTA</label>
                                                                    <input name="alamatsmta" id="alamatsmta" type="text" class="form-control" placeholder="" value="<?php echo $ep['alamat_smta']; ?>" required></input>
                                                                    <small>Maksimal 50 karakter, gunakan spasi untuk memisahkan tiap kata</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-12 mt-4">
                                                                <div class="form-group">
                                                                    <h5 class="fs-title">Nilai Rata-Rata Rapor</h5>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label>Kelas XI semeseter 1</label>
                                                                    <input name="nrapor1" id="nrapor1" type="text" class="form-control" placeholder="" value="<?php echo $ep['nrapor1']; ?>" required></input>
                                                                </div>
                                                            </div>


                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label>Kelas XI semeseter 2</label>
                                                                    <input name="nrapor2" id="nrapor2" type="text" class="form-control" placeholder="" value="<?php echo $ep['nrapor2']; ?>" required></input>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label>Kelas XII semeseter 1</label>
                                                                    <input name="nrapor3" id="nrapor3" type="text" class="form-control" placeholder="" value="<?php echo $ep['nrapor3']; ?>" required></input>
                                                                </div>
                                                            </div>


                                                            <div class="dropzone dokrapor col-sm-12 mb-5" id="upload-dokumen">
                                                                <div class="form">
                                                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                                        <small>Unggah file rapor dalam bentuk .pdf dengan ukuran maksimal 500kb. Format nama file <b>Rapor Blabla</b> </small>
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
                                                    <div class="d-flex justify-content-end mt-3">
                                                        <button class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </fieldset>
                                            </div>

                                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                                <fieldset id="editDataOrtu1">
                                                    <div class="form-card">
                                                        <div class="row">
                                                            <div class="col-sm-12 mt-4">
                                                                <h5 class="fs-title">Biodata Ayah</h5>

                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>NIK/No. KTP Ayah</label>
                                                                    <input name="nikayah" id="nikayah" type="text" class="form-control" placeholder="" value="<?php echo $ep['nik_ayah']; ?>" required>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>Nama Ayah *</label>
                                                                    <input name="namaayah" id="namaayah" type="text" class="form-control" placeholder="" value="<?php echo $ep['nama_ayah']; ?>" required>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>Pendidikan Ayah *</label>
                                                                    <select name="pendidikanayah" id="pendidikanayah" class="form-select" aria-label="Default select example">
                                                                        <option <?php echo ($ep['pendidikan_ayah'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                                        <?php foreach ($pendidikanortu as $pd) : ?>
                                                                            <option value="<?php echo $pd['idpendidikan']; ?>" <?php echo ($ep['pendidikan_ayah'] == $pd['idpendidikan']) ? 'selected' : ''; ?>><?php echo $pd['namajenjang']; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                    <small>Pendidikan terakhir</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>Pekerjaan Ayah *</label>
                                                                    <select name="pekerjaanayah" id="pekerjaanayah" class="form-select" aria-label="Default select example">
                                                                        <option <?php echo ($ep['pekerjaan_ayah'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                                        <?php foreach ($pekerjaanortu as $pk) : ?>
                                                                            <option value="<?php echo $pk['idpekerjaan']; ?>" <?php echo ($ep['pekerjaan_ayah'] == $pk['idpekerjaan']) ? 'selected' : ''; ?>><?php echo $pk['namapekerjaan']; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>


                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>Alamat Kantor Ayah *</label>
                                                                    <input name="alamatkantorayah" id="alamatkantorayah" type="text" class="form-control" placeholder="" value="<?php echo $ep['alamatkantor_ayah']; ?>" required>
                                                                    <small>Alamat kantor Ayah, maksimal 50 karakter.</small>
                                                                </div>
                                                            </div>
                                                            </select>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-12 mt-4">
                                                                <h5 class="fs-title">Biodata Ibu</h5>
                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>NIK/No. KTP Ibu</label>
                                                                    <input name="nikibu" type="text" class="form-control" placeholder="" value="<?php echo $ep['nik_ibu']; ?>" required>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>Nama Ibu *</label>
                                                                    <input name="namaibu" id="namaibu" type="text" class="form-control" placeholder="" value="<?php echo $ep['nama_ibu']; ?>" required>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>Pendidikan Ibu *</label>
                                                                    <select name="pendidikanibu" id="pendidikanibu" class="form-select" aria-label="Default select example">
                                                                        <option <?php echo ($ep['pendidikan_ibu'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                                        <?php foreach ($pendidikanortu as $pd) : ?>
                                                                            <option value="<?php echo $pd['idpendidikan']; ?>" <?php echo ($ep['pendidikan_ibu'] == $pd['idpendidikan']) ? 'selected' : ''; ?>><?php echo $pd['namajenjang']; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                    <small>Pendidikan terakhir</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>Pekerjaan Ibu *</label>
                                                                    <select name="pekerjaanibu" id="pekerjaanibu" class="form-select" aria-label="Default select example">
                                                                        <option <?php echo ($ep['pekerjaan_ibu'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                                        <?php foreach ($pekerjaanortu as $pk) : ?>
                                                                            <option value="<?php echo $pk['idpekerjaan']; ?>" <?php echo ($ep['pekerjaan_ibu'] == $pk['idpekerjaan']) ? 'selected' : ''; ?>><?php echo $pk['namapekerjaan']; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>Penghasilan Orang Tua*</label>
                                                                    <select name="penghasilanortu" id="penghasilanortu" class="form-select" aria-label="Default select example">
                                                                        <option <?php echo ($ep['penghasilan_ortu'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                                        <?php foreach ($penghasilanortu as $ph) : ?>
                                                                            <option value="<?php echo $ph['idpenghasilan']; ?>" <?php echo ($ep['penghasilan_ortu'] == $ph['idpenghasilan']) ? 'selected' : ''; ?>><?php echo $ph['penghasilan']; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                    <small>Penghasilan Orang Tua Per Bulan</small>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-12 mt-4">
                                                                <h5 class="fs-title">Alamat Orang Tua</h5>
                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>Alamat Orang Tua *</label>
                                                                    <input name="alamatortu" id="alamatortu" type="text" class="form-control" placeholder="" value="<?php echo $ep['alamat_ortu']; ?>" required>
                                                                    <small>Alamat tinggal orang tua saat ini. Maksimal 50 karakter.</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>Provinsi *</label>
                                                                    <select name="provortu" id="provortu" class="form-select" aria-label="Default select example">
                                                                        <option <?php echo ($ep['provinsi_tempattinggalortu'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                                        <?php foreach ($provinsi as $prov) : ?>
                                                                            <option value="<?php echo $prov['kode']; ?>" <?php echo ($ep['provinsi_tempattinggalortu'] == $prov['kode']) ? 'selected' : ''; ?>><?php echo $prov['nama']; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>Kabupaten/Kota *</label>
                                                                    <select name="kabupatenortu" id="kabupatenortu" class="form-select" aria-label="Default select example">
                                                                        <option <?php echo ($ep['kab_tempattinggalortu'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                                        <?php foreach ($kabupaten as $kab) : ?>
                                                                            <option value="<?php echo $kab['kode']; ?>" <?php echo ($ep['kab_tempattinggalortu'] == $kab['kode']) ? 'selected' : ''; ?>><?php echo $kab['nama']; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>Kecamatan/Distrik *</label>
                                                                    <select name="kecamatanortu" id="kecamatanortu" class="form-select" aria-label="Default select example">
                                                                        <option <?php echo ($ep['kec_tempattinggalortu'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                                        <?php foreach ($kecamatan as $kec) : ?>
                                                                            <option value="<?php echo $kec['kode']; ?>" <?php echo ($ep['kec_tempattinggalortu'] == $kec['kode']) ? 'selected' : ''; ?>><?php echo $kec['nama']; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>Kode Pos *</label>
                                                                    <input name="kodeposortu" id="kodeposortu" type="text" class="form-control" placeholder="" value="<?php echo $ep['kodepost_tempattinggalortu']; ?>" required>
                                                                    <small>Kode pos tempat tinggal orang tua saat ini</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>No. Telp./HP *</label>
                                                                    <input name="nohportu" id="nohportu" type="text" class="form-control" placeholder="" value="<?php echo $ep['nohp_ortu']; ?>" required>
                                                                    <small>Nomor telp atau handphone orang tua yang bisa dihubungi</small>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="d-flex justify-content-end mt-3">
                                                        <button class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </fieldset>
                                            </div>

                                            <div class="tab-pane fade" id="dataWali" role="tabpanel" aria-labelledby="dataWali-tab">
                                                <fieldset id="editDataWali1">
                                                    <div class="form-card">
                                                        <div class="row">
                                                            <div class="col-12 mt-4">
                                                                <h5 class="fs-title">Biodata Wali</h5>
                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>Nama Wali</label>
                                                                    <input name="namawali" id="namawali" type="text" class="form-control" placeholder="" value="<?php echo $ep['nama_wali']; ?>" required>
                                                                </div>

                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>Pekerjaan Wali *</label>
                                                                    <select name="pekerjaanwali" id="pekerjaanwali" class="form-select" aria-label="Default select example">
                                                                        <option <?php echo ($ep['pekerjaan_wali'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                                        <?php foreach ($pekerjaanortu as $pk) : ?>
                                                                            <option value="<?php echo $pk['idpekerjaan']; ?>" <?php echo ($ep['pekerjaan_wali'] == $pk['idpekerjaan']) ? 'selected' : ''; ?>><?php echo $pk['namapekerjaan']; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>Penghasilan Wali *</label>
                                                                    <select name="penghasilanwali" id="penghasilanwali" class="form-select" aria-label="Default select example">
                                                                        <option <?php echo ($ep['penghasilan_wali'] == '') ? 'selected' : ''; ?>> -- Pilih -- </option>
                                                                        <?php foreach ($penghasilanortu as $ph) : ?>
                                                                            <option value="<?php echo $ph['idpenghasilan']; ?>" <?php echo ($ep['penghasilan_wali'] == $ph['idpenghasilan']) ? 'selected' : ''; ?>><?php echo $ph['penghasilan']; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>Alamat Wali *</label>
                                                                    <input name="alamatwali" id="alamatwali" type="text" class="form-control" placeholder="" value="<?php echo $ep['alamat_wali']; ?>" required>
                                                                    <small>Alamat wali saat ini. Maksimal 50 karakter.</small>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-end mt-3">
                                                        <button class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; PMB SESAMA UNIPA 2021</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo site_url('auth/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>/assets/backend/startbootstrap/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/backend/startbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>/assets/backend/startbootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>/assets/backend/startbootstrap/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url(); ?>/assets/backend/startbootstrap/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/backend/startbootstrap/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url(); ?>/assets/backend/startbootstrap/js/demo/datatables-demo.js"></script>

</body>

</html>