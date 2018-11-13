<div class="content-wrapper" style="margin-left: 0px;" id="bodies" class="w3-overlay w3-animate-opacity" style="cursor:pointer" id="myOverlay">



<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-animate-left w3-card-4" style="display:none;z-index:5" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>

         
<!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="img/photo1.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Designer, UI</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> London, UK</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1988</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Some text..</p>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
          <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
             <img src="img/photo1.png" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="img/photo1.png" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="img/photo1.png" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="img/photo1.png" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="img/photo1.png" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="img/photo1.png" style="width:100%" class="w3-margin-bottom">
           </div>
         </div>
          </div>
        </div>      
      </div>
      <br>
      
      <!-- Interests --> 
      <div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Interests</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">News</span>
            <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
            <span class="w3-tag w3-small w3-theme-d3">Labels</span>
            <span class="w3-tag w3-small w3-theme-d2">Games</span>
            <span class="w3-tag w3-small w3-theme-d1">Friends</span>
            <span class="w3-tag w3-small w3-theme">Games</span>
            <span class="w3-tag w3-small w3-theme-l1">Friends</span>
            <span class="w3-tag w3-small w3-theme-l2">Food</span>
            <span class="w3-tag w3-small w3-theme-l3">Design</span>
            <span class="w3-tag w3-small w3-theme-l4">Art</span>
            <span class="w3-tag w3-small w3-theme-l5">Photos</span>
          </p>
        </div>
      </div>
      <br>
      
 
</div>







    <section class="content-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12 latest-job margin-top-50 margin-bottom-20">
          <h1 class="text-center">Jobs</h1>  
            <div class="input-group input-group-lg">
                <input type="text" id="searchBar" class="form-control" placeholder="Search job">
                <span class="input-group-btn">
                  <button id="searchBtn" type="button" class="btn w3-pink btn-flat">Search!</button>
                </span>
            </div>
          </div>
        </div>
      </div>
    </section>





















    <section id="candidates" class="content-header">
      <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
           <div class="box box-solid w3-card-4">
              <div class="box-header with-border">
                <h3 class="box-title">Filter</h3>
              </div>
              <div class="box-body no-padding">
                <ul class="nav nav-pills nav-stacked tree" data-widget="tree">
                  <li class="treeview menu-open">
                    <a href="#"><i class="fa fa-filter" style="color: #FF1493;"></i> City <span class="pull-right"><i class="fa fa-angle-down pull-right"></i></span></a>
                    <ul class="treeview-menu">
                     <li>
                      <?php
 
$cities = "select * from company";

$resultcities = $conn->query($cities);
if ($resultcities->num_rows > 0) {
    
    while($row = $resultcities->fetch_assoc()) {
?>

                      <li><a href="#<?php echo $row['city']?>"  class="citySearch" data-target="<?php echo $row['city']?>"> <?php echo $row['city'];?></a></li>


</ul>
                  </li>
                  <li class="treeview menu-open">
                    <a href="#"><i class="fa fa-filter" style="color: #FF1493;"></i> Experience <span class="pull-right"><i class="fa fa-angle-down pull-right"></i></span></a>
                    <ul class="treeview-menu">
                      <li><a href="" class="experienceSearch" data-target='1'><i class="fa fa-circle-o text-yellow"></i> 0- 1 Years</a></li>
                      <li><a href="" class="experienceSearch" data-target='2'><i class="fa fa-circle-o text-yellow"></i> 1- 2 Years</a></li>
                      <li><a href="" class="experienceSearch" data-target='3'><i class="fa fa-circle-o text-yellow"></i> 2- 3 Years</a></li>
                      <li><a href="" class="experienceSearch" data-target='4'><i class="fa fa-circle-o text-yellow"></i> 3- 4 Years</a></li>
                      <li><a href="" class="experienceSearch" data-target='5'><i class="fa fa-circle-o text-yellow"></i> 4- 5 Years</a></li>
                    </ul>
                  </li>
                  
                  <li class="treeview menu-open">
                    <a href="#"><i class="fa fa-filter" style="color: #FF1493;"></i> State <span class="pull-right"><i class="fa fa-angle-down pull-right"></i></span></a>
                    <ul class="treeview-menu">
                     <li><a href="#<?php echo $row['state']?>"  class="StateSearch" data-target="<?php echo $row['state']?>"> <?php echo $row['state']?></a></li>
                    </ul>
                  </li>
                  
                  
  <?php }
} else {
    echo "Not result";
}
 
?>                
               </ul>
              </div>
            </div>
        </div>
          
          <div class="col-md-9">

          <?php

          $limit = 4;

          $sql = "SELECT COUNT(id_jobpost) AS id FROM job_post";
          $result = $conn->query($sql);
          if($result->num_rows > 0)
          {
            $row = $result->fetch_assoc();
            $total_records = $row['id'];
            $total_pages = ceil($total_records / $limit);
          } else {
            $total_pages = 1;
          }

          ?>

          
            <div id="target-content">
              
            </div>
            <div class="text-center">
              <ul class="pagination text-center" id="pagination"></ul>
            </div> 



          </div>
        </div>
      </div>
    </section>
    
    
    
    
    
    
    
    
    
    
    <hr/>
    
    
    
    
    
    
    
    