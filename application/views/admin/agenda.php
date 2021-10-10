<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Agenda Penerimaan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="tableSlider" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="10">No.</th>
                                    <th>Judul Agenda</th>
                                    <th>Isi Agenda</th>
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
        <div class="col-lg-6">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah/Edit Agenda Penerimaan</h6>
                </div>
                <div class="card-body">
                    <?php echo $this->session->flashdata('notif'); ?>
                    <form id="formagama" action="<?php echo site_url($linkform);?>" method="post">
                        <div class="form-group">
                            <label>Judul</label>
                            <input id="txtAgenda" type="text" class="form-control" name="txtAgenda" placeholder="Judul Agenda" required>
                            <input type="hidden" id="idagenda" name="idagenda">
                        </div>
                        <div class="form-group">
                            <label>Isi Agenda</label>
                            <textarea class="form-control" placeholder="Isi Agenda" required></textarea>
                            <input type="hidden" id="idagenda" name="idagenda">
                        </div>
                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
            </div>
        </div>
    </div>
</div>