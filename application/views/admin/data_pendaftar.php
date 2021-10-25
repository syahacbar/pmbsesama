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
									<th>Approvement</th>
									<th width="10">No.</th>
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

		<div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left bd-example-modal-lg">
            <div role="document" class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header row d-flex justify-content-between mx-1 mx-sm-3 mb-0 pb-0 border-0">
                        <div class="tabs" id="tab01">
                            <h6 class="text-muted">My Apps</h6>
                        </div>
                        <div class="tabs active" id="tab02">
                            <h6 class="font-weight-bold">Knowledge Center</h6>
                        </div>
                        <div class="tabs" id="tab03">
                            <h6 class="text-muted">Communities</h6>
                        </div>
                        <div class="tabs" id="tab04">
                            <h6 class="text-muted">Education</h6>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="modal-body p-0">
                        <fieldset id="tab011">
                            <div class="bg-light">
                                <h5 class="text-center mb-4 mt-0 pt-4">My Apps</h5>
                                <h6 class="px-3">Most Used Apps</h6>
                                <ol class="pb-4">
                                    <li>Watsapp</li>
                                    <li>Instagram</li>
                                    <li>Chrome</li>
                                    <li>Linkedin</li>
                                </ol>
                            </div>
                            <div class="px-3">
                                <h6 class="pt-3 pb-3 mb-4 border-bottom"><span class="fa fa-android"></span> Suggested Apps</h6>
                                <h6 class="text-primary pb-2"><a href="#">Opera Browser</a> <span class="text-secondary">- One of the best browsers</span></h6>
                                <h6 class="text-primary pb-2"><a href="#">Camscanner</a> <span class="text-secondary">- Easily scan your documents</span></h6>
                                <h6 class="text-primary pb-4"><a href="#">Coursera</a> <span class="text-secondary">- Learn online, lecturers from top universities</span></h6>
                            </div>
                        </fieldset>
                        <fieldset class="show" id="tab021">
                            <div class="bg-light">
                                <h5 class="text-center mb-4 mt-0 pt-4">Knowledge Center</h5>
                                <form>
                                    <div class="form-group pb-5 px-3"> <select name="account" class="form-control">
                                            <option selected disabled>Select Product</option>
                                            <option>Product 1</option>
                                            <option>Product 2</option>
                                            <option>Product 3</option>
                                            <option>Product 4</option>
                                        </select> </div>
                                </form>
                            </div>
                            <div class="px-3">
                                <h6 class="pt-3 pb-3 mb-4 border-bottom"><span class="fa fa-star"></span> Popular Topics</h6>
                                <h6 class="text-primary pb-2"><a href="#">Getting started with Blazemeter</a></h6>
                                <h6 class="text-primary pb-2"><a href="#">Creating tests</a></h6>
                                <h6 class="text-primary pb-4"><a href="#">Running tests</a></h6>
                            </div>
                        </fieldset>
                        <fieldset id="tab031">
                            <div class="bg-light">
                                <h5 class="text-center mb-4 mt-0 pt-4">Communities</h5>
                                <form>
                                    <div class="form-group pb-5 px-3 row justify-content-center"> <button type="button" class="btn btn-primary">New Community +</button> </div>
                                </form>
                            </div>
                            <div class="px-3">
                                <div class="border border-1 box">
                                    <h5>Community 1</h5>
                                    <p class="text-muted mb-1">Members : <strong>27</strong></p>
                                </div>
                                <div class="border border-1 box">
                                    <h5>Community 2</h5>
                                    <p class="text-muted mb-1">Members : <strong>16</strong></p>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset id="tab041">
                            <div class="bg-light">
                                <h5 class="text-center mb-4 mt-0 pt-4">Education</h5>
                                <form>
                                    <div class="form-group pb-2 px-3"> <input type="text" placeholder="Enter College Name" class="form-control"> </div>
                                    <div class="form-group row pb-2 px-3">
                                        <div class="col-6"> <input type="text" placeholder="Percentage" class="form-control"> </div>
                                        <div class="col-6"> <input type="text" placeholder="Grade" class="form-control"> </div>
                                    </div>
                                    <div class="form-group px-3 pb-2"> <label class="form-control-label">
                                            <h6>What are you good at ?</h6>
                                        </label>
                                        <div class="custom-control custom-checkbox"> <input class="custom-control-input" id="option1" type="checkbox" value=""> <label class="custom-control-label" for="option1">Web Development</label> </div>
                                        <div class="custom-control custom-checkbox"> <input class="custom-control-input" id="option2" type="checkbox" value=""> <label class="custom-control-label" for="option2">Data Structures & Algorithms</label> </div>
                                        <div class="custom-control custom-checkbox"> <input class="custom-control-input" id="option3" type="checkbox" value=""> <label class="custom-control-label" for="option3">Android Development</label> </div>
                                        <div class="custom-control custom-checkbox"> <input class="custom-control-input" id="option4" type="checkbox" value=""> <label class="custom-control-label" for="option4">Blockchain</label> </div>
                                        <div class="custom-control custom-checkbox"> <input class="custom-control-input" id="option5" type="checkbox" value=""> <label class="custom-control-label" for="option5">Machine Learning Algorithms</label> </div>
                                    </div>
                                    <div class="form-group pb-5 row justify-content-center"> <button type="button" class="btn btn-primary px-3">Submit</button> </div>
                                </form>
                            </div>
                            <div class="px-3">
                                <h6 class="pt-3 pb-3 mb-4 border-bottom"><span class="fa fa-rocket"></span> Trending Technologies</h6>
                                <h6 class="text-primary pb-2"><a href="#">Augmented Reality and Virtual Reality</a></h6>
                                <h6 class="text-primary pb-2"><a href="#">Angular and React</a></h6>
                                <h6 class="text-primary pb-2"><a href="#">Big Data and Hadoop</a></h6>
                                <h6 class="text-primary pb-4"><a href="#">Internet of Things (IoT)</a></h6>
                            </div>
                        </fieldset>
                    </div>
                    <div class="line"></div>
                    <div class="modal-footer d-flex flex-column justify-content-center border-0">
                        <p class="text-muted">Can't find what you're looking for?</p> <button type="button" class="btn btn-primary">Contact Support Team</button>
                    </div>
                </div>
            </div>
        </div>

<!-- /.container-fluid -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

		$(".tabs").click(function(){

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
				}  ],
				// "scrollY":        "300px",
		  //       "scrollX":        true,
		        //"scrollCollapse": true,
		        //"paging":         false,
				"fixedColumns":{
		            "left": 1,
		            "right": 1
		        },
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