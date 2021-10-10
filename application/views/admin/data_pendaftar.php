
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
					<div class="table-responsive">
						<table class="table table-bordered" id="tablePendaftar" cellspacing="0">
							<thead>
								<tr>
									<th width="10">No.</th>
									<th>Nomor Pendaftaran</th>
									<th>Nama Lengkap</th>
									<th>NIK/No.KTP</th>
									<th>Jenis Kelamin</th>
									<th>Agama</th>
									<th>Suku</th>
									<th>Status Menikah</th>
									<th>Prodi Pilihan 1</th>
									<th>Prodi Pilihan 2</th>
									<th>Prodi Pilihan 3</th>
									<th>Prov. Tempat Lahir</th>
									<th>Kab/Kota. Tempat Lahir</th>
									<th>Tempat Lahir</th>
									<th>Tanggal Lahir</th>
									<th>Negara Tempat Tinggal</th>
									<th>Prov. Tempat Tinggal</th>
									<th>Kab/Kota Tempat Tinggal</th>
									<th>Kec/Dis. Tempat Tinggal</th>
									<th>Kel/Desa Tempat Tinggal</th>
									<th>Kode Pos Tempat Tinggal</th>
									<th>Alamat Tempat Tinggal</th>
									<th>Alamat Lain Tempat Tinggal</th>
									<th>No. Telp/HP</th>
									<th>Email</th>
									<th>Tinggi Badan</th>
									<th>Berat Badan</th>
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
                "url": '<?php echo site_url('Datatables/pendaftar_list');?>',
                "type": "POST"
            },

        });
        

        
		window.setTimeout(function() {
            $(".alert").fadeTo(5000, 0).slideUp(100, function(){
                $(this).remove();
            });
        }, 4000);  
	});

</script>