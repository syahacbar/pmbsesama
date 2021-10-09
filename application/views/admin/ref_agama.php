<!-- Begin Page Content -->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6">
			<!-- DataTales Example -->
			<div class="card shadow mb-4">

				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Referensi Data Agama</h6>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th width="10">No.</th>
									<th>Agama</th>
									<th width="150">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($agama AS $r) : ?>
									<tr>
										<td><?php echo $no++;?></td>
										<td><?php echo $r['agama'];?></td>
										<td>
											<a href="#" class="btn btn-info btn-icon-split btn-sm editform" data-agama="<?php echo $r['agama'] ?>" data-idagama="<?php echo $r['idagama'] ?>">
												<span class="icon text-white-50">
													<i class="fas fa-edit"></i>
												</span>
												<span class="text">Edit</span>
											</a>
											<a href="#" class="btn btn-danger btn-icon-split btn-sm deletedata" data-idagama="<?php echo $r['idagama'] ?>">
												<span class="icon text-white-50">
													<i class="fas fa-trash"></i>
												</span>
												<span class="text">Hapus</span>
											</a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<!-- DataTales Example -->
			<div class="card shadow mb-4">

				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Tambah/Edit Data Agama</h6>
				</div>
				<div class="card-body">
					<?php echo $this->session->flashdata('notif'); ?>
					<form id="formagama" action="<?php echo site_url($linkform);?>" method="post">
						<div class="form-group">
							<label>Agama</label>
							<input id="txtAgama" type="text" class="form-control" name="agama" placeholder="Agama" required>
							<input type="hidden" id="idagama" name="idagama">
						</div>
						<button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
						<button type="submit" class="btn btn-primary">Save</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		var table = $('#dataTable').DataTable();
        $("#dataTable").on("click", ".editform", function(){
			event.preventDefault();
			$("input#txtAgama").val($(this).data('agama')); 
			$("input#idagama").val($(this).data('idagama')); 
			$('#formagama').attr('action', '<?php echo site_url('administrator/ref_agama/edit');?>');
		});

		$(document).on('click', '.deletedata', function(){  
			var idagama = $(this).data("idagama");  
			if(confirm("Are you sure you want to delete this?"))  
			{  
				$.ajax({  
					url:"<?php echo site_url(); ?>administrator/ref_agama/delete",  
					method:"POST",  
					data:{idagama:idagama},  
					success:function(data)  
					{  
						alert("Data Berhasil Dihapus");  
						location.reload();
					}  
				});  
			}  
			else  
			{  
				return false;       
			}  
		});   
	});

</script>