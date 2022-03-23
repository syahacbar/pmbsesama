<style type="text/css">
	fieldset {
		display: none
	}

	fieldset.show {
		display: block
	}

	select:focus,
	input:focus {
		-moz-box-shadow: none !important;
		-webkit-box-shadow: none !important;
		box-shadow: none !important;
		border: 1px solid #2196F3 !important;
		outline-width: 0 !important;
		font-weight: 400
	}

	button:focus {
		-moz-box-shadow: none !important;
		-webkit-box-shadow: none !important;
		box-shadow: none !important;
		outline-width: 0
	}

	.tabs {
		margin: 2px 5px 0px 5px;
		padding-bottom: 10px;
		cursor: pointer
	}

	.tabs:hover,
	.tabs.active {
		border-bottom: 1px solid #2196F3
	}

	a:hover {
		text-decoration: none;
		color: #1565C0
	}

	.box {
		margin-bottom: 10px;
		border-radius: 5px;
		padding: 10px
	}

	.modal-backdrop {
		background-color: #323232cc
	}

	.line {
		background-color: #CFD8DC;
		height: 1px;
		width: 100%
	}

	@media screen and (max-width: 768px) {
		.tabs h6 {
			font-size: 12px
		}
	}

	/* Modal Detail Pendaftar */
	div#editData select,
	input#tanggallahir {
		width: 100%;
		height: 38px;
		border: 1px solid #eaecf4;
		background-color: #eaecf4;
		border-radius: 5px !important;
	}

	table.table.table-sm tr:nth-child(1) td:nth-child(1) {
		width: 300px;
	}

	button.btn.btn-sm.btn-info.btnTerima.disabled:hover,
	button.btn.btn-sm.btn-danger.btnTolak.disabled:hover {
		cursor: not-allowed !important;
		pointer-events: none;

	}

	button.btn.btn-sm.btn-info.btnTerima.disabled,
	button.btn.btn-sm.btn-danger.btnTolak.disabled {
		opacity: .35 !important;
		cursor: not-allowed !important;
		pointer-events: none !important;
	}
</style>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<!-- Begin Page Content -->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<!-- DataTales Example -->
			<div class="card shadow mb-4">

				<div class="card-header py-3">
					<h4 class="m-0 font-weight-bold text-primary">Data Pendaftar Jalur SESAMA</h4>
				</div>
				<div class="card-body">
					<div id="alert"></div>
					<form id="formFilter" class="row g-3">
						<div class="col-md-3">
							<label for="pilihtahunakademik" class="form-label">Pilih Tahun Akademik</label>
							<select class="form-control" id="pilihtahunakademik" name="pilihtahunakademik">
								<option value="0">-- Semua Tahun Akademik --</option>
								<option value="2021/2022">2021/2022</option>
								<option value="2022/2023">2022/2023</option>
							</select>
						</div>
						<div class="col-md-3">
							<label for="pilihprodi" class="form-label">Pilih Program Studi</label>
							<select class="form-control" id="pilihprodi" name="pilihprodi">
								<option value="0">-- Semua Program Studi --</option>
								<?php foreach ($listprodi as $pr) : ?>
									<option value="<?php echo $pr['idprodi']; ?>"><?php echo $pr['namaprodi']; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="col-md-3">
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
									<th>Approvement</th>
									<th width="10">No.</th>
									<th>Status</th>
									<th>Nomor Pendaftaran</th>
									<th>Nama Lengkap</th>
					 				<th>Prodi Pilihan 1</th>
									<th>Prodi Pilihan 2</th>
									<th>Prodi Pilihan 3</th>
									<th>Suku</th>
									<th>Tahun Akademik</th>
									<th>Aksi</th>
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

<script type="text/javascript">
	$(document).ready(function() {
		$(".tabs").click(function() {

			$(".tabs").removeClass("active");
			$(".tabs h6").removeClass("font-weight-bold");
			$(".tabs h6").addClass("text-muted");
			$(this).children("h6").removeClass("text-muted");
			$(this).children("h6").addClass("font-weight-bold");
			$(this).addClass("active");

			current_fs = $(".active");

			next_fs = $(this).attr('id');
			next_fs = "#" + next_fs + "1";

			$("fieldset").removeClass("show");
			$(next_fs).addClass("show");

			current_fs.animate({}, {
				step: function() {
					current_fs.css({
						'display': 'none',
						'position': 'relative'
					});
					next_fs.css({
						'display': 'block'
					});
				}
			});
		});

		$(".edit").click(function() {

			$(".edit").removeClass("tampil");
			$(".edit h6").removeClass("font-weight-bold");
			$(".edit h6").addClass("text-muted");
			$(this).children("h6").removeClass("text-muted");
			$(this).children("h6").addClass("font-weight-bold");
			$(this).addClass("tampil");

			current_fs = $(".tampil");

			next_fs = $(this).attr('id');
			next_fs = "#" + next_fs + "1";

			$("fieldset").removeClass("show");
			$(next_fs).addClass("show");

			current_fs.animate({}, {
				step: function() {
					current_fs.css({
						'display': 'none',
						'position': 'relative'
					});
					next_fs.css({
						'display': 'block'
					});
				}
			});
		});

	});
</script>

