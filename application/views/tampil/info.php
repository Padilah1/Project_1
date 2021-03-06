<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Informasi
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <?php foreach($info->result() as $index => $row){ ?>
                <h3 class="text-center text-upper">
                  <b><?= $row->judul ?></b>
                </h3>
                <span>Post on : <?= $row->waktu ?></span>
              </div>
            </div>
            <div class="box-body">
              <p>
                <?= $row->isi_info ?>
                <?php } ?>
              </p>
              <a href="<?= base_url('/info/edit/'.$row->id)?>/info/edit"><button>edit</button></a>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
    </section>
</div>
