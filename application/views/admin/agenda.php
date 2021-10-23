<link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>

<style>
    .tabelAgenda img {
        width: 120px;
        height: auto;
    }
</style>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Agenda Penerimaan</h6>
                </div>
                <div class="card-body">
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
                                            <img src="<?php echo base_url('assets/upload/agenda/') . $ag['gambar'];
                                                        ?>">
                                        </td>

                                        <td>
                                            <a href="#" class="btn btn-info btn-icon-split btn-sm editform" data-judulagenda="<?php echo $ag['judul'] ?>" data-isiagenda="<?php echo $ag['isi_agenda'] ?>" data-gambar="<?php echo $ag['gambar'] ?>" data-idagenda="<?php echo $ag['id'] ?>">
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

        <div class="col-lg-4">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah/Edit Agenda Penerimaan</h6>
                </div>
                <div class="card-body">
                    <?php echo $this->session->flashdata('notif'); ?>
                    <form id="formagenda" action="<?php echo site_url($linkform); ?>" method="post">
                        <div class="form-group">
                            <label>Judul</label>
                            <input id="judulAgenda" type="text" class="form-control" name="judulagenda" placeholder="Judul Agenda" required>
                            <input type="hidden" id="idagenda" name="idagenda">
                        </div>
                        <div class="form-group">
                            <label>Isi Agenda</label>
                            <textarea id="isiAgenda" class="form-control" name="isiagenda" placeholder="Isi Agenda" required></textarea>
                            <input type="hidden" id="idagenda" name="idagenda">
                        </div>

                        <div class="form-group">
                            <label>Gambar Agenda</label>
                            <div class="dropzone agenda col-sm-12 mb-5" id="upload-agenda">
                                <div class="form">
                                    <div id="userFile" name="userfile" class="dz-message">
                                        <h6> Klik atau Drop file ke sini</h6>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#dataTable').DataTable();
            $("#dataTable").on("click", ".editform", function() {
                event.preventDefault();
                $("input#judulAgenda").val($(this).data('judul'));
                $("textarea#isiAgenda").val($(this).data('isi_agenda'));
                $("#userFile").val($(this).data('userfile'));
                $("input#id").val($(this).data('id'));

                $('#formagenda').attr('action', '<?php echo site_url('administrator/agenda/edit'); ?>');
            });

            $(document).on('click', '.deletedata', function() {
                var id = $(this).data("id");
                if (confirm("Are you sure you want to delete this?")) {
                    $.ajax({
                        url: "<?php echo site_url(); ?>administrator/agenda/delete",
                        method: "POST",
                        data: {
                            id: id
                        },
                        success: function(data) {
                            alert("Data Berhasil Dihapus");
                            location.reload();
                        }
                    });
                } else {
                    return false;
                }
            });
        });
    </script>

    <script type="text/javascript">
        Dropzone.autoDiscover = false;

        var upload_agenda = new Dropzone(".agenda", {
            url: "<?php echo base_url('administrator/agenda') ?>",
            maxFilesize: 2,
            method: "post",
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            paramName: "userfile",
            dictInvalidFileType: "Type file ini tidak dizinkan",
            addRemoveLinks: true,
        });

        //Event ketika Memulai mengupload
        // upload_agenda.on("sending", function(a, b, c) {
        //     a.nama = Math.random();
        //     c.append("agenda_name", a.nama);
        // });

        upload_agenda.on("sending", function(file, xhr, formData) {
            formData.append("gambar", "gambar");
        });
    </script>