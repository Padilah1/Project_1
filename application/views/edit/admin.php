<div class="content-wrapper">
  <div class="login-logo">
    <b>Edit</b>Data Admin</a>
  </div>
  <!-- /.login-logo -->
  <div class="col-md-4"></div>
  <div class="col-md-4 with-border">
    <div class="box-body ">
      <form action="<?= base_url('admin/do_edit/'.$admin->id)?>" method='post' enctype="multipart/form-data">
        <table>
          <tr>
            <td>Nama</td>
            <td>
              <input type="text" name="username" value="<?=$admin->username?>" class="form-control">
            </td>
          </tr>
          <tr>
            <td>Foto</td>
            <td>
              <input type="file" name="photo" value="<?=$admin->photo?>" class="form-control">
            </td>
          </tr>
          <tr>
            <td>Password</td>
            <td>
              <input type="password" name="password" value="<?=$admin->password?>" class="form-control">
            </td>
          </tr>
        </table>
      <button type="submit" class="btn btn-success">Simpan</button>
      </form>
      </div>
    </div>
  <div class="col-md-4"></div>
  </div>
