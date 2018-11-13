<?php

session_start();

if(isset($_SESSION['id_admin'])) {
  header("Location: dashboard.php");
  exit();
}

?>
<!DOCTYPE html>
<html>
<?php include 'includes/inc-src-meta.php';?><body class="hold-transition login-page">
<?php include 'includes/inc-src-nav.php';?>
<div class="login-box container">
  
  
      <pre>Username:>> admin</pre>
      <pre>Password:>> admin</pre>
  <!-- /.login-logo -->
  <div class="login-box-body container">
    <p class="login-box-msg">Admin Login</p>

    <form action="checklogin.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn w3-pink btn-block btn-flat w3-input" name="submit">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
      <?php 
//If User Failed To log in then show error message.
if(isset($_SESSION['loginError'])) {
  ?>
  <div>
    <p class="text-center">Invalid Email/Password! Try Again!</p>
  </div>
<?php
 unset($_SESSION['loginError']); }
?>

    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../js/adminlte.min.js"></script>
<!-- iCheck -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>

</body>
</html>
