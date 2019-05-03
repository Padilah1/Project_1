<div class="content-wrapper">

<!-- <div class="pull-right box-tools">
  <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
          title="Collapse">
    <i class="fa fa-minus"></i></button>
  <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
          title="Remove">
    <i class="fa fa-times"></i></button>
</div> -->
<!-- /. tools -->
<!-- /.box-header -->
<div class="box-body pad">
<form action="<?= base_url('/info/do_edit/'.$info->id)?>" method='post' enctype="multipart/form-data">

          <tr>
            <td>Waktu</td>
            <td>
              <input type="datetime" name="waktu" value="<?=$info->waktu?>" class="form-control">
            </td>
          </tr>
          <tr>
            <td>Judul</td>
            <td>
              <input type="text" name="judul" value="<?=$info->judul?>" class="form-control">
            </td>
          </tr>
          <tr>
            <td>Isi</td>
            <td>
              <textarea id="editor1" name="isi_info" rows="10" cols="80">
                <?=$info->isi_info?>
              </textarea>
            </td>
          </tr>
          <button type="submit" class="btn btn-primary">Ubah</button>
</form>
</div>
</div>
</div>
<!-- /.box -->
