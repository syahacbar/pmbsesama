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

	ul#myTab li.nav-item {
		padding: 0 0.5rem;
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
								<?php // foreach ($listprodi as $pr) : 
								?>
								<option value="<?php // echo $pr['idprodi']; 
												?>"><?php // echo $pr['namaprodi']; 
													?></option>
								<?php // endforeach; 
								?>
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


<!-- Modal Detail Pendaftar -->
<div class="modal fade" id="detailPendaftar" tabindex="-1" role="dialog" aria-labelledby="detailPendaftarLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content modal-lg">
			<div class="modal-header">
				<h4 class="m-0 font-weight-bold text-primary modal-title" id="detailPendaftarLabel">Detail Data Pendaftar: <?php // // echo ucwords($p['namalengkap']); 
																															?></h4>
			</div>
			<!-- <?php // // echo $this->session->flashdata('message'); 
					?> -->
			<?php // echo form_open_multipart('', array('id' => 'formInputAgenda')); 
			?>
			<div class="modal-body">
				<?php // // foreach ($data_pendaftar as $p) : 
				?>
				<div class="card-body">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Informasi Pribadi</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Informasi Sekolah</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Data Orang Tua</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="dataWali-tab" data-toggle="tab" data-target="#dataWali" type="button" role="tab" aria-controls="dataWali" aria-selected="false">Data Wali</button>
						</li>
					</ul>

					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<fieldset class="show" id="DataPribadi1">
								<div class="col-md-12 mt-3 px-0 py-0">
									<div class="form-card">
										<div class="row">
											<div class="col-sm-4">
												<table class="table table-sm">
													<tbody>

														<tr>
															<td width="200">Nomor Pendaftaran</td>
															<td>:</td>
															<td><?php // // echo $p['username']; 
																?></td>
														</tr>
														<tr>
															<td width="200">Nama Lengkap</td>
															<td>:</td>
															<td><?php // // echo $p['namalengkap']; 
																?></td>
														</tr>
														<tr>
															<td width="200">NISN Pendaftar</td>
															<td>:</td>
															<td><?php // // echo $p['nisn_pendaftar']; 
																?></td>
														</tr>
														<tr>
															<td width="200">Jenis Kelamin</td>
															<td>:</td>
															<td><?php // // echo $p['jeniskelamin']; 
																?></td>
														</tr>
														<tr>
															<td width="200">NIK/No. KTP</td>
															<td>:</td>
															<td><?php // // echo $p['nik']; 
																?></td>
														</tr>
														<tr>
															<td width="200">Agama</td>
															<td>:</td>
															<td><?php // // echo $p['agama']; 
																?></td>
														</tr>
														<tr>
															<td width="200">Suku</td>
															<td>:</td>
															<td><?php // // echo $p['suku']; 
																?></td>
														</tr>
														<tr>
															<td width="200">Status Menikah</td>
															<td>:</td>
															<td><?php // // echo $p['statusmenikah']; 
																?></td>
														</tr>
														<tr>
															<td width="200">Tempat Lahir</td>
															<td>:</td>
															<td><?php // // echo $p['lokasi_tempatlahir']; 
																?></td>
														</tr>

														<tr>
															<td width="200">Tanggal Lahir</td>
															<td>:</td>
															<td><?php // // echo $p['tgl_lahir']; 
																?></td>
														</tr>
														<tr>
															<td width="200">Kabupaten/Kota</td>
															<td>:</td>
															<td><?php // // echo $p['kab_tempatlahir']; 
																?></td>
														</tr>
														<tr>
															<td width="200">Provinsi</td>
															<td>:</td>
															<td><?php // // echo $p['prov_tempatlahir']; 
																?></td>
														</tr>
														<tr>
															<td width="200">Program Studi Pilihan 1</td>
															<td>:</td>
															<td><?php // // echo $p['pilihan1']; 
																?></td>
														</tr>
														<tr>
															<td width="200">Program Studi Pilihan 2</td>
															<td>:</td>
															<td><?php // // echo $p['pilihan2']; 
																?></td>
														</tr>
														<tr>
															<td width="200">Program Studi Pilihan 3</td>
															<td>:</td>
															<td><?php // // echo $p['pilihan3']; 
																?></td>
														</tr>
														<tr>
															<td width="200">Alamat Tinggal</td>
															<td>:</td>
															<td><?php // // echo $p['alamat_tempattinggal']; 
																?></td>
														</tr>
														<tr>
															<td width="200">Desa/Kelurahan</td>
															<td>:</td>
															<td><?php // // echo $p['des_tempattinggal']; 
																?></td>
														</tr>
														<tr>
															<td width="200">Kecamatan/Distrik</td>
															<td>:</td>
															<td><?php // // echo $p['kec_tempattinggal']; 
																?></td>
														</tr>

														<tr>
															<td width="200">Kabupaten/Kota</td>
															<td>:</td>
															<td><?php // // echo $p['kab_tempattinggal']; 
																?></td>
														</tr>
														<tr>
															<td width="250">Provinsi</td>
															<td>:</td>
															<td><?php // // echo $p['prov_tempattinggal']; 
																?></td>
														</tr>
														<tr>
															<td width="250">Negara</td>
															<td>:</td>
															<td><?php // // echo $p['negara_tempattinggal']; 
																?></td>
														</tr>
														<tr>
															<td width="250">Kode Pos</td>
															<td>:</td>
															<td><?php // // echo $p['kodepos_tempattinggal']; 
																?></td>
														</tr>
														<tr>
															<td width="250">Alamat Tinggal Lain</td>
															<td>:</td>
															<td><?php // // echo $p['alamatlain_tempattinggal']; 
																?></td>
														</tr>
														<tr>
															<td width="250">No. HP</td>
															<td>:</td>
															<td><?php // // echo $p['nohp']; 
																?></td>
														</tr>
														<tr>
															<td width="250">Alamat Email</td>
															<td>:</td>
															<td><?php // // echo $p['email']; 
																?></td>
														</tr>
														<tr>
															<td width="250">Tinggi Badan</td>
															<td>:</td>
															<td><?php // // echo $p['tinggibadan']; 
																?></td>
														</tr>
														<tr>
															<td width="250">Berat Badan</td>
															<td>:</td>
															<td><?php // // echo $p['beratbadan']; 
																?></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</fieldset>
						</div>
						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<fieldset class="show" id="DataSekolah1">
								<div class="col-md-12 mt-3 px-0 py-0">
									<div class="form-card">
										<div class="row">
											<table class="table table-sm">
												<tbody>
													<tr>
														<td width="200">Tahun Lulus SMTA</td>
														<td>:</td>
														<td><?php // // echo $p['tahunlulus_smta']; 
															?></td>
													</tr>
													<tr>
														<td width="200">Jurusan SMTA</td>
														<td>:</td>
														<td><?php // // echo $p['jurusansmta']; 
															?></td>
													</tr>
													<tr>
														<td width="200">Jenis SMTA</td>
														<td>:</td>
														<td><?php // // echo $p['jenissmta']; 
															?></td>
													</tr>
													<tr>
														<td width="200">Nama SMTA</td>
														<td>:</td>
														<td><?php // // echo $p['nama_smta']; 
															?></td>
													</tr>
													<tr>
														<td width="200">NISN SMTA</td>
														<td>:</td>
														<td><?php // // echo $p['nisn_smta']; 
															?></td>
													</tr>
													<tr>
														<td>Alamat SMTA</td>
														<td>:</td>
														<td><?php // // echo $p['alamat_smta']; 
															?></td>
													</tr>
													<tr>
														<td width="200">Provinsi SMTA</td>
														<td>:</td>
														<td><?php // // echo $p['prov_smta']; 
															?></td>
													</tr>
													<tr>
														<td width="200">Nilai Rapor Kelas XI semeseter 1</td>
														<td>:</td>
														<td><?php // // echo $p['nrapor1']; 
															?></td>
													</tr>
													<tr>
														<td width="200">Nilai Rapor Kelas XI semeseter 2</td>
														<td>:</td>
														<td><?php // // echo $p['nrapor2']; 
															?></td>
													</tr>
													<tr>
														<td width="200">Nilai Rapor Kelas XII semeseter 1</td>
														<td>:</td>
														<td><?php // // echo $p['nrapor3']; 
															?></td>
													</tr>
													<tr>
														<td width="200">Lampiran Rapor Kelas XI semeseter 1</td>
														<td>:</td>
														<td width="100px">
															<a href="<?php // // // echo base_url('assets/upload/rapor/') . $p['nama_dok']; 
																		?>" target="_blank" class="btn btn-info btn-icon-split btn-sm downloadform" target="_blank">
																<span class="icon text-white-50">
																	<i class="fas fa-download"></i>
																</span>
																<span class="text">Unduh</span>
															</a>
														</td>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</fieldset>
						</div>
						<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
							<fieldset class="show" id="DataOrtu1">
								<div class="col-md-12 mt-3 px-0 py-0">
									<div class="form-card">
										<div class="row">
											<div class="col-sm-6">
												<table class="table table-sm">
													<tbody>
														<tr>
															<td width="200">NIK/No. KTP Ayah</td>
															<td>:</td>
															<td><?php // // echo $p['nik_ayah']; 
																?></td>
														</tr>
														<tr>
															<td width="200">Nama Ayah</td>
															<td>:</td>
															<td><?php // // echo $p['nama_ayah']; 
																?></td>
														</tr>
														<tr>
															<td width="200">Pendidikan Ayah</td>
															<td>:</td>
															<td><?php // // echo $p['pendidikan_ayah']; 
																?></td>
														</tr>
														<tr>
															<td width="200">Pekerjaan Ayah</td>
															<td>:</td>
															<td><?php // // echo $p['pekerjaan_ayah']; 
																?></td>
														</tr>
														<tr>
															<td width="200">Alamat Kantor Ayah</td>
															<td>:</td>
															<td><?php // // echo $p['alamatkantor_ayah']; 
																?></td>
														</tr>
														<tr>
															<td width="200">NIK/No. KTP Ibu</td>
															<td>:</td>
															<td><?php // // echo $p['nik_ibu']; 
																?></td>
														</tr>
														<tr>
															<td width="200">Nama Ibu</td>
															<td>:</td>
															<td><?php // // echo $p['nama_ibu']; 
																?></td>
														</tr>
														<tr>
															<td width="200">Pendidikan Ibu</td>
															<td>:</td>
															<td><?php // // echo $p['pendidikan_ibu']; 
																?></td>
														</tr>

														<tr>
															<td width="200">Pekerjaan Ibu</td>
															<td>:</td>
															<td><?php // // echo $p['pekerjaan_ibu']; 
																?></td>
														</tr>
														<tr>
															<td width="200">Penghasilan Orang Tua</td>
															<td>:</td>
															<td><?php // // echo $p['penghasilan_ortu']; 
																?></td>
														</tr>
														<tr>
															<td width="200">Alamat Orang Tua</td>
															<td>:</td>
															<td><?php // // echo $p['alamat_ortu']; 
																?></td>
														</tr>
														<tr>
															<td width="200">Kecamatan/Distrik</td>
															<td>:</td>
															<td><?php // // echo $p['kec_tempattinggalortu']; 
																?></td>
														</tr>
														<tr>
															<td width="200">Kabupaten/Kota</td>
															<td>:</td>
															<td><?php // // echo $p['kab_tempattinggalortu']; 
																?></td>
														</tr>
														<tr>
															<td width="200">Provinsi</td>
															<td>:</td>
															<td><?php // // echo $p['provinsi_tempattinggalortu']; 
																?></td>
														</tr>
														<tr>
															<td width="200">Kode POS</td>
															<td>:</td>
															<td><?php // // echo $p['kodepost_tempattinggalortu']; 
																?></td>
														</tr>
														<tr>
															<td width="200">No. Telp./HP Orang Tua</td>
															<td>:</td>
															<td><?php // // echo $p['nohp_ortu']; 
																?></td>
														</tr>
													</tbody>
												</table>
											</div>

										</div>
									</div>
								</div>
							</fieldset>
						</div>

						<div class="tab-pane fade" id="dataWali" role="tabpanel" aria-labelledby="dataWali-tab">
							<fieldset class="show" id="DataWali1">
								<div class="col-md-12">
									<div class="form-card">
										<div class="row">
											<table class="table table-sm">
												<tbody>
													<tr>
														<td width="200">Nama Wali</td>
														<td>:</td>
														<td><?php // //  // echo $p['nama_wali']; 
															?></td>
													</tr>
													<tr>
														<td width="200">Pekerjaan Wali</td>
														<td>:</td>
														<td><?php // //  // echo $p['pekerjaan_wali']; 
															?></td>
													</tr>
													<tr>
														<td width="200">Penghasilan Wali</td>
														<td>:</td>
														<td><?php // //  // echo $p['penghasilan_wali']; 
															?></td>
													</tr>
													<tr>
														<td width="200">Alamat Wali</td>
														<td>:</td>
														<td><?php // //  // echo $p['alamat_wali']; 
															?></td>
													</tr>
													<tr>
														<td width="200">Nomor HP Wali</td>
														<td>:</td>
														<td><?php // //  // echo $p['nohp_ortu']; 
															?></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</fieldset>
						</div>
					</div>
				</div>
				<?php // // endforeach; 
				?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
	<?php // echo form_close(); 
	?>
