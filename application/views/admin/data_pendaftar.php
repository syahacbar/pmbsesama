
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<!-- Begin Page Content -->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<!-- DataTales Example -->
			<div class="card shadow mb-4">

				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Data Pendaftar Jalur SESAMA</h6>
				</div>
				<div class="card-body">
					<div id="alert"></div>
						<form id="formFilter" class="row g-3">
						<div class="col-md-2">
                            <label for="pilihtahunakademik" class="form-label">Pilih Tahun Akademik</label>
							<select class="form-control" id="pilihtahunakademik" name="pilihtahunakademik">
								<option value="0">-- Semua Tahun Akademik --</option>
								<option value="2021/2022">2021/2022</option>
								<option value="2022/2023">2022/2023</option>
							</select>							
						</div>
						<div class="col-md-2">
                            <label for="pilihprodi" class="form-label">Pilih Program Studi</label>
							<select class="form-control" id="pilihprodi" name="pilihprodi">
								<option value="0">-- Semua Program Studi --</option>
							<?php foreach ($listprodi AS $pr): ?>
								<option value="<?php echo $pr['idprodi'];?>"><?php echo $pr['namaprodi'];?></option>
							<?php endforeach; ?>
							</select>							
						</div>
						<div class="col-md-2">
                            <label for="pilihsuku" class="form-label">Pilih Suku</label>
							<select class="form-control" id="pilihsuku" name="pilihsuku">
								<option value="0">-- Semua Suku --</option>
								<option value="Papua">Papua</option>
								<option value="Non Papua">Non Papua</option>
							</select>							
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
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="tablePendaftar" cellspacing="0">
							<thead>
								<tr>
									<th width="10">No.</th>
									<th>Nomor Pendaftaran</th>
									<th>Nama Lengkap</th>
									<th>Prodi Pilihan 1</th>
									<th>Prodi Pilihan 2</th>
									<th>Prodi Pilihan 3</th>
									<th>Suku</th>
									<th>Tahun Akademik</th>
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
<!-- <script>
	$(document).ready(function(){
		var tablePendaftar = $('#tablePendaftar').DataTable({
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
                "url": '<?php //echo site_url('Datatables/pendaftar_list');?>',
                "type": "POST"
            },

        });
        

        
		window.setTimeout(function() {
            $(".alert").fadeTo(5000, 0).slideUp(100, function(){
                $(this).remove();
            });
        }, 4000);  
	});

</script> -->
<script type="text/javascript">
	var save_method; //for save method string
	var tablePendaftar;

	$(document).ready(function() {
		var tablePendaftar = $('#tablePendaftar').DataTable({
        
            "language": {
            "emptyTable": "Tidak ada data yang ditampilkan. Pilih opsi filter diatas untuk menampilkan data"
            },
    	});

    	function load_data(is_tahunakademik,is_prodi,is_suku){
    		var tablePendaftar = $('#tablePendaftar').DataTable({
				"language": {
					"url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json"
				},
				"processing": true,
				"serverSide": true,
				"stateSave": false,
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
	                "url": '<?php echo site_url('Datatables/pendaftar_list');?>',
	                "type": "POST",
	                "data":{is_tahunakademik:is_tahunakademik,is_prodi:is_prodi,is_suku:is_suku}
	            },

	        });

	        tablePendaftar.search('').draw();
    	}

    	$(document).on('change', '#pilihtahunakademik', function(){
	        var tablePendaftar = $('#tablePendaftar').DataTable();
	        var tahunakademik = $('#pilihtahunakademik').val();
	        var prodi = $('#pilihprodi').val();
	        var suku = $('#pilihsuku').val();
	        tablePendaftar.destroy();
	        if(tahunakademik != '')
	        {
	            load_data(tahunakademik);
	            //tablePendaftar.search('').draw();
	        }
	        else
	        {
	            load_data();
	        }
	        //tablePendaftar.search('').draw();
	    });

	    $(document).on('change', '#pilihprodi', function(){
	        var tablePendaftar = $('#tablePendaftar').DataTable();
	        var prodi = $('#pilihprodi').val();
	        var tahunakademik = $('#pilihtahunakademik').val();
	        var suku = $('#pilihsuku').val();
	        tablePendaftar.destroy();
	        if(prodi != '')
	        {
	            load_data(tahunakademik,prodi,suku);
	            //tablePendaftar.search('').draw();
	        }
	        else
	        {
	            load_data();
	        }
	    });

	    $(document).on('change', '#pilihsuku', function(){
	        var tablePendaftar = $('#tablePendaftar').DataTable();
	        var tahunakademik = $('#pilihtahunakademik').val();
	        var prodi = $('#pilihprodi').val();
	        var suku = $('#pilihsuku').val();
	        tablePendaftar.destroy();
	        if(suku != '')
	        {
	            load_data(tahunakademik,prodi,suku);
	        }
	        else
	        {
	            load_data();
	        }
	    });

	    function reload_table(){
		    $('#tablePendaftar').DataTable().ajax.reload(null, false);
		} 
    });
</script>