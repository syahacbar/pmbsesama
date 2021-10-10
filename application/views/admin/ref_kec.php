<!-- Begin Page Content -->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<!-- DataTales Example -->
			<div class="card shadow mb-4">

				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Tambah/Edit Data Wilayah Kecamatan/Distrik</h6>
				</div>
				<div class="card-body">
					<?php echo $this->session->flashdata('notif'); ?>
					<form id="formkecamatan" method="POST" class="row g-3">
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
							<label for="txtKodeKabupaten" class="form-label">Kode Kecamatan/Distrik</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span id="kodekecamatan" class="input-group-text"></span>
									<input type="hidden" id="kodekecamatan" name="kodekecamatan">
								</div>
								<input id="txtKodeKabupaten" type="text" class="form-control" name="kodekabupaten" placeholder="Kode Kecamatan/Distrik" required>
							</div>
						</div>
						<div class="col-md-3">
							<label for="txtKabupaten" class="form-label">Kecamatan/Distrik</label>
							<input id="txtKabupaten" type="text" class="form-control" name="wilayah" placeholder="Kecamatan/Distrik" required>
						</div>      
							<input type="hidden" id="kodewilayah" name="kodewilayah">                 
							<button type="reset" class="btn btn-secondary">Reset</button>&nbsp;&nbsp;&nbsp;
							<button type="submit" class="btn btn-primary">Save</button>
						
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
					<h6 class="m-0 font-weight-bold text-primary">Referensi Data Wilayah Kecamatan/Distrik</h6>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="tableKecamatan" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th width="10">No.</th>
									<th>Kode</th>
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
		var tableKecamatan = $('#tableKecamatan').DataTable({
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
                "url": '<?php echo site_url('Datatables/kecamatan_list');?>',
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
			$('#formkecamatan').attr('action', '<?php echo site_url('administrator/ref_kab/edit');?>');
		});

		$('select#optProvinsi').on('change', function() {
		  var url = "<?php echo site_url('register/add_ajax_kab'); ?>/" + $(this).val();
	      $('#optKabupaten').load(url);
	      return false;
		});

		$('select#optKabupaten').on('change', function() {
		  $("span#kodekecamatan").html($('select#optKabupaten').val()+".");
		  $("input#kodekecamatan").val($('select#optKabupaten').val());
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