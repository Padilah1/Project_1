
<div class="box with-border">
  <div class="col-md-12">
  <div class="register-logo">
    <b>Registrasi </b>Alumni</a>
  </div>
  </div>

  <div class="col-md-6">
  <div class="register-box-body">
    <p class="login-box-msg">Masukan Data Diri Anda</p>
    <div class="col-md-12">
      <?= $this->session->flashdata('failed')?>
    </div>
    <?= form_open_multipart('users/register'); ?>
    <div class="form-group has-feedback">
      <input type="text" name="nama"class="form-control" placeholder="Nama Lengkap">
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="date" name="tgl"class="form-control" placeholder="Tanggal Lahir">
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="text" name="agama" class="form-control" placeholder="Agama">
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="text" name="jurusan" class="form-control" placeholder="Jurusan">
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>
      <span class="glyphicon  glyphicon-user form-control-feedback"></span>
    </div>
    <hr>
    <p class="login-box-msg">Data Pekerjaan</p>
    <select class="form-control has-feedback" name="status" placeholder="Status">
      <?php foreach ($status->result() as $index => $row) { ?>
          <option value="<?= $row->status ?>">
            <?= $row->status ?>
          </option>
      <?php } ?>
      <span class="glyphicon  glyphicon-user form-control-feedback"></span>
    </select>
    <br>
    <div class="form-group has-feedback">
      <input type="text" name="tempat_bekerja" class="form-control" placeholder="Nama Perusahaan/Instansi/lain-lain">
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="text" name="jabatan" class="form-control" placeholder="Jabatan">
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
    <p class="login-box-msg">*)Kosongkan yang tidak perlu</p>
  </div>
  </div>
  <!-- /.form-box -->
  <div class="col-md-6">
  <div class="register-box-body">
    <p class="login-box-msg">Account</p>
    <div class="form-group has-feedback">
      <input type="text" name="username"class="form-control" placeholder="Username">
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="file" name="photo"class="form-control">
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="text" name="no_hp" class="form-control" placeholder="Nomor Telpon">
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback"> 
      <input type="email" name="email" class="form-control" placeholder="Email">
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="password" name="password" class="form-control" placeholder="Password">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="password" name="retype_password" class="form-control" placeholder="Retype password">
      <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
    </div>
    <div class="row">
      
    </div>
  
  </div>
  <div class="box box-body">
    <div class="col-md-12 text-center">
        <button type="submit" name="regisSubmit"class="btn btn-primary btn-flat">Simpan</button>
      </div>
  </div>
  <?= form_close();?>
  </div>
</div>
<!-- /.register-box -->
