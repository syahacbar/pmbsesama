<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
<!-- Begin Page Content -->
<style>
    .img-thumbnail {
        width: 60%;
        margin: 0 20%;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Slider</h6>
                </div>
                <div class="card-body">
                    <!-- <div id="flash" data-flash="<?php // echo $this->session->flasdata('success'); 
                                                        ?>"></div> -->
                    <div class="table-responsive">
                        <table class="table table-bordered" id="tableSlider" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="10">No.</th>
                                    <th width="200">Nama Gambar</th>
                                    <th>Preview</th>
                                    <th width="100">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($slider as $sl) { ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <!-- <td><?php // echo $sl['nama_gambar']; 
                                                    ?></td> -->
                                        <td><?php echo $sl['gambar']; ?></td>
                                        <td>
                                            <img class="img-thumbnail img-fluid" src="<?php echo base_url('assets/upload/slider/') . $sl['gambar'];
                                                                                        ?>">
                                        </td>

                                        <td>
                                            <!-- <a href="#" class="btn btn-info btn-icon-split btn-sm editform" data-gambarslider="<?php // echo $sl['gambar'] 
                                                                                                                                    ?>" data-idslider="<?php // echo $sl['id'] 
                                                                                                                                                        ?>">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a> -->
                                            <a href="#" class="btn btn-danger btn-icon-split btn-sm deletedata" data-idslider="<?php echo $sl['id'] ?>">
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
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Slider</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Gambar Slider</label>
                        <div class="dropzone gambarslider col-sm-12 mb-5" id="gambarslider">
                            <div class="form">
                                <div id="slider" name="slider" class="dz-message">
                                    <h6> Klik atau Drop file ke sini</h6>
                                </div>

                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary saveSlider">Save</button>

                </div>


            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#dataTable').DataTable();
        // $("#dataTable").on("click", ".editform", function() {
        // event.preventDefault();
        // $("input#judulAgenda").val($(this).data('judul'));
        // $("textarea#isiAgenda").val($(this).data('isi_agenda'));
        // $("#slider").val($(this).data('slider'));
        // $("input#id").val($(this).data('id'));

        // $('#formagenda').attr('action', '<?php // echo site_url('administrator/agenda/edit'); 
                                            ?>');
        // });

        $(document).on('click', '.deletedata', function() {
            var id = $(this).data("idslider");
            $.ajax({
                url: "<?php echo site_url(); ?>administrator/slider/delete",
                method: "POST",
                data: {
                    id: id
                },
                success: function(data) {
                    Swal.fire({
                        title: "Berhasil",
                        text: "Slider telah dihapus",
                        icon: "success",
                        buttons: [
                            'NO',
                            'YES'
                        ],
                    }).then(function(isConfirm) {
                        if (isConfirm) {
                            location.reload();
                        }
                    });
                }
            });
        });
    });
</script>

<script type="text/javascript">
    Dropzone.autoDiscover = false;

    var upload_slider = new Dropzone(".gambarslider", {
        url: "<?php echo base_url('administrator/slider') ?>",
        maxFilesize: 2,
        method: "post",
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        paramName: "slider",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
    });


    upload_slider.on("sending", function(file, xhr, formData) {
        formData.append("gambar", "gambar");
    });


    // Simpan Slider
    $(document).on('click', '.saveSlider', function(e) {

        Swal.fire({
            title: "Berhasil",
            text: "Anda menambah slider baru!",
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
</script>