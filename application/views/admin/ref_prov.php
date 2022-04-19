
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<!-- Begin Page Content -->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<!-- DataTales Example -->
			<div class="card shadow mb-4">

				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Tambah/Edit Data Wilayah Provinsi</h6>
				</div>
				<div class="card-body">
				<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('notif'); ?>"></div>
					<form id="formprovinsi" class="row g-3" method="POST">
						<div class="col-md-3">
							<label>Kode Provinsi</label>
							<input id="txtKodeProvinsi" type="text" class="form-control" name="txtKodeProvinsi" placeholder="Kode Provinsi" required>
						</div>
						<div class="col-md-3">
							<label>Provinsi</label>
							<input id="txtNamaProvinsi" type="text" class="form-control" name="txtNamaProvinsi" placeholder="Provinsi" required>
						</div>
						<div class="col-md-3">
						<label class="text-white">Label</label><br>
						<input type="hidden" id="kodewilayah" name="kodewilayah" value="">
						<button type="reset" class="btn btn-secondary btn-sm" data-dismiss="modal">Reset</button>&nbsp;&nbsp;&nbsp;
						<input type="submit" class="btn btn-primary btn-sm btnSave" value="Save">
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<!-- DataTales Example -->
			<div class="card shadow mb-4">

				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Referensi Data Wilayah Provinsi</h6>
				</div>
				<div class="card-body">
					<div id="alert"></div>
					<div class="table-responsive">
						<table class="table table-bordered" id="tableProvinsi" cellspacing="0">
							<thead>
								<tr>
									<th width="10">No.</th>
									<th>Kode</th>
									<th>Provinsi</th>
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
	</div>
</div>
<!-- /.container-fluid -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function(){
		var tableProvinsi = $('#tableProvinsi').DataTable({
			"language": {
				"url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json"
			},
			"processing": true,
			"serverSide": true,
			"stateSave": true,
			"order": [],
			"columnDefs": [ {
				"targets": 0,
				"orderable": false,
			},
			{
				"targets": -1,
				"orderable": false,
				"width": "15%", 
				"className": "text-center"
			}  ],
			"ajax": {
                //panggil method ajax list dengan ajax
                "url": '<?php echo site_url('Datatables/provinsi_list');?>',
                "type": "POST"
            },

        });
        

        $("form#formprovinsi").submit(function (event) {
		    var kodeprov = $('input#txtKodeProvinsi').val();
            var namaprov = $('input#txtNamaProvinsi').val();
		    var kodewilayah = $('input#kodewilayah').val();

		    $.ajax({
		      type: "POST",
		      url: "<?php echo site_url() ?>Datatables/provinsi_save/"+kodewilayah,
		      data: {kodeprov:kodeprov,namaprov:namaprov,kodewilayah:kodewilayah},
		      dataType: "json",
		      encode: true,
		      success:function(data)
		      {
		      	tableProvinsi.ajax.reload(null,false);
		      }
		    });
		});

        $("#tableProvinsi").on("click", ".editdata", function(){
        	$("input#txtKodeProvinsi").val($(this).data('kodeprovinsi')); 
		 	$("input#txtNamaProvinsi").val($(this).data('namaprovinsi'));
		 	$("input#kodewilayah").val($(this).data('kodewilayah'));
        });

		$("#tableProvinsi").on('click', '.deletedata', function(){  
			var kodeprov = $(this).data("kodeprovinsi");  
			if(confirm("Anda yakin akan menghapus data ini?"))  
			{  
				$.ajax({  
					url:"<?php echo site_url(); ?>Datatables/provinsi_delete",  
					method:"POST",  
					data:{kodeprov:kodeprov},  
					success:function(data)  
					{  
						$('#alert').html('<div class="alert alert-warning alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data berhasil dihapus.</div>');
						tableProvinsi.ajax.reload(null,false);
						$(".alert").fadeTo(5000, 0).slideUp(100, function(){
			                $(this).remove();
			            });
					}  
				});  
			}  
			else  
			{  
				return false;       
			}  
		}); 
		window.setTimeout(function() {
            $(".alert").fadeTo(5000, 0).slideUp(100, function(){
                $(this).remove();
            });
        }, 4000);  
	});

</script>