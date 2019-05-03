<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-box-body">
      <div class="login-logo">
        <b>Login Alumni</b>
      </div>
      <?php
          if(!empty($success_msg)){
              echo '<p class="statusMsg">'.$success_msg.'</p>';
          }elseif(!empty($error_msg)){
              echo '<p class="statusMsg">'.$error_msg.'</p>';
          }
        ?>
      <form action="<?php echo base_url()?>users/login_alumni" method="post" role="login">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="username" placeholder="Username" required="" class="form-control input-lg">
          <?php echo form_error('username','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Password" required="">
          <?php echo form_error('password','<span class="help-block">','</span>'); ?>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" name="loginSubmit" value="login" class="btn btn-lg btn-success btn-block">Login</button>
        </div>
        <div class="row">
          <br>
          <div class="col-md-12 text-center">
            Apakah anda alumni? <a href="<?= base_url()?>users/registration">Registrasi sekarang</a>
          </div>
        </div>
      </form>
    </div>
</div>
