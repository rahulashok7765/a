
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Ashok Water Supply</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
  
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.php">
     
       <h5 class="logo-text">Ashok Water Supply</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="home.php">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
	   <li>
        <a href="addcapacity.php">
          <i class="zmdi zmdi-invert-colors"></i> <span>Add capacity</span>
        </a>
      </li>
	  <li>
        <a href="extbook.php">
          <i class="zmdi zmdi-view-dashboard"></i> <span>External Booking</span>
        </a>
      </li>
	<li>
        <a href="viewbooking.php">
          <i class="zmdi zmdi-invert-colors"></i> <span>View Booking</span>
        </a>
      </li>
      <li>
        <a href="addworker.php">
          <i class="zmdi zmdi-invert-colors"></i> <span>Add Workers</span>
        </a>
      </li>
	   <li>
        <a href="viewworker.php">
          <i class="zmdi zmdi-invert-colors"></i> <span>View Workers</span>
        </a>
      </li>
	   <li>
        <a href="addsalary.php">
          <i class="zmdi zmdi-invert-colors"></i> <span>Add Salary</span>
        </a>
      </li>
	   
	   <li>
        <a href="viewleave.php">
          <i class="zmdi zmdi-invert-colors"></i> <span>View leave</span>
        </a>
      </li>
	   <li>
        <a href="viewattendance.php">
          <i class="zmdi zmdi-invert-colors"></i><span>View Attendence</span>
        </a>
      </li>
	  
	   <li>
        <a href="viewassign.php">
          <i class="zmdi zmdi-invert-colors"></i> <span>View assign work</span>
        </a>
      </li>
	   <li>
        <a href="workcompletion.php">
          <i class="zmdi zmdi-invert-colors"></i> <span>Work completion</span>
        </a>
      </li>
	   <li>
        <a href="billgeneration.php">
          <i class="zmdi zmdi-invert-colors"></i> <span>Bill generation</span>
        </a>
      </li>
	   <li>
        <a href="viewbill.php">
          <i class="zmdi zmdi-invert-colors"></i> <span>View Bill</span>
        </a>
      </li>
	  
	   <li>
        <a href="viewpayment.php">
          <i class="zmdi zmdi-invert-colors"></i> <span>View payment</span>
        </a>
      </li>
	   
	  
	  <li>
        <a href="logout.php">
          <i class="zmdi zmdi-invert-colors"></i> <span>Logout</span>
        </a>
      </li>
      
    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
  </ul>
     
    <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Ashok  Water Supply</h6>
            <p class="user-subtitle">ashokwatersupply@gmail.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        
        <li class="dropdown-divider"></li>
        
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
<?php
if(isset($_GET['ass']))
{
	$assign=$_GET['ass'];
					include 'config.php';
					$sql1 = "select * from book where id='".$assign."'";
					$result1 = mysqli_query($con,$sql1);
					$num1=mysqlI_num_rows($result1);
					$sl=0;
					if($num1 > 0)
					{ 
					while($row1 = mysqli_fetch_array($result1))
					{ 
					$sl+=1;
					$id=$row1[0];
					$name=$row1['name'];
					$email=$row1['email'];
					$contact=$row1['contact'];
					$citydep=$row1['citydep'];
					$date=$row1['date'];
					$dedate=$row1['dedate'];
					$capacityid=$row1['capacityid'];
						$sql = "select * from capacity where id='".$capacityid."'";
						$result = mysqli_query($con,$sql);
						$num=mysqlI_num_rows($result);
						if($num1 > 0)
						{ 
						while($row1 = mysqli_fetch_array($result))
						{ 
						$id1=$row1[0];
						$ltr=$row1['ltr'];
						$amt=$row1['amt'];
						$vno=$row1['vno'];
}}}}}
					?>
    <div class="row mt-3">
      <div class="col-lg-12">
         <div class="card" style="align-items:normal";>
           <div class="card-body">
           <div class="card-title">Today's Work</div>
           <hr>
            <form method="post" action="#">
			<div class="form-group">
            <label for="input-3">User Contact</label>
            <input type="text" name="contact" class="form-control" value="<?php echo $contact; ?>" placeholder="Enter User Contact" readonly="true">
           </div>
           <div class="form-group">
            <label for="input-2">Assign Date</label>
            <input type="date" name="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" placeholder="Enter Date" readonly="true">
           </div>
		   <div class="form-group">
            <label for="input-2">Departure Date</label>
            <input type="date" name="dedate" class="form-control" value="<?php echo $dedate; ?>" placeholder="Enter Date" readonly="true">
           </div>
           <div class="form-group">
            <label for="input-3">User Location</label>
            <input type="text" name="work"  class="form-control" value="<?php echo $citydep; ?>" placeholder="Enter Work" readonly="true">
           </div>
           <div class="form-group">
            <label for="input-1">Worker Name</label>
			<select name="wname" class="form-control">
				<?php
							include 'config.php';
							$sql1 = "select * from worker";
							$result1 = mysqli_query($con,$sql1);
							$num1=mysqlI_num_rows($result1);
							$sl=0;
							if($num1 > 0)
							{ 
							while($row1 = mysqli_fetch_array($result1))
							{ 
							$sl+=1;
							$id=$row1[0];
							$name=$row1['workername'];
							$email=$row1['email'];
							?>
					
					  <option value="<?php echo $email; ?>"><?php echo $name; ?>(<?php echo $email; ?>)</option>
							<?php
							}
							}
							?>
			</select>
           </div>
		   
           <div class="form-group" style="padding-left:470px";>
            <button type="submit" name="submit" class="btn btn-light px-5" style="font-size:14px";></i> Submit</button>
          </div>
          </form>
		  <?php
if(isset($_POST['submit']))
{
	error_reporting(1);
	include("config.php");
	
	$wname=$_POST['wname'];
	$date=$_POST['date'];

	$query = "INSERT INTO assign (wname,bookid,date)VALUES('".$wname."','".$assign."','".$date."')";
	   
	if(mysqli_query($con,$query))
	{
	
	$query1 = "update book set status='assign' where id='".$assign."'";
	   
	mysqli_query($con,$query1) or die(mysqli_error($con));
	}
	
	echo "<script>
			alert('Assigned  Successfully');
		</script>";
	echo "<script> location.href='viewassign.php'; </script>";
}
?>
         </div>
         </div>
      </div>
    </div><!--End Row-->

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        
      </div>
    </footer>
	<!--End footer-->
	
	<!--start color switcher-->
  
  <!--end color switcher-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
	
</body>
</html>
