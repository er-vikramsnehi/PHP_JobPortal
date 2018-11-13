
  <nav class="navbar navbar-default w3-white w3-card-4" data-spy="affix" data-offset-top="197">
  <ul class="nav navbar-nav">
    <li class="active" onclick="w3_open()"><a href="#">&#9776;</a></li>
    <li class="w3-hover-gray"><a href="../">Home</a></li>
    <li class="w3-hover-gray"><a href="../jobs.php">Jobs</a></li>
  </ul>
  <ul class="w3-right nav navbar-nav w3-dropdown-hover">
  <li style="float: right;"><a href="#"> 
 
  <div class="w3-dropdown-hover w3-padding">  <img src="../uploads/logo/<?php if(isset($_SESSION['logo'])) {echo $_SESSION['logo'];}?>" alt="Company" style="width:25px;height:25px;" class="w3-card-4 w3-circle"><?php if(isset($_SESSION['name'])) {?>
  <?php echo $_SESSION['name'];?> <?php echo $_SESSION['lastname'];?>
    <div class="w3-dropdown-content w3-card-4" style="width:250px;right:0px;">
      <img src="../uploads/logo/<?php if(isset($_SESSION['logo'])) {echo $_SESSION['logo'];}?>" alt="Company" style="width:100%">
      <div class="w3-container">
        <div class="w3-input "><a href="edit-company.php"><?php echo $_SESSION['firstname'];?> <?php echo $_SESSION['lastname'];?></a></div>  
       <div class="w3-input w3-hover-red"><a href="../logout.php">Logout</a></div>
      </div>
    </div>
  </div>
  
 <?php } else{?><i class="fa fa-users"></i><i onclick="login()"><?php echo "Login";}?></i>

</a></li>
  </ul>
  
</nav>