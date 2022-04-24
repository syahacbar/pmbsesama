    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col-sm-6">
                                <h6 class="m-0 font-weight-bold text-primary">Referensi Data SMTA</h6>
                            </div>
                            <div class="col-sm-6 d-flex justify-content-end">
                                <button id="btnTambahsmta" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#newDataSMTA"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php echo $this->session->flashdata('notif'); ?>
                        <form id="formkabupaten" method="POST" class="row g-3">
                            <div class="col-md-3">
                                <label for="optProvinsi" class="form-label">Pilih Provinsi</label>
                                <select name="optProvinsi" id="optProvinsi" class="form-control">
                                    <option value="0">-- Semua Provinsi --</option>
                                    <?php foreach ($provinsi as $pr) : ?>
                                        <option value="<?php echo $pr['kode']; ?>"><?php echo $pr['nama']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="txtKabupaten" class="form-label">Pilih Kabupaten/Kota</label>
                                <select name="optKabupaten" id="optKabupaten" class="form-control">
                                    <option value="0">-- Semua Kabupaten/Kota --</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <label for="txtKecamatan" class="form-label">Pilih Kecamatan</label>
                                <select name="optKecamatan" id="optKecamatan" class="form-control">
                                    <option value="0">-- Semua Kecamatan --</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <?php echo $this->session->flashdata('notif'); ?>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="tableSMTA" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="10">No.</th>
                                        <th>Nama SMTA</th>
                                        <th>NPSN</th>
                                        <th>Alamat</th>
                                        <th width="150">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <!-- Modal Tambah SMTA -->
    <div class="modal fade" id="newDataSMTA" tabindex="-1" role="dialog" aria-labelledby="newDataSMTALabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal-lg">
                <div class="modal-header">
                    <h5 class="modal-title" id="newDataSMTALabel">Tambah SMTA Baru</h5>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <?php echo $this->session->flashdata('notif'); ?>
                        <form id="formnamasmta" action="" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama SMTA</label>
                                        <input id="namasmta" type="text" class="form-control" name="namasmta" placeholder="Nama SMTA" required>
                                        <input type="hidden" id="idsmta" name="idsmta">
                                    </div>
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <select name="provinsismta" id="provinsismta" class="form-control">
                                            <option value="0">-- Pilih Provinsi --</option>
                                            <?php foreach ($provinsi as $pr) : ?>
                                                <option value="<?php echo $pr['kode']; ?>"><?php echo $pr['nama']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <select name="kecamatansmta" id="kecamatansmta" class="form-control">
                                            <option value="0">-- Pilih Kecamatan --</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>NPSN</label>
                                        <input id="npsnsmta" type="text" class="form-control" name="npsnsmta" placeholder="NPSN" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Kabupaten</label>
                                        <select name="kabupatensmta" id="kabupatensmta" class="form-control">
                                            <option value="0">-- Pilih Kabupaten --</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea id="alamatsmta" type="text" class="form-control" name="alamatsmta" placeholder="Alamat"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button class="btn btn-primary btnSimpansmta">Save</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
    <!-- Akhir Modal Tambah SMTA -->

    <!-- Modal Edit SMTA -->
    <div class="modal fade" id="editDataSMTA" tabindex="-1" role="dialog" aria-labelledby="editDataSMTALabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal-lg">
                <div class="modal-header">
                    <h5 class="modal-title" id="editDataSMTALabel">Edit SMTA Baru</h5>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('notif'); ?>"></div>
                        <form id="formnamasmta" action="<?php echo site_url($linkform); ?>" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama SMTA</label>
                                        <input id="edit_namasmta" type="text" class="form-control" name="edit_namasmta" placeholder="Nama SMTA" value="" required>
                                        <input type="hidden" id="edit_idsmta" name="edit_idsmta">
                                    </div>
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <select name="edit_provinsismta" id="edit_provinsismta" class="form-control">
                                            <option value="0">-- Pilih Provinsi --</option>
                                            <?php foreach ($provinsi as $pr) : ?>
                                                <option value="<?php echo $pr['kode']; ?>"><?php echo $pr['nama']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <select name="edit_kecamatansmta" id="edit_kecamatansmta" class="form-control">
                                            <option value="0">-- Pilih Kecamatan --</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>NPSN</label>
                                        <input id="edit_npsnsmta" type="text" class="form-control" name="edit_npsnsmta" placeholder="NPSN" required>
                                    </div>


                                    <div class="form-group">
                                        <label>Kabupaten</label>
                                        <input type="hidden" name="h_edit_kabupatensmta" id="h_edit_kabupatensmta" value="">
                                        <select name="edit_kabupatensmta" id="edit_kabupatensmta" class="form-control">
                                            <option value="0">-- Pilih Kabupaten --</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea id="edit_alamatsmta" type="text" class="form-control" name="edit_alamatsmta" placeholder="Alamat"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary btnSimpanEdit">Save</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
    <!-- Akhir Modal Edit SMTA -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        var save_method; //for save method string
        var tablePendaftar;

        $(document).ready(function() {
            load_data();

            function reload_table() {
                $('#tableSMTA').DataTable().ajax.reload(null, false);
            };

            function load_data(is_provinsi, is_kabupaten, is_kecamatan) {
                var tableSMTA = $('#tableSMTA').DataTable({
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json"
                    },
                    "processing": true,
                    "serverSide": true,
                    "stateSave": true,
                    "order": [],
                    "columnDefs": [{
                            "targets": 0,
                            "orderable": false,
                            "width": "8%",
                            "className": "text-center"
                        },
                        {
                            "targets": 1,
                            "orderable": false,
                        },
                        {
                            "targets": -1,
                            "orderable": false,
                            "width": "12%",
                            "className": "text-center"
                        }
                    ],
                    "fixedColumns": {
                        "left": 1,
                        "right": 1
                    },
                    "ajax": {
                        //panggil method ajax list dengan ajax
                        "url": '<?php echo site_url('Datatables/smta_list'); ?>',
                        "type": "POST",
                        "data": {
                            is_provinsi: is_provinsi,
                            is_kabupaten: is_kabupaten,
                            is_kecamatan: is_kecamatan,
                        }
                    },

                });

                tableSMTA.search('').draw();
            }

            $(document).on('change', '#optProvinsi', function() {
                var url = "<?php echo site_url('register/add_ajax_kab'); ?>/" + $(this).val();
                $('#optKabupaten').load(url);
                //return false;

                var tableSMTA = $('#tableSMTA').DataTable();
                var is_provinsi = $('#optProvinsi').val();
                // var is_kabupaten = $('#optKabupaten').val();
                // var is_kecamatan = $('#optKecamatan').val();

                tableSMTA.destroy();
                if (is_provinsi != '') {
                    load_data(is_provinsi);
                    tableSMTA.search('').draw();
                } else {
                    load_data();
                }

                tableSMTA.search('').draw();
            });

            $(document).on('change', '#optKabupaten', function() {
                var url = "<?php echo site_url('register/add_ajax_kec'); ?>/" + $(this).val();
                $('#optKecamatan').load(url);
                //return false;

                var tableSMTA = $('#tableSMTA').DataTable();
                var is_provinsi = $('#optProvinsi').val();
                var is_kabupaten = $('#optKabupaten').val();
                // var is_kecamatan = $('#optKecamatan').val();

                tableSMTA.destroy();
                if (is_kabupaten != '') {
                    load_data(is_provinsi, is_kabupaten);
                    tableSMTA.search('').draw();
                } else {
                    load_data();
                }

                tableSMTA.search('').draw();
            });

            $(document).on('click', '#btnTambahsmta', function() {
                $("#provinsismta").change(function() {
                    var url = "<?php echo site_url('register/add_ajax_kab'); ?>/" + $(this).val();
                    $('#kabupatensmta').load(url);
                    return false;
                });

                $("#kabupatensmta").change(function() {
                    var url = "<?php echo site_url('register/add_ajax_kec'); ?>/" + $(this).val();
                    $('#kecamatansmta').load(url);
                    return false;
                });
            });

            $(document).on('click', '.btnSimpansmta', function() {
                var namasmta = $("#namasmta").val();
                var provinsismta = $("#provinsismta").val();
                var kabupatensmta = $("#kabupatensmta").val();
                var kecamatansmta = $("#kecamatansmta").val();
                var npsnsmta = $("#npsnsmta").val();
                var alamatsmta = $("#alamatsmta").val();

                $.ajax({
                    url: "<?php echo site_url(); ?>administrator/tambah_smta",
                    method: "POST",
                    data: {
                        namasmta: namasmta,
                        provinsismta: provinsismta,
                        kabupatensmta: kabupatensmta,
                        kecamatansmta: kecamatansmta,
                        npsnsmta: npsnsmta,
                        alamatsmta: alamatsmta
                    },

                    success: function(data) {
                        var hasil = JSON.parse(data);
                        if (hasil.statusCode == 1) {
                            Swal.fire({
                                title: 'Berhasil tambah SMTA',
                                icon: 'success',
                                showCancelButton: false,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Ya',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    $('#newDataSMTA').modal('hide');
                                    reload_table();
                                };
                            })
                        }
                    },
                });
            });

            $("#tableSMTA").on("click", ".btnEdit", function() {
                var idsmta = $(this).data('idsmta');
                $.ajax({
                    type: "POST",
                    url: '<?php echo site_url() ?>/datatables/editsmta/' + idsmta,
                    data: {
                        idsmta: idsmta,
                    },
                    success: function(response) {
                        var json = $.parseJSON(response);
                        $('input[name="edit_idsmta"]').val(json.id);
                        $('input[name="edit_namasmta"]').val(json.nama_smta);
                        $('input[name="edit_npsnsmta"]').val(json.npsn_smta);
                        $('select[name="edit_provinsismta"]').val(json.provinsi_smta).attr('selected', 'selected');
                        //$('select[name="edit_kabupatensmta"]').val(json.kabupaten_smta).attr('selected', 'selected');

                        $("#edit_provinsismta").change(function() {
                            var url = "<?php echo site_url('register/add_ajax_kab'); ?>/" + $(this).val();
                            $('#edit_kabupatensmta').load(url);
                            return false;
                        });

                        $("#edit_kabupatensmta").change(function() {
                            var url = "<?php echo site_url('register/add_ajax_kec'); ?>/" + $(this).val();
                            $('#edit_kecamatansmta').load(url);
                            return false;
                        });

                        var edit_provinsismta = $("#edit_provinsismta").val();
                        if (edit_provinsismta != "0") {
                            //set selected kab by data from db
                            var url = "<?php echo site_url('register/add_ajax_kab'); ?>/" + edit_provinsismta + "/" + json.kabupaten_smta;
                            $('#edit_kabupatensmta').load(url);
                        }

                        var url3 = "<?php echo site_url('register/add_ajax_kec'); ?>/" + json.kabupaten_smta + "/" + json.kecamatan_smta;
                        $('#edit_kecamatansmta').load(url3);

                        $('textarea[name="edit_alamatsmta"]').val(json.alamat_smta);

                    }
                });
            });

            $(document).on('click', '.btnSimpanEdit', function() {
                var namasmta = $("#edit_namasmta").val();
                var provinsismta = $("#edit_provinsismta").val();
                var kabupatensmta = $("#edit_kabupatensmta").val();
                var kecamatansmta = $("#edit_kecamatansmta").val();
                var npsnsmta = $("#edit_npsnsmta").val();
                var alamatsmta = $("#edit_alamatsmta").val();
                var idsmta = $("#edit_idsmta").val();
                $.ajax({
                    url: "<?php echo site_url(); ?>administrator/simpan_editsmta",
                    method: "POST",
                    data: {
                        idsmta: idsmta,
                        namasmta: namasmta,
                        provinsismta: provinsismta,
                        kabupatensmta: kabupatensmta,
                        kecamatansmta: kecamatansmta,
                        npsnsmta: npsnsmta,
                        alamatsmta: alamatsmta
                    },

                    success: function(data) {
                        var hasil = JSON.parse(data);
                        if (hasil.statusCode == 1) {
                            Swal.fire({
                                title: 'SMTA berhasil diubah',
                                icon: 'success',
                                showCancelButton: false,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Ya',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    $('#editDataSMTA').modal('hide');
                                    reload_table();
                                };
                            })
                        }
                    },

                });
            });

            $(document).on("click", ".btnHapus", function() {
                var idsmta = $(this).data('idsmta');
                $.ajax({
                    type: "POST",
                    url: '<?php echo site_url() ?>/administrator/hapus_smta/',
                    data: {
                        idsmta: idsmta
                    },
                    success: function(data) {
                        var hasil = JSON.parse(data);
                        if (hasil.statusCode == 1) {
                            Swal.fire({
                                title: 'Apakah yakin akan menghapus SMTA?',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Ya',
                                cancelButtonText: 'Tidak',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    Swal.fire({
                                        title: "Berhasil",
                                        text: "Menghapus slider!",
                                        icon: "success",
                                        buttons: [
                                            'NO',
                                            'YES'
                                        ],
                                    }).then(function(isConfirm) {
                                        if (isConfirm) {
                                            reload_table();
                                        } else {
                                            //if no clicked => do something else
                                        }
                                    });
                                };
                            })
                        }
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Maaf...',
                            text: 'Ada yang salah!',
                            confirmButtonText: 'Kembali',
                        })
                    }
                });
            });

        });
    </script>