</div>
</div>
</div>
<!-- Akhir Modal Detail Pendaftar -->

<!-- Modal Ubah Data Pendaftar -->
<div class="modal fade" id="editPendaftar" tabindex="-1" role="dialog" aria-labelledby="editPendaftarLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content modal-lg">
			<div class="modal-header">
				<h4 class="m-0 font-weight-bold text-primary modal-title" id="editPendaftarLabel">Ubah Data Pendaftar: <?php // echo ucwords($ep['namalengkap']); 
																														?></h4>
			</div>
			<div class="modal-body">
			</div>
		</div>
	</div>
</div>
<!-- Akhir Modal Ubah Data Pendaftar -->

<!-- Modal Update Foto Profil -->
<div class="modal" id="unggahFoto" tabindex="-1" role="dialog" aria-labelledby="unggahFotolabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="unggahFotolabel">Unggah Foto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="dropzone uploadfoto" id="image-upload">
					<div class="alert alert-primary alert-dismissible fade show" role="alert">
						<small>Rasio Foto : 4 x 6, atau max resolusi 300px x 450px, dengan max size : 200kb, Tipe file : jpg, jpeg, png.</small>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="dz-message">
						<h6> Klik atau Drop gambar ke sini</h6>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button id="uploadFile" type="button" class="btn btn-primary">Upload</button>
				<button id="closeModal" type="button" class="btn btn-default">Kembali</button>
			</div>
		</div>
	</div>
</div>
<!-- Akhir Modal Update Foto Profil -->

<script src="<?php echo base_url(); ?>/assets/backend/startbootstrap/vendor/jquery/jquery.min.js"></script>>
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