<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Informasi</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="tableInformasi" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="10">No.</th>
                                    <th>Judul Informasi</th>
                                    <th>File</th>
                                    <th width="150">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($informasi as $in) { ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $in['judul']; ?></td>
                                        <td><?php echo $in['file']; ?></td>
                                        <!-- <td>
                                            <img src="<?php // echo base_url('assets/upload/agenda/') . $in['gambar'];
                                                        ?>">
                                        </td> -->

                                        <td>
                                            <a class="btn btn-danger btn-icon-split btn-sm deletedata" data-id="<?php echo $in['id'] ?>">
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

        <div class="col-lg-6">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah/Edit Informasi</h6>
                </div>
                <div class="card-body">
                    <?php echo $this->session->flashdata('notif'); ?>
                    <form id="forminformasi" method="post">
                        <div class="form-group">
                            <label>Judul</label>
                            <input id="judulinformasi" type="text" class="form-control" name="judulinformasi" placeholder="Judul Informasi" required>
                        </div>
                        <div class="form-group">
                            <label>File</label>
                            <div class="dropzone informasi" id="file">
                                <div class="dz-message">
                                    <h3> Klik atau Drop file PDF disini</h3>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="idinformasi" name="idinformasi">
                        <input type="hidden" id="aksi" name="aksi" value="add">
                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary saveInformasi">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
    Dropzone.autoDiscover = false;

    $(document).ready(function() {

        $(document).on('click', '.deletedata', function() {
            var id = $(this).data("id");
            var aksi = "del";
            if (confirm("Are you sure you want to delete this?")) {
                $.ajax({
                    url: "<?php echo site_url(); ?>administrator/informasi",
                    method: "POST",
                    data: {
                        id: id,
                        aksi: aksi
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

        // var informasi_upload = new Dropzone(".informasi", {
        //     autoProcessQueue: false,
        //     url: "<?php echo site_url('/administrator/informasi') ?>",
        //     maxFilesize: 50,
        //     maxFiles: 1,
        //     method: "post",
        //     acceptedFiles: "application/pdf",
        //     paramName: "fileinformasi",
        //     dictInvalidFileType: "Type file ini tidak dizinkan",
        //     addRemoveLinks: true,
        // });

        // informasi_upload.on("sending", function(a, b, c) {
        //     c.append("judulinformasi", $("input#judulinformasi").val());
        //     c.append("idinformasi", $("input#idinformasi").val());
        // });

        // informasi_upload.on("complete", function(file) {
        //     if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
        //         window.location.href = "<?php echo site_url('/administrator/informasi'); ?>";
        //     }
        // });

        // $('#forminformasi').submit(function(e) {
        //     e.preventDefault();
        //     informasi_upload.processQueue();
        // });


    // Unggah Infromasi di halaman admin panel
    var upload_informasi = new Dropzone(".informasi", {
        url: "<?php echo base_url('administrator/informasi') ?>",
        maxFilesize: 2,
        method: "post",
        acceptedFiles: ".pdf",
        paramName: "fileinformasi",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
    });


    upload_informasi.on("sending", function(file, xhr, formData) {
        formData.append("judulinformasi", "judulinformasi");
    });


    // Simpan Slider
    $(document).on('click', '.saveInformasi', function(e) {

        Swal.fire({
            title: "Berhasil",
            text: "Anda telah menambah informasi baru!",
            icon: "success",
            buttons: [
                'NO',
                'YES'
            ],
        }).then(function(isConfirm) {
            if (isConfirm) {
                location.reload();
            } else {
                //if no clicked => do something else
            }
        });
    })

    });
</script>