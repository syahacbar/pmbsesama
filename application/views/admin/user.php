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
                                        <th>Nama Lengkap</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>No. HP</th>
                                        <th>Grup</th>
                                        <th>Status</th>
                                        <th width="150">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($pengguna as $u) { ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $u->first_name . " " . $u->last_name; ?></td>
                                            <td><?php echo $u->username; ?></td>
                                            <td><?php echo $u->email; ?></td>
                                            <td><?php echo $u->phone; ?></td>
                                            <td><?php echo $u->company; ?></td>
                                            <td>
                                                <?php echo ($u->active == '1') ? "Aktif" : "Tidak Aktif"; ?>
                                            </td>

                                            <td>
                                                <a id="ubahData" class="btn btn-info btn-sm mb-1" href="" title="Edit User" data-toggle="modal" data-target="#editUser" data-firstname="<?php echo $u->first_name; ?>" data-identity="<?php echo $u->username; ?>" data-company="<?php echo $u->company; ?>" data-email="<?php echo $u->email; ?>" data-phone="<?php echo $u->phone; ?>">
                                                    <i class="fas fa-edit" title="Ubah"></i>
                                                </a>

                                                <?php
                                                if ($u->active == '1') {
                                                    echo '<button data-iduser="' . $u->id . '" data-namauser="' . $u->username . '" class="btn btn-warning btn-sm btnNonaktif"><i class="fas fa-ban" title="Nonaktifkan"></i></button>';
                                                } else {
                                                    echo '<button data-iduser="' . $u->id . '" data-namauser="' . $u->username . '" class="btn btn-success btn-sm btnAktif" title="Aktifkan" href=""><i class="fas fa-ban"></i></button>';
                                                }
                                                ?>
                                                <form action="<?php echo base_url('user/hapus_user') ?>" method="POST">
                                                    <input type="hidden" name="id" value="<?php echo $u->id; ?>">
                                                    <button onclick="return confirm('Anda yakin ingin menghapus user ini?')" class="btn btn-danger btn-sm" title="Hapus"><i class="fas fa-trash"></i></button>
                                                </form>
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
        <div class="modal fade" id="newUser" tabindex="-1" role="dialog" aria-labelledby="newUserLabel" aria-hidden="true">
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
                                                <label for="first_name">Nama Lengkap</label>
                                                <input type="text" class="form-control" id="first_name" name="first_name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="identity">Username</label>
                                                <input type="text" class="form-control" id="identity" name="identity" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="company">Nama Instansi</label>
                                                <input type="text" class="form-control" id="company" name="company" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="group">Grup</label>
                                                <select name="groups" class="form-control">
                                                    <option value="">-- Pilih Group --</option>
                                                    <?php foreach ($grup as $g) : ?>
                                                        <option value="<?php echo $g['id']; ?>"><?php echo htmlspecialchars($g['description'], ENT_QUOTES, 'UTF-8'); ?></option>
                                                    <?php endforeach ?>

                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="phone">Nomor HP/WA</label>
                                                <input type="text" class="form-control" id="phone" name="phone" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="password">Kata Sandi</label>
                                                <input type="password" class="form-control" id="password" name="password" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="password_confirm">Konfirmasi Kata Sandi</label>
                                                <input type="password" class="form-control" id="password_confirm" name="password_confirm" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="id" name="id" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="submit" id="btnSubmit" class="btn btn-primary">Buat</button>

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
                    <form method="post" action="<?php echo site_url('user/edit_user'); ?>">
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
                                                <label for="first_name">Nama Depan</label>
                                                <input type="text" class="form-control" id="namalengkap" name="first_name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="identity">Username</label>
                                                <input type="text" class="form-control" id="namauser" name="identity" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="company">Nama Instansi</label>
                                                <input type="text" class="form-control" id="sekolah" name="company" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="surel" name="email" required>
                                            </div>
                                        </div>

                                        <!-- <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="group">Grup</label>
                                                <select name="groups" class="form-control">
                                                    <option value="">-- Pilih Group --</option>
                                                    <?php // foreach ($grup as $g) : 
                                                    ?>
                                                        <option value="<?php // echo $g['name']; 
                                                                        ?>"><?php // echo htmlspecialchars($g['description'], ENT_QUOTES, 'UTF-8'); 
                                                                            ?></option>
                                                    <?php // endforeach 
                                                    ?>

                                                </select>
                                            </div>
                                        </div> -->

                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="phone">Nomor HP/WA</label>
                                                <input type="text" class="form-control" id="nohp" name="phone" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="password">Kata Sandi</label>
                                                <input type="password" class="form-control" id="sandi" name="password" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="confirm_password">Konfirmasi Kata Sandi</label>
                                                <input type="password" class="form-control" id="katasandi" name="confirm_password" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="id" name="id" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="submit" id="btnSubmit" class="btn btn-primary">Buat</button>

                        </div>
                        <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>
            $(document).ready(function() {
                var tabelUser = $('#tabelUser').DataTable();

                $("#tabelUser").on("click", ".btnNonaktif", function() {
                    var iduser = $(this).attr("data-iduser");
                    var namauser = $(this).attr("data-namauser");
                    $.ajax({
                        url: '<?php echo site_url(); ?>user/nonaktifkanuser',
                        method: 'post',
                        data: {
                            iduser: iduser
                        },
                        success: function(data) {
                            var objData = jQuery.parseJSON(data);
                            console.log(objData.status);
                            location.reload();
                        }
                    });
                });

                $("#tabelUser").on("click", ".btnAktif", function() {
                    var iduser = $(this).attr("data-iduser");
                    var namauser = $(this).attr("data-namauser");
                    $.ajax({
                        url: '<?php echo site_url(); ?>user/aktifkanuser',
                        method: 'post',
                        data: {
                            iduser: iduser
                        },
                        success: function(data) {
                            var objData = jQuery.parseJSON(data);
                            console.log(objData.status);
                            location.reload();
                        }
                    });
                });

            });
        </script>
        <script>
            $(document).ready(function() {
                $(document).on('click', '#ubahData', function() {
                    var firstname = $(this).data('firstname');
                    var identity = $(this).data('identity');
                    var company = $(this).data('company');
                    var email = $(this).data('email');
                    var phone = $(this).data('phone');
                    var sandi = $(this).data('sandi');
                    var katasandi = $(this).data('katasandi');

                    $('#namalengkap').val(firstname);
                    $('#namauser').val(identity);
                    $('#sekolah').val(company);
                    $('#surel').val(email);
                    $('#nohp').val(phone);
                    $('#sandi').val(sandi);
                    $('#katasandi').val(katasandi);
                })
            })
        </script>
</body>

</html>