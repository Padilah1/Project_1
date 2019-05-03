<div class="content-wrapper">
  <div class="login-logo">
    <b>Edit</b>Data Admin</a>
  </div>
  <!-- /.login-logo -->
  <div class="col-md-4"></div>
  <div class="col-md-4 with-border">
    <div class="box-body ">
      <form action="<?= base_url('pengurus/do_edit/'.$pengurus->id)?>" method='post' enctype="multipart/form-data">
        <table>
          <tr>
            <td>Nama</td>
            <td>
              <input type="text" name="username" value="<?=$pengurus->username?>" class="form-control">
            </td>
          </tr>
          <tr>
            <td>Foto</td>
            <td>
              <input type="file" name="photo" value="<?=$pengurus->photo?>" class="form-control">
            </td>
          </tr>
          <tr>
            <td>Password</td>
            <td>
              <input type="password" name="password" value="<?=$pengurus->password?>" class="form-control">
            </td>
          </tr>
        </table>
      <button type="submit" class="btn btn-success">Simpan</button>
      </form>
      </div>
    </div>
  <div class="col-md-4"></div>
  </div>
