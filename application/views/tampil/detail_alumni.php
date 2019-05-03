<div class="col-md-4">
  <!-- Widget: user widget style 1 -->
  <div class="box box-widget widget-user-2">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="widget-user-header bg-yellow">
    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
      <div class="widget-user-image">
        <img class="img-circle" src="<?= base_url('foto/').$detail->photo?>" alt="User Avatar">
      </div>
      <!-- /.widget-user-image -->
      <h3 class="widget-user-username"><?= $detail->nama?></h3>
      <h5 class="widget-user-desc"><?= $detail->username?></h5>
    </div>
    <div class="box-footer ">
      <ul class="nav nav-stacked">
      <li>Nomor ID <span class="pull-right"><?= $detail->id?></span></li>
	  <li>Tanggal Lahir <span class="pull-right"><?= $detail->tgl?></span></li>
	  <li>Agama <span class="pull-right"><?= $detail->agama?></span></li>
	  <li>Jurusan <span class="pull-right"><?= $detail->jurusan?></span></li>
	  <li>Alamat <span class="pull-right"><?= $detail->alamat?></span></li>
	  <li>Status Pekerjaan <span class="pull-right"><?= $detail->status?></span></li>
	  <li>Tempat Bekerja <span class="pull-right"><?= $detail->tempat_bekerja?></span></li>
	  <li>Jabatan <span class="pull-right"><?= $detail->jabatan?></span></li>
	  <li>No Handphone <span class="pull-right"><?= $detail->no_hp?></span></li>
	  <li>Email <span class="pull-right"><?= $detail->email?></span></li>
      </ul>
    </div>
  </div>
  <!-- /.widget-user -->
</div>
<!-- /.col -->