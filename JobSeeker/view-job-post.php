<?php

//To Handle Session Variables on This Page
session_start();


//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");
?>
<?php include 'includes/inc-src-meta.php';?></head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

 <?php include 'includes/inc-src-slider.php';?>
 <?php include 'includes/inc-src-nav.php';?>


  <div class="content-wrapper" style="margin-left: 0px;">

  <?php
   
    $sql = "SELECT * FROM job_post INNER JOIN company ON job_post.id_company=company.id_company WHERE id_jobpost='$_GET[id]'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) 
    {
      while($row = $result->fetch_assoc()) 
      {
  ?>

    <section id="candidates" class="content-header">
      <div class="container">
        <div class="row">          
          
          
          <div class="col-md-3">
            <div class="thumbnail">
              <img src="uploads/logo/<?php echo $row['logo']; ?>" alt="companylogo" class="w3-card-4">
              <div class="caption text-center">
                <h3><?php echo $row['companyname']; ?></h3>
                <p><a class="btn w3-pink btn-flat w3-input" onclick="vmore()"> + View More</a>
                <hr>
                <div class="row">
                  <div class="col-md-4"><a href="callto:7909025861"><i class="fa fa-telephone"></i> Call</a></div>
                  <div class="col-md-4"><a href="mailto:snehi@yahoo.com"><i class="fa fa-warning"></i> Report</a></div>
                  <div class="col-md-4"><a href="mailto:snehi@yahoo.com"><i class="fa fa-envelope"></i> Email</a></div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-9 bg-white padding-2">
            <div class="pull-left">
              <h2><b><i><?php echo $row['jobtitle']; ?></i></b></h2>
            </div>
            <div class="pull-right">
              <a href="jobs.php" class="btn btn-default btn-lg btn-flat margin-top-20"><i class="fa fa-arrow-circle-left"></i> Home</a>
            </div>
            <div class="clearfix"></div>
            <hr>
            <div>
              <p><span class="margin-right-10"><i class="fa fa-location-arrow text-green"></i>City:<pre> <?php echo $row['city']; ?></pre></span> </p>
             <p> <i class="fa fa-calendar text-green"></i>Date: <pre><?php echo date("d-M-Y", strtotime($row['createdat'])); ?></pre></p>              
            </div>
            <div>
             Discription: <pre> <?php echo stripcslashes($row['description']); ?></pre>
            </div>
            
            
            <div id="vmore">
            <div>
             Minimum Salary: <pre> <?php echo stripcslashes($row['minimumsalary']); ?></pre>
            </div>
            <div>
             Maximum Salary: <pre> <?php echo stripcslashes($row['maximumsalary']); ?></pre>
            </div>
            <div>
             Experience: <pre> <?php echo stripcslashes($row['experience']); ?></pre>
            </div>
            </div>
            
            <?php 
            if(isset($_SESSION["id_user"]) && empty($_SESSION['companyLogged'])) { ?>
            <div>
              <a href="apply.php?id=<?php echo $row['id_jobpost']; ?>" class="btn w3-pink w3-input w3-padding w3-large btn-flat margin-top-50">Apply This Job</a>
            </div>
            <?php } ?>
            
            
          </div>
   
        </div>
      </div>
    </section>

    <?php 
      }
    }
    ?>

    

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
<script src="js/adminlte.min.js"></script>

<script type="text/javascript">

document.getElementById('vmore').style.display="none";
function vmore(){
	document.getElementById('vmore').style.display="block";
}
</script>

</body>
</html>
