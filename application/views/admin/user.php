<!DOCTYPE html>
<html lang="en">

<head>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>

    <style>
        table#tabelUser tbody td:last-child {
            display: flex;
            justify-content: space-around;
        }
    </style>
</head>

<body>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">

                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Operator Sekolah</h6>
                    </div>
                    <div class="card-body">
                        <div class="row mt-2">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-3">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#newUser">Tambah User</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered tabelUser" id="tabelUser" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="10">No.</th>
                                        <th>Sekolah</th>
                                        <th>Nama Lengkap</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>No. HP</th>
                                        <th>Status</th>
                                        <th width="150">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($pengguna as $u) { ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $u->nama_smta; ?></td>
                                            <td><?php echo $u->first_name . " " . $u->last_name; ?></td>
                                            <td><?php echo $u->username; ?></td>
                                            <td><?php echo $u->email; ?></td>
                                            <td><?php echo $u->phone; ?></td>
                                            <td>
                                                <?php echo ($u->active == '1') ? "Aktif" : "Nonaktif"; ?>
                                            </td>

                                            <td>
                                                <button id="ubahData" class="btn btn-info btn-sm" href="" title="Edit User" data-toggle="modal" data-target="#editUser" data-idoperator="<?php echo $u->id; ?>" data-firstname="<?php echo $u->first_name; ?>" data-identity="<?php echo $u->username; ?>" data-company="<?php echo $u->company; ?>" data-email="<?php echo $u->email; ?>" data-phone="<?php echo $u->phone; ?>">
                                                    <i class="fas fa-edit" title="Ubah"></i>
                                                </button>

                                                <?php
                                                if ($u->active == '1') {
                                                    echo '<button data-iduser="' . $u->id . '" data-namauser="' . $u->username . '" class="btn btn-warning btn-sm btnNonaktif"><i class="fas fa-ban" title="Nonaktifkan"></i></button>';
                                                } else {
                                                    echo '<button data-iduser="' . $u->id . '" data-namauser="' . $u->username . '" class="btn btn-success btn-sm btnAktif" title="Aktifkan" href=""><i class="fas fa-ban"></i></button>';
                                                }
                                                ?>
                                                <button class="btn btn-danger btn-sm btnHapus" data-iduser="<?php echo $u->id; ?>" title="Hapus"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal Tambah User-->
        <div class="modal fade" id="newUser" role="dialog" aria-labelledby="newUserLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content modal-lg">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newUserLabel">Buat User Baru</h5>
                    </div>
                    <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('notif'); ?>"></div>
                    <form method="post" action="<?php echo site_url('user/create_user'); ?>">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="alert alert-info" role="alert">
                                        Semua data wajib diisi!
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="op_first_name">Nama Lengkap</label>
                                                <input type="text" class="form-control" id="op_first_name" name="op_first_name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="op_identity">Username</label>
                                                <input type="text" class="form-control" id="op_identity" name="op_identity" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <label>Nama Sekolah</label>
                                            <div class="form-group">
                                                <select name="op_namasekolah" id="op_namasekolah" class="form-select">
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="op_groups">Level</label>
                                                <input type="text" class="form-control" id="op_groups" name="op_groups" value="Operator Sekolah" readonly>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="op_email">Email</label>
                                                <input type="email" class="form-control" id="op_email" name="op_email" aria-describedby="emailHelp" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="op_phone">Nomor HP/WA</label>
                                                <input type="text" class="form-control" id="op_phone" name="op_phone" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="op_password">Kata Sandi</label>
                                                <input type="password" class="form-control" id="op_password" name="op_password" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="op_password_confirm">Konfirmasi Kata Sandi</label>
                                                <input type="password" class="form-control" id="op_password_confirm" name="op_password_confirm" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" name="btnSimpanTambahOp" id="btnSimpanTambahOp" class="btn btn-primary">Buat</button>

                        </div>
                        <?php echo form_close(); ?>
                </div>
            </div>
        </div>

        <!-- Modal Edit User -->
        <div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="editUserLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content modal-lg">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editUserLabel">Edit User</h5>
                    </div>
                    <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('notif'); ?>"></div>
                    <form method="post" action="">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="alert alert-info" role="alert">
                                        Semua data wajib diisi!
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="namadepan">Nama Depan</label>
                                                <input type="text" class="form-control" id="namadepan" name="namadepan">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="identitas">Username</label>
                                                <input type="text" class="form-control" id="identitas" name="identitas" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="perusahan">Nama Instansi</label>
                                                <input type="text" class="form-control" id="perusahan" name="perusahan">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="surel">Email</label>
                                                <input type="email" class="form-control" id="surel" name="surel">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="nohp">Nomor HP/WA</label>
                                                <input type="text" class="form-control" id="nohp" name="nohp">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="katasandi">Kata Sandi</label>
                                                <input type="password" class="form-control" id="katasandi" name="katasandi">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="confirm_katasandi">Konfirmasi Kata Sandi</label>
                                                <input type="password" class="form-control" id="confirm_katasandi" name="confirm_katasandi">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="idoperator" name="idoperator" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" name="submit" id="btnUbahOperator" class="btn btn-primary">Simpan</button>
                        </div>
                        <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/backend/sweetalert2/sweetalert2.min.js"></script>

        <script>
            $(document).ready(function() {
                function reload_table() {
                    $('#tabelUser').DataTable().ajax.reload(null, false);
                };

                var tabelUser = $('#tabelUser').DataTable();
                $("#tabelUser").on("click", ".btnNonaktif", function() {
                    var iduser = $(this).attr("data-iduser");
                    var namauser = $(this).attr("data-namauser");

                    $.ajax({
                        url: '<?php echo site_url(); ?>user/nonaktifkanuser',
                        type: "POST",
                        data: {
                            iduser: iduser
                        },
                        success: function(data) {
                            Swal.fire({
                                title: "Berhasil",
                                text: "User telah dinonaktifkan!",
                                icon: "success",
                            }).then(function(isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            });
                        }
                    });
                });

                $("#tabelUser").on("click", ".btnAktif", function() {
                    var iduser = $(this).attr("data-iduser");
                    var namauser = $(this).attr("data-namauser");

                    $.ajax({
                        url: '<?php echo site_url(); ?>user/aktifkanuser',
                        type: "POST",
                        data: {
                            iduser: iduser
                        },
                        success: function(data) {
                            Swal.fire({
                                title: "Berhasil",
                                text: "User telah diaktifkan!",
                                icon: "success",
                            }).then(function(isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            });
                        }
                    });
                });

                $(document).on('click', '#ubahData', function() {
                    var idoperator = $(this).data('idoperator');
                    var namadepan = $(this).data('firstname');
                    var identitas = $(this).data('identity');
                    var perusahan = $(this).data('company');
                    var surel = $(this).data('email');
                    var nohp = $(this).data('phone');

                    $('#idoperator').val(idoperator);
                    $('#namadepan').val(namadepan);
                    $('#identitas').val(identitas);
                    $('#perusahan').val(perusahan);
                    $('#surel').val(surel);
                    $('#nohp').val(nohp);
                });

                $(document).on('click', '.btnHapus', function() {
                    Swal.fire({
                        title: 'Apakah yakin akan menghapus user ini?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya',
                        cancelButtonText: 'Tidak',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            var iduser = $(this).data("iduser");
                            $.ajax({
                                url: "<?php echo site_url(); ?>user/hapus_user",
                                method: "POST",
                                data: {
                                    iduser: iduser
                                },
                                success: function(data) {
                                    var hasil = JSON.parse(data);
                                    if (hasil.status) {
                                        Swal.fire({
                                            title: "Berhasil",
                                            text: "Menghapus user!",
                                            icon: "success"
                                        }).then(function(isConfirm) {
                                            if (isConfirm) {
                                                location.reload();
                                            }
                                        });
                                    } else {
                                        Swal.fire({
                                            title: "Gagal",
                                            text: "Menghapus user!",
                                            icon: "error"
                                        }).then(function(isConfirm) {
                                            if (isConfirm) {
                                                location.reload();
                                            }
                                        });
                                    }
                                }
                            });

                        };

                    })
                });


                $(document).on('click', '#btnUbahOperator', function() {
                    var namadepan = $("input[name='namadepan']").val();
                    var identitas = $("input[name='identitas']").val();
                    var perusahan = $("input[name='perusahan']").val();
                    var surel = $("input[name='surel']").val();
                    var nohp = $("input[name='nohp']").val();
                    var katasandi = $("input[name='katasandi']").val();
                    var confirm_katasandi = $("input[name='confirm_katasandi']").val();
                    var idoperator = $("input[name='idoperator']").val();

                    if (katasandi == '' || katasandi == 'null') {
                        $.ajax({
                            type: "POST",
                            url: '<?php echo site_url('user/edit_operator') ?>',
                            data: {
                                namadepan: namadepan,
                                identitas: identitas,
                                perusahan: perusahan,
                                surel: surel,
                                nohp: nohp,
                                idoperator: idoperator
                            },
                            success: function(response) {
                                var hasil = $.parseJSON(response);
                                if (result.statusCode == 1) {
                                    Swal.fire({
                                        title: "Berhasil",
                                        text: "Ubah profil user.",
                                        icon: "success",
                                    }).then(function(isConfirm) {
                                        if (isConfirm) {
                                            location.reload();
                                        }
                                    });

                                } else {
                                    Swal.fire({
                                        title: "Peringatan!",
                                        text: "Gagal ubah profil user",
                                        icon: "error",
                                    });
                                }
                            }
                        });
                    } else {
                        if (katasandi == confirm_katasandi) {
                            $.ajax({
                                type: "POST",
                                url: '<?php echo site_url('user/edit_operator') ?>',
                                data: {
                                    idoperator: idoperator,
                                    namadepan: namadepan,
                                    identitas: identitas,
                                    perusahan: perusahan,
                                    surel: surel,
                                    nohp: nohp,
                                    katasandi: katasandi
                                },
                                success: function(response) {
                                    var hasil = $.parseJSON(response);
                                    if (result.statusCode == 1) {
                                        Swal.fire({
                                            title: "Berhasil",
                                            text: "Ubah profil user.",
                                            icon: "success",
                                        }).then(function(isConfirm) {
                                            if (isConfirm) {
                                                location.reload();
                                            }
                                        });
                                    } else {
                                        Swal.fire({
                                            title: "Peringatan!",
                                            text: "Gagal ubah profil user",
                                            icon: "error",
                                        });
                                    }
                                }
                            });
                        } else {
                            Swal.fire({
                                title: "Peringatan!",
                                text: "Kata sandi tidak sama, periksa kembali!",
                                icon: "error",
                            });
                        }
                    }
                });

                $(document).on('click', '#btnSimpanTambahOp', function() {
                    var identity = $("#op_identity").val();
                    var first_name = $("#op_first_name").val();
                    var email = $("#op_email").val();
                    var phone = $("#op_phone").val();
                    var password = $("#op_password").val();
                    var password_confirm = $("#op_password_confirm").val();
                    var id_sekolah = $("#op_namasekolah").val();

                    $.ajax({
                        url: "<?php echo site_url(); ?>user/tambah_operator",
                        method: "POST",
                        data: {
                            identity: identity,
                            first_name: first_name,
                            email: email,
                            phone: phone,
                            password: password,
                            password_confirm: password_confirm,
                            id_sekolah: id_sekolah
                        },

                        success: function(data) {
                            var hasil = JSON.parse(data);
                            if (hasil.statusCode == 1) {
                                Swal.fire({
                                    title: 'Berhasil tambah operator sekolah',
                                    icon: 'success',
                                    showCancelButton: false,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Ya',
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        $('#newUser').modal('hide');
                                        location.reload();
                                    };
                                })
                            }
                        },
                    });
                });

            });
        </script>
</body>

</html>