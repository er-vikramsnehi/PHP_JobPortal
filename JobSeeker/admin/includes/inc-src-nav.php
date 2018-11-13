
  <nav class="navbar navbar-default w3-white w3-card-4" data-spy="affix" data-offset-top="197">
  <ul class="nav navbar-nav">
    <li class="active" onclick="w3_open()"><a href="#">&#9776;</a></li>
    <li class="w3-hover-gray"><a href="../">Home</a></li>
    <li class="w3-hover-gray"><a href="../jobs.php">Jobs</a></li>
  </ul>
  <ul class="w3-right nav navbar-nav w3-dropdown-hover">
  <li style="float: right;"><a href="#"> 
 
  <div class="w3-dropdown-hover w3-padding"><?php if(isset($_SESSION['admin'])) {?>
  <img src="admin.png" alt="Company" style="width:105px;height:25px;" class="w3-card-4 w3-circle"><?php echo $_SESSION['admin'];?>
    <div class="w3-dropdown-content w3-card-4" style="width:250px;right:0px;">
      <img src="admin.png" alt="Company" style="width:100%">
      <div class="w3-container">
        <div class="w3-input "><a href=""><?php echo $_SESSION['admin'];?> </a></div>  
       <div class="w3-input w3-hover-red"><a href="../logout.php">Logout</a></div>
      </div>
    </div>
  </div>
  
 <?php } else{?><i class="fa fa-users"></i><i onclick="login()"><?php echo "Login";}?></i>

</a></li>
  </ul>
  
</nav>