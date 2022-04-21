<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12 col-xm-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pengaturan</h6>
                </div>
                <div class="card-body">
                    <h6>Buka/Tutup Sesi Pendaftaran</h6>
                    <div class="row mt-3">
                        <div class="col-sm-12 d-flex mb-3">
                            <div class="form-check mr-3">
                                <input class="form-check-input sesidaftar" type="radio" name="sesidaftar" id="sesidaftar1" value="1" <?php echo ($sesidaftar->nilai == '1') ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="sesidaftar1">
                                    Buka
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input class="form-check-input sesidaftar" type="radio" name="sesidaftar" id="sesidaftar2" value="0" <?php echo ($sesidaftar->nilai == '0') ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="sesidaftar2">
                                    Tutup
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <button class="btn btn-primary btnSimpan" type="button">Simpan</button>
                </div>
            </div>
        </div>   
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $(document).on("click", ".btnSimpan", function() {
            var sesidaftar = $(".sesidaftar:checked").val();


            $.ajax({
                url: "<?php echo site_url('administrator/ubah_sesidaftar'); ?>",
                type: "POST",
                data: {
                    sesidaftar: sesidaftar,
                },

                success: function(dataResult) {
                    var dataResult = JSON.parse(dataResult);
                    if (dataResult.statusCode == 1) {
                        Swal.fire({
                            title: 'Berhasil!',
                            text: "Anda telah menyimpan pengaturan",
                            icon: 'success',
                            showCancelButton: false,
                        });

                    } else {
                        Swal.fire({
                            text: "Gagal menyimpan pengaturan",
                            icon: 'error',
                            showCancelButton: false,
                        });
                    }
                }
            });
        });
    });
</script>