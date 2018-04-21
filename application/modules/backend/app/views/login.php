<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Korbrimob Polri">

  <title>Korbrimob Polri | Jiwa Ragaku Demi Kemanusiaan</title>

  <link rel="shortcut icon" href="<?= base_url('assets/img/logo/icon.png') ?>">

  <?php
  
  $multiple_css = array(
    'backend/css/bootstrap.min.css',
    'backend/css/core.css',
    'backend/css/icons.css',
    'backend/css/components.css',
    'backend/css/pages.css',
    'backend/css/menu.css',
    'backend/css/responsive.css',
    'backend/font-awesome/css/font-awesome.css',
    );

  echo load_css($multiple_css);

  ?>

</head>

<body>

  <div class="wrapper-page">
    <div class="panel panel-color panel-primary panel-pages">
      <div class="panel-heading text-center" style="padding: 20px; background: #FFF;">
        <img src="<?= base_url('assets/img/logo/logo.png') ?>" height="100px;">
      </div>

      <form class="form-horizontal" action="<?= base_url(''.getModule().'/login/authenticate') ?>" method="POST" style="border-top: 1px solid #ddd;">

        <div class="panel-body">

          <?php if($this->session->userdata('error_msg')){ ?>

          <div class="form-group">
            <div class="col-xs-12">
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?= $this->session->userdata('error_msg') ?>
              </div>
            </div>
          </div>

          <?php } ?>

          <div class="form-group">
            <div class="col-xs-12">
              <input class="form-control input-lg" name="uname" type="text" required="" value="<?= $this->session->userdata('temp_uname') ?>"  placeholder="Username/Email">
            </div>
          </div>

          <div class="form-group">
            <div class="col-xs-12">
              <input class="form-control input-lg" type="password" name="password" required="" placeholder="Password">
            </div>
          </div>

          <div class="form-group">
            <div class="col-xs-12">
              <div class="checkbox checkbox-primary">
                <input id="checkbox-signup" name="remember_me" type="checkbox">
                <label for="checkbox-signup">Remember me</label>
              </div>
            </div>
          </div>
          <div class="form-group text-center m-t-40">
            <div class="col-xs-12">
              <button class="btn btn-primary btn-block btn-lg w-lg waves-effect waves-light" type="submit">LOGIN</button>
            </div>
          </div>

        </form>

      </div>


    </div>
  </div>


</body>

<?php

$multiple_js = array(
  'backend/js/jquery.min.js',
  'backend/js/bootstrap.min.js',
  );

echo load_js($multiple_js);

?>

</html>