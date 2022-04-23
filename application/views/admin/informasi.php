<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
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

        <div class="col-lg-4">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah/Edit Informasi</h6>
                </div>
                <div class="card-body">
                    <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('notif'); ?>"></div>
                    <form id="forminformasi" method="post">
                        <div class="form-group">
                            <label>Judul</label>
                            <input id="judulinformasi" type="text" class="form-control" name="judulinformasi" placeholder="Judul Informasi">
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
                        <button type="submit" class="btn btn-primary saveInformasi">Simpan</button>
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

            Swal.fire({
                title: 'Apakah yakin akan menghapus informasi?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak',
            }).then((result) => {
                if (result.isConfirmed) {
                    var id = $(this).data("id");
                    $.ajax({
                        url: "<?php echo site_url(); ?>/administrator/hapus_informasi",
                        method: "POST",
                        data: {
                            id: id
                        },
                        success: function(data) {
                            var hasil = JSON.parse(data);
                            if (hasil.statusCode == 1) {
                                Swal.fire({
                                    title: "Berhasil",
                                    text: "Menghapus informasi!",
                                    icon: "success",
                                }).then(function(isConfirm) {
                                    if (isConfirm) {
                                        location.reload();
                                    }
                                });
                            } else {
                                Swal.fire({
                                    title: "Berhasil",
                                    text: "Menghapus slider!",
                                    icon: "error",
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

        // Unggah Infromasi di halaman admin panel
        var upload_informasi = new Dropzone(".informasi", {
            autoProcessQueue: false,
            url: "<?php echo site_url('administrator/informasi') ?>",
            maxFilesize: 2,
            method: "post",
            acceptedFiles: ".pdf",
            paramName: "fileinformasi",
            dictInvalidFileType: "Type file ini tidak dizinkan",
            addRemoveLinks: true,
        });

        upload_informasi.on("sending", function(a, b, c) {
            a.judulinformasi = $("input[name='judulinformasi']").val();
            c.append("judulinformasi", a.judulinformasi);
        });



        // Simpan Informasi
        $(document).on('click', '.saveInformasi', function(e) {
            var judulinformasi = $("input[name='judulinformasi']").val();
            if (judulinformasi == null || judulinformasi == '') {
                Swal.fire({
                    title: "Peringatan!",
                    text: "Judul Informasi wajib diisi",
                    icon: "error",
                });
            } else {
                upload_informasi.processQueue();
            }
        })

    });
</script>