<script type="text/javascript">
	var save_method; //for save method string
	var tablePendaftar;

	$(document).ready(function() {
		var tablePendaftar = $('#tablePendaftar').DataTable({

			"language": {
				"emptyTable": "Tidak ada data yang ditampilkan. Pilih opsi filter diatas untuk menampilkan data"
			},
		});

		function load_data(is_tahunakademik, is_prodi, is_suku) {
			var tablePendaftar = $('#tablePendaftar').DataTable({
				"language": {
					"url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json"
				},
				"processing": true,
				"serverSide": true,
				"stateSave": true,
				"order": [],
				"columnDefs": [{
						"targets": 0,
						"orderable": false,
						"width": "8%",
						"className": "text-center"
					},
					{
						"targets": 1,
						"orderable": false,
					},
					{
						"targets": -1,
						"orderable": false,
						"width": "12%",
						"className": "text-center"
					}
				],
				// "scrollY":        "300px",
				//       "scrollX":        true,
				//"scrollCollapse": true,
				//"paging":         false,
				"fixedColumns": {
					"left": 1,
					"right": 1
				},
				"ajax": {
					//panggil method ajax list dengan ajax
					"url": '<?php echo site_url('Datatables/pendaftar_list'); ?>',
					"type": "POST",
					"data": {
						is_tahunakademik: is_tahunakademik,
						is_prodi: is_prodi,
						is_suku: is_suku
					}
				},

			});

			tablePendaftar.search('').draw();
		}

		$(document).on('change', '#pilihtahunakademik', function() {
			var tablePendaftar = $('#tablePendaftar').DataTable();
			var tahunakademik = $('#pilihtahunakademik').val();
			var prodi = $('#pilihprodi').val();
			var suku = $('#pilihsuku').val();
			tablePendaftar.destroy();
			if (tahunakademik != '') {
				load_data(tahunakademik);
				//tablePendaftar.search('').draw();
			} else {
				load_data();
			}
			//tablePendaftar.search('').draw();
		});

		$(document).on('change', '#pilihprodi', function() {
			var tablePendaftar = $('#tablePendaftar').DataTable();
			var prodi = $('#pilihprodi').val();
			var tahunakademik = $('#pilihtahunakademik').val();
			var suku = $('#pilihsuku').val();
			tablePendaftar.destroy();
			if (prodi != '') {
				load_data(tahunakademik, prodi, suku);
				//tablePendaftar.search('').draw();
			} else {
				load_data();
			}
		});

		$(document).on('change', '#pilihsuku', function() {
			var tablePendaftar = $('#tablePendaftar').DataTable();
			var tahunakademik = $('#pilihtahunakademik').val();
			var prodi = $('#pilihprodi').val();
			var suku = $('#pilihsuku').val();
			tablePendaftar.destroy();
			if (suku != '') {
				load_data(tahunakademik, prodi, suku);
			} else {
				load_data();
			}
		});

		function reload_table() {
			$('#tablePendaftar').DataTable().ajax.reload(null, false);
		}

		$("#tablePendaftar").on("click", ".btnTerima", function() {
			var idt_biodata = $(this).val();
			var status = 'Diterima';
			var username = $(this).attr('idt_biodata');

			//username.classList.add("disabled");
			$.ajax({
				type: "POST",
				url: '<?php echo site_url() ?>/datatables/proseslaporan/' + idt_biodata,
				data: {
					status: status,
					idt_biodata: idt_biodata
				},
				success: function(data) {
					// alert('Anda Menerima Laporan : ' + username);
					Swal.fire({
						title: 'Berhasil!',
						text: "Anda telah menerima pendaftar!",
						icon: 'success',
						showCancelButton: false,
						confirmButtonText: 'Kembali',
					})
					//tablePendaftar.draw(false);
					reload_table();
				},
				error: function() {
					// alert('Gagal Merubah Status Laporan : ' + username);
					Swal.fire({
						icon: 'error',
						title: 'Maaf...',
						text: 'Ada yang salah!',
						confirmButtonText: 'Kembali',
					})
				}
			});
		});

		$("#tablePendaftar").on("click", ".btnTolak", function() {
			var idt_biodata = $(this).val();
			var status = 'Ditolak';
			var username = $(this).attr('idt_biodata');
			$.ajax({
				type: "POST",
				url: '<?php echo site_url() ?>/datatables/proseslaporan/' + idt_biodata,
				data: {
					status: status,
					idt_biodata: idt_biodata
				},
				success: function(data) {
					Swal.fire({
						title: 'Berhasil!',
						text: "Anda telah menolak pendaftar!",
						icon: 'success',
						showCancelButton: false,
						confirmButtonText: 'Kembali',
					})
					//tablePendaftar.draw(false);
					reload_table();
				},
				error: function() {
					// alert('Gagal Merubah Status Laporan : ' + username);
					Swal.fire({
						icon: 'error',
						title: 'Maaf...',
						text: 'Ada yang salah!',
						confirmButtonText: 'Kembali',
					})
				}
			});
		});

		// Hapus Pendaftar
		$(document).on('click', '#btnHapus', function(e) {
			e.preventDefault();
			var link = $(this).attr('href');

			Swal.fire({
				title: 'Apakah Anda Yakin?',
				text: "Pendaftar akan dihapus!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Ya',
				cancelButtonText: "Batal",
			}).then((result) => {
				if (result.isConfirmed) {
					window.location = link;
				}
			})
		})
	});
</script>