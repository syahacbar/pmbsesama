<!DOCTYPE html>
<html lang="en">

<head>
	<style>
		.alert.alert-server {
			margin-bottom: 0;
		}

		/* 
		#DataPribadi1 table.table.table-sm tr:nth-child(1) td:nth-child(1) {
			width: 250px;
		} */

		#DataPribadi1 table.table.table-sm tr:nth-child(2) td:nth-child(2) {
			width: 20px;
		}

		tbody>tr>td:nth-child(2) {
			width: 20px;
		}

		tbody>tr>td:nth-child(1) {
			width: 200px !important;
		}

		img.foto-profil {
			position: fixed;
			right: 25px;
			z-index: 999;
			object-fit: cover;
			background-color: #fff;
			padding: 5px;
		}
	</style>

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">
			<!-- Main Content -->
			<div id="content">
				<!-- Begin Page Content -->
				<div class="container-fluid">
					<div class="row">
						<?php foreach ($data_pendaftar as $p) : ?>
							<div class="col-lg-12">
								<div class="card shadow mb-4">
									<?php foreach ($editpendaftar as $ep) : ?>
										<?php if ($ep['fotoprofil'] == NULL) { ?>
											<img width="105" height="120" class="img-profile foto-profil" src="<?php echo base_url('assets/upload/profile/profil_default.svg'); ?>">
										<?php } else { ?>
											<img width="105" height="120" class="img-profile foto-profil" src="<?php echo base_url('assets/upload/profile/') . $ep['fotoprofil']; ?>">
										<?php } ?>
									<?php endforeach; ?>
									<div class="card-header py-3">
										<h4 class="m-0 font-weight-bold text-primary">Detail Data Pendaftar: <?php echo ucwords($p['namalengkap']); ?></h4>
									</div>
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
																				<td><?php echo $p['username']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Nama Lengkap</td>
																				<td>:</td>
																				<td><?php echo $p['namalengkap']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">NISN Pendaftar</td>
																				<td>:</td>
																				<td><?php echo $p['nisn_pendaftar']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Jenis Kelamin</td>
																				<td>:</td>
																				<td><?php echo $p['jeniskelamin']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">NIK/No. KTP</td>
																				<td>:</td>
																				<td><?php echo $p['nik']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Agama</td>
																				<td>:</td>
																				<td><?php echo $p['agama']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Suku</td>
																				<td>:</td>
																				<td><?php echo $p['suku']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Status Menikah</td>
																				<td>:</td>
																				<td><?php echo $p['statusmenikah']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Tempat Lahir</td>
																				<td>:</td>
																				<td><?php echo $p['lokasi_tempatlahir']; ?></td>
																			</tr>
																		</tbody>
																	</table>
																</div>

																<div class="col-sm-4">
																	<table class="table table-sm">
																		<tbody>
																			<tr>
																				<td width="200">Tanggal Lahir</td>
																				<td>:</td>
																				<td><?php echo $p['tgl_lahir']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Kabupaten/Kota</td>
																				<td>:</td>
																				<td><?php echo $p['kab_tempatlahir']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Provinsi</td>
																				<td>:</td>
																				<td><?php echo $p['prov_tempatlahir']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Program Studi Pilihan 1</td>
																				<td>:</td>
																				<td><?php echo $p['pilihan1']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Program Studi Pilihan 2</td>
																				<td>:</td>
																				<td><?php echo $p['pilihan2']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Program Studi Pilihan 3</td>
																				<td>:</td>
																				<td><?php echo $p['pilihan3']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Alamat Tinggal</td>
																				<td>:</td>
																				<td><?php echo $p['alamat_tempattinggal']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Desa/Kelurahan</td>
																				<td>:</td>
																				<td><?php echo $p['des_tempattinggal']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Kecamatan/Distrik</td>
																				<td>:</td>
																				<td><?php echo $p['kec_tempattinggal']; ?></td>
																			</tr>
																		</tbody>
																	</table>
																</div>

																<div class="col-sm-4">
																	<table class="table table-sm">
																		<tbody>
																			<tr>
																				<td width="200">Kabupaten/Kota</td>
																				<td>:</td>
																				<td><?php echo $p['kab_tempattinggal']; ?></td>
																			</tr>
																			<tr>
																				<td width="250">Provinsi</td>
																				<td>:</td>
																				<td><?php echo $p['prov_tempattinggal']; ?></td>
																			</tr>
																			<tr>
																				<td width="250">Negara</td>
																				<td>:</td>
																				<td><?php echo $p['negara_tempattinggal']; ?></td>
																			</tr>
																			<tr>
																				<td width="250">Kode Pos</td>
																				<td>:</td>
																				<td><?php echo $p['kodepos_tempattinggal']; ?></td>
																			</tr>
																			<tr>
																				<td width="250">Alamat Tinggal Lain</td>
																				<td>:</td>
																				<td><?php echo $p['alamatlain_tempattinggal']; ?></td>
																			</tr>
																			<tr>
																				<td width="250">No. HP</td>
																				<td>:</td>
																				<td><?php echo $p['nohp']; ?></td>
																			</tr>
																			<tr>
																				<td width="250">Alamat Email</td>
																				<td>:</td>
																				<td><?php echo $p['email']; ?></td>
																			</tr>
																			<tr>
																				<td width="250">Tinggi Badan</td>
																				<td>:</td>
																				<td><?php echo $p['tinggibadan']; ?></td>
																			</tr>
																			<tr>
																				<td width="250">Berat Badan</td>
																				<td>:</td>
																				<td><?php echo $p['beratbadan']; ?></td>
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
																			<td><?php echo $p['tahunlulus_smta']; ?></td>
																		</tr>
																		<tr>
																			<td width="200">Jurusan SMTA</td>
																			<td>:</td>
																			<td><?php echo $p['jurusansmta']; ?></td>
																		</tr>
																		<tr>
																			<td width="200">Jenis SMTA</td>
																			<td>:</td>
																			<td><?php echo $p['jenissmta']; ?></td>
																		</tr>
																		<tr>
																			<td width="200">Nama SMTA</td>
																			<td>:</td>
																			<td><?php echo $p['nama_smta']; ?></td>
																		</tr>
																		<tr>
																			<td width="200">NISN SMTA</td>
																			<td>:</td>
																			<td><?php echo $p['nisn_smta']; ?></td>
																		</tr>
																		<tr>
																			<td>Alamat SMTA</td>
																			<td>:</td>
																			<td><?php echo $p['alamat_smta']; ?></td>
																		</tr>
																		<tr>
																			<td width="200">Provinsi SMTA</td>
																			<td>:</td>
																			<td><?php echo $p['prov_smta']; ?></td>
																		</tr>
																		<tr>
																			<td width="200">Nilai Rapor Kelas XI semeseter 1</td>
																			<td>:</td>
																			<td><?php echo $p['nrapor1']; ?></td>
																		</tr>
																		<tr>
																			<td width="200">Nilai Rapor Kelas XI semeseter 2</td>
																			<td>:</td>
																			<td><?php echo $p['nrapor2']; ?></td>
																		</tr>
																		<tr>
																			<td width="200">Nilai Rapor Kelas XII semeseter 1</td>
																			<td>:</td>
																			<td><?php echo $p['nrapor3']; ?></td>
																		</tr>
																		<tr>
																			<td width="200">Lampiran Rapor Kelas XI semeseter 1</td>
																			<td>:</td>
																			<td width="100px">
																				<a href="<?php // echo base_url('assets/upload/rapor/') . $p['nama_dok']; 
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
																				<td><?php echo $p['nik_ayah']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Nama Ayah</td>
																				<td>:</td>
																				<td><?php echo $p['nama_ayah']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Pendidikan Ayah</td>
																				<td>:</td>
																				<td><?php echo $p['pendidikan_ayah']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Pekerjaan Ayah</td>
																				<td>:</td>
																				<td><?php echo $p['pekerjaan_ayah']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Alamat Kantor Ayah</td>
																				<td>:</td>
																				<td><?php echo $p['alamatkantor_ayah']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">NIK/No. KTP Ibu</td>
																				<td>:</td>
																				<td><?php echo $p['nik_ibu']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Nama Ibu</td>
																				<td>:</td>
																				<td><?php echo $p['nama_ibu']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Pendidikan Ibu</td>
																				<td>:</td>
																				<td><?php echo $p['pendidikan_ibu']; ?></td>
																			</tr>
																		</tbody>
																	</table>
																</div>
																<div class="col-sm-6">
																	<table class="table table-sm">
																		<tbody>
																			<tr>
																				<td width="200">Pekerjaan Ibu</td>
																				<td>:</td>
																				<td><?php echo $p['pekerjaan_ibu']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Penghasilan Orang Tua</td>
																				<td>:</td>
																				<td><?php echo $p['penghasilan_ortu']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Alamat Orang Tua</td>
																				<td>:</td>
																				<td><?php echo $p['alamat_ortu']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Kecamatan/Distrik</td>
																				<td>:</td>
																				<td><?php echo $p['kec_tempattinggalortu']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Kabupaten/Kota</td>
																				<td>:</td>
																				<td><?php echo $p['kab_tempattinggalortu']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Provinsi</td>
																				<td>:</td>
																				<td><?php echo $p['provinsi_tempattinggalortu']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Kode POS</td>
																				<td>:</td>
																				<td><?php echo $p['kodepost_tempattinggalortu']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">No. Telp./HP Orang Tua</td>
																				<td>:</td>
																				<td><?php echo $p['nohp_ortu']; ?></td>
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
																			<td><?php echo $p['nama_wali']; ?></td>
																		</tr>
																		<tr>
																			<td width="200">Pekerjaan Wali</td>
																			<td>:</td>
																			<td><?php echo $p['pekerjaan_wali']; ?></td>
																		</tr>
																		<tr>
																			<td width="200">Penghasilan Wali</td>
																			<td>:</td>
																			<td><?php echo $p['penghasilan_wali']; ?></td>
																		</tr>
																		<tr>
																			<td width="200">Alamat Wali</td>
																			<td>:</td>
																			<td><?php echo $p['alamat_wali']; ?></td>
																		</tr>
																		<tr>
																			<td width="200">Nomor HP Wali</td>
																			<td>:</td>
																			<td><?php echo $p['nohp_ortu']; ?></td>
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
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>


			</div>
			<!-- End of Main Content -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->


</body>

</html>