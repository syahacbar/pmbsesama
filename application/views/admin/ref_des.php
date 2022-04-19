<!-- Begin Page Content -->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<!-- DataTales Example -->
			<div class="card shadow mb-4">

				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Tambah/Edit Data Wilayah Kelurahan/Desa</h6>
				</div>
				<div class="card-body">
				<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('notif'); ?>"></div>
					<form id="formdesa" method="POST" class="row g-3">
						<div class="col-md-2">
                            <label for="optProvinsi" class="form-label">Pilih Provinsi</label>
                            <select name="optProvinsi" id="optProvinsi" class="form-control">
                                <option>Pilih Provinsi</option>
                                <?php foreach ($provinsi AS $pr) : ?>
                                <option value="<?php echo $pr['kode'];?>"><?php echo $pr['nama'];?></option>
                            <?php endforeach; ?>
                            </select>
                        </div> 
						<div class="col-md-2">
                            <label for="optKabupaten" class="form-label">Pilih Kabupaten</label>
                            <select name="optKabupaten" id="optKabupaten" class="form-control">
                                <option>Pilih Kabupaten</option>
                            </select>
                        </div> 
                        <div class="col-md-2">
                            <label for="optKecamatan" class="form-label">Pilih Kabupaten</label>
                            <select name="optKecamatan" id="optKecamatan" class="form-control">
                                <option>Pilih Kecamatan/Distrik</option>
                            </select>
                        </div> 
						<div class="col-md-3">
							<label for="txtKodeKabupaten" class="form-label">Kode Kelurahan/Desa</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span id="kodedesa" class="input-group-text"></span>
									<input type="hidden" id="kodedesa" name="kodedesa">
								</div>
								<input id="txtKodeKabupaten" type="text" class="form-control" name="kodekabupaten" placeholder="Kode Kelurahan/Desa" required>
							</div>
						</div>

						<div class="col-md-3">
							<label for="txtKabupaten" class="form-label">Kelurahan/Desa</label>
							<input id="txtKabupaten" type="text" class="form-control" name="wilayah" placeholder="Kelurahan/Desa" required>
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
					<h6 class="m-0 font-weight-bold text-primary">Referensi Data Wilayah Kelurahan/Desa</h6>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="tableDesa" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th width="10">No.</th>
									<th>Kode</th>
									<th>Kelurahan/Desa</th>
									<th>Kecamatan/Distrik</th>
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
		var tableDesa = $('#tableDesa').DataTable({
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
                "url": '<?php echo site_url('Datatables/desa_list');?>',
                "type": "POST"
            },

        });
        $("#dataTable").on("click", ".editform", function(){
			event.preventDefault();
			$("input#kodewilayah").val($(this).data('kodewilayah'));
			$("span#kodeprovinsi").html($(this).data('kodeprovinsi')+"."); 
			$("input#txtKodeKabupaten").val($(this).data('kodekabupaten')); 
			$("input#txtKabupaten").val($(this).data('wilayah'));
            $("select#optProvinsi").val($(this).data('kodeprovinsi')).change();
		  	$("input#kodeprovinsi").val($('select#optProvinsi').val());
			$('#formdesa').attr('action', '<?php echo site_url('administrator/ref_kab/edit');?>');
		});

		$('select#optProvinsi').on('change', function() {
		  var url = "<?php echo site_url('register/add_ajax_kab'); ?>/" + $(this).val();
	      $('#optKabupaten').load(url);
	      return false;
		});

		$('select#optKabupaten').on('change', function() {
		  var url = "<?php echo site_url('register/add_ajax_kec'); ?>/" + $(this).val();
	      $('#optKecamatan').load(url);
	      return false;
		});

		$('select#optKecamatan').on('change', function() {
		  $("span#kodedesa").html($('select#optKecamatan').val()+".");
		  $("input#kodedesa").val($('select#optKecamatan').val());
		});

		$(document).on('click', '.deletedata', function(){  
			var kode = $(this).data("kodewilayah");  
			if(confirm("Are you sure you want to delete this?"))  
			{  
				$.ajax({  
					url:"<?php echo site_url(); ?>administrator/ref_kab/delete",  
					method:"POST",  
					data:{kode:kode},  
					success:function(data)  
					{  
						alert("Data Berhasil Dihapus");   
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