<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PMB SESAMA - UNIPA</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
    <style>
        .alert.alert-server {
            margin-bottom: 0;
        }

        .dropzone {
            min-height: 150px;
            border: 0;
            background: white;
            padding: 20px 20px;
        }

        .dropzone .dz-message {
            text-align: center;
            margin: 1em 0;
            padding: 37px 0;
            border: 2px solid #dce3f9;
            border-radius: 10px;
        }

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
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

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
                                                                        <label for="agama">Agama Anda</label>
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
                                                                        <input name="tempatlahir" id="tempatlahir" type="text" class="form-control" placeholder="" value="<?php echo $ep['lokasi_tempatlahir']; ?>" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label>Tanggal Lahir</label>
                                                                        <input type="date" name="tanggallahir" id="tanggallahir" class="datepicker" data-date-format="mm/dd/yyyy" value="<?php echo $ep['tgl_lahir']; ?>">
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
                                                                            <option value=<?php echo $ep['kab_tempatlahir']; ?>> <?php echo $ep['kab_tempatlahir']; ?> </option>
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
                                                                            <option value=<?php echo $ep['kab_tempattinggal']; ?>> <?php echo $ep['kab_tempattinggal']; ?> </option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label>Kecamatan/Distrik *</label>
                                                                        <select name="kectempattinggal" id="kectempattinggal" class="form-select" aria-label="Default select example">
                                                                            <option value=<?php echo $ep['kec_tempattinggal']; ?>> <?php echo $ep['kec_tempattinggal']; ?> </option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4 col-md-3 col-lg-3">
                                                                    <div class="form-group">
                                                                        <label>Kelurahan/Desa *</label>
                                                                        <select name="destempattinggal" id="destempattinggal" class="form-select" aria-label="Default select example">
                                                                            <option value=<?php echo $ep['des_tempattinggal']; ?>> <?php echo $ep['des_tempattinggal']; ?> </option>
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

                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label>Kelas XI semeseter 1</label>
                                                                                <input name="nrapor1" id="nrapor1" type="text" class="form-control" placeholder="" value="<?php echo $ep['nrapor1']; ?>" required></input>
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label>Kelas XI semeseter 2</label>
                                                                                <input name="nrapor2" id="nrapor2" type="text" class="form-control" placeholder="" value="<?php echo $ep['nrapor2']; ?>" required></input>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label>Kelas XII semeseter 1</label>
                                                                                <input name="nrapor3" id="nrapor3" type="text" class="form-control" placeholder="" value="<?php echo $ep['nrapor3']; ?>" required></input>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="row mt-2">
                                                                        <div class="col-sm-12">
                                                                            <div class="form">
                                                                                <div class="dropzone rapor" id="file">
                                                                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                                                        <small>Unggah file rapor dalam bentuk .pdf dengan ukuran maksimal 500kb. Format nama file <b>Rapor.pdf</b> </small>
                                                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="dz-message">
                                                                                        <h6> Klik atau Drop file PDF ke sini</h6>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
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
                                                                        <option value=<?php echo $ep['kab_tempattinggalortu']; ?>> <?php echo $ep['kab_tempattinggalortu']; ?> </option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 col-md-3 col-lg-3">
                                                                <div class="form-group">
                                                                    <label>Kecamatan/Distrik *</label>
                                                                    <select name="kecamatanortu" id="kecamatanortu" class="form-select" aria-label="Default select example">
                                                                        <option value=<?php echo $ep['kec_tempattinggalortu']; ?>> <?php echo $ep['kec_tempattinggalortu']; ?> </option>
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
    <script src="<?php echo base_url(); ?>/assets/backend/startbootstrap/vendor/jquery/jquery.min.js"></script>

    <script>
        Dropzone.autoDiscover = false;
        $(document).ready(function() {
            $("#provtempatlahir").change(function() {
                var url = "<?php echo site_url('register/add_ajax_kab'); ?>/" + $(this).val();
                $('#kabtempatlahir').load(url);
                return false;
            });

            $("#provtempattinggal").change(function() {
                var url = "<?php echo site_url('register/add_ajax_kab'); ?>/" + $(this).val();
                $('#kabtempattinggal').load(url);
                return false;
            });

            $("#kabtempattinggal").change(function() {
                var url = "<?php echo site_url('register/add_ajax_kec'); ?>/" + $(this).val();
                $('#kectempattinggal').load(url);
                return false;
            });
            $("#kectempattinggal").change(function() {
                var url = "<?php echo site_url('register/add_ajax_des'); ?>/" + $(this).val();
                $('#destempattinggal').load(url);
                return false;
            });

            $("#provortu").change(function() {
                var url = "<?php echo site_url('register/add_ajax_kab'); ?>/" + $(this).val();
                $('#kabupatenortu').load(url);
                return false;
            });

            $("#kabupatenortu").change(function() {
                var url = "<?php echo site_url('register/add_ajax_kec'); ?>/" + $(this).val();
                $('#kecamatanortu').load(url);
                return false;
            });

            // Unggah Rapor
            var upload_rapor = new Dropzone(".rapor", {
                url: "<?php echo site_url('administrator/rapor') ?>",
                maxFilesize: 2,
                method: "post",
                acceptedFiles: ".pdf",
                paramName: "filerapor",
                dictInvalidFileType: "Type file ini tidak dizinkan",
                addRemoveLinks: true,
            });

            upload_rapor.on("sending", function(a, b, c) {
                a.judulrapor = $("input[name='judulrapor']").val();
                c.append("judulrapor", a.judulinformasi);
            });
        });
    </script>


</body>

</html>