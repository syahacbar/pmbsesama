<!-- Begin Page Content -->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<!-- DataTales Example -->
			<div class="card shadow mb-4">

				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Tambah/Edit Data Wilayah Kabupaten/Kota</h6>
				</div>
				<div class="card-body">
				<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('notif'); ?>"></div>
					<form id="formkabupaten" method="POST" class="row g-3">
						<div class="col-md-3">
                            <label for="optProvinsi" class="form-label">Pilih Provinsi</label>
                            <select name="optProvinsi" id="optProvinsi" class="form-control">
                                <option>Pilih Provinsi</option>
                                <?php foreach ($provinsi AS $pr) : ?>
                                <option value="<?php echo $pr['kode'];?>"><?php echo $pr['nama'];?></option>
                            <?php endforeach; ?>
                            </select>
                        </div> 
						<div class="col-md-3">
							<label for="txtKodeKabupaten" class="form-label">Kode Kabupaten/Kota</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span id="kodeprovinsi" class="input-group-text"></span>
									<input type="hidden" id="kodeprovinsi" name="kodeprovinsi">
								</div>
								<input id="txtKodeKabupaten" type="text" class="form-control" name="txtKodeKabupaten" placeholder="Kode Kabupaten" required>
							</div>
						</div>
						<div class="col-md-3">
							<label for="txtKabupaten" class="form-label">Kabupaten/Kota</label>
							<input id="txtNamaKabupaten" type="text" class="form-control" name="txtNamaKabupaten" placeholder="Kabupaten/Kota" required>
						</div>    

						<div class="col-md-3">
						<label class="text-white">Label</label><br>
							<input type="hidden" id="kodewilayah" name="kodewilayah">                 
							<button type="reset" class="btn btn-secondary btn-sm">Reset</button>&nbsp;&nbsp;&nbsp;
							<button type="submit" class="btn btn-primary btn-sm">Save</button>
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
					<h6 class="m-0 font-weight-bold text-primary">Referensi Data Wilayah Kabupaten/Kota</h6>
				</div>
				<div class="card-body">
					<div id="alert"></div>
					<div class="table-responsive">
						<table class="table table-bordered" id="tableKabupaten" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th width="10">No.</th>
									<th>Kode</th>
									<th>Kabupaten/Kota</th>
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

<script type="text/javascript">
	$(document).ready(function(){
		var tableKabupaten = $('#tableKabupaten').DataTable({
			"language": {
				"url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json"
			},
			"processing": true,
			"serverSide": true,
			"stateSave": true,
			"order": [],
			"columnDefs": [ {
				"targets": 0,
				"orderable": false
			},
			{
				"targets": -1,
				"orderable": false,
				"width": "15%", 
				"className": "text-center"
			}  ],
			"ajax": {
                //panggil method ajax list dengan ajax
                "url": '<?php echo site_url('Datatables/kabupaten_list');?>',
                "type": "POST"
            },

        });

        $("form#formkabupaten").submit(function (event) {
        	var kodeprov = $('input#kodeprovinsi').val();
		    var kodekab = $('input#txtKodeKabupaten').val();
            var namakab = $('input#txtNamaKabupaten').val();
		    var kodewilayah = $('input#kodewilayah').val();

		    $.ajax({
		      type: "POST",
		      url: "<?php echo site_url() ?>Datatables/kabupaten_save/"+kodewilayah,
		      data: {kodeprov:kodeprov,kodekab:kodekab,namakab:namakab,kodewilayah:kodewilayah},
		      dataType: "json",
		      encode: true,
		      success:function(data)
		      {
		      	tableProvinsi.ajax.reload(null,false);
		      }
		    });
		});

		$('select#optProvinsi').on('change', function() {
		  $("span#kodeprovinsi").html($('select#optProvinsi').val()+".");
		  $("input#kodeprovinsi").val($('select#optProvinsi').val());
		});

		$("#tableKabupaten").on("click", ".editdata", function(){
			$("select#optProvinsi").val($(this).data('kodeprovinsi')).change();
			$("span#kodeprovinsi").html($(this).data('kodeprovinsi')+".");
			$("input#kodeprovinsi").val($(this).data('kodeprovinsi'));
        	$("input#txtKodeKabupaten").val($(this).data('kodekabupaten')); 
		 	$("input#txtNamaKabupaten").val($(this).data('namakabupaten'));
		 	$("input#kodewilayah").val($(this).data('kodewilayah'));
        });


		$("#tableKabupaten").on('click', '.deletedata', function(){  
			var kodekab = $(this).data("kodekabupaten");  
			if(confirm("Are you sure you want to delete this?"))  
			{  
				$.ajax({  
					url:"<?php echo site_url(); ?>Datatables/kabupaten_delete",  
					method:"POST",  
					data:{kodekab:kodekab},  
					success:function(data)  
					{  
						$('#alert').html('<div class="alert alert-warning alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data berhasil dihapus.</div>');
						tableKabupaten.ajax.reload(null,false);
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
	});

</script>