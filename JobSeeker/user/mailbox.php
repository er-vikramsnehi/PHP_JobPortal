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
                  <li class="active"><a href="mailbox.php"><i class="fa fa-envelope"></i> Mailbox</a></li>
                  <li><a href="settings.php"><i class="fa fa-gear"></i> Settings</a></li>
                  <li><a href="../logout.php"><i class="fa fa-arrow-circle-o-right"></i> Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-9 bg-white padding-2">
          <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title" style="margin-bottom: 20px;">Mailbox</h3>
              <div class="pull-right">
                <a href="create-mail.php" class="btn btn-warning btn-flat"><i class="fa fa-envelope"></i> Create</a>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="table-responsive mailbox-messages">
                <table id="example1" class="table table-hover table-striped">
                  <thead>
                    <tr>
                      <th>Subject</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    $sql = "SELECT * FROM mailbox WHERE id_fromuser='$_SESSION[id_user]' OR id_touser='$_SESSION[id_user]'";
                    $result = $conn->query($sql);
                    if($result->num_rows >  0 ){
                        while($row = $result->fetch_assoc()) {
                  ?>
                  <tr>
                    <td class="mailbox-subject"><a href="read-mail.php?id_mail=<?php echo $row['id_mailbox']; ?>"><?php echo $row['subject']; ?></a></td>
                    <td class="mailbox-date"><?php echo date("d-M-Y h:i a", strtotime($row['createdAt'])); ?></td>
                  </tr>
                  <?php
                      }
                    }
                  ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Subject</th>
                      <th>Date</th>
                    </tr>
                  </tfoot>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

          </div>
        </div>
      </div>
    </section>

    

  </div>
  <!-- /.content-wrapper -->

 

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable();
  })
</script>

</body>
</html>
