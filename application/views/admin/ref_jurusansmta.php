<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Referensi Data Jurusan SMTA</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="10">No.</th>
                                    <th>Jenis SMTA</th>
                                    <th width="150">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($jurusansmta as $js) : ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $js['namajurusan']; ?></td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-icon-split btn-sm editform" data-jurusansmta="<?php echo $js['namajurusan'] ?>" data-idjurusansmta="<?php echo $js['idjurusansmta'] ?>">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-icon-split btn-sm deletedata" data-idjurusansmta="<?php echo $js['idjurusansmta'] ?>">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                                <span class="text">Hapus</span>
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
        <div class="col-lg-6">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah/Edit Data Jurusan SMTA</h6>
                </div>
                <div class="card-body">
                    <?php echo $this->session->flashdata('notif'); ?>
                    <form id="formjurusansmta" action="<?php echo site_url($linkform); ?>" method="post">
                        <div class="form-group">
                            <label>Jurusan SMTA</label>
                            <input id="txtJurusansmta" type="text" class="form-control" name="jurusansmta" placeholder="Jurusan SMTA" required>
                            <input type="hidden" id="idjurusansmta" name="idjurusansmta">
                        </div>
                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#dataTable').DataTable();
        $("#dataTable").on("click", ".editform", function(){
            event.preventDefault();
            $("input#txtJurusansmta").val($(this).data('jurusansmta'));
            $("input#idjurusansmta").val($(this).data('idjurusansmta'));
            $('#formjurusansmta').attr('action', '<?php echo site_url('administrator/edit_jurusansmta'); ?>');
        });

        $(document).on('click', '.deletedata', function() {
            var idjurusansmta = $(this).data("idjurusansmta");
            Swal.fire({
                title: 'Apakah Anda Yakin akan menghapus?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak'
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?php echo site_url(); ?>administrator/hapus_jurusansmta",
                        method: "POST",
                        data: {
                            idjurusansmta: idjurusansmta
                        },

                        success: function(data) {
                            // alert("Data Berhasil Dihapus");
                            // location.reload();
                        }
                    });

                    Swal.fire(
                        'Terhapus!',
                        )
                    };
                    
                    location.reload();            
            })
        });
    });
</script>