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
	 }

	button.btn.btn-sm.btn-info.btnTerima.disabled,
	button.btn.btn-sm.btn-danger.btnTolak.disabled {
	    opacity: .35 !important;
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
					<h6 class="m-0 font-weight-bold text-primary">Data Pendaftar Jalur SESAMA</h6>
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


<div id="editData" tabindex="-1" role="dialog" aria-labelledby="editDataLabel" aria-hidden="true" class="modal fade text-left bd-example-modal-lg">
	<div role="document" class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header row d-flex justify-content-between mx-1 mx-sm-3 mb-0 pb-0 border-0">
				<div class="edit tampil" id="editDataPribadi">
					<h6 class="font-weight-bold">Informasi Pribadi</h6>
				</div>
				<div class="edit" id="editDataSekolah">
					<h6 class="text-muted">Informasi Sekolah</h6>
				</div>
				<div class="edit" id="editDataOrtu">
					<h6 class="text-muted">Data Orang Tua</h6>
				</div>
				<div class="edit" id="editDataWali">
					<h6 class="text-muted">Data Wali</h6>
				</div>
			</div>
			<div class="line"></div>
			<div class="modal-body p-0">
				<fieldset class="show" id="editDataPribadi1">
					<div class="col-md-12">
		                <div class="form-card">
		                    <div class="row">
		                        <div class="col-12 mt-3">
		                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
		                                Data diri pendaftar
		                            </div>
		                        </div>
		                        <div class="col-sm-12 fotopas">
		                            <div class="row">
		                                <div class="col-sm-2">
		                                    <div class="form-group">
		                                        <!-- <label>Pas Foto Pendaftar</label> -->
		                                        <img src="https://www.24tee.com/image/data/imagesb/fts-yao-ming-rage-face-tee-shirt-a32180.jpg" width="100" height="100">
		                                    </div>
		                                </div>

		                                <div class="col-sm-5">
		                                	<div class="row">
		                                		<div class="col-sm-12">
						                            <div class="form-group">
						                                <label>Nama Lengkap</label>
						                                <input name="namalengkap" type="text" class="form-control" placeholder="" value="" readonly>
						                            </div>
		                                		</div>
		                                		<div class="col-sm-12">
						                            <div class="form-group">
						                                <label>NIK/No. KTP</label>
						                                <input name="namalengkap" type="text" class="form-control" placeholder="" value="" readonly>
						                            </div>
		                                		</div>
		                                	</div>

		                                </div>

		                                <div class="col-sm-5 profile">
		                                	<div class="row">
		                                		<div class="col-sm-12">
						                            <div class="form-group">
						                                <label>Nomor Pendaftaran</label>
						                                <input name="namalengkap" type="text" class="form-control" placeholder="" value="" readonly>
						                            </div>
		                                		</div>
		                                		<div class="col-sm-12 jeniskelamin">
						                            <label>Jenis Kelamin</label>
						                            <div class="row">
						                                <div class="col-sm-6">
						                                    <div class="form-check">
						                                        <input class="form-check-input jenkel" type="radio" name="jeniskelamin" id="jeniskelamin" value="Laki-laki">
						                                        <label class="form-check-label" for="exampleRadios1">Laki-Laki</label>
						                                    </div>
						                                </div>

						                                <div class="col-sm-6">
						                                    <div class="form-check">
						                                        <input class="form-check-input jenkel" type="radio" name="jeniskelamin" id="jeniskelamin" value="Perempuan">
						                                        <label class="form-check-label" for="exampleRadios1">Perempuan</label>
						                                    </div>
						                                </div>
						                            </div>
		                                		</div>
		                                	</div>

		                                </div>
		                            </div>
		                        </div>

		                        <div class="col-sm-4">
		                            <div class="form-group">
		                                <label>Agama</label><br>
		                                <select id="agama" name="agama" class="form-select" aria-label="Default select example">
		                                    <option>-- Pilih --</option>
		                                        <option value="">1</option>
		                                        <option value="">1</option>
		                                        <option value="">1</option>
		                                        <option value="">1</option>
		                                        <option value="">1</option>
		                                </select>
		                            </div>
		                        </div>

		                        <div class="col-sm-4">
		                            <div class="form-group">
		                                <label>Suku *</label>
		                                <select name="suku" id="suku" class="form-select" aria-label="Default select example">
		                                    <option>-- Pilih --</option>
		                                    <option value="Papua">Papua</option>
		                                    <option value="">>Non Papua</option>
		                                </select>
		                            </div>
		                        </div>

		                        <div class="col-sm-4">
		                            <div class="form-group">
		                                <label>Status Menikah *</label>
		                                <select id="statusmenikah" name="statusmenikah" class="form-select" aria-label="Default select example">
		                                    <option> -- Pilih -- </option>
		                                        <option value=""></option>
		                                </select>
		                            </div>
		                        </div>

		                        <div class="col-sm-4">
		                            <div class="form-group">
		                                <label>Tempat Lahir</label>
		                                <input name="tempatlahir" id="tempatlahir" type="text" class="form-control" placeholder="" value="" required>
		                            </div>
		                        </div>

		                        <div class="col-sm-4">
		                            <div class="form-group">
		                                <label>Tanggal Lahir</label><br>
		                                <input type="date" name="tanggallahir" id="tanggallahir" class="datepicker" data-date-format="mm/dd/yyyy" value="">
		                            </div>
		                        </div>

		                        <div class="col-sm-4">
		                            <div class="form-group">
		                                <label>Kabupaten/Kota</label>
		                                <select name="kabtempatlahir" id="kabtempatlahir" class="form-select" aria-label="Default select example">
		                                	<option>d</option>
		                                	<option>d</option>
		                                	<option>d</option>
		                                	<option>d</option>
		                                </select>
		                            </div>
		                        </div>

		                        <div class=" col-sm-4">
		                            <div class="form-group">
		                                <label>Provinsi</label>
		                                <select name="provtempatlahir" id="provtempatlahir" class="form-select">
		                                	<option>1</option>
		                                	<option>1</option>
		                                	<option>1</option>
		                                	<option>1</option>
		                                </select>
		                            </div>
		                        </div>

		                    </div>

		                    <div class="row">
		                        <div class="col-12 mt-2">
		                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
		                                Program Studi Pilihan Pendaftar.
		                            </div>
		                        </div>

		                        <div class="col-sm-4">
		                            <div class="form-group">
		                                <label>Pilihan 1 *</label>
		                                <select id="prodipilihan1" name="prodipilihan1" class="form-select" aria-label="Default select example">
		                                    <option> -- Pilih -- </option>
		                                        <option value=""></option>
		                                </select>
		                            </div>
		                        </div>

		                        <div class="col-sm-4">
		                            <div class="form-group">
		                                <label>Pilihan 2</label>
		                                <select id="prodipilihan2" name="prodipilihan2" class="form-select" aria-label="Default select example">
		                                	<option>1</option>
		                                	<option>1</option>
		                                	<option>1</option>
		                                	<option>1</option>
		                                </select>
		                            </div>
		                        </div>

		                        <div class="col-sm-4">
		                            <div class="form-group">
		                                <label>Pilihan 3</label>
		                                <select id="prodipilihan3" name="prodipilihan3" class="form-select" aria-label="Default select example">
		                                	<option>1</option>
		                                	<option>1</option>
		                                	<option>1</option>
		                                </select>
		                            </div>
		                        </div>
		                    </div>

		                    <div class="row">
		                        <div class="col-12">
		                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
		                                Data alamat tinggal pendaftar.
		                            </div>
		                        </div>

		                        <div class="col-sm-4">
		                            <div class="form-group">
		                                <label>Alamat</label>
		                                <input name="alamattempattinggal" id="alamattempattinggal" type="text" class="form-control" placeholder="" value="" required></input>
		                            </div>
		                        </div>


		                        <div class="col-sm-4">
		                            <div class="form-group">
		                                <label>Kecamatan/Distrik</label>
		                                <select name="kectempattinggal" id="kectempattinggal" class="form-select" aria-label="Default select example">
		                                	<option>ds</option>
		                                	<option>ds</option>
		                                	<option>ds</option>
		                                	<option>ds</option>
		                                </select>
		                            </div>
		                        </div>

		                        <div class="col-sm-4">
		                            <div class="form-group">
		                                <label>Kabupaten/Kota</label>
		                                <select name="kabtempattinggal" id="kabtempattinggal" class="form-select" aria-label="Default select example">
		  									<option>f</option>
		  									<option>f</option>
		  									<option>f</option>
		  									<option>f</option>
		                                </select>
		                            </div>
		                        </div>

		                        <div class="col-sm-4">
		                            <div class="form-group">
		                                <label>Provinsi</label>
		                                <select name="provtempattinggal" id="provtempattinggal" class="form-select" aria-label="Default select example">
		                                	<option>e</option>
		                                	<option>e</option>
		                                	<option>e</option>
		                                	<option>e</option>
		                                </select>
		                            </div>
		                        </div>

		                        <div class="col-sm-4">
		                            <div class="form-group">
		                                <label>Negara Tinggal</label>
		                                <input name="negaratinggal" id="negaratinggal" type="text" class="form-control" placeholder="" required value="">
		                            </div>
		                        </div>

		                        <div class="col-sm-4">
		                            <div class="form-group">
		                                <label>Kelurahan/Desa</label>
		                                <select name="destempattinggal" id="destempattinggal" class="form-select" aria-label="Default select example">
		                                	<option>ja</option>
		                                	<option>ja</option>
		                                	<option>ja</option>
		                                	<option>ja</option>
		                                	<option>ja</option>
		                                </select>
		                            </div>
		                        </div>

		                        <div class="col-sm-4">
		                            <div class="form-group">
		                                <label>Kode Pos</label>
		                                <input name="kodepos" id="kodepos" type="text" class="form-control" placeholder="" value="" required>
		                            </div>
		                        </div>

		                        <div class="col-sm-4">
		                            <div class="form-group">
		                                <label>Alamat Tinggal Lain</label>
		                                <input name="alamatlaintempattinggal" id="alamatlaintempattinggal" type="text" class="form-control" placeholder="" value="" required></input>
		                            </div>
		                        </div>

		                    </div>


		                    <div class="row">
		                        <div class="col-12">
		                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
		                                Data tambahan.
		                            </div>
		                        </div>

		                        <div class="col-sm-4">
		                            <div class="form-group">
		                                <label>No. Telp./HP</label>
		                                <input name="nohp" type="text" class="form-control" placeholder="" required value="" readonly>
		                            </div>
		                        </div>

		                        <div class="col-sm-4">
		                            <div class="form-group">
		                                <label>Alamat Email</label>
		                                <input name="email" type="email" class="form-control" placeholder="" required value="" readonly>
		                            </div>
		                        </div>

		                        <div class="col-sm-2">
		                            <div class="form-group">
		                                <label>Tinggi Badan</label>
		                                <input name="tinggibadan" id="tinggibadan" type="text" class="form-control" placeholder="" value="" required>
		                            </div>
		                        </div>

		                        <div class="col-sm-2">
		                            <div class="form-group">
		                                <label>Berat Badan</label>
		                                <input name="beratbadan" id="beratbadan" type="text" class="form-control" placeholder="" value="" required>
		                            </div>
		                        </div>

		                    </div>
		                </div>
					</div>
				</fieldset>

				<fieldset id="editDataSekolah1">
					<div class="col-sm-12">
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-md-12 mt-3">
                                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                Data pendidikan pendaftar
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Tahun Lulus SMTA</label>
                                                <select name="tahunlulussmta" id="tahunlulussmta" class="form-select" aria-label="Default select example">
                                                    <option> -- Pilih -- </option>
                                                    <option> -- Pilih -- </option>
                                                    <option> -- Pilih -- </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Jurusan SMTA</label>
                                                <select class="form-select" name="jurusansmta" id="jurusansmta" aria-label="Default select example">
                                                    <option> -- Pilih -- </option>
                                                    <option> -- Pilih -- </option>
                                                    <option> -- Pilih -- </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Jenis SMTA</label>
                                                <select name="jenissmta" id="jenissmta" class="form-select" aria-label="Default select example">
                                                    <option> -- Pilih -- </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Nama SMTA</label>
                                                <input name="namasmta" id="namasmta" type="text" class="form-control" placeholder="" value="" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>NISN SMTA</label>
                                                <input name="nisnsmta" id="nisnsmta" type="text" class="form-control" placeholder="" value="" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Provinsi SMTA</label>
                                                <select name="provinsismta" id="provinsismta" class="form-select" aria-label="Default select example">
                                                    <option> -- Pilih -- </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Alamat SMTA</label>
                                                <input name="alamatsmta" id="alamatsmta" type="text" class="form-control" placeholder="" value="" required></input>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
	                                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
	                                                Nilai dan lampiran rapor pendaftar
	                                            </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Kelas XI semeseter 1</label>
                                                <input name="nrapor1" id="nrapor1" type="text" class="form-control" placeholder="" value="" required></input>
                                            </div>
                                        </div>


                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Kelas XI semeseter 2</label>
                                                <input name="nrapor2" id="nrapor2" type="text" class="form-control" placeholder="" value="" required></input>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Kelas XII semeseter 1</label>
                                                <input name="nrapor3" id="nrapor3" type="text" class="form-control" placeholder="" value="" required></input>
                                            </div>
                                        </div>


										<!-- <div class="dropzone dokrapor col-sm-12 mb-5" id="upload-dokumen">
   												<div class="row">
   													<div class="col-sm-4">
			                                            <div class="form-group">
			                                                <label>Kelas XI semeseter 1</label><br>
			                                                <button class="btn btn-info btn-sm">Download                     	
			                                                </button>
			                                            </div>
   													</div>

   													<div class="col-sm-4">
			                                            <div class="form-group">
			                                                <label>Kelas XI semeseter 2</label><br>
			                                                <button class="btn btn-info btn-sm">Download                     	
			                                                </button>
			                                            </div>
   													</div>

   													<div class="col-sm-4">
			                                            <div class="form-group">
			                                                <label>Kelas XII semeseter 1</label><br>
			                                                <button class="btn btn-info btn-sm">Download                     	
			                                                </button>
			                                            </div>
   													</div>
   												</div>
                                        </div> -->

                                    </div>
                                </div>
                            </div>
				</fieldset>

				<fieldset id="editDataOrtu1">
					<div class="col-sm-12">
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                Biodata ayah pendaftar
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>NIK/No. KTP Ayah</label>
                                                <input name="nikayah" id="nikayah" type="text" class="form-control" placeholder="" value="" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nama Ayah</label>
                                                <input name="namaayah" id="namaayah" type="text" class="form-control" placeholder="" value="" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Pendidikan Ayah</label>
                                                <select name="pendidikanayah" id="pendidikanayah" class="form-select" aria-label="Default select example">
                                                    <option> -- Pilih -- </option>
                                                    <option> -- Pilih -- </option>
                                                    <option> -- Pilih -- </option>
                                                    <option> -- Pilih -- </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Pekerjaan Ayah</label>
                                                <select name="pekerjaanayah" id="pekerjaanayah" class="form-select" aria-label="Default select example">
                                                    <option> -- Pilih -- </option>
                                                    <option> -- Pilih -- </option>
                                                    <option> -- Pilih -- </option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Alamat Kantor Ayah</label>
                                                <input name="alamatkantorayah" id="alamatkantorayah" type="text" class="form-control" placeholder="" value="" required>
                                            </div>
                                        </div>
                                        </select>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                Biodata ayah pendaftar
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>NIK/No. KTP Ibu</label>
                                                <input name="nikibu" type="text" class="form-control" placeholder="" value="" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nama Ibu</label>
                                                <input name="namaibu" id="namaibu" type="text" class="form-control" placeholder="" value="" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Pendidikan Ibu</label>
                                                <select name="pendidikanibu" id="pendidikanibu" class="form-select" aria-label="Default select example">
                                                    <option> -- Pilih -- </option>
                                                    <option> -- Pilih -- </option>
                                                    <option> -- Pilih -- </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Pekerjaan Ibu</label>
                                                <select name="pekerjaanibu" id="pekerjaanibu" class="form-select" aria-label="Default select example">
                                                    <option> -- Pilih -- </option>
                                                    <option> -- Pilih -- </option>
                                                    <option> -- Pilih -- </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Penghasilan Orang Tua*</label>
                                                <select name="penghasilanortu" id="penghasilanortu" class="form-select" aria-label="Default select example">
                                                    <option> -- Pilih -- </option>
                                                    <option> -- Pilih -- </option>
                                                    <option> -- Pilih -- </option>
                                                    <option> -- Pilih -- </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                Alamat orang tua pendaftar
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Alamat Orang Tua</label>
                                                <input name="alamatortu" id="alamatortu" type="text" class="form-control" placeholder="" value="" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Provinsi</label>
                                                <select name="provortu" id="provortu" class="form-select" aria-label="Default select example">
                                                    <option> -- Pilih -- </option>
                                                    <option> -- Pilih -- </option>
                                                    <option> -- Pilih -- </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Kabupaten/Kota</label>
                                                <select name="kabupatenortu" id="kabupatenortu" class="form-select" aria-label="Default select example">
                                                    <option> -- Pilih -- </option>
                                                    <option> -- Pilih -- </option>
                                                    <option> -- Pilih -- </option>
                                                    <option> -- Pilih -- </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Kecamatan/Distrik</label>
                                                <select name="kecamatanortu" id="kecamatanortu" class="form-select" aria-label="Default select example">
                                                    <option> -- Pilih -- </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Kode Pos</label>
                                                <input name="kodeposortu" id="kodeposortu" type="text" class="form-control" placeholder="" value="" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>No. Telp./HP</label>
                                                <input name="nohportu" id="nohportu" type="text" class="form-control" placeholder="" value="" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
					</div>
				</fieldset>

				<fieldset id="editDataWali1">
					<div class="col-sm-12">
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-sm-12 mt-3">
                                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                Data wali pendaftar
                                            </div>
                                        </div>


                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nama Wali</label>
                                                <input name="namawali" id="namawali" type="text" class="form-control" placeholder="" value="" required>
                                            </div>

                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Pekerjaan Wali</label>
                                                <select name="pekerjaanwali" id="pekerjaanwali" class="form-select" aria-label="Default select example">
                                                    <option> -- Pilih -- </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Penghasilan Wali</label>
                                                <select name="penghasilanwali" id="penghasilanwali" class="form-select" aria-label="Default select example">
                                                    <option> -- Pilih -- </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Alamat Wali</label>
                                                <input name="alamatwali" id="alamatwali" type="text" class="form-control" placeholder="" value="" required>
                                            </div>
                                        </div>

                                    </div>
                                </div>
					</div>
				</fieldset>
			</div>
			<div class="line"></div>
			<div class="modal-footer border-0">
				<button type="button" class="btn btn-primary btn-sm">Tutup</button>
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
				"stateSave": false,
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

       $("#tablePendaftar").on("click", ".btnTerima", function(){
            var idt_biodata = $(this).val();
            var status = 'Diterima';
            var username = $(this).attr('idt_biodata');
            
            //username.classList.add("disabled");
            $.ajax({
                type: "POST",
                url: '<?php echo site_url() ?>datatables/proseslaporan/'+idt_biodata,
                data: {status:status, idt_biodata:idt_biodata},
                success:function(data)
                {
                    alert('Anda Menerima Laporan : '+username);
                    tablePendaftar.draw(false);
                },
                error:function()
                {
                    alert('Gagal Merubah Status Laporan : '+username);
                }
            });
        });

       $("#tablePendaftar").on("click", ".btnTolak", function(){
            var idt_biodata = $(this).val();
            var status = 'Ditolak';
            var username = $(this).attr('idt_biodata');
            $.ajax({
                type: "POST",
                url: '<?php echo site_url() ?>datatables/proseslaporan/'+idt_biodata,
                data: {status:status,idt_biodata:idt_biodata},
                success:function(data)
                {
                    alert('Anda Menolak Laporan : '+username);
                    tablePendaftar.draw(false);
                },
                error:function()
                {
                    alert('Gagal Merubah Status Laporan : '+username);
                }
            });
        });
	});
</script>