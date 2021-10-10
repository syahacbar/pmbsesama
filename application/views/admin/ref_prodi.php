<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Referensi Data Program Studi</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="10">No.</th>
                                    <th>Program Studi</th>
                                    <th>Fakultas</th>
                                    <th width="150">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($prodi as $pr) : ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $pr['namaprodi']; ?></td>
                                        <td><?php echo $pr['namafakultas']; ?></td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-icon-split btn-sm editform" data-namaprodi="<?php echo $pr['namaprodi'] ?>" data-idprodi="<?php echo $pr['idprodi'] ?>" data-idfakultas="<?php echo $pr['idfakultas'] ?>">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-icon-split btn-sm deletedata" data-idprodi="<?php echo $pr['idprodi'] ?>">
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
        <div class="col-lg-4">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah/Edit Data Program Studi</h6>
                </div>
                <div class="card-body">
                    <?php echo $this->session->flashdata('notif'); ?>
                    <form id="formprodi" action="<?php echo site_url($linkform); ?>" method="post">
                        <div class="form-group">
                            <label>Program Studi</label>
                            <input id="txtProdi" type="text" class="form-control" name="prodi" placeholder="Program Studi" required>
                        </div>
                        <div class="form-group">
                            <label>Pilih Fakultas</label>
                            <select name="optFakultas" id="optFakultas" class="form-control">
                                <option>Pilih Fakultas</option>
                                <?php foreach ($fakultas AS $f) : ?>
                                <option value="<?php echo $f['idfakultas'];?>"><?php echo $f['namafakultas'];?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                        <input type="hidden" id="idprodi" name="idprodi">
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
            $("input#txtProdi").val($(this).data('namaprodi'));
            $("input#idprodi").val($(this).data('idprodi'));
            $("select#optFakultas").val($(this).data('idfakultas')).change();
            $('#formprodi').attr('action', '<?php echo site_url('administrator/ref_prodi/edit'); ?>');
        });

        $(document).on('click', '.deletedata', function() {
            var idprodi = $(this).data("idprodi");
            if (confirm("Are you sure you want to delete this?")) {
                $.ajax({
                    url: "<?php echo site_url(); ?>administrator/ref_prodi/delete",
                    method: "POST",
                    data: {
                        idprodi: idprodi
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