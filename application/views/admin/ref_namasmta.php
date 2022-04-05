<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Referensi Data SMTA</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="10">No.</th>
                                    <th>Nama SMTA</th>
                                    <th>NPSN</th>
                                    <th>Alamat</th>
                                    <th>Provinsi</th>
                                    <th width="150">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($namasmta as $ns) : ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $ns['nama_smta']; ?></td>
                                        <td><?php echo $ns['npsn_smta']; ?></td>
                                        <td><?php echo $ns['alamat_smta']; ?></td>
                                        <td><?php echo $ns['provinsi_smta']; ?></td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-icon-split btn-sm editform" data-idsmta="<?php echo $ns['id'] ?>" 
                                                data-namasmta="<?php echo $ns['nama_smta'] ?>"
                                                data-npsnsmta="<?php echo $ns['npsn_smta'] ?>"
                                                data-alamatsmta="<?php echo $ns['alamat_smta'] ?>"
                                                data-provinsismta="<?php echo $ns['kodeprovinsi'] ?>"
                                                >
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-icon-split btn-sm deletedata" data-idsmta="<?php echo $ns['id'] ?>">
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
                    <h6 class="m-0 font-weight-bold text-primary">Tambah/Edit SMTA</h6>
                </div>
                <div class="card-body">
                    <?php echo $this->session->flashdata('notif'); ?>
                    <form id="formnamasmta" action="<?php echo site_url($linkform); ?>" method="post">
                        <div class="form-group">
                            <label>Nama SMTA</label>
                            <input id="txtNamasmta" type="text" class="form-control" name="namasmta" placeholder="Nama SMTA" required>
                            <input type="hidden" id="idsmta" name="idsmta">
                        </div>
                        <div class="form-group">
                            <label>NPSN</label>
                            <input id="txtNPSN" type="text" class="form-control" name="npsnsmta" placeholder="NPSN" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea id="txtAlamatsmta" type="text" class="form-control" name="alamatsmta" placeholder="Alamat" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Provinsi</label>
                            <select name="optProvinsi" id="optProvinsi" class="form-control">
                                <option>Pilih Provinsi</option>
                                <?php foreach ($provinsi AS $pr) : ?>
                                <option value="<?php echo $pr['kode'];?>"><?php echo $pr['nama'];?></option>
                            <?php endforeach; ?>
                            </select>
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
            $("input#idsmta").val($(this).data('idsmta'));
            $("input#txtNamasmta").val($(this).data('namasmta'));
            $("input#txtNPSN").val($(this).data('npsnsmta'));
            $("textarea#txtAlamatsmta").val($(this).data('alamatsmta'));
            $("select#optProvinsi").val($(this).data('provinsismta')).change();

            $('#formnamasmta').attr('action', '<?php echo site_url('administrator/edit_smta'); ?>');
        });

        $(document).on('click', '.deletedata', function() {
            var idsmta = $(this).data("idsmta");
            Swal.fire({
              title: 'Apakah anda yakin akan menghapus?',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Ya',
              cancelButtonText: 'Tidak'
            }).then((result) => {
              if (result.isConfirmed) {
                $.ajax({
                    url: "<?php echo site_url(); ?>administrator/hapus_smta",
                    method: "POST",
                    data: {
                        idsmta: idsmta
                    },
                    success: function(data) {
                        
                    }
                });
                Swal.fire(
                  'Terhapus!'
                );
                location.reload();
              }
            })
        });
    });
</script>