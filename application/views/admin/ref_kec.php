<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Tambah/Edit Data Wilayah Kecamatan/Distrik</h6>
				</div>
				<div class="card-body">
					<form id="formkecamatan" method="POST" class="row g-3">
						<div class="col-md-2">
							<label for="optProvinsi" class="form-label">Pilih Provinsi</label>
							<select name="optProvinsi" id="optProvinsi" class="form-control">
								<option>Pilih Provinsi</option>
								<?php foreach ($provinsi as $pr) : ?>
									<option value="<?php echo $pr['kode']; ?>"><?php echo $pr['nama']; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="col-md-2">
							<label for="optKabupaten" class="form-label">Pilih Kabupaten</label>
							<select name="optKabupaten" id="optKabupaten" class="form-control">
								<option>Pilih Kabupaten</option>
							</select>
						</div>
						<div class="col-md-3">
							<label for="txtKodeKabupaten" class="form-label">Kode Kecamatan/Distrik</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span id="kodekabupaten" class="input-group-text"></span>
									<input type="hidden" id="kodekabupaten" name="kodekabupaten">
								</div>
								<input id="txtKodeKecamatan" type="text" class="form-control" name="txtKodeKecamatan" placeholder="Kode Kecamatan/Distrik" required>
							</div>
						</div>
						<div class="col-md-3">
							<label for="txtKabupaten" class="form-label">Kecamatan/Distrik</label>
							<input id="txtNamaKecamatan" type="text" class="form-control" name="txtNamaKecamatan" placeholder="Kecamatan/Distrik" required>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		var tableKecamatan = $('#tableKecamatan').DataTable({
			"language": {
				"url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json"
			},
			"processing": true,
			"serverSide": true,
			"stateSave": true,
			"order": [],
			"columnDefs": [{
					"targets": 0,
					"orderable": false
				},
				{
					"targets": -1,
					"orderable": false,
					"width": "15%",
					"className": "text-center"
				}
			],
			"ajax": {
				//panggil method ajax list dengan ajax
				"url": '<?php echo site_url('Datatables/kecamatan_list'); ?>',
				"type": "POST"
			},

		});

		$("form#formkecamatan").submit(function(event) {
			var kodekab = $('input#kodekabupaten').val();
			var kodekec = $('input#txtKodeKecamatan').val();
			var namakec = $('input#txtNamaKecamatan').val();
			var kodewilayah = $('input#kodewilayah').val();

			$.ajax({
				type: "POST",
				url: "<?php echo site_url() ?>Datatables/kecamatan_save/" + kodewilayah,
				data: {
					kodekab: kodekab,
					kodekec: kodekec,
					namakec: namakec,
					kodewilayah: kodewilayah
				},
				dataType: "json",
				encode: true,
				success: function(data) {
					tableKecamatan.ajax.reload(null, false);
				}
			});
		});

		$("#tableKecamatan").on("click", ".editdata", function() {
			$("select#optProvinsi").val($(this).data('kodeprovinsi')).change();
			$("select#optKabupaten").val($(this).data('kodekabupaten')).change();
			$("span#kodekabupaten").html($(this).data('kodekabupaten') + ".");
			$("input#txtKodeKecamatan").val($(this).data('kodekecamatan'));
			$("input#txtNamaKecamatan").val($(this).data('namakecamatan'));
			$("input#kodewilayah").val($(this).data('kodewilayah'));

		});

		$('select#optProvinsi').on('change', function() {
			var url = "<?php echo site_url('register/add_ajax_kab'); ?>/" + $(this).val();
			$('#optKabupaten').load(url);
			return false;
		});

		$('select#optKabupaten').on('change', function() {
			$("span#kodekabupaten").html($('select#optKabupaten').val() + ".");
			$("input#kodekabupaten").val($('select#optKabupaten').val());
		});

		// Hapus kecamatan
		$("#tableKecamatan").on('click', '.deletedata', function() {
			var kodekec = $(this).data("kodekecamatan");
			$.ajax({
				url: "<?php echo site_url(); ?>Datatables/kecamatan_delete",
				method: "POST",
				data: {
					kodekec: kodekec
				},
				success: function(dataResult) {
					var hasil = JSON.parse(dataResult);
					if (hasil.statusCode == 1) {
						Swal.fire({
							title: 'Anda yakin ingin menghapus kecamatan ini?',
							icon: 'warning',
							showCancelButton: true,
							confirmButtonColor: '#3085d6',
							cancelButtonColor: '#d33',
							confirmButtonText: 'Ya',
							cancelButtonText: 'Tidak',
						}).then((result) => {
							if (result.isConfirmed) {
								Swal.fire({
									title: "Berhasil",
									text: "Menghapus kecamatan!",
									icon: "success",
								}).then(function(isConfirm) {
									if (isConfirm) {
										location.reload();
									}
								});

							};
						})
					} else {
						Swal.fire({
							title: "Gagal",
							text: "Menghapus kecamatan!",
							icon: "error",
						}).then(function(isConfirm) {
							if (isConfirm) {
								location.reload();
							}
						});
					}
				}
			});
		});
	});
</script>