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
<form action="<?= base_url('/notulensi/do_edit_prs/'.$notulensi->id)?>" method='post' enctype="multipart/form-data">

          <tr>
            <td>Waktu</td>
            <td>
              <input type="datetime" name="waktu" value="<?=$notulensi->waktu?>" class="form-control">
            </td>
          </tr>
          <tr>
            <td>Judul</td>
            <td>
              <input type="text" name="judul" value="<?=$notulensi->judul?>" class="form-control">
            </td>
          </tr>
            <tr>
              <td>Tanggal Rapat</td>
              <td>
                <input type="date" name="tgl_rapat" value="<?=$notulensi->tgl_rapat?>" class="form-control">
              </td>
            </tr>
            <tr>
              <td>Tempat</td>
              <td>
                <input type="text" name="tempat" value="<?=$notulensi->tempat?>" class="form-control">
              </td>
            </tr>
            <tr>
              <td>pimpinan</td>
              <td>
                <input type="text" name="pimpinan" value="<?=$notulensi->pimpinan?>" class="form-control">
              </td>
            </tr>
            <tr>
              <td>Jumlah kehadiran</td>
              <td>
                <input type="text" name="jml_kehadiran" value="<?=$notulensi->jml_kehadiran?>" class="form-control">
              </td>
            </tr>
            <tr>
            <td>Isi</td>
            <td>
              <textarea id="editor1" name="isi" rows="10" cols="80">
                <?=$notulensi->isi?>
              </textarea>
            </td>
          </tr>
          <tr>
            <td>Foto</td>
            <td>
              <input type="file" name="foto" value="<?=$notulensi->foto?>" class="form-control">
            </td>
          </tr>
          <button type="submit" class="btn btn-primary">Ubah</button>
</form>
</div>
</div>
</div>
<!-- /.box -->
