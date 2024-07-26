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
     
      <div class="row mt-3">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">View Assigned (User Booking)</h5>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Serial No</th>
                      <th scope="col">Assigned Date</th>
                      <th scope="col">User Details</th>
                      <th scope="col">City</th>
                      <th scope="col">Departure Date</th>
                      <th scope="col">Liter</th>
                      <th scope="col">Amount</th>
                      <th scope="col">Vehicle Number</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
				  <?php
								include 'config.php';
								$sql1 = "select * from assign where wname='".$worker."'";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
									$sl+=1;
									$id=$row1[0];
									$wname=$row1['wname'];
									$date=$row1['date'];
									$bookid=$row1['bookid'];
									$status=$row1['status'];
		                         			$sql = "select * from book where id='".$bookid."'";
											$result = mysqli_query($con,$sql);
											$num=mysqlI_num_rows($result);
											if($num > 0)
											{ 
											while($row = mysqli_fetch_array($result))
											{ 
											$aid=$row[0];
											$name=$row['name'];
											$email=$row['email'];
											$contact=$row['contact'];
											$citydep=$row['citydep'];
											$dedate=$row['dedate'];
											$cid=$row['capacityid'];
												$sql2 = "select * from capacity where id='".$cid."'";
												$result2 = mysqli_query($con,$sql2);
												$num2=mysqlI_num_rows($result2);
												if($num2 > 0)
												{ 
												while($row2 = mysqli_fetch_array($result2))
												{ 
												$caid=$row2[0];
												$ltr=$row2[1];
												$amt=$row2[2];
												$vno=$row2[3];
												}
												}
											}
											}
								
								?>
                    <tr>
                      <td><?php echo $sl; ?></td>
                      <td><?php echo $date; ?></td>
                      <td><?php echo $name; ?><br><?php echo $email; ?><br><?php echo $contact; ?></td>
                      <td><?php echo $citydep; ?></td>
                      <td><?php echo $dedate; ?></td>
                      <td><?php echo $ltr; ?></td>
                      <td><?php echo $amt; ?></td>
                      <td><?php echo $vno; ?></td>
                      
					<td>
					<?php if($status=='') { ?>
						  <form  method="post"  action="" >
						  <input type="text" name="id[]" value="<?php echo $id; ?>" hidden="true">
						 <button type="submit" name="delete" class="btn btn-warning btn-sm">Complete</button>
						</form>
						<?php } else if($status!='') {?>
						<b style="color:yellow;"><?php echo $status; ?></b>
						<?php } ?>
						</td>
                          </tr>
						  <?php
						  
								}
								}
								?>
                     
                  </tbody>
                </table>
				 <?php
if(isset($_POST['delete']))
{
	foreach ($_POST['id'] as $key => $value) 
	{	
		$selectano=$value;	
	}
	$query1 = "update assign set status='Completed' where id='".$selectano."'";
	mysqli_query($con,$query1) or die(mysqli_error($con));
	
	echo "<script> alert('Completed');</script>";
	echo "<script> location.href='viewassigned.php'; </script>";
}
?>
              </div>
            </div>
          </div>
        </div>
		
		
		
		 <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">View Assigned (External Booking)</h5>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Serial No</th>
                      <th scope="col">Assigned Date</th>
                      <th scope="col">User Details</th>
                      <th scope="col">City</th>
                      <th scope="col">Departure Date</th>
                      <th scope="col">Liter</th>
                      <th scope="col">Amount</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
				  <?php
								include 'config.php';
								$sql1 = "select * from assign1 where wname='".$worker."'";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
									$sl+=1;
									$id=$row1[0];
									$wname=$row1['wname'];
									$date=$row1['date'];
									$bookid=$row1['bookid'];
									$status=$row1['status'];
		                         			$sql = "select * from location where id='".$bookid."'";
											$result = mysqli_query($con,$sql);
											$num=mysqlI_num_rows($result);
											if($num > 0)
											{ 
											while($row = mysqli_fetch_array($result))
											{ 
											$aid=$row[0];
											$name=$row['username'];
											$email=$row['email'];
											$contact=$row['contact'];
											$city=$row['city'];
											$dedate=$row['dedate'];
											$ltr=$row['litre'];
											$amt=$row['amount'];
											$address=$row['address'];
												
											}
											}
								
								?>
                    <tr>
                      <td><?php echo $sl; ?></td>
                      <td><?php echo $date; ?></td>
                      <td><?php echo $name; ?><br><?php echo $email; ?><br><?php echo $contact; ?></td>
                      <td><?php echo $city; ?></td>
                      <td><?php echo $dedate; ?></td>
                      <td><?php echo $ltr; ?></td>
                      <td><?php echo $amt; ?></td>
                      
					<td>
					<?php if($status=='') { ?>
						  <form  method="post"  action="" >
						  <input type="text" name="id[]" value="<?php echo $id; ?>" hidden="true">
						 <button type="submit" name="delete" class="btn btn-warning btn-sm">Complete</button>
						</form>
						<?php } else if($status!='') {?>
						<b style="color:yellow;"><?php echo $status; ?></b>
						<?php } ?>
						</td>
                          </tr>
						  <?php
						  
								}
								}
								?>
                     
                  </tbody>
                </table>
				 <?php
if(isset($_POST['delete']))
{
	foreach ($_POST['id'] as $key => $value) 
	{	
		$selectano=$value;	
	}
	$query1 = "update assign1 set status='Completed' where id='".$selectano."'";
	mysqli_query($con,$query1) or die(mysqli_error($con));
	
	echo "<script> alert('Completed');</script>";
	echo "<script> location.href='viewassigned.php'; </script>";
}
?>
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
        <div class="text-center">
          Ashok Water Supply
        </div>
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
<?php
}
else
{
	echo "<script> location.href='index.php'; </script>";
}
?>
