<!DOCTYPE html>
<html lang="en">

<head>
	<style>
		.alert.alert-server {
			margin-bottom: 0;
		}

		fieldset#DataPribadi1 .row,
		fieldset#DataSekolah1 .row,
		fieldset#DataOrtu1 .row,
		fieldset#DataWali1 .row {
			padding: 5px 0;
		}

		fieldset#DataPribadi1 .col-sm-12 .row:nth-child(odd),
		fieldset#DataSekolah1 .row:nth-child(odd),
		fieldset#DataOrtu1 .row:nth-child(odd),
		fieldset#DataWali1 .row:nth-child(odd) {
			background-color: #ecf0f6;
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
				<div class="row">
					<?php foreach ($data_pendaftar as $p) : ?>
						<div class="col-lg-12">
							<?php if ($p['fotoprofil'] == NULL) { ?>
								<img width="105" height="120" class="img-profile foto-profil" src="<?php echo base_url('assets/upload/profile/profil_default.svg'); ?>">
							<?php } else { ?>
								<img width="105" height="120" class="img-profile foto-profil" src="<?php echo base_url('assets/upload/profile/') . $p['fotoprofil']; ?>">
							<?php } ?>
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
														<div class="col-sm-12">
															<div class="row">
																<div class="col-sm-6 ">
																	Nomor Pendaftaran
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['username']; ?>
																</div>
															</div>

															<div class="row">
																<div class="col-sm-6">
																	Nama Lengkap
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['namalengkap']; ?>
																</div>
															</div>

															<div class="row">
																<div class="col-sm-6">
																	NISN (Nomor Induk Siswa Nasional)
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['nisn_pendaftar']; ?>
																</div>
															</div>

															<div class="row">
																<div class="col-sm-6">
																	Jenis Kelamin
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['jeniskelamin']; ?>
																</div>
															</div>

															<div class="row">
																<div class="col-sm-6">
																	NIK/No. KTP
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['nik']; ?>
																</div>
															</div>

															<div class="row">
																<div class="col-sm-6">
																	Agama
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['agama']; ?>
																</div>
															</div>

															<div class="row">
																<div class="col-sm-6">
																	Suku
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['suku']; ?>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-6">
																	Status Menikah
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['statusmenikah']; ?>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-6">
																	Tempat Lahir
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['lokasi_tempatlahir']; ?>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-6">
																	Tanggal Lahir
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['tgl_lahir']; ?>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-6">
																	Kabupaten/Kota
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['kab_tempatlahir']; ?>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-6">
																	Provinsi
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['prov_tempatlahir']; ?>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-6">
																	Program Studi Pilihan 1
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['pilihan1']; ?>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-6">
																	Program Studi Pilihan 2
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['pilihan2']; ?>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-6">
																	Program Studi Pilihan 3
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['pilihan3']; ?>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-6">
																	Alamat Tinggal
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['alamat_tempattinggal']; ?>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-6">
																	Desa/Kelurahan
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['des_tempattinggal']; ?>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-6">
																	Kecamatan/Distrik
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['kec_tempattinggal']; ?>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-6">
																	Kabupaten/Kota
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['kab_tempattinggal']; ?>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-6">
																	Provinsi
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['prov_tempattinggal']; ?>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-6">
																	Negara
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['negara_tempattinggal']; ?>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-6">
																	Kode Pos
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['kodepos_tempattinggal']; ?>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-6">
																	Alamat Tinggal Lain
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['alamatlain_tempattinggal']; ?>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-6">
																	No. HP
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['nohp']; ?>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-6">
																	Alamat Email
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['email']; ?>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-6">
																	Tinggi Badan
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['tinggibadan']; ?>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-6">
																	Berat Badan
																</div>
																<div class="col-sm-6">
																	: <?php echo $p['beratbadan']; ?>
																</div>
															</div>
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
														<div class="col-sm-6">
															Tahun Lulus SMTA
														</div>
														<div class="col-sm-6">
															: <?php echo $p['tahunlulus_smta']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															Jurusan SMTA
														</div>
														<div class="col-sm-6">
															: <?php echo $p['jurusansmta']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															Jenis SMTA
														</div>
														<div class="col-sm-6">
															: <?php echo $p['jenissmta']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															Nama SMTA
														</div>
														<div class="col-sm-6">
															: <?php echo $p['namasmta']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															NPSN SMTA
														</div>
														<div class="col-sm-6">
															: <?php echo $p['npsnsmta']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															Alamat SMTA
														</div>
														<div class="col-sm-6">
															: <?php echo $p['alamatsmta']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															Provinsi SMTA
														</div>
														<div class="col-sm-6">
															: <?php echo $p['prov_smta']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															Nilai Rapor Kelas XI semeseter 1
														</div>
														<div class="col-sm-6">
															: <?php echo $p['nrapor1']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															Nilai Rapor Kelas XI semeseter 2
														</div>
														<div class="col-sm-6">
															: <?php echo $p['nrapor2']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															Nilai Rapor Kelas XII semeseter 1
														</div>
														<div class="col-sm-6">
															: <?php echo $p['nrapor3']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															Lampiran Rapor Kelas XI semeseter 1
														</div>
														<div class="col-sm-6">
															: <a href="<?php echo base_url('assets/upload/rapor/') . $p['username']; 
																		?>" target="_blank" class="btn btn-info btn-icon-split btn-sm downloadform" target="_blank">
																<span class="icon text-white-50">
																	<i class="fas fa-download"></i>
																</span>
																<span class="text">Unduh</span>
															</a>
														</div>
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
															NIK/No. KTP Ayah
														</div>
														<div class="col-sm-6">
															: <?php echo $p['nik_ayah']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															Nama Ayah
														</div>
														<div class="col-sm-6">
															: <?php echo $p['nama_ayah']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															Pendidikan Ayah
														</div>
														<div class="col-sm-6">
															: <?php echo $p['pendidikan_ayah']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															Pekerjaan Ayah
														</div>
														<div class="col-sm-6">
															: <?php echo $p['pekerjaan_ayah']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															Alamat Kantor Ayah
														</div>
														<div class="col-sm-6">
															: <?php echo $p['alamatkantor_ayah']; ?>
														</div>
													</div>

													<div class="row">
														<div class="col-sm-6">
															NIK/No. KTP Ibu
														</div>
														<div class="col-sm-6">
															: <?php echo $p['nik_ibu']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															Nama Ibu
														</div>
														<div class="col-sm-6">
															: <?php echo $p['nama_ibu']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															Pendidikan Ibu
														</div>
														<div class="col-sm-6">
															: <?php echo $p['pendidikan_ibu']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															Pekerjaan Ibu
														</div>
														<div class="col-sm-6">
															: <?php echo $p['pekerjaan_ibu']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															Penghasilan Orang Tua
														</div>
														<div class="col-sm-6">
															: <?php echo $p['penghasilan_ortu']; ?>
														</div>
													</div>

													<div class="row">
														<div class="col-sm-6">
															Alamat Orang Tua
														</div>
														<div class="col-sm-6">
															: <?php echo $p['alamat_ortu']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															Kecamatan/Distrik
														</div>
														<div class="col-sm-6">
															: <?php echo $p['kec_tempattinggalortu']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															Kabupaten/Kota
														</div>
														<div class="col-sm-6">
															: <?php echo $p['kab_tempattinggalortu']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															Provinsi
														</div>
														<div class="col-sm-6">
															: <?php echo $p['provinsi_tempattinggalortu']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															Kode POS
														</div>
														<div class="col-sm-6">
															: <?php echo $p['kodepost_tempattinggalortu']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															No. Telp./HP Orang Tua
														</div>
														<div class="col-sm-6">
															: <?php echo $p['nohp_ortu']; ?>
														</div>
													</div>
												</div>
											</div>
										</fieldset>
									</div>

									<div class="tab-pane fade" id="dataWali" role="tabpanel" aria-labelledby="dataWali-tab">
										<fieldset class="show" id="DataWali1">
											<div class="col-md-12 mt-3 px-0 py-0">
												<div class="form-card">
													<div class="row">
														<div class="col-sm-6">
															Nama Wali
														</div>
														<div class="col-sm-6">
															: <?php echo $p['nama_wali']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															Pekerjaan Wali
														</div>
														<div class="col-sm-6">
															: <?php echo $p['pekerjaan_wali']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															Penghasilan Wali
														</div>
														<div class="col-sm-6">
															: <?php echo $p['penghasilan_wali']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															Alamat Wali
														</div>
														<div class="col-sm-6">
															: <?php echo $p['alamat_wali']; ?>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-6">
															Nomor HP Wali
														</div>
														<div class="col-sm-6">
															: <?php echo $p['nohp_ortu']; ?>
														</div>
													</div>
												</div>
											</div>
										</fieldset>
									</div>
								</div>
							</div>

						</div>
					<?php endforeach; ?>
				</div>

			</div>
			<!-- End of Main Content -->
		</div>
		<!-- End of Content Wrapper -->
	</div>
	<!-- End of Page Wrapper -->

</body>

</html>