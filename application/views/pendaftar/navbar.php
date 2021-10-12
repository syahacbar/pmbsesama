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