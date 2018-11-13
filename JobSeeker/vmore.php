ppppjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjssssssssssssssssssssssssssssssn<?php
require_once("db.php");
?>
 <?php
  
    $sql = "SELECT * FROM job_post INNER JOIN company ON job_post.id_company=company.id_company WHERE id_jobpost='$_GET[id]'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) 
    {
      while($row = $result->fetch_assoc()) 
      {
  ?>
  
  
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
           
          
    <?php 
      }
    }
    ?>
            