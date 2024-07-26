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
          <div class="card" >
            <div class="card-body">
              <h5 class="card-title">User Booking Table</h5>
			  <div class="table-responsive">
              <table class="table table-bordered">
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
					<th scope="col">Action</th>
					<th scope="col">Assign</th>
				  </tr>
                </thead>
                <tbody>
				<?php
					include 'config.php';
					$sql1 = "select * from book";
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
					<td>
					<?php if($status=="") { ?>
					<form action="#" method="post" >
					<input type="text" name="did[]" hidden="true" value="<?php echo $id; ?>">
					<button type="submit" name="dlt" class="btn btn-danger btn-round px-2">Delete</button>
					</form>
					<?php } ?>
					</td>
					<td>
					<?php if($status=="") { ?>
					<a href="assignworker.php?ass=<?php echo $id; ?>" class="btn btn-warning btn-round px-2">Assign</a>
					<?php } else if($status=='assign') { ?>
					Assigned
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
			
						  <?php
if(isset($_POST['dlt']))
{
	foreach ($_POST['did'] as $key => $value) 
	{	
		$selectano=$value;	
	}
	$query1 = "delete from book where id='".$selectano."'";
	mysqli_query($con,$query1) or die(mysqli_error($con));
	echo "<script> location.href='viewbooking.php'; </script>";
}
?>
			
			
            </div>
			
			<div class="card-body">
              <h5 class="card-title">External Booking Table</h5>
			  <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
					<th scope="col">City</th>
					<th scope="col">Booking Date</th>
					<th scope="col">Departure Date</th>
					<th scope="col">Liter</th>
					<th scope="col">Amount</th>
					<th scope="col">Action</th>
					<th scope="col">Assign</th>
				  </tr>
                </thead>
                <tbody>
				<?php
					include 'config.php';
					$sql1 = "select * from location";
					$result1 = mysqli_query($con,$sql1);
					$num1=mysqlI_num_rows($result1);
					$sl=0;
					if($num1 > 0)
					{ 
					while($row1 = mysqli_fetch_array($result1))
					{ 
					$sl+=1;
					$id2=$row1[0];
					$name=$row1['username'];
					$email=$row1['email'];
					$contact=$row1['contact'];
					$city=$row1['city'];
					$date=$row1['date'];
					$dedate=$row1['dedate'];
					$ltr=$row1['litre'];
					$amt=$row1['amount'];
					$address=$row1['address'];
					$status=$row1['status'];
						
					?>
					  
					<tr>
					<td><?php echo $sl; ?></td>
					<td><?php echo $name; ?></td>
					<td><?php echo $email; ?></td>
					<td><?php echo $contact; ?></td>
					<td><?php echo $city; ?></td>
					<td><?php echo $date; ?></td>
					<td><?php echo $dedate; ?></td>
					<td><?php echo $ltr; ?></td>
					<td><?php echo $amt; ?></td>
					<td>
					<?php if($status=="") { ?>
					<form action="#" method="post" >
					<input type="text" name="id[]" hidden="true" value="<?php echo $id2; ?>">
					<button type="submit" name="dlt1" class="btn btn-danger btn-round px-2">Delete</button>
					</form>
					<?php } ?>
					</td>
					<td>
					<?php if($status=="") { ?>
					<a href="assignworker1.php?ass=<?php echo $id2; ?>" class="btn btn-warning btn-round px-2">Assign</a>
					<?php } else if($status=='assign') { ?>
					Assigned
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
										  <?php
if(isset($_POST['dlt1']))
{
	foreach ($_POST['id'] as $key => $value) 
	{	
		$selectano=$value;	
	}
	$query1 = "delete from location where id='".$selectano."'";
	mysqli_query($con,$query1) or die(mysqli_error($con));
	echo "<script> location.href='viewbooking.php'; </script>";
}
?>
            </div>
          </div>
        </div>
      </div>
     </div>
    
    <!-- End container-fluid-->
 
   </div><!--End content-wrapper-->
  

   </div>
   
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	

	<!--start color switcher-->
  
  <!--end color switcher-->
  

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
