<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url(); ?>admin"><b><?php echo lang('translation.Admin') ?></b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"><?php if(!empty($message)){ echo $message; } ?></p>

    <form action="<?php echo base_url(); ?>admin/signinAction" method="post">
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="<?php echo lang('translation.Email') ?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="<?php echo lang('translation.Password') ?>">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> <?php echo lang('translation.Remember Me') ?>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat"><?php echo lang('translation.Sign In') ?></button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    
    <!-- /.social-auth-links -->

    
  </div>
  <!-- /.login-box-body -->
</div>