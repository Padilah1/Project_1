<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Akun Pengurus
      </h1>
    </section>
    <section class="content">
      <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src= "<?= base_url('/foto/').$user_pengurus['photo']?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?= $user_pengurus['username']; ?></h3>

              <p class="text-muted text-center">Software Engineer</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right">12234</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">123</a>
                </li>
                <li class="list-group-item">
                  <b>Password</b> <a class="pull-right"><?= $user_pengurus['password']; ?></a>
                </li>
              </ul>

              <a href="<?= base_url('/pengurus/edit/'.$user_pengurus['id'])?>/pengurus/edit" class="btn btn-primary btn-block"><b>Ubah</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </section>
</div>