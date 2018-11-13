<?php

//To Handle Session Variables on This Page
session_start();

//If user Not logged in then redirect them back to homepage. 
if(empty($_SESSION['id_user'])) {
  header("Location: ../index.php");
  exit();
}

require_once("../db.php");
?>
<!DOCTYPE html>
<html>
<head>
  <?php include 'includes/inc-src-meta.php';?></head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

<?php include 'includes/inc-src-slider.php';?>
<?php include 'includes/inc-src-nav.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0px;">

    <section id="candidates" class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="box box-solid">
            
              <div class="box-body no-padding">
                 <ul class="nav nav-pills nav-stacked">
                  <li><a href="edit-profile.php"><i class="fa fa-user"></i> Edit Profile</a></li>
                  <li><a href="index.php"><i class="fa fa-address-card-o"></i> My Applications</a></li>
                  <li><a href="../jobs.php"><i class="fa fa-list-ul"></i> Jobs</a></li>
                  <li><a href="mailbox.php"><i class="fa fa-envelope"></i> Mailbox</a></li>
                  <li class="active"><a href="settings.php"><i class="fa fa-gear"></i> Settings</a></li>
                  <li><a href="../logout.php"><i class="fa fa-arrow-circle-o-right"></i> Logout</a></li>
                </ul>e-o-right"></i> Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-9 bg-white padding-2">
            <h2><i>Change Password</i></h2>
            <p>Type in new password that you want to use</p>
            <div class="row">
              <div class="col-md-6">
                <form id="changePassword" action="change-password.php" method="post">
                  <div class="form-group">
                    <input id="password" class="form-control input-lg" type="password" name="password" autocomplete="off" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                    <input id="cpassword" class="form-control input-lg" type="password" autocomplete="off" placeholder="Confirm Password" required>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-flat btn-success">Change Password</button>
                  </div>
                  <div id="passwordError" class="color-red text-center hide-me">
                    Password Mismatch!!
                  </div>
                </form>
              </div>
              <div class="col-md-6">
                <form action="deactivate-account.php" method="post">
                  <label><input type="checkbox" required> I Want To Deactivate My Account</label>
                  <button type="submit" class="btn btn-danger btn-flat btn-lg">Deactivate My Account</button>
                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>

    

  </div>
  <!-- /.content-wrapper -->

 

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../js/adminlte.min.js"></script>
<script>
  $("#changePassword").on("submit", function(e) {
    e.preventDefault();
    if( $('#password').val() != $('#cpassword').val() ) {
      $('#passwordError').show();
    } else {
      $(this).unbind('submit').submit();
    }
  });
</script>
</body>
</html>
