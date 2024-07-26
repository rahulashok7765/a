<?php
session_start();
if(isset($_SESSION['user']))
{
	?>

<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Ashok Water Supply</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <!-- Preloader Start --
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
                                    <li>Phone: 9880724749,7019094642</li>
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
											    <li><a href="billdetails.php">Bill Detail</a></li>
												<li><a href="contact.php">Contact</a></li>
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
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start-->
        <!-- slider Area End-->
        <!--? About Area Start -->
 
        <!-- About Area End -->
        <!--? contact-form start -->
       <section class="contact-form-area section-bg  pt-115 pb-120 fix" data-background="assets/img/gallery/section_bg02.jpg"style="Height:700;Width:350;" >
      <div class="container">
            <div class="row justify-content-end">
                <!-- Contact wrapper -->
                <div class="col-xl-12 col-lg-12">
                    <div class="contact-form-wrapper">
                        <!-- From tittle -->
                        <div class="row">
                            <div class="col-lg-">
                                <!-- Section Tittle -->
                                <div class="section-tittle mb-50">
                                    <span>Need For  Water </span>
                                    <h2>BOOK NOW!!</h2> 
                                    <p>We are available for your service 24/7 just click and book now</p>
                                </div>
                            </div>
                        </div>
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
								}
								}
								?>
								<?php
								if(isset($_GET['book']))
								{
									$book=$_GET['book'];
								}
								?>
                        <!-- form -->
                        <form action="#" method="post" class="contact-form">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-form">
                                        <input type="text" name="name" placeholder="Name" value="<?php echo $username; ?>" readonly="true">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-form">
                                        <input type="text" name="email" value="<?php echo $email; ?>" placeholder="Email" readonly="true">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input type="text" name="contact" placeholder="Contact Number">
                                    </div>
                               
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-form">
                                        <input type="text" name="citydep" placeholder="City of Departure">
                                    </div>
                              
                                </div>
								<div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="input-form">
                                        <input type="date" value="<?php echo date('Y-m-d');?>" name="date" placeholder="date" readonly>
                                    </div>
                                </div>
								<div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="input-form">
                                        <input type="date" min="<?php echo date('Y-m-d');?>" name="dedate" placeholder="Departure Date">
                                    </div>
                                </div>
                                </div>
                                
                                <!-- Button -->
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" class="submit-btn">Book Now</button>
                                </div>
                            </div>
                        </form >
<?php
if(isset($_POST['submit']))
{
	error_reporting(1);
	include("config.php");
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$citydep=$_POST['citydep'];
	$date=$_POST['date'];
	$dedate=$_POST['dedate'];

	$query = "INSERT INTO book(name,email,contact,citydep,date,dedate,capacityid)VALUES('".$name."','".$email."','".$contact."','".$citydep."','".$date."','".$dedate."','".$book."')";
	
	mysqli_query($con,$query)or die(mysqli_error($con));
	
	echo "<script> 
			alert('Booked  Successfully');
		</script>";
	echo "<script> location.href='services.php'; </script>";
}
?>						
                    </div>
                </div>
            </div>
            
</body>
</html>
<?php
}
else
{
	echo "<script> location.href='../register.php'; </script>";
}
?>