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
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">
 
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

  <!--Start Dashboard Content-->

	<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
		<?php
								include 'config.php';
								$sql = "select * from book";
								$result = mysqli_query($con,$sql);
								$num=mysqlI_num_rows($result);
								?>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?php echo $num; ?></h5>
                    <div class="progress my-3" style="height:3px;">
                    </div>
                  <p class="mb-0 text-white small-font">Total Orders</p>
                </div>
            </div>
			<?php
								include 'config.php';
								$sql1 = "select * from worker";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								?>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?php echo $num1;?></h5>
                    <div class="progress my-3" style="height:3px;">
                    </div>
                  <p class="mb-0 text-white small-font">Total Employees</p>
                </div>
            </div>
			
			<?php
				include 'config.php';
				$sql2 = "select * from capacity";
				$result2 = mysqli_query($con,$sql2);
				$num2=mysqlI_num_rows($result2);
				?>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?php echo $num2; ?></h5>
                    <div class="progress my-3" style="height:3px;">
                    </div>
                  <p class="mb-0 text-white small-font">Total Tankers</p>
                </div>
            </div>
			<?php
				include 'config.php';
				$sql3 = "select * from register";
				$result3 = mysqli_query($con,$sql3);
				$num3=mysqlI_num_rows($result3);
				?>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?php echo $num3; ?></h5>
                    <div class="progress my-3" style="height:3px;">
                    </div>
                  <p class="mb-0 text-white small-font">Total User</p>
                </div>
            </div>
			
        </div>
    </div>
 </div>  
	  
	<div class="row">
     <div class="col-12 col-lg-12 col-xl-12">
		<img src="bg.jpg" class="img-circle" alt="user avatar" style="width:100%;height:450px;">
	 </div>
	</div><!--End Row-->
	
	<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header">Recent Booking Tables
		  <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div>
		 </div>
	       <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                    <th scope="col">S/N</th>
                    <th scope="col"> Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
					<th scope="col">City</th>
					<th scope="col">Booking Date</th>
					<th scope="col">Departure Date</th>
					<th scope="col">Liter</th>
					<th scope="col">Amount</th>
                   </tr>
                   </thead>
                   <tbody>
				   
				   <?php
					include 'config.php';
					$sql1 = "select * from book order by id desc";
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
					$status=$row1['status'];
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
						}}
						if($sl<5)
						{
					?>
					  
					<tr>
					<td><?php echo $sl; ?></td>
					<td><?php echo $name; ?></td>
					<td><?php echo $email; ?></td>
					<td><?php echo $contact; ?></td>
					<td><?php echo $citydep; ?></td>
					<td><?php echo $date; ?></td>
					<td><?php echo $dedate; ?></td>
					<td><?php echo $ltr; ?></td>
					<td><?php echo $amt; ?></td>
					</tr>
					<?php } } }?>
                 </tbody></table>
               </div>
	   </div>
	 </div>
	</div><!--End Row-->

      <!--End Dashboard Content-->
	  
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
	
  
	</div><!--wrapper-->
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
 
  <!-- Index js -->
  <script src="assets/js/index.js"></script>

  
</body>
</html>

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  
	  
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
	
  
	</div><!--wrapper-->
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
 
  <!-- Index js -->
  <script src="assets/js/index.js"></script>

  
</body>
</html>
