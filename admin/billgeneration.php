<?php
session_start();
if(isset($_SESSION['admin']))
{
	error_reporting(1);
	include("config.php");
	if(!isset($_SESSION['name']))
	{
	unset($_SESSION['bno']);
	}
	if(!isset($_SESSION['phone']))
	{
	$sql2 = "SELECT bno from bill";
	$result2 = mysqli_query($con,$sql2);
	$count2=mysqlI_num_rows($result2);
	if($count2>0)
	{
		while($row2= mysqli_fetch_array($result2))
		{
			$bno=$row2[0];
		}
	}
	else
	{
		$bno=0;
	}
	$bno=$bno+1;
	$_SESSION['bno']=$bno;
	}
	
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
			<h5 class="card-title">Bill Generation</h5>
			<form action="#" method="post">
			    <div class="form-group">
					<label for="input-1">Name</label>
					<input type="text"  class="form-control" name="name">
				</div>
				<div>
					<label for="address"><b>Date</b></label>
					<input type="date"  class="form-control" name="date">
				</div>
				<div>
					<label for="phoneno"><b>Phoneno</b></label>
					<input type="text"  class="form-control" name="phone"><BR>
				</div>
				<div>
					<button type="submit" name="save" class="btn btn-warning btn-round px-2">Save</button>
				</div>
			</form>
			<?php
			if(isset($_POST['save']))
			{
				$name=$_POST['name'];
				$phone=$_POST['phone'];
				$date=$_POST['date'];
				$_SESSION['phone']=$phone;
				$_SESSION['date']=$date;
				$_SESSION['name']=$name;
				include("config.php");
				$query = "update bill set name='".$name."',date='".$date."', phone='".$phone."' where bno='".$_SESSION['bno']."'";
				mysqli_query($con,$query) or die(mysqli_error($con));
			}
			if(isset($_SESSION['phone']) && isset($_SESSION['date']))
			{
			?>
				<div>
					<label for="Name"><b>Name:<?php echo $_SESSION['name']; ?> </b></label></br></br>
					
					<label for="contact"><b>Mobile: <?php echo $_SESSION['phone']; ?></b></label></br></br>
					
					<label for="location"><b>Date: <?php echo $_SESSION['date']; ?></b></label></br></br>
					
				</div>
				<?php
			}
			?>
			<form action="#" method="post">
				<div class="form-group">
					<label for="input-1">Water Capacity</label>
					<select id="name" name="capacity" class="form-control" onchange="this.form.submit();" required>
						<option value="">Select Water Capcity</option>
						  <?php
								include 'config.php';
								$sql1 = "select * from capacity";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
								$sl+=1;
								$id=$row1[0];
								$ltr=$row1['ltr'];
								?>
						<option value="<?php echo $id; ?>"><?php echo $ltr; ?> Ltr.</option>
								<?php } } ?>
					</select>
				</div>
			</form>
			<?php
				include 'config.php';
				$capacity=$_POST['capacity'];
				$sql1 = "select * from capacity where id='".$capacity."'";
				$result1 = mysqli_query($con,$sql1);
				$num1=mysqlI_num_rows($result1);
				$sl=0;
				if($num1 > 0)
				{ 
				while($row1 = mysqli_fetch_array($result1))
				{ 
				$sl+=1;
				$id=$row1[0];
				$ltr=$row1['ltr'];
				$amt=$row1['amt'];
				$vno=$row1['vno'];
				?>
			<form action="#" method="post">
				<div>
					<label for="Name"><b>Tanker Capacity(in leter)</b></label>
					<input name="cap" value="<?php echo $ltr; ?>" class="form-control" required><br>
				</div>
				<div>
					<label for="Name"><b>Amount</b></label>
					<input name="amount" value="<?php echo $amt; ?>" class="form-control" required><br>
				</div>
				<div>
					<button type="submit" name="add" class="btn btn-warning btn-round px-2">Done</button></br></br>
				</div>
			</form>
		<?php 
		}
		}
		if(isset($_POST['add']))
		{
		if(isset($_SESSION['phone']))
		{
		error_reporting(1);
		include("config.php");
		$cap=$_POST['cap'];
		$amount=$_POST['amount'];
		$sname=$_SESSION['name'];
		$sphone=$_SESSION['phone'];
		$sdate=$_SESSION['date'];
		$query = "insert into bill(bno,name,phone,date,capacity,price) values('".$_SESSION['bno']."','".$sname."','".$sphone."','".$sdate."','".$cap."','".$amount."')";
		
        mysqli_query($con,$query) or die(mysqli_error($con));
		echo "<script> location.href='billgeneration.php'; </script>"; 
		unset($_SESSION['capacity']);
		}
		else
		{
			echo '<script>alert "please add name, phone and date."</script>';
		}
		}
	?>
		
              <h5 class="card-title">Bill Table</h5>
			  <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr align="center">
                    <th scope="col">S/N</th>
                    <th scope="col">LITRE</th>
                    <th scope="col">Amount</th>
					<th scope="col">update</th>
				  </tr>
                </thead>
                <tbody>
				<?php
	$sql = "SELECT * from bill where bno='".$_SESSION['bno']."'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);
	$sl=0;
	$tot=array();
	if($count>0)
	{
		$no=1;
		while($row = mysqli_fetch_array($result))
		{ 
			$sl+=1;
			$rowid=$row[0];
			$bcapacity=$row[5];
			$bprice=$row[6];
			$discount=$row['discount'];
			?>
                  <tr align="center">
                    <th scope="row"><?php echo $sl; ?></th>
                    <td><?php echo $bcapacity; ?>ltr.</td>
                    <td><?php echo $bprice; ?></td>
					<td>
					<form method="post" action="wdeleterow.php">
					<input type="text" name="bid[]" hidden="true" value="<?php echo $rowid; ?>">
					<button type="submit" name="delete" class="btn btn-danger btn-round px-2">Delete</button>
					</form>
					</td>
                  </tr>
	<?php
		$no=$no+1;
		$tot[]=$bprice;
		}
		$totalamt=array_sum($tot);
		$totalamt=$totalamt-($totalamt*$discount)/100;
		}
		else
		{
			$totalamt=0;
		}
			?>
                 <form action="#" method="post" >
				  <tr align="center">
                    <th scope="row">Discount in %</th>
					<td><input type="number" max="100" min="0" value="<?php echo $discount; ?>" name="disc" class="form-control"></td>
					<td><button name="discount" type="submit" class="btn btn-warning btn-round px-2">Discount</button></td>
					<td></td>
                  </tr>
				  </form>
		<?php
			if(isset($_POST['discount']))
			{
				error_reporting(1);
				include("config.php");
				$disc=$_POST['disc'];
				$query = "update bill set discount ='".$disc."' where bno='".$_SESSION['bno']."'";
				mysqli_query($con,$query) or die(mysqli_error($con));
				echo "<script> location.href='billgeneration.php'; </script>"; 
			}
			?>
				  <tr align="center">
                    <th scope="row">Total Amount</th>
					<td><?php echo $totalamt; ?></td>
					<td>
					<form action="#" method="post">
					<button name="confirm" type="submit" class="btn btn-success btn-round px-2">Confirm</button>
					</form>
					</td>
					<td></td>
                  </tr>
				  <?php 
				  if($totalamt!=0)
				  {
					  ?>
		
                </tbody>
              </table>
			  <?php
				if(isset($_POST['confirm']))
				{
				error_reporting(1);
				include("config.php");
				$status="Confirm";
				$query = "update bill set status ='".$status."' where bno='".$_SESSION['bno']."'";
				mysqli_query($con,$query) or die(mysqli_error($con));
				unset($_SESSION['phone']);
				unset($_SESSION['date']);
				unset($_SESSION['name']);
				echo "<script> location.href='invoice.php'; </script>"; 
			}
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
	echo "<script> location.href='login.php'; </script>"; 
}