<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Edit Berita</title>

<link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>

<!-- ===== Editor Text ===== -->
<script src="<?php echo base_url('assets/backend/tinymce/tinymce.min.js'); ?>"></script>

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
                                    <th width="150">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($agenda as $ag) { ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $ag['judul']; ?></td>
                                        <td><?php echo $ag['isi_agenda']; ?></td>
                                        <td>
                                            <!-- <img src="<?php // echo base_url('assets/upload/agenda/') . $ag['gambar'];
                                                        ?>"> -->
                                        </td>

                                        <td>
                                            <a href="#" class="btn btn-info btn-icon-split btn-sm editform">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-icon-split btn-sm deletedata" data-id="<?php echo $ag['id'] ?>">
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


    <!-- Modal -->
    <div class="modal fade" id="newAgenda" tabindex="-1" role="dialog" aria-labelledby="newAgendaLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal-lg">
                <div class="modal-header">
                    <h5 class="modal-title" id="newAgendaLabel">Buat Agenda Baru</h5>
                </div>
                <?php echo $this->session->flashdata('message'); ?>
                <?php echo form_open_multipart('administrator/saveagenda', array('id' => 'formInputAgenda')); ?>
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

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="idagenda" name="idagenda" value="<?php echo $ag['id'] ?>" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Buat Agenda</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        Dropzone.autoDiscover = false;
        var spinner = $('#loader');
        $(document).ready(function() {

            $('#formInputAgenda').submit(function(e) {
                e.preventDefault();
                spinner.show();

                var judulagenda = $("input[name='judulagenda']").val();
                var isiagenda = $("textarea[name='isiagenda']").val();
                var id = $("input[name='idagenda']").val();

                $.ajax({
                    url: "<?php echo site_url('administrator/saveagenda') ?>",
                    type: "POST",
                    data: {
                        judulagenda: judulagenda,
                        isiagenda: isiagenda,
                        id: id,
                    },

                    error: function() {
                        console.log('Tidak berhasil simpan data');
                    },
                    success: function(data) {
                        var objData = jQuery.parseJSON(data);

                        if (objData.status) {
                              alert("Agenda Berhasil Disimpan");
                              spinner.hide();
                               location.reload();
                              //window.location.href = "<?php // echo base_url('admin/berita') ?>";
                        } else {
                            console.log('Gagal simpan');
                        }
                    }
                });

            });

            var gbr_agenda = new Dropzone(".gbrAgenda", {
                autoProcessQueue: true,
                url: "<?php echo site_url('administrator/unggahagenda') ?>",
                maxFilesize: 2,
                maxFiles: 1,
                method: "post",
                acceptedFiles: "image/*",
                paramName: "gbr_agenda",
                dictInvalidFileType: "Type file ini tidak dizinkan",
                addRemoveLinks: true,
            });

            gbr_agenda.on("sending", function(a, b, c) {
                a.token = Math.random();
                c.append("token_agenda", a.token); //Menmpersiapkan token untuk masing masing foto
                c.append("idagenda", $('#idagenda').val()); //ambil dari idberita yang tipe hidden di atas, sebelum button Simpan


            });


            $(document).on('click', '.deletedata', function() {
                var idagenda = $(this).data("idagenda");
                if (confirm("Are you sure you want to delete this?")) {
                    $.ajax({
                        url: "<?php echo site_url(); ?>admin/berita/deleteberita",
                        type: "POST",
                        data: {
                            idagenda: idagenda
                        },
                        success: function(data) {
                            var objData = jQuery.parseJSON(data);
                            console.log(objData.status);
                            console.log(objData.info);
                            //location.reload();
                        }
                    });
                } else {
                    return false;
                }
            });

        });
    </script>

    <script>
      tinymce.init({
        selector: '#tinymce'
      });
    </script>

  </body>
</html>