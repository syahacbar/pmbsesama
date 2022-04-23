<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Referensi Data Fakultas</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="10">No.</th>
                                    <th>Fakultas</th>
                                    <th width="150">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($fakultas as $f) : ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $f['namafakultas']; ?></td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-icon-split btn-sm editform" data-fakultas="<?php echo $f['namafakultas'] ?>" data-idfakultas="<?php echo $f['idfakultas'] ?>">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-icon-split btn-sm deletedata" data-idfakultas="<?php echo $f['idfakultas'] ?>">
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
                    <h6 class="m-0 font-weight-bold text-primary">Tambah/Edit Data Fakultas</h6>
                </div>
                <div class="card-body">
                    <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('notif'); ?>"></div>
                    <form id="formfakultas" action="<?php echo site_url($linkform); ?>" method="post">
                        <div class="form-group">
                            <label>Fakultas</label>
                            <input id="txtFakultas" type="text" class="form-control" name="fakultas" placeholder="Fakultas" required>
                        </div>
                        <input type="hidden" id="idfakultas" name="idfakultas">
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
            $("input#txtFakultas").val($(this).data('fakultas'));
            $("input#idfakultas").val($(this).data('idfakultas'));
            $('#formfakultas').attr('action', '<?php echo site_url('administrator/edit_fakultas'); ?>');
        });

        $(document).on('click', '.deletedata', function() {
            var idfakultas = $(this).data("idfakultas");
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
                        url: "<?php echo site_url(); ?>administrator/hapus_fakultas",
                        method: "POST",
                        data: {
                            idfakultas: idfakultas
                        },
                        
                        success: function(data) {
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