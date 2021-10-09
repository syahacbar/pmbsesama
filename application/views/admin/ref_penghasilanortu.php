<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Referensi Data Penghasilan Orang Tua</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="10">No.</th>
                                    <th>Penghasilan Orang Tua</th>
                                    <th width="150">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($penghasilanortu as $ph) : ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $ph['penghasilan']; ?></td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-icon-split btn-sm editform" data-penghasilanortu="<?php echo $ph['penghasilan'] ?>" data-idpenghasilan="<?php echo $ph['idpenghasilan'] ?>">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-icon-split btn-sm deletedata" data-idpenghasilan="<?php echo $ph['idpenghasilan'] ?>">
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
                    <h6 class="m-0 font-weight-bold text-primary">Tambah/Edit Data Penghasilan Orang Tua</h6>
                </div>
                <div class="card-body">
                    <?php echo $this->session->flashdata('notif'); ?>
                    <form id="formpenghasilanortu" action="<?php echo site_url($linkform); ?>" method="post">
                        <div class="form-group">
                            <label>Penghasilan Orang Tua</label>
                            <input id="txtPenghasilanortu" type="text" class="form-control" name="penghasilanortu" placeholder="Penghasilan Orang Tua" required>
                            <input type="hidden" id="idpenghasilan" name="idpenghasilan">
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
            $("input#txtPenghasilanortu").val($(this).data('penghasilanortu'));
            $("input#idpenghasilan").val($(this).data('idpenghasilan'));
            $('#formpenghasilanortu').attr('action', '<?php echo site_url('administrator/ref_penghasilanortu/edit'); ?>');
        });

        $(document).on('click', '.deletedata', function() {
            var idpenghasilan = $(this).data("idpenghasilan");
            if (confirm("Are you sure you want to delete this?")) {
                $.ajax({
                    url: "<?php echo site_url(); ?>administrator/ref_penghasilanortu/delete",
                    method: "POST",
                    data: {
                        idpenghasilan: idpenghasilan
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