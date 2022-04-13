    <link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>

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

    	div#modalEdit .modal-body ul.nav.nav-tabs li a.active {
    		background-color: #ecf0f6 !important;
    		padding: 0 10px 0 10px !important;
    		border-radius: 5px 5px 0 0 !important;
    		margin: 0 10px !important;
    		display: flex;
    		justify-content: center;
    		align-items: center;
    		height: 45px;
    	}

    	div#modalEdit .modal-body ul.nav.nav-tabs li a {
    		padding: 0 10px 0 10px !important;
    		margin: 0 10px !important;
    		display: flex;
    		justify-content: center;
    		align-items: center;
    		height: 45px;
    	}

    	.alert.alert-server {
    		margin-bottom: 0;
    	}

    	.dropzone {
    		border: 0;
    		background: white;
    		padding: 0;
    		margin: 0 !important;
    		min-height: 100px !important;
    	}

    	.dropzone .dz-message {
    		text-align: center;
    		margin: 1em 0;
    		padding: 10px;
    		border: 2px solid #dce3f9;
    		border-radius: 10px;
    	}

    	#DataPribadi1 table.table.table-sm tr:nth-child(2) td:nth-child(2) {
    		width: 20px;
    	}

    	.form-group {
    		margin-bottom: 1rem;
    		display: flex;
    		flex-direction: column;
    	}

    	select,
    	input#tanggallahir {
    		word-wrap: normal;
    		display: block;
    		width: 100%;
    		height: calc(1.5em + 0.75rem + 2px);
    		padding: 0.375rem 0.75rem;
    		font-size: 1rem;
    		font-weight: 400;
    		line-height: 1.5;
    		color: #6e707e;
    		background-color: #fff;
    		background-clip: padding-box;
    		border: 1px solid #d1d3e2;
    		border-radius: 0.35rem;
    	}

    	.nav-tabs .nav-item.show .nav-link,
    	.nav-tabs .nav-link.active {
    		color: #4e73df;
    		background-color: #fff;
    		border-color: #dddfeb #dddfeb #fff;
    		font-weight: bold;
    	}

    	h5.fs-title {
    		color: #4e73df;
    	}

    	.col-sm-12.d-flex.justify-content-flex-start {
    		display: flex;
    		justify-content: center;
    		align-items: center;
    		flex-direction: column;
    	}

    	.col-sm-2.fotoprofil .form-group.tombol {
    		position: absolute;
    		margin: auto;
    		align-items: center;
    		bottom: 10px;
    	}

    	/* Important part */
    	#modalEdit .modal-dialog {
    		overflow-y: initial !important
    	}

    	#modalEdit .modal-body {
    		height: 80vh;
    		overflow-y: auto;
    	}

    	/* Foto Profil */
    	/*	.tempatfoto {
  position: relative;
  width: 125px;
  height: 125px;
  border-radius: 50%;
  overflow: hidden;
  background-color: #111;
  margin: 0 auto;
}*/

    	.tempatfoto .col-sm-12 {
    		padding: 0;
    	}

    	div#modalEdit .alert.alert-warning.text-muted {
    		margin: 0;
    		display: flex;
    		justify-content: center;
    		align-items: flex-start;
    		flex-direction: column;
    	}

    	.tempatfoto {
    		position: relative;
    		width: 100%;
    		height: auto;
    		border-radius: 5%;
    		overflow: hidden;
    		background-color: #ecf0f6;
    		margin: 0;
    		display: flex;
    		justify-content: center;
    		align-items: center;
    	}

    	.tempatfoto:hover .unggah {
    		opacity: 1;
    	}

    	.tempatfoto:hover #fotopas {
    		opacity: .8;
    	}

    	#fotopas {
    		object-fit: cover;
    		opacity: 1;
    		transition: opacity .2s ease-in-out;
    		width: 70%;
    		margin: 0 15%;
    	}

    	.unggah {
    		position: absolute;
    		top: 0;
    		right: 0;
    		bottom: 0;
    		left: 0;
    		display: flex;
    		flex-direction: column;
    		justify-content: center;
    		align-items: center;
    		color: white;
    		opacity: 0;
    		transition: opacity .2s ease-in-out;
    	}

    	.icon_edit {
    		color: white;
    		padding-bottom: 8px;
    	}

    	.fas {
    		font-size: 20px;
    	}

    	.btnUnggahfoto {
    		text-transform: uppercase;
    		font-size: 12px;
    		width: 50%;
    		text-align: center;
    	}

    	div#modalEdit .alert.alert-warning.text-muted ul {
    		padding: 8px;
    	}

    	button.btnUnggahfoto {
    		width: 80%;
    	}

    	.text-muted {
    		font-size: 12px;
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
    					<div class="row">
    						<div class="col-sm-6">
	    						<h4 class="m-0 font-weight-bold text-primary">Data Pendaftar Jalur SESAMA</h4>
	    					</div>
	    					<div class="col-sm-6 d-flex justify-content-end">
	    						<a href="<?php echo site_url('administrator/export_pendaftar_excel'); ?>" id="btnExporExcel" type="button" class="btn btn-primary btn-sm"><i class="fas fa-file-alt"></i> &nbsp; Export Excel</a>  
	    					</div>  						
    					</div>
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

    	<!-- Modal Detail Pendaftar -->
    	<div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="modalDetailLabel" aria-hidden="true">
    		<div class="modal-dialog modal-lg" role="document">
    			<div class="modal-content modal-lg">
    				<div class="modal-header">
    					<h4 class="m-0 font-weight-bold text-primary modal-title" id="modalDetailLabel">
    						Detail Data Pendaftar: <span id="usernamependaftar"></span></h4>
    				</div>
    				<div class="modal-body">
    					<div id="detailPendaftarx"></div>
    				</div>
    				<div class="modal-footer">
    					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
    				</div>
    			</div>
    		</div>
    	</div>
    	<!-- Akhir Modal Detail Pendaftar -->

    	<!-- Modal Ubah Data Pendaftar -->
    	<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel" aria-hidden="true">
    		<div class="modal-dialog modal-lg" role="document">
    			<div class="modal-content modal-lg">
    				<div class="modal-header">
    					<h4 class="m-0 font-weight-bold text-primary modal-title" id="modalEditLabel">Ubah Data Pendaftar</h4>
    					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    				</div>
    				<div class="modal-body">
    					<div class="row panduan-profil">
    						<div class="col-sm-9 d-flex justify-content-start">
    							<div class="alert alert-warning text-muted" role="alert">
    								<ul>
    									<li class="text-muted">Untuk mengubah gambar profil, silakan arahkan pointer ke bagian foto.</li>
    									<li class="text-muted">Data yang tidak diubah dibiarkan default</li>
    									<li class="text-muted">Klik tombol Simpan setiap kali melakukan perubahan data</li>
    								</ul>
    							</div>
    						</div>
    						<div class="col-sm-3">
    							<div class="row tempatfoto">
    								<div class="col-sm-12">
    									<img src="" id="fotopas"><br>
    									<!-- <button class="btnUnggahfoto">Ubah Foto</button> -->
    									<div class="unggah">
    										<span class="icon_edit"><i class="fas fa-edit"></i></span>
    										<button class="btnUnggahfoto tombol btn btn-primary">Ubah Foto</button>

    										<!-- <span class="tombol">Edit Profile</span> -->
    									</div>
    								</div>
    							</div>
    							<div class="row unggahfoto" style="display:none;">
    								<div class="col-sm-12">
    									<div class="form-group">
    										<label>Upload Foto Pendaftar</label>
    										<div class="dropzone editFoto col-sm-12 mb-5" id="editFoto">
    											<div class="form">
    												<div name="editFoto" class="dz-message">
    													<h6> Klik atau Drop file ke sini</h6>
    												</div>
    											</div>
    										</div>
    									</div>
    								</div>
    							</div>
    						</div>
    					</div>
    					<div role="tabpanel" class="mt-4">
    						<!-- Nav tabs -->
    						<ul class="nav nav-tabs" role="tablist">
    							<li role="presentation" class="active">
    								<a class="active" href="#infoPribadi" aria-controls="infoPribadi" role="tab" data-toggle="tab">Identitas Pendaftar</a>
    							</li>
    							<li role="presentation">
    								<a href="#infoSekolah" aria-controls="infoSekolah" role="tab" data-toggle="tab">Data Sekolah</a>
    							</li>
    							<li role="presentation">
    								<a href="#infoOrtu" aria-controls="infoOrtu" role="tab" data-toggle="tab">Data Orang Tua</a>
    							</li>
    							<li role="presentation">
    								<a href="#infoWali" aria-controls="infoWali" role="tab" data-toggle="tab">Data Wali</a>
    							</li>
    						</ul>
    						<!-- Tab panes -->
    						<div class="tab-content">
    							<div role="tabpanel" class="tab-pane active" id="infoPribadi">
    								<div class="col-md-12">
    									<div class="form-card mt-4">
    										<div class="row">
    											<div class="col-sm-12">
    												<div class="row">

    													<div class="col-sm-6">
    														<div class="row">
    															<div class="col-sm-12">
    																<div class="form-group">
    																	<label>Nama Lengkap</label>
    																	<input name="namalengkap" type="text" class="form-control" placeholder="" value="">
    																</div>
    															</div>
    															<div class="col-sm-12">
    																<div class="form-group">
    																	<label>NIK/No. KTP</label>
    																	<input name="nik" type="text" class="form-control" placeholder="" value="">
    																</div>
    															</div>
    														</div>

    													</div>

    													<div class="col-sm-6 profile">
    														<div class="row">
    															<div class="col-sm-12">
    																<div class="form-group">
    																	<label>Nomor Pendaftaran</label>
    																	<input name="username" type="text" class="form-control" placeholder="" value="" readonly>
    																</div>
    															</div>
    															<div class="col-sm-12">
    																<div class="form-group">
    																	<label>NISN (Nomor Induk Siswa Nasional)</label>
    																	<input name="nisn_pendaftar" type="text" class="form-control" placeholder="" value="">
    																</div>
    															</div>

    														</div>

    													</div>

    													<!-- <div class="col-sm-6 fotoprofil">
													<div class="row">
														<div class="col-sm-12 d-flex justify-content-flex-start">
															<div class="form-group">
															</div>

															<div class="form-group tombol">
																<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#unggahFoto">Ubah Foto</button>
															</div>
														</div>
														<div class="col-sm-12 d-flex justify-content-flex-start">
														</div>
													</div>

												</div> -->
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6 jeniskelamin">
    												<label>Jenis Kelamin</label>
    												<div class="row">
    													<div class="col-sm-4">
    														<div class="form-check">
    															<input class="form-check-input jenkel" type="radio" name="jeniskelamin" id="jeniskelamin" value="Laki-laki">
    															<label class="form-check-label" for="exampleRadios1">Laki-Laki</label>
    														</div>
    													</div>

    													<div class="col-sm-4">
    														<div class="form-check">
    															<input class="form-check-input jenkel" type="radio" name="jeniskelamin" id="jeniskelamin" value="Perempuan">
    															<label class="form-check-label" for="exampleRadios1">Perempuan</label>
    														</div>
    													</div>
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label for="agama">Agama</label>
    													<select id="agama" name="agama" class="form-select" aria-label="Default select example">
    														<option value=""> -- Pilih -- </option>
    														<?php foreach ($agama as $ag) :
															?>
    															<option value="<?php echo $ag['idagama']; ?>"><?php echo $ag['agama']; ?></option>
    														<?php endforeach;
															?>
    													</select>
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Suku *</label>
    													<select name="suku" id="suku" class="form-select" aria-label="Default select example">
    														<option value=""> -- Pilih -- </option>
    														<option value="Papua">Papua</option>
    														<option value="Non Papua">Non Papua</option>
    													</select>
    												</div>
    											</div>

    											<div class="col-sm-4 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Status Menikah *</label>
    													<select id="statusmenikah" name="statusmenikah" class="form-select" aria-label="Default select example">
    														<option value=""> -- Pilih -- </option>
    														<?php foreach ($statusmenikah as $sm) :
															?>
    															<option value="<?php echo $sm['idstatusmenikah']; ?>"><?php echo $sm['status']; ?></option>
    														<?php endforeach; ?>
    													</select>
    												</div>
    											</div>
    										</div>

    										<div class="row">
    											<div class="col-12 mt-4">
    												<h5 class="fs-title">Tempat Tanggal lahir</h5>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Provinsi *</label>
    													<select name="provtempatlahir" id="provtempatlahir" class="form-select" aria-label="Default select example">
    														<option value=""> -- Pilih -- </option>
    														<?php foreach ($provinsi as $prov) : ?>
    															<option value="<?php echo $prov['kode']; ?>"><?php echo $prov['nama']; ?></option>
    														<?php endforeach; ?>
    													</select>
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Kabupaten/Kota *</label>
    													<select name="kabtempatlahir" id="kabtempatlahir" class="form-select selectkab" aria-label="Default select example">
    														<option value=""></option>
    													</select>
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Tempat Lahir</label>
    													<input name="lokasi_tempatlahir" id="lokasi_tempatlahir" type="text" class="form-control" placeholder="" value="" required>
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Tanggal Lahir</label>
    													<input type="date" name="tanggallahir" id="tanggallahir" class="datepicker" data-date-format="mm/dd/yyyy" value="<?php // echo $ep['tgl_lahir']; 
																																											?>">
    												</div>
    											</div>

    										</div>

    										<div class="row">
    											<div class="col-12 mt-4">
    												<h5 class="fs-title">Program Studi Pilihan</h5>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Pilihan 1 *</label>
    													<select id="prodipilihan1" name="prodipilihan1" class="form-select" aria-label="Default select example">
    														<option value="0"> -- Pilih -- </option>
    														<?php foreach ($prodi as $pr1) :
															?>
    															<option value="<?php echo $pr1['idprodi']; ?>"><?php echo $pr1['namaprodi']; ?></option>
    														<?php endforeach;
															?>
    													</select>
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Pilihan 2</label>
    													<select id="prodipilihan2" name="prodipilihan2" class="form-select" aria-label="Default select example">
    														<option value="0"> -- Pilih -- </option>
    														<?php foreach ($prodi as $pr2) : ?>
    															<option value="<?php echo $pr2['idprodi']; ?>"><?php echo $pr2['namaprodi']; ?></option>
    														<?php endforeach; ?>
    													</select>
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Pilihan 3</label>
    													<select id="prodipilihan3" name="prodipilihan3" class="form-select" aria-label="Default select example">
    														<option value="0"> -- Pilih -- </option>
    														<?php foreach ($prodi as $pr3) : ?>
    															<option value="<?php echo $pr3['idprodi']; ?>"><?php echo $pr3['namaprodi']; ?></option>
    														<?php endforeach; ?>
    													</select>
    												</div>
    											</div>
    										</div>

    										<div class="row">
    											<div class="col-12 mt-4">
    												<h5 class="fs-title">Tempat Tinggal</h5>
    											</div>
    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Negara Tinggal *</label>
    													<input name="negaratinggal" id="negaratinggal" type="text" class="form-control" placeholder="" required value="<?php // echo $ep['negara_tempattinggal']; 
																																										?>">
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Provinsi *</label>
    													<select name="provtempattinggal" id="provtempattinggal" class="form-select" aria-label="Default select example">
    														<option value=""> -- Pilih -- </option>
    														<?php foreach ($provinsi as $prov) : ?>
    															<option value="<?php echo $prov['kode']; ?>"><?php echo $prov['nama']; ?></option>
    														<?php endforeach; ?>
    													</select>
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Kabupaten/Kota *</label>
    													<select name="kabtempattinggal" id="kabtempattinggal" class="form-select selectkab" aria-label="Default select example">
    														<option value=""></option>
    													</select>
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Kecamatan/Distrik *</label>
    													<select name="kectempattinggal" id="kectempattinggal" class="form-select" aria-label="Default select example">
    														<option value=""></option>
    													</select>
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Kelurahan/Desa *</label>
    													<select name="destempattinggal" id="destempattinggal" class="form-select" aria-label="Default select example">
    														<option value="" selected></option>
    													</select>
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Kode Pos</label>
    													<input name="kodepos" id="kodepos" type="text" class="form-control" placeholder="" value="" required>
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Alamat *</label>
    													<textarea name="alamattempattinggal" id="alamattempattinggal" type="text" class="form-control" placeholder="" value="" required></textarea>
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Alamat Tinggal Lain</label>
    													<textarea name="alamatlaintempattinggal" id="alamatlaintempattinggal" type="text" class="form-control" placeholder="" value="" required></textarea>
    												</div>
    											</div>

    										</div>


    										<div class="row">
    											<div class="col-12 mt-4">
    												<h5 class="fs-title">Data Tambahan</h5>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>No. Telp./HP *</label>
    													<input name="nohp" type="text" class="form-control" placeholder="" value="">
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Alamat Email *</label>
    													<input name="email" type="email" class="form-control" placeholder="" value="">
    													<small>Email Aktif</small>
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Tinggi Badan *</label>
    													<input name="tinggibadan" id="tinggibadan" type="text" class="form-control" placeholder="" value="" required>
    													<small>Satuan cm. Contoh: 165</small>
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Berat Badan *</label>
    													<input name="beratbadan" id="beratbadan" type="text" class="form-control" placeholder="" value="" required>
    													<small>Satuan kg. Contoh: 60</small>
    												</div>
    											</div>

    										</div>

    									</div>
    								</div>
    							</div>
    							<div role="tabpanel" class="tab-pane" id="infoSekolah">
    								<div class="col-md-12">
    									<div class="form-card">
    										<div class="row">
    											<div class="col-12 mt-4">
    												<div class="alert alert-primary alert-dismissible fade show" role="alert">
    													Bidang/isian yang bertanda bintang (*) wajib untuk diisi.
    													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    														<span aria-hidden="true">&times;</span>
    													</button>
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Tahun Lulus SMTA *</label>
    													<select name="tahunlulussmta" id="tahunlulussmta" class="form-select" aria-label="Default select example">
    														<option> -- Pilih -- </option>
    														<?php $thn_skr = date('Y');
															for ($x = $thn_skr; $x >= 2000; $x--) { ?>
    															<option value="<?php echo $x ?>"><?php echo $x ?></option>
    														<?php } ?>
    													</select>
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Jurusan SMTA *</label>
    													<select class="form-select" name="jurusansmta" id="jurusansmta" aria-label="Default select example">
    														<option> -- Pilih -- </option>
    														<?php foreach ($jurusansmta as $jur) : ?>
    															<option value="<?php echo $jur['idjurusansmta']; ?>"><?php echo $jur['namajurusan']; ?></option>
    														<?php endforeach; ?>
    													</select>
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Jenis SMTA *</label>
    													<select name="jenissmta" id="jenissmta" class="form-select" aria-label="Default select example">
    														<option> -- Pilih -- </option>
    														<?php foreach ($jenissmta as $jen) : ?>
    															<option value="<?php echo $jen['idjenissmta']; ?>"><?php echo $jen['namajenissmta']; ?></option>
    														<?php endforeach; ?>
    													</select>
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Nama SMTA *</label>
    													<input name="namasmta" id="namasmta" type="text" class="form-control" placeholder="" value="" required>
    													<small>Ketik nama SMTA Anda.</small>
    												</div>
    											</div>

    											

    											<div class="col-sm-12 mt-4">
    												<div class="form-group">
    													<h5 class="fs-title">Nilai Rata-Rata Rapor</h5>
    												</div>

    												<div class="row">
    													<div class="col-sm-6">
    														<div class="row">
    															<div class="col-sm-12">
    																<div class="form-group">
    																	<label>Kelas XI semeseter 1</label>
    																	<input name="nrapor1" id="nrapor1" type="text" class="form-control" placeholder="" value="" required></input>
    																</div>
    															</div>


    															<div class="col-sm-12">
    																<div class="form-group">
    																	<label>Kelas XI semeseter 2</label>
    																	<input name="nrapor2" id="nrapor2" type="text" class="form-control" placeholder="" value="" required></input>
    																</div>
    															</div>

    															<div class="col-sm-12">
    																<div class="form-group">
    																	<label>Kelas XII semeseter 1</label>
    																	<input name="nrapor3" id="nrapor3" type="text" class="form-control" placeholder="" value="" required></input>
    																</div>
    															</div>
    														</div>
    													</div>

    													<div class="col-sm-6">
    														<div class="row mt-2">
    															<div class="col-sm-12">
    																<div class="form">
    																	<div class="dropzone rapor" id="file">
    																		<div class="alert alert-primary alert-dismissible fade show" role="alert">
    																			<small>Unggah file rapor dalam bentuk .pdf dengan ukuran maksimal 500kb. Format nama file <b>Rapor.pdf</b> </small>
    																			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    																				<span aria-hidden="true">&times;</span>
    																			</button>
    																		</div>
    																		<div class="dz-message">
    																			<h6> Klik atau Drop file PDF ke sini</h6>
    																		</div>
    																	</div>

    																</div>
    															</div>
    														</div>
    													</div>

    												</div>




    											</div>
    										</div>
    									</div>
    								</div>
    							</div>
    							<div role="tabpanel" class="tab-pane" id="infoOrtu">
    								<div class="col-md-12">
    									<div class="form-card">
    										<div class="row">
    											<div class="col-sm-12 mt-4">
    												<h5 class="fs-title">Biodata Ayah</h5>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>NIK/No. KTP Ayah</label>
    													<input name="nikayah" id="nikayah" type="text" class="form-control" placeholder="" value="" required>
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Nama Ayah *</label>
    													<input name="namaayah" id="namaayah" type="text" class="form-control" placeholder="" value="" required>
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Pendidikan Ayah *</label>
    													<select name="pendidikanayah" id="pendidikanayah" class="form-select" aria-label="Default select example">
    														<option> -- Pilih -- </option>
    														<?php foreach ($pendidikanortu as $pd) : ?>
    															<option value="<?php echo $pd['idpendidikan']; ?>"><?php echo $pd['namajenjang']; ?></option>
    														<?php endforeach; ?>
    													</select>
    													<small>Pendidikan terakhir</small>
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Pekerjaan Ayah *</label>
    													<select name="pekerjaanayah" id="pekerjaanayah" class="form-select" aria-label="Default select example">
    														<option> -- Pilih -- </option>
    														<?php foreach ($pekerjaanortu as $pk) : ?>
    															<option value="<?php echo $pk['idpekerjaan']; ?>"><?php echo $pk['namapekerjaan']; ?></option>
    														<?php endforeach; ?>
    													</select>
    												</div>
    											</div>


    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Alamat Kantor Ayah *</label>
    													<textarea name="alamatkantorayah" id="alamatkantorayah" type="text" class="form-control" placeholder="" value="" required></textarea>
    													<small>Alamat kantor Ayah, maksimal 50 karakter.</small>
    												</div>
    											</div>
    											</select>
    										</div>

    										<div class="row">
    											<div class="col-sm-12 mt-4">
    												<h5 class="fs-title">Biodata Ibu</h5>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>NIK/No. KTP Ibu</label>
    													<input name="nikibu" type="text" class="form-control" placeholder="" value="" required>
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Nama Ibu *</label>
    													<input name="namaibu" id="namaibu" type="text" class="form-control" placeholder="" value="" required>
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Pendidikan Ibu *</label>
    													<select name="pendidikanibu" id="pendidikanibu" class="form-select" aria-label="Default select example">
    														<option> -- Pilih -- </option>
    														<?php foreach ($pendidikanortu as $pd) : ?>
    															<option value="<?php echo $pd['idpendidikan']; ?>"><?php echo $pd['namajenjang']; ?></option>
    														<?php endforeach; ?>
    													</select>
    													<small>Pendidikan terakhir</small>
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Pekerjaan Ibu *</label>
    													<select name="pekerjaanibu" id="pekerjaanibu" class="form-select" aria-label="Default select example">
    														<option> -- Pilih -- </option>
    														<?php foreach ($pekerjaanortu as $pk) : ?>
    															<option value="<?php echo $pk['idpekerjaan']; ?>"><?php echo $pk['namapekerjaan']; ?></option>
    														<?php endforeach; ?>
    													</select>
    												</div>
    											</div>

    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Penghasilan Orang Tua*</label>
    													<select name="penghasilanortu" id="penghasilanortu" class="form-select" aria-label="Default select example">
    														<option> -- Pilih -- </option>
    														<?php foreach ($penghasilanortu as $ph) : ?>
    															<option value="<?php echo $ph['idpenghasilan']; ?>"><?php echo $ph['penghasilan']; ?></option>
    														<?php endforeach; ?>
    													</select>
    													<small>Penghasilan Orang Tua Per Bulan</small>
    												</div>
    											</div>
    										</div>

    										<div class="row">
    											<div class="col-sm-12 mt-4">
    												<h5 class="fs-title">Alamat Orang Tua</h5>
    											</div>
    											<div class="col-sm12">
    												<div class="row">
    													<div class="col-sm-6">
    														<div class="col-sm-12 col-md-12 col-lg-12">
    															<div class="form-group">
    																<label>Provinsi *</label>
    																<select name="provortu" id="provortu" class="form-select" aria-label="Default select example">
    																	<option> -- Pilih -- </option>
    																	<?php foreach ($provinsi as $prov) : ?>
    																		<option value="<?php echo $prov['kode']; ?>"><?php echo $prov['nama']; ?></option>
    																	<?php endforeach; ?>
    																</select>
    															</div>
    														</div>

    														<div class="col-sm-12 col-md-12 col-lg-12">
    															<div class="form-group">
    																<label>Kabupaten/Kota *</label>
    																<select name="kabupatenortu" id="kabupatenortu" class="form-select selectkab" aria-label="Default select example">
    																	<option value=""> </option>

    																</select>
    															</div>
    														</div>

    														<div class="col-sm-12 col-md-12 col-lg-12">
    															<div class="form-group">
    																<label>Kecamatan/Distrik *</label>
    																<select name="kecamatanortu" id="kecamatanortu" class="form-select" aria-label="Default select example">
    																	<option value=""> </option>
    																</select>
    															</div>
    														</div>

    														<div class="col-sm-12 col-md-12 col-lg-12">
    															<div class="form-group">
    																<label>Kode Pos *</label>
    																<input name="kodeposortu" id="kodeposortu" type="text" class="form-control" placeholder="" value="" required>
    																<small>Kode pos tempat tinggal orang tua saat ini</small>
    															</div>
    														</div>
    													</div>
    													<div class="col-sm-6">
    														<div class="col-sm-12 col-md-12 col-lg-12">
    															<div class="form-group">
    																<label>Alamat Orang Tua *</label>
    																<textarea name="alamatortu" id="alamatortu" type="text" class="form-control" placeholder="" value="" required></textarea>
    																<small>Alamat tinggal orang tua saat ini. Maksimal 50 karakter.</small>
    															</div>
    														</div>


    														<div class="col-sm-12 col-md-12 col-lg-12">
    															<div class="form-group">
    																<label>No. Telp./HP *</label>
    																<input name="nohportu" id="nohportu" type="text" class="form-control" placeholder="" value="" required>
    																<small>Nomor telp atau handphone yang bisa dihubungi</small>
    															</div>
    														</div>

    													</div>
    												</div>
    											</div>
    										</div>

    									</div>
    								</div>
    							</div>
    							<div role="tabpanel" class="tab-pane" id="infoWali">
    								<div class="col-md-12">
    									<div class="form-card mt-4">
    										<div class="row">
    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Nama Wali</label>
    													<input name="namawali" id="namawali" type="text" class="form-control" placeholder="" value="">
    												</div>
    											</div>
    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Pekerjaan Wali</label>
    													<select name="pekerjaanwali" id="pekerjaanwali" class="form-select" aria-label="Default select example">
    														<option> -- Pilih -- </option>
    														<?php foreach ($pekerjaanortu as $pk) : ?>
    															<option value="<?php echo $pk['idpekerjaan']; ?>"><?php echo $pk['namapekerjaan']; ?></option>
    														<?php endforeach; ?>
    													</select>
    												</div>
    											</div>
    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Penghasilan Wali</label>
    													<select name="penghasilanwali" id="penghasilanwali" class="form-select" aria-label="Default select example">
    														<option> -- Pilih -- </option>
    														<?php foreach ($penghasilanortu as $ph) : ?>
    															<option value="<?php echo $ph['idpenghasilan']; ?>"><?php echo $ph['penghasilan']; ?></option>
    														<?php endforeach; ?>
    													</select>
    												</div>
    											</div>
    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>No. HP Wali</label>
    													<input name="nohp_wali" id="nohp_wali" type="text" class="form-control" placeholder="" value="">
    												</div>
    											</div>
    											<div class="col-sm-6 col-md-6 col-lg-6">
    												<div class="form-group">
    													<label>Alamat Wali</label>
    													<textarea name="alamatwali" id="alamatwali" type="text" class="form-control" placeholder="" value=""></textarea>
    													<small>Alamat wali saat ini. Maksimal 50 karakter.</small>
    												</div>
    											</div>
    										</div>
    									</div>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    				<div class="modal-footer">
    					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
    					<input type="button" id="btnSimpan" name="btnSimpan" class="btn btn-primary btnSimpan" value="Simpan">
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
    					<h5 class="modal-title" id="unggahFotolabel">Unggah Foto</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
    				</div>
    				<div class="modal-body">
    					<form class="dropzone uploadfoto" id="image-upload">
    						<div class="alert alert-primary alert-dismissible
	fade show" role="alert"> <small>Rasio Foto : 4 x 6, atau max resolusi
    								300px x 450px, dengan max size : 200kb, Tipe file : jpg, jpeg,
    								png.</small> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
    						</div>
    						<div class="dz-message">
    							<h6> Klik atau Drop gambar ke
    								sini</h6>
    						</div>
    					</form>
    				</div>
    				<div class="modal-footer"> <button id="uploadFile" type="button" class="btn btn-primary">Upload</button>
    					<button id="closeModal" type="button" class="btn
	btn-default">Kembali</button>
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


    			$("#provtempatlahir").change(function() {
    				var url = "<?php echo site_url('register/add_ajax_kab'); ?>/" + $(this).val();
    				$('#kabtempatlahir').load(url);
    				return false;
    			});

    			$("#provtempattinggal").change(function() {
    				var url = "<?php echo site_url('register/add_ajax_kab'); ?>/" + $(this).val();
    				$('#kabtempattinggal').load(url);
    				return false;
    			});

    			$("#kabtempattinggal").change(function() {
    				var url = "<?php echo site_url('register/add_ajax_kec'); ?>/" + $(this).val();
    				$('#kectempattinggal').load(url);
    				return false;
    			});
    			$("#kectempattinggal").change(function() {
    				var url = "<?php echo site_url('register/add_ajax_des'); ?>/" + $(this).val();
    				$('#destempattinggal').load(url);
    				return false;
    			});

    			$("#provortu").change(function() {
    				var url = "<?php echo site_url('register/add_ajax_kab'); ?>/" + $(this).val();
    				$('#kabupatenortu').load(url);
    				return false;
    			});

    			$("#kabupatenortu").change(function() {
    				var url = "<?php echo site_url('register/add_ajax_kec'); ?>/" + $(this).val();
    				$('#kecamatanortu').load(url);
    				return false;
    			});

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

    		Dropzone.autoDiscover = false;

    		$(document).ready(function() {
    			var tablePendaftar = $('#tablePendaftar').DataTable({

    				"language": {
    					"emptyTable": "Tidak ada data yang ditampilkan. Pilih salah satu Program Studi"
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
    							"width": "15%",
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
    					tablePendaftar.search('').draw();
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

    			$("#tablePendaftar").on("click", ".btnDetail", function() {
    				var username = $(this).data('username');
    				$.ajax({
    					type: "POST",
    					url: '<?php echo site_url() ?>/datatables/detailpendaftar/' + username,
    					data: {
    						username: username,
    					},
    					success: function(response) {
    						$('#usernamependaftar').html(username);
    						$('#detailPendaftarx').html(response);

    					}
    				});

    			});

    			$("#tablePendaftar").on("click", ".btnEdit", function() {
    				$('.tempatfoto').show();
    				$('.unggahfoto').hide();

    				var username = $(this).data('username');
    				$.ajax({
    					type: "POST",
    					url: '<?php echo site_url() ?>/datatables/editpendaftar/' + username,
    					data: {
    						username: username,
    					},
    					success: function(response) {
    						var json = $.parseJSON(response);

    						$("#fotopas").attr("src", "<?php echo base_url('assets/upload/profile/'); ?>" + json.fotoprofil);

    						$('input[name="username"]').val(json.username);
    						$('input[name="namalengkap"]').val(json.namalengkap);
    						$('input[name="nik"]').val(json.nik);
    						$('input[name="nisn_pendaftar"]').val(json.nisn_pendaftar);
    						$('input[name=jeniskelamin][value="' + json.jeniskelamin + '"]').prop('checked', true);
    						$('select[name="agama"]').val(json.agama).attr('selected', 'selected');
    						$('select[name="suku"]').val(json.suku).attr('selected', 'selected');
    						$('select[name="statusmenikah"]').val(json.statusmenikah).attr('selected', 'selected');
    						$('select[name="provtempatlahir"]').val(json.prov_tempatlahir).attr('selected', 'selected');

    						// load kabupaten by prov yg selected
    						var prov_tempatlahir = $('select[name="provtempatlahir"]').children("option:selected").val();
    						var url1 = "<?php echo site_url('register/add_ajax_kab'); ?>/" + prov_tempatlahir + "/" + json.kab_tempatlahir;
    						$('#kabtempatlahir').load(url1);

    						//$('select[name="kabtempatlahir"]').val()
    						$('input[name="lokasi_tempatlahir"]').val(json.lokasi_tempatlahir);
    						$('input[name="tanggallahir"]').val(json.tgl_lahir);
    						$('select[name="prodipilihan1"]').val(json.prodipilihan1).attr('selected', 'selected');
    						$('select[name="prodipilihan2"]').val(json.prodipilihan2).attr('selected', 'selected');
    						$('select[name="prodipilihan3"]').val(json.prodipilihan3).attr('selected', 'selected');
    						$('input[name="negaratinggal"]').val(json.negara_tempattinggal);
    						$('select[name="provtempattinggal"]').val(json.prov_tempattinggal).attr('selected', 'selected');

    						var url2 = "<?php echo site_url('register/add_ajax_kab'); ?>/" + json.prov_tempattinggal + "/" + json.kab_tempattinggal;
    						$('#kabtempattinggal').load(url2);

    						var url3 = "<?php echo site_url('register/add_ajax_kec'); ?>/" + json.kab_tempattinggal + "/" + json.kec_tempattinggal;
    						$('#kectempattinggal').load(url3);

    						var url4 = "<?php echo site_url('register/add_ajax_des'); ?>/" + json.kec_tempattinggal + "/" + json.des_tempattinggal;
    						$('#destempattinggal').load(url4);

    						$('select[name="kectempattinggal"]').val(json.kec_tempattinggal).attr('selected', 'selected');
    						$('select[name="destempattinggal"]').val(json.des_tempattinggal).attr('selected', 'selected');
    						$('input[name="kodepos"]').val(json.kodepos_tempattinggal);
    						$('textarea[name="alamattempattinggal"]').val(json.alamat_tempattinggal);
    						$('textarea[name="alamatlaintempattinggal"]').val(json.alamatlain_tempattinggal);
    						$('input[name="nohp"]').val(json.nohp);
    						$('input[name="email"]').val(json.email);
    						$('input[name="tinggibadan"]').val(json.tinggibadan);
    						$('input[name="beratbadan"]').val(json.beratbadan);
    						$('select[name="tahunlulussmta"]').val(json.tahunlulus_smta).attr('selected', 'selected');
    						$('select[name="jurusansmta"]').val(json.jurusansmta).attr('selected', 'selected');
    						$('select[name="jenissmta"]').val(json.jenissmta).attr('selected', 'selected');
    						$('input[name="namasmta"]').val(json.nama_smta);
    						$('input[name="nisnsmta"]').val(json.nisn_smta);
    						$('select[name="provinsismta"]').val(json.prov_smta).attr('selected', 'selected');
    						$('textarea[name="alamatsmta"]').val(json.alamat_smta);
    						$('input[name="nrapor1"]').val(json.nrapor1);
    						$('input[name="nrapor2"]').val(json.nrapor2);
    						$('input[name="nrapor3"]').val(json.nrapor3);
    						$('input[name="button"]').val(json.button);
    						$('input[name="nikayah"]').val(json.nik_ayah);
    						$('input[name="namaayah"]').val(json.nama_ayah);
    						$('select[name="pendidikanayah"]').val(json.pendidikan_ayah).attr('selected', 'selected');
    						$('select[name="pekerjaanayah"]').val(json.pekerjaan_ayah).attr('selected', 'selected');
    						$('textarea[name="alamatkantorayah"]').val(json.alamatkantor_ayah);

    						$('input[name="nikibu"]').val(json.nik_ibu);
    						$('input[name="namaibu"]').val(json.nama_ibu);
    						$('select[name="pendidikanibu"]').val(json.pendidikan_ibu).attr('selected', 'selected');
    						$('select[name="pekerjaanibu"]').val(json.pekerjaan_ibu).attr('selected', 'selected');
    						$('select[name="penghasilanortu"]').val(json.penghasilan_ortu).attr('selected', 'selected');
    						$('textarea[name="alamatortu"]').val(json.alamat_ortu);
    						$('select[name="provortu"]').val(json.provinsi_tempattinggalortu).attr('selected', 'selected');

    						var provortu = $('select[name="provortu"]').children("option:selected").val();
    						var url5 = "<?php echo site_url('register/add_ajax_kab'); ?>/" + provortu + "/" + json.kab_tempattinggalortu;
    						$('#kabupatenortu').load(url5);

    						var url6 = "<?php echo site_url('register/add_ajax_kec'); ?>/" + json.kab_tempattinggalortu + "/" + json.kec_tempattinggalortu;
    						$('#kecamatanortu').load(url6);

    						$('input[name="kodeposortu"]').val(json.kodepost_tempattinggalortu);
    						$('input[name="nohportu"]').val(json.nohp_ortu);
    						$('input[name="namawali"]').val(json.nama_wali);
    						$('select[name="pekerjaanwali"]').val(json.pekerjaan_wali).attr('selected', 'selected');
    						$('select[name="penghasilanwali"]').val(json.penghasilan_wali).attr('selected', 'selected');
    						$('input[name="nohp_wali"]').val(json.nohp_wali);
    						$('textarea[name="alamatwali"]').val(json.alamat_wali);

    					}
    				});

    			});

    			$("#modalEdit").on("click", ".btnSimpan", function() {
    				// Data Pribadi
    				var jenkel = $(".jenkel:checked").val();
    				var nik = $("input[name='nik']").val();
    				var namalengkap = $("input[name='namalengkap']").val();
    				var username = $("input[name='username']").val();
    				var nisn_pendaftar = $("input[name='nisn_pendaftar']").val();
    				var agama = $("select[name='agama']").val();
    				var suku = $("select[name='suku']").val();
    				var statusmenikah = $("select[name='statusmenikah']").val();
    				var nohp = $("input[name='nohp']").val();
    				var email = $("input[name='email']").val();
    				var prodipilihan1 = $("select[name='prodipilihan1']").val();
    				var prodipilihan2 = $("select[name='prodipilihan2']").val();
    				var prodipilihan3 = $("select[name='prodipilihan3']").val();
    				var prov_tempatlahir = $("select[name='provtempatlahir']").val();
    				var kab_tempatlahir = $("select[name='kabtempatlahir']").val();
    				var lokasi_tempatlahir = $("input[name='lokasi_tempatlahir']").val();
    				var tgl_lahir = $("input[name='tanggallahir']").val();
    				var negara_tempattinggal = $("input[name='negaratinggal']").val();
    				var prov_tempattinggal = $("select[name='provtempattinggal']").val();
    				var kab_tempattinggal = $("select[name='kabtempattinggal']").val();
    				var kec_tempattinggal = $("select[name='kectempattinggal']").val();
    				var des_tempattinggal = $("select[name='destempattinggal']").val();
    				var kodepos_tempattinggal = $("input[name='kodepos']").val();
    				var alamat_tempattinggal = $("textarea[name='alamattempattinggal']").val();
    				var alamatlain_tempattinggal = $("textarea[name='alamatlaintempattinggal']").val();
    				var tinggibadan = $("input[name='tinggibadan']").val();
    				var beratbadan = $("input[name='beratbadan']").val();

    				// Data Sekolah
    				var tahunlulussmta = $("select[name='tahunlulussmta']").val();
    				var jurusansmta = $("select[name='jurusansmta']").val();
    				var jenissmta = $("select[name='jenissmta']").val();
    				var namasmta = $("input[name='namasmta']").val();
    				var nisnsmta = $("input[name='nisnsmta']").val();
    				var provinsismta = $("select[name='provinsismta']").val();
    				var alamatsmta = $("textarea[name='alamatsmta']").val();
    				var nrapor1 = $("input[name='nrapor1']").val();
    				var nrapor2 = $("input[name='nrapor2']").val();
    				var nrapor3 = $("input[name='nrapor3']").val();

    				// Biodata Ortu
    				var nik_ayah = $("input[name='nikayah']").val();
    				var nama_ayah = $("input[name='namaayah']").val();
    				var pendidikanayah = $("select[name='pendidikanayah']").val();
    				var pekerjaanayah = $("select[name='pekerjaanayah']").val();
    				var alamatkantor_ayah = $("textarea[name='alamatkantorayah']").val();
    				var nik_ibu = $("input[name='nikibu']").val();
    				var nama_ibu = $("input[name='namaibu']").val();
    				var pendidikanibu = $("select[name='pendidikanibu']").val();
    				var pekerjaanibu = $("select[name='pekerjaanibu']").val();
    				var penghasilanortu = $("select[name='penghasilanortu']").val();
    				var alamat_ortu = $("textarea[name='alamatortu']").val();
    				var provinsi_ortu = $("select[name='provortu']").val();
    				var kabupaten_ortu = $("select[name='kabupatenortu']").val();
    				var kecamatan_ortu = $("select[name='kecamatanortu']").val();
    				var kodepos_ortu = $("input[name='kodeposortu']").val();
    				var nohp_ortu = $("input[name='nohportu']").val();

    				// Biodata Wali 
    				var nama_wali = $("input[name='namawali']").val();
    				var pekerjaanwali = $("select[name='pekerjaanwali']").val();
    				var penghasilanwali = $("select[name='penghasilanwali']").val();
    				var nohp_wali = $("input[name='nohp_wali']").val();
    				var alamat_wali = $("textarea[name='alamatwali']").val();

    				$.ajax({
    					url: "<?php echo site_url('administrator/edit_pendaftar'); ?>",
    					type: "POST",
    					data: {
    						// Indentitas Pribadi
    						nisn_pendaftar: nisn_pendaftar,
    						namalengkap: namalengkap,
    						jenkel: jenkel,
    						nik: nik,
    						username: username,
    						agama: agama,
    						suku: suku,
    						statusmenikah: statusmenikah,
    						nohp: nohp,
    						email: email,
    						prodipilihan1: prodipilihan1,
    						prodipilihan2: prodipilihan2,
    						prodipilihan3: prodipilihan3,
    						prov_tempatlahir: prov_tempatlahir,
    						kab_tempatlahir: kab_tempatlahir,
    						lokasi_tempatlahir: lokasi_tempatlahir,
    						tgl_lahir: tgl_lahir,
    						negara_tempattinggal: negara_tempattinggal,
    						prov_tempattinggal: prov_tempattinggal,
    						kab_tempattinggal: kab_tempattinggal,
    						kec_tempattinggal: kec_tempattinggal,
    						des_tempattinggal: des_tempattinggal,
    						kodepos_tempattinggal: kodepos_tempattinggal,
    						alamat_tempattinggal: alamat_tempattinggal,
    						alamatlain_tempattinggal: alamatlain_tempattinggal,
    						tinggibadan: tinggibadan,
    						beratbadan: beratbadan,

    						// Identitas Sekolah
    						tahunlulussmta: tahunlulussmta,
    						jurusansmta: jurusansmta,
    						jenissmta: jenissmta,
    						namasmta: namasmta,
    						nisnsmta: nisnsmta,
    						provinsismta: provinsismta,
    						alamatsmta: alamatsmta,
    						nrapor1: nrapor1,
    						nrapor2: nrapor2,
    						nrapor3: nrapor3,

    						// Biodata Ortu
    						nik_ayah: nik_ayah,
    						nama_ayah: nama_ayah,
    						pendidikanayah: pendidikanayah,
    						pekerjaanayah: pekerjaanayah,
    						alamatkantor_ayah: alamatkantor_ayah,
    						nik_ibu: nik_ibu,
    						nama_ibu: nama_ibu,
    						pendidikanibu: pendidikanibu,
    						pekerjaanibu: pekerjaanibu,
    						penghasilanortu: penghasilanortu,
    						alamat_ortu: alamat_ortu,
    						provinsi_ortu: provinsi_ortu,
    						kabupaten_ortu: kabupaten_ortu,
    						kecamatan_ortu: kecamatan_ortu,
    						kodepos_ortu: kodepos_ortu,
    						nohp_ortu: nohp_ortu,

    						// Biodata Wali
    						nama_wali: nama_wali,
    						pekerjaanwali: pekerjaanwali,
    						penghasilanwali: penghasilanwali,
    						nohp_wali: nohp_wali,
    						alamat_wali: alamat_wali,

    					},

    					//cache: false,
    					success: function(dataResult) {
    						var dataResult = JSON.parse(dataResult);
    						if (dataResult.statusCode == 1) {
    							Swal.fire({
    								title: 'Berhasil!',
    								text: "Anda telah memperbarui data",
    								icon: 'success',
    								showCancelButton: false,
    								// confirmButtonText: 'Kembali',
    							});
    							//tablePendaftar.draw(false);
    							$('.tempatfoto').show();
    							$('.unggahfoto').hide();

    							reload_table();
    							$("#fotopas").attr("src", "<?php echo base_url('assets/upload/profile/'); ?>" + dataResult.fotoprofil);

    						} else {
    							alert("Error occured !");
    						}
    					}
    				});
    			});

    			$("#modalEdit").on("click", ".btnUnggahfoto", function() {
    				$('.tempatfoto').hide();
    				$('.unggahfoto').show();
    			});

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

    			$("#tablePendaftar").on("click", ".btnHapus", function() {
					var idt_biodata = $(this).attr('idt_biodata');
					$.ajax({
						type: "POST",
						url: '<?php echo site_url() ?>/datatables/deletependaftar/',
						data: {
							idt_biodata: idt_biodata
						},
						success: function(data) {
							var dataResult = JSON.parse(data);
		                    if (dataResult.statusCode == 1) {
		                        Swal.fire({
		                            title: 'Apakah yakin akan menghapus pendaftar?',
		                            icon: 'warning',
		                            showCancelButton: true,
		                            confirmButtonColor: '#3085d6',
		                            cancelButtonColor: '#d33',
		                            confirmButtonText: 'Ya',
		                            cancelButtonText: 'Tidak',
		                        }).then((result) => {
		                            if (result.isConfirmed) {
			                            Swal.fire({
											title: 'Berhasil!',
											text: "Anda telah menghapus pendaftar!",
											icon: 'success',
											showCancelButton: false,
											confirmButtonText: 'Tutup',
										})                          
		                                reload_table();
		                            };     
		                        })
		                    }    
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
 

    			var edit_fotoprofil = new Dropzone(".editFoto", {
    				autoProcessQueue: true,
    				url: "<?php echo site_url('administrator/editFoto') ?>",
    				maxFilesize: 2,
    				maxFiles: 1,
    				method: "post",
    				acceptedFiles: ".jpeg,.jpg,.png,.gif",
    				paramName: "edit_fotoprofil",
    				dictInvalidFileType: "Type file ini tidak dizinkan",
    				addRemoveLinks: true,
    			});


    			edit_fotoprofil.on("sending", function(file, xhr, formData) {
    				// Will send the filesize along with the file as POST data.
    				// formData.append("filesize", file.size);
    				// formData.append("username", "<?php //echo $row['username']; 
													?>");
    				formData.append("username", $("input[name='username']").val());

    			});

    			var unggah_rapor = new Dropzone(".rapor", {
    				autoProcessQueue: true,
    				url: "<?php echo site_url('administrator/uploadrapor') ?>",
    				maxFilesize: 2,
    				method: "post",
    				acceptedFiles: ".pdf",
    				paramName: "rapor",
    				dictInvalidFileType: "Type file ini tidak dizinkan",
    				addRemoveLinks: true,
    			});

    			//Event ketika Memulai mengupload
    			unggah_rapor.on("sending", function(file, xhr, formData) {
    				formData.append("username", $("input[name='username']").val());

    			});

    		});
    	</script>

    	<script>
    		function addImage(pk) {
    			alert("addImage: " + pk);
    		}

    		$('#modalEdit .save').click(function(e) {
    			e.preventDefault();
    			addImage(5);
    			$('#modalEdit').modal('hide');
    			//$(this).tab('show')
    			return false;
    		})
    	</script>

