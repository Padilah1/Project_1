<div class="content-wrapper">
  <section class="content-header">
    <div class="box box-primary">
      <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="<?= base_url('/foto/').$user['photo']?>" alt="User profile picture">
        <h3 class="profile-username text-center"><?= $user['username']; ?></h3>
        <p class="text-muted text-center"><?= $user['email']; ?></p>
        <hr>

        <div class="row">
          <div class="col-md-4">
            <ul class="list-group list-group-unbordered">
              <p class="text-center">Data Pribadi</p>
            <br>
            <li class="list-group-item">
              <b>Nama Lengkap</b> <a class="pull-right"><?= $user['nama']; ?></a>
            </li>
            <li class="list-group-item">
             <b>Tanggal Lahir</b> <a class="pull-right"><?= $user['tgl']; ?></a>
            </li>
            <li class="list-group-item">
              <b>Agama</b> <a class="pull-right"><?= $user['agama']; ?></a>
            </li>
            <li class="list-group-item">
              <b>Jurusan</b> <a class="pull-right"><?= $user['jurusan']; ?></a>
            </li>
            <li class="list-group-item">
              <b>Alamat</b> <a class="pull-right"><?= $user['alamat']; ?></a>
            </li>
            </ul>
          </div>

          <div class="col-md-4">
            <ul class="list-group list-group-unbordered">
              <p class="text-center">Data Pekerjaan</p>
              <br>
              <li class="list-group-item">
                <b>Status</b> <a class="pull-right"><?= $user['status']; ?></a>
              </li>
              <li class="list-group-item">
               <b>Tempat Bekerja</b> <a class="pull-right"><?= $user['tempat_bekerja']; ?></a>
              </li>
              <li class="list-group-item">
                <b>Jabatan</b> <a class="pull-right"><?= $user['jabatan']; ?></a>
              </li>
            </ul>
          </div>

          <div class="col-md-4">
            <ul class="list-group list-group-unbordered">
              <p class="text-center">Akun</p>
            <br>
            <li class="list-group-item">
              <b>Username</b> <a class="pull-right"><?= $user['username']; ?></a>
            </li>
            <li class="list-group-item">
             <b>Nomor Telpon</b> <a class="pull-right"><?= $user['no_hp']; ?></a>
            </li>
            <li class="list-group-item">
              <b>Password</b> <a class="pull-right"><?= $user['password']; ?></a>
            </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <a href="<?= base_url('/alumni/edit/'.$user['id'])?>/alumni/edit?>" class="btn btn-primary btn-block"><b>Ubah</b></a>
          </div>
          <div class="col-md-3"></div>
        </div>
        
      </div>
    </div>    
  </section>
</div>
