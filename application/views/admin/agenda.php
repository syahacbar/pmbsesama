<!DOCTYPE html>
<html lang="en">

<head>
    <title>Agenda - PMB UNIPA</title>

    <link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>

    <!-- ===== Editor Text ===== -->
    <script src="<?php echo base_url('assets/backend/tinymce/tinymce.min.js'); ?>"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
    <style>
        .tabelAgenda img {
            width: 120px;
            height: auto;
        }

        .col-lg-12.col-md-12.col-sm-12.col-xs-12 .tox-statusbar {
            display: none;
        }

        div#upload-agenda {
            min-height: 115px;
            border: 1px solid #ccc;
            background: white;
            padding: 7px 20px;
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
                        <h6 class="m-0 font-weight-bold text-primary">Agenda Penerimaan</h6>
                    </div>
                    <div class="card-body">
                        <div class="row mt-2">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-3">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#newAgenda">Tambah Agenda</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered tabelAgenda" id="tableSlider" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="10">No.</th>
                                        <th>Judul Agenda</th>
                                        <th>Isi Agenda</th>
                                        <th>Gambar</th>
                                        <th width="100">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($agenda as $ag) : ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $ag['judul']; ?></td>
                                            <td><?php echo $ag['isi_agenda']; ?></td>
                                            <td>
                                                <img src="<?php echo base_url('assets/upload/agenda/') . $ag['gambar']; ?>">
                                            </td>

                                            <td>
                                                <a id="ubahAgenda" href="#" class="btn btn-info btn-icon-split btn-sm editform" data-toggle="modal" data-target="#editAgenda" data-id="<?php echo $ag['id']; ?>" data-judulagenda="<?php echo $ag['judul']; ?>" data-isiagenda="<?php echo $ag['isi_agenda']; ?>" data-gbr="<?php echo $ag['gambar']; ?>">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-edit" title="Ubah Agenda"></i>
                                                    </span>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-icon-split btn-sm deletedata" data-id="<?php echo $ag['id'] ?>">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-trash" title="Hapus Agenda"></i>
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal Tambah Agenda -->
        <div class="modal fade" id="newAgenda" tabindex="-1" role="dialog" aria-labelledby="newAgendaLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content modal-lg">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newAgendaLabel">Buat Agenda Baru</h5>
                    </div>
                    <!-- <?php // echo $this->session->flashdata('message'); 
                            ?> -->
                    <?php echo form_open_multipart('', array('id' => 'formInputAgenda')); ?>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-info" role="alert">
                                    Semua data wajib diisi!
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="judulagenda">Judul Agenda</label>
                                            <input type="text" class="form-control" id="judulagenda" name="judulagenda" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Gambar Agenda</label>
                                            <div class="dropzone gbrAgenda col-sm-12 mb-5" id="upload-agenda">
                                                <div class="form">
                                                    <div id="gbrAgenda" name="gbrAgenda" class="dz-message">
                                                        <h6> Klik atau Drop file ke sini</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>Isi Agenda</label>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-0 px-0">
                                            <div class="form-group mt-0">
                                                <textarea id="tinymce" name="isiagenda"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" id="btnSubmit" class="btn btn-primary">Simpan</button>

                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <!-- Akhir Modal Tambah Agenda -->

        <!-- Modal Ubah Agenda -->
        <div class="modal fade" id="editAgenda" tabindex="-1" role="dialog" aria-labelledby="editAgendaLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content modal-lg">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editAgendaLabel">Ubah Data Agenda</h5>
                    </div>
                    <?php echo form_open_multipart('', array('id' => 'formEditAgenda')); ?>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-info" role="alert">
                                    Semua data wajib diisi!
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="judul">Judul Agenda</label>
                                            <input type="text" class="form-control" id="judul" name="judul" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Gambar Lama Agenda</label><br>
                                                    <img src="" width="50%" id="gambar">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Unggah Gambar Baru Agenda</label>
                                                    <div class="dropzone EditgbrAgenda col-sm-12 mb-5" id="upload-agenda">
                                                        <div class="form">
                                                            <div id="EditgbrAgenda" name="EditgbrAgenda" class="dz-message">
                                                                <h6> Klik atau Drop file ke sini</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>Isi Agenda</label>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-0 px-0">
                                            <div class="form-group mt-0">
                                                <textarea id="isi" name="isi"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="idagenda" name="idagenda">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" id="btnSubmit" class="btn btn-primary">Simpan</button>

                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <!-- Akhir Modal Ubah Agenda -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>
            Dropzone.autoDiscover = false;
            $(document).ready(function() {
                // $('#formInputAgenda').submit(function(e) {
                //     e.preventDefault();
                //     var judulagenda = $("input[name='judulagenda']").val();
                //     var isiagenda = $("textarea[name='isiagenda']").val();
                //     var idagenda = $("input[name='idagenda']").val();

                //     $.ajax({
                //         url: "<?php // echo site_url('administrator/saveagenda') 
                                    ?>",
                //         type: "POST",
                //         data: {
                //             judulagenda: judulagenda,
                //             isiagenda: isiagenda,
                //             idagenda: idagenda,
                //         },

                //         error: function() {
                //             console.log('Tidak berhasil simpan data');
                //         },
                //         success: function(data) {
                //             Swal.fire({
                //                 title: "Berhasil",
                //                 text: "Anda menambah 1 agenda baru",
                //                 icon: "success",
                //                 showCancelButton: false,
                //             }).then(function(isConfirm) {
                //                 if (isConfirm) {
                //                     location.reload();
                //                 }
                //             });
                //         }
                //     });

                // });

                var gbr_agenda = new Dropzone(".gbrAgenda", {
                    autoProcessQueue: false,
                    url: "<?php echo site_url('administrator/unggahagenda') ?>",
                    maxFilesize: 2,
                    maxFiles: 1,
                    method: "post",
                    acceptedFiles: ".jpeg,.jpg,.png,.gif",
                    paramName: "gbr_agenda",
                    dictInvalidFileType: "Type file ini tidak dizinkan",
                    addRemoveLinks: true,
                });

                gbr_agenda.on("sending", function(a, b, c) {
                    a.judulagenda = $("input[name='judulagenda']").val();
                    a.isiagenda = $("textarea[name='isiagenda']").val();
                    c.append("judulagenda", a.judulagenda);
                    c.append("isiagenda", a.isiagenda);
                });

                gbr_agenda.on("complete", function(file) {
                    location.reload();
                });


                $('#formInputAgenda').submit(function(e) {
                    e.preventDefault();
                    gbr_agenda.processQueue();

                    // alert("Berhasil simpan");
                    // location.reload();

                });

                var editgbr_agenda = new Dropzone(".EditgbrAgenda", {
                    autoProcessQueue: false,
                    url: "<?php echo site_url('administrator/editagenda') ?>",
                    maxFilesize: 2,
                    maxFiles: 1,
                    method: "post",
                    acceptedFiles: ".jpeg,.jpg,.png,.gif",
                    paramName: "editgbr_agenda",
                    dictInvalidFileType: "Type file ini tidak dizinkan",
                    addRemoveLinks: true,
                });

                editgbr_agenda.on("sending", function(a, b, c) {
                    a.judulagenda = $("input[name='judul']").val();
                    a.isiagenda = $("textarea[name='isi']").val();
                    a.idagenda = $("input[name='idagenda']").val();
                    c.append("judulagenda", a.judulagenda);
                    c.append("isiagenda", a.isiagenda);
                    c.append("idagenda", a.idagenda);
                });

                editgbr_agenda.on("complete", function(file) {
                    location.reload();
                });


                $('#formEditAgenda').submit(function(e) {
                    e.preventDefault();
                    editgbr_agenda.processQueue();

                    // alert("Berhasil simpan");
                    // location.reload();

                });

                // Hapus Agenda
                $(document).on('click', '.deletedata', function() {
                    var id = $(this).data("id"); 
                    $.ajax({
                        url: "<?php echo site_url(); ?>administrator/hapus_agenda",
                        method: "POST",
                        data: {
                            id: id
                        },
                        success: function(data) {
                            Swal.fire({
                                title: "Berhasil",
                                text: "Slider telah dihapus",
                                icon: "success",
                                showCancelButton: false,
                            }).then(function(isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            });
                        }
                    });
                });

            });
        </script>

        <script>
            tinymce.init({
                selector: '#tinymce'
            });
        </script>

        <script>
            ClassicEditor
                .create(document.querySelector('#isi'))
                .catch(error => {
                    console.error(error);
                });
        </script>
        <script>
            $(document).ready(function() {
                $(document).on('click', '#ubahAgenda', function() {
                    var id = $(this).data('id');
                    var judulagenda = $(this).data('judulagenda');
                    var isiagenda = $(this).data('isiagenda');
                    // var gbr = $(this).data('gbr');

                    $('#formEditAgenda #idagenda').val(id);
                    $('#judul').val(judulagenda);
                    $('#isi').val(isiagenda);
                    // $('#gambar').attr("src", "/assets/upload/agenda/" + gbr);

                    var gbr = $(this).data('gbr');
                    const img = document.getElementById("gambar");
                    img.src = "<?php echo base_url('assets/upload/agenda/'); ?>" + gbr;
                })
            })
        </script>
</body>

</html>