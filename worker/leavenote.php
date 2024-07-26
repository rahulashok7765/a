<?php
session_start();
if(isset($_SESSION['worker']))
{
	$worker=$_SESSION['worker'];
	?>
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
      <li class="sidebar-header"></li>
      <li>
        <a href="home.php">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      <li>
        <a href="addattendance.php">
          <i class="zmdi zmdi-invert-colors"></i> <span>Add Attendence</span>
        </a>
      </li>
	   <li>
        <a href="viewassigned.php">
          <i class="zmdi zmdi-invert-colors"></i> <span>View Assigned work</span>
        </a>
      </li>
	   <li>
        <a href="viewsalary.php">
          <i class="zmdi zmdi-invert-colors"></i> <span>View Salary</span>
        </a>
      </li>
	   <li>
        <a href="leavenote.php">
          <i class="zmdi zmdi-invert-colors"></i> <span>Leave Note </span>
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

    <div class="row mt-5" style="padding-left:300px">
     

      <div class="col-lg-8">
        <div class="card" style="align-items:normal";>
           <div class="card-body">
           <div class="card-title">Leave Note</div>
           <hr>
           <form method="post" action="#">
			<div>
			
					<label for="dateofbirth"><b>Date</b></label>
					<input type="date" min="<?php echo date('Y-m-d'); ?>" class="form-control form-control-rounded" name="date"><br/>
				</div>
           <div class="form-group">
					<label for="input-1">Subject</label>
					<input type="text" class="form-control form-control-rounded" name="subject"><br/>

				</div>
			
           <div class="form-group">
            <label for="input-">Message</label>
            <textarea col="3" rows="5" name="message" class="form-control form-control-rounded" id="input-8" placeholder="Enter your Message"></textarea>
           </div><br/>
           <div class="form-group"  style="padding-left:230px";>
            <button type="submit" name="send" class="form-control">send</button></button>
          </div>
          </form>
		  <?php
if(isset($_POST['send']))
{
	error_reporting(1);
	include("config.php");
		$date=$_POST['date'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];

		$query = "INSERT INTO leavenote(wid,date,subject,message)VALUES('".$worker."','".$date."','".$subject."','".$message."')";          
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		echo "<script> 
				alert('Leave note added Sucessfully');
			</script>";
			echo "<script> location.href='leavenote.php'; </script>";

}
?>
         </div>
		 
		 
         </div>
      </div>
    </div><!--End Row-->
	
<div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr align="center">
                    <th scope="col">id</th>
                    <th scope="col">Date</th>
                    <th scope="col">Subject</th>
                    <th scope="col" >View More</th>
					<th colspan="2" >Action</th>

                  </tr>
                </thead>
                <tbody>
				<?php
					include 'config.php';
					$sql1 = "select * from leavenote where wid='".$worker."'";
					$result1 = mysqli_query($con,$sql1);
					$num1=mysqlI_num_rows($result1);
					$sl=0;
					if($num1 > 0)
					{ 
					while($row1 = mysqli_fetch_array($result1))
					{ 
					$sl+=1;
					$id=$row1[0];
					$wid=$row1[1];
					$date=$row1['date'];
					$subject=$row1['subject'];
					$message=$row1['message'];
					$status=$row1['status'];
				?>
				
                  <tr align="center">
                    <td scope="row"><?php echo $sl; ?></td>
					<td><?php echo $date; ?></td>
                    <td><?php echo $subject; ?></td>
                    <td><a href="leave.php?lid=<?php echo $id;?> " class="btn btn-warning btn-round px-2">View More</a></td>
					<td>
					<?php if($status=='') { ?>
					<b style="color:red;">Not Confirmed</b>
					<?php } else if($status!='') {?>
                    <?php echo $status; ?>
					<?php } ?>
					</td>
                  </tr>
				  <?php
								}
								}
				  ?>
				  
                
                </tbody>
              </table>
            </div>
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
        <div class="text-center">
          Ashok Water Supply
        </div>
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
<?php
}
else
{
	echo "<script> location.href='index.php'; </script>";
}
?>