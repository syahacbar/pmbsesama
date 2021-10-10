
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Slider</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="tableSlider" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="10">No.</th>
                                    <th>Nama Gambar</th>
                                    <th>Preview</th>
                                    <th width="150">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
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
                    <h6 class="m-0 font-weight-bold text-primary">Tambah/Edit Data Slider</h6>
                </div>
                <div class="card-body">
                      <div class="row">
                        <div class="col-md-12">
                          <form action="upload.php" enctype="multipart/form-data" class="dropzone" id="image-upload">
                            <div>
                            </div>
                          </form>
                          <br>
                          <button id="uploadFile">Upload Files</button>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  
    Dropzone.autoDiscover = false;
  
    var myDropzone = new Dropzone(".dropzone", { 
       autoProcessQueue: false,
       maxFilesize: 1,
       acceptedFiles: ".jpeg,.jpg,.png,.gif"
    });
  
    $('#uploadFile').click(function(){
       myDropzone.processQueue();
    });
      
</script>