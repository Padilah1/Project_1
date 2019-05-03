<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Notulensi Rapat
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <?php foreach($notulensi->result() as $index => $row){ ?>
                <h3 class="text-center text-upper">
                  <b><?= $row->judul ?></b>
                </h3>
                <span>Post on : <?= $row->waktu ?></span>
              </div>
            </div>
            <div class="box-body">
              <div class="col-md-6">
                 <img src="<?= base_url('/foto/').$row->foto?>" width="80px">
              </div>
              <div class="col-md-6">
                  <div class="col-md-4">Pimpinan</div>
                  <div class="col-md-8"> : <?= $row->pimpinan ?></div>
                  <div class="col-md-4">Waktu</div>
                  <div class="col-md-8"> : <?= $row->tgl_rapat ?></div>
                  <div class="col-md-4">Tempat</div>
                  <div class="col-md-8"> : <?= $row->tempat ?></div>
                  <div class="col-md-4">Jumlah Peserta</div>
                  <div class="col-md-8"> : <?= $row->jml_kehadiran ?></div>
                  <hr>
              </div>
              <br>
              <div class="col-md-12">
              <p>
                <?= $row->isi ?>
                <?php } ?>
              </p>
              <a href="<?= base_url('/notulensi/edit_prs/'.$row->id)?>"><button>edit</button></a>
            </div>
            </div>

            <!-- /.box-body -->
          </div>
        </div>
      </div>
    </section>
</div>
