<div class="content-wrapper">
  <div class="login-logo">
    <a href="<?= base_url()?>/assets/index2.html"><b>Edit</b>Data Siswa</a>
  </div>
  <!-- /.login-logo -->
  <div class="col-md-4"></div>
  <div class="col-md-4 with-border">
    <div class="box-body ">
        <form action="<?= base_url('/alumni/do_edit/'.$alumni->id)?>" method='post' enctype="multipart/form-data">
        <table>
        <tr>
          <td>Nama</td>
          <td>
            <input type="text" name="nama" value="<?=$alumni->nama?>" class="form-control">
          </td>
        </tr>
        <tr>
          <td>Tanggal</td>
          <td>
            <input type="date" name="tgl" value="<?=$alumni->tgl?>" class="form-control">
          </td>
        </tr>
         <tr>
          <td>Foto</td>
          <td>
            <input type="file" name="photo" value="<?=$alumni->photo?>" class="form-control">
          </td>
        </tr>
        <tr>
          <td>Agama</td>
          <td>
            <input type="text" name="agama" value="<?=$alumni->agama?>" class="form-control">
          </td>
        </tr>
        <tr>
          <td>Jurusan</td>
          <td>
            <input type="text" name="jurusan" value="<?=$alumni->jurusan?>" class="form-control">
          </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>
            <textarea name="alamat" cols="20" rows="3" class="form-control"><?=$alumni->alamat?></textarea>
          </td>
        </tr>
        <tr>
          <td>Status</td>
          <td>
            <select class="form-control" name="status">
              <?php
                foreach ($status->result() as $index => $row) {
              ?>
                  <option value="<?= $row->status ?>">
                    <?= $row->status ?>
                  </option>
              <?php
                }
              ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>Jabatan</td>
          <td>
            <input type="text" name="jabatan" value="<?=$alumni->jabatan?>" class="form-control">
          </td>
        </tr>
        <tr>
          <td>No HP</td>
          <td>
            <input type="text" name="no_hp" value="<?=$alumni->no_hp?>" class="form-control">
          </td>
        </tr>
        <tr>
          <td>Email</td>
          <td>
            <input type="text" name="email" value="<?=$alumni->email?>" class="form-control">
          </td>
          <tr>
            <td>Password</td>
            <td>
              <input type="password" name="password" value="<?=$alumni->password?>" class="form-control">
            </td>
          </tr>
        </tr>
      </table>
      <button type="submit" class="btn btn-primary">Ubah</button>
        </form>
      </div>
    </div>
    <div class="col-md-4"></div>
  </div>
      </table>
    <div class="col-md-4"></div>
  </div>
