<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sistem Informasi
        <small>alumni</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">

        <div class="col-md-9">
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <span class="username">Judul Berita</span>
                <span class="description"> 12 April 2019</span>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            </div>
            <!-- /.box-body -->
          </div>
        </div>

        <div class="col-md-3">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Login</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
              <div class="box box-widget">
                <div class="box-header with-border">
                  <form action="<?php echo base_url()?>users/cek" method="post">
                    <?php echo $this->session->flashdata('msg');?>
                    <div class="form-group has-feedback">
                      <input type="text" name="username" id="username"class="form-control" placeholder="Username">
                      <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                      <input type="password"  name="password" id="password" class="form-control" placeholder="Password">
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                       <?php echo form_error('password','<span class="help-block">','</span>'); ?>
                    </div>
                    <div class="row">
                      <div class="col-xs-5">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                      </div>
                    </div>
                  </form> 
                </div>
              </div>
            </div>
          </div>
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Pengumuman</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
              <div class="box box-widget">
                <div class="box-header with-border">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>



