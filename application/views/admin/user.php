<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Berita</title>

    <link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>

</head>

<body>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">

                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Daftar User</h6>
                    </div>
                    <div class="card-body">
                        <div class="row mt-2">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-3">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#newUser">Tambah User</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered tabelAgenda" id="tableSlider" width="100%" cellspacing="0">
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
                                    foreach ($user as $u) { ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $u['first_name']; ?></td>
                                            <td><?php echo $u['username']; ?></td>
                                            <td><?php echo $u['email']; ?></td>
                                            <td><?php echo $u['phone']; ?></td>
                                            <td><?php echo $u['company']; ?></td>
                                            <td><?php echo $u['active']; ?></td>

                                            <td>
                                                <a href="#" class="btn btn-info btn-icon-split btn-sm editform" data-toggle="modal" data-target="#editUser">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-edit"></i>
                                                    </span>
                                                    <span class="text">Edit</span>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-icon-split btn-sm deletedata" data-id="<?php echo $u['id'] ?>">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-trash"></i>
                                                    </span>
                                                    <span class="text">Hapus</span>
                                                </a>
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
                    <!-- <?php // echo $this->session->flashdata('message'); 
                            ?> -->
            		<form method="post" action="<?php echo site_url('auth/create_user'); ?>">
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
                                            <label for="nama_depan">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama_depan" name="nama_depan" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="company">Nama Instansi</label>
                                            <input type="text" class="form-control" id="company" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="group">Grup</label>
			                                    <select name="groups" class="form-control">
			                                      <option value="">-- Pilih Group --</option>  
			                                    <?php foreach ($grup as $g):?>
			                                      <option value="<?php echo $g['name'];?>"><?php echo htmlspecialchars($g['description'],ENT_QUOTES,'UTF-8');?></option>
			                                    <?php endforeach?>

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
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="no_hp">Nomor HP/WA</label>
                                            <input type="text" class="form-control" id="no_hp" name="no_hp" required>
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
                                            <label for="confirm_password">Konfirmasi Kata Sandi</label>
                                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
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
                    <!-- <?php // echo $this->session->flashdata('message'); 
                            ?> -->
            		<form method="post" action="<?php echo site_url('auth/edit_user'); ?>">
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
                                            <label for="nama_depan">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama_depan" name="nama_depan" value="<?php echo $u['first_name']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" value="<?php echo $u['username']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="company">Nama Instansi</label>
                                            <input type="text" class="form-control" id="company" value="<?php echo $u['company']; ?>" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="group">Grup</label>
			                                    <select name="groups" class="form-control">
			                                      <option value="">-- Pilih Group --</option>  
			                                    <?php foreach ($grup as $g):?>
			                                      <option value="<?php echo $g['name'];?>"><?php echo htmlspecialchars($g['description'],ENT_QUOTES,'UTF-8');?></option>
			                                    <?php endforeach?>

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
                                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $u['email']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="no_hp">Nomor HP/WA</label>
                                            <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $u['phone']; ?>" required>
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
                                            <label for="confirm_password">Konfirmasi Kata Sandi</label>
                                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
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

</body>

</html>