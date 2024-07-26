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
     
      <div class="row mt-3">
        <div class="col-lg-12">
          <div class="card" style="align-items:normal";>
            <div class="card-body">
			<h5 class="card-title">Bill</h5>
			  <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                   <tr align="center">
                    <th scope="col">S/N</th>
                    <th scope="col">Bill No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Date</th>
					<th scope="col">Action</th>
					<th scope="col">PayStatus</th>
				  </tr>
                </thead>
                <tbody>
				
				<?php
					include("config.php");
					$status='confirm';
					$sql = "SELECT bno, name, phone, date, paystatus from bill where status='".$status."' and paystatus='paid' group by bno";
					$result = mysqli_query($con,$sql);
					$count=mysqli_num_rows($result);
					$sl=0;
					if($count>0)
					{
						while($row = mysqli_fetch_array($result)){ 
						$sl+=1;
						$bno=$row[0];
						$name=$row[1];
						$phone=$row[2];
						$date=$row[3];
						$paystatus=$row[4];
						?>
                  <tr align="center">
                    <th scope="row"><?php echo $sl; ?></th>
                    <th>BNO<?php echo $bno; ?></th>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $phone; ?></td>
                    <td><?php echo $date; ?></td>
					<td>
					<form action="#" method="post" >
					<input type="text" name="bid[]" hidden="true" value="<?php echo $bno; ?>">
					<button type="submit" name="details" class="btn btn-warning btn-round px-2">View</button>
					</form>
					</td>
					<td>
					<?php if($paystatus=='') { ?>
					<b style="color:red;">Payment Pending</b>
					<?php } else if($paystatus=='paid') { ?>
					<b style="color:white;">Payment Done</b>
					<?php } ?>
					</td>
					
                  </tr>
					<?php }  } ?>
                 
                   <?php
					if(isset($_POST['details']))
					{
					foreach ($_POST['bid'] as $key => $value) 
					{
					$bid=$value;
					$_SESSION['bno']=$bid;
					}
					echo "<script> location.href='invoice.php'; </script>"; 
					}
					?>
                </tbody>
              </table>
            </div>
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
