<?php
session_start();
if(isset($_SESSION['user']))
{
	$user1=$_SESSION['user'];
	?>
	<?php
		include 'config.php';
		$sql1 = "select * from register where email='".$_SESSION['user']."'";
		$result1 = mysqli_query($con,$sql1);
		$num1=mysqlI_num_rows($result1);
		$sl=0;
		if($num1 > 0)
		{ 
		while($row1 = mysqli_fetch_array($result1))
		{ 
		$sl+=1;
		$id=$row1[0];
		$username=$row1['username'];
		$email=$row1['email'];
		$phone=$row1['phone'];
		}
		}
		?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Ahok Water Supply </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
#more {display: none;}
</style>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #ff5f13;
  color: white;
}
</style>
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>

   <body>
    <!--? Preloader Start -->
	<div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets\img\logo\logo.png">
                </div>
            </div>
        </div>
    </div>
    
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                   <div class="container">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>     
                                        <li>Phone:9880724749</li>
										<li>Phone:7019094642</li>
                                        <li>Email: ashokwatersupply@gmail.com</li>
                                    </ul>
                                </div>
                                
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav> 
                                            <ul id="navigation">                           
                                                <li><a href="home.php">Home</a></li>
                                                <li><a href="about.php">About</a></li>
                                                <li><a href="services.php">Services</a></li>
												<li><a href="contact.php">Contact</a></li>
											    <li><a href="billdetails.php">Bill Detail</a></li>
                                                <li><a href="Viewpayment.php">View Payment</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-20">
                                        <a href="Logout.php" class="btn header-btn">Logout</a>
                                    </div>
                                </div>
                            </div> 
							<div class="col-lg-12"><br><br>		
							<h1 style="color:white;">Paid Bill Details</h1>
							<table id="customers" style="background-color:white;">
							  <tr>
								<th>Sl No.</th>
								<th>Bill No</th>
								<th>Customer Name</th>
								<th>Customer No</th>
								<th>Date</th>
								<th>Action</th>
							  </tr>
							  <?php
								include("config.php");
								$status='confirm';
								$sql = "SELECT bno, name, phone, date, paystatus from bill where phone='".$phone."' and status='".$status."' and paystatus='paid' group by bno";
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
										<th><?php echo $sl; ?></th>
										<td>BNO<?php echo $bno; ?></td>
										<td><?php echo $name; ?></td>
										<td><?php echo $phone; ?></td>
										<td><?php echo $date; ?></td>
										<td>
										<form action="#" method="post" >
										<input type="text" name="bid[]" hidden="true" value="<?php echo $bno; ?>">
										<button type="submit" name="details" class="btn btn-warning">View</button>
										</form>
										</td>
									</tr>
									  <?php
											}
										}
										?>
							  
							</table>
							</div>
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
							
 <!--? Footer Start-->
    <div class="footer-area footer-bg">
        <div class="container">
            <div class="footer-top footer-padding">
                <!-- footer Heading -->
                <div class="footer-heading">
                    <div class="row justify-content-between">
                        <div class="col-xl-6 col-lg-8 col-md-8">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>We Understand The Importance Approaching Each Work!</h2>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <span class="contact-number f-right">9880724749</span>
							<span class="contact-number f-right">7019094642</span>
                        </div>
                    </div>
                </div>
                <!-- Footer Menu -->
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>COMPANY</h4>
                                <ul>
                                    <li><a href="home.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="service.php"> Service</a></li>
                                    <li><a href="billdetail.php"> Bill Detail</a></li>
									<li><a href="contact.php"> Contact</a></li>
									<li><a href="viewpayment.php"> View Payment</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Open hour</h4>
                                <ul>
                                    <li><a href="#">Monday 11am-7pm</a></li>
                                    <li><a href="#"> Tuesday-Friday 11am-8pm</a></li>
                                    <li><a href="#"> Saturday 10am-6pm</a></li>
                                    <li><a href="#"> Sunday 11am-6pm</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
					 <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="assets/img/logo/loder.png" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p class="info1">We ensure that we provide good service.THANK YOU!!</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-12">
                        <div class="footer-copy-right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    
    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    
</body>
</html>
<?php
}
else
{
	echo "<script> location.href='../register.php'; </script>";
}
?>