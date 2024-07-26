<?php
session_start();
?>

<html>
<head>
<style>
body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
}
.main{
	width: 350px;
	height: 500px;
	background: red;
	overflow: hidden;
	background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}
#chk{
	display: none;
}
.signup{
	position: relative;
	width:100%;
	height: 100%;
}
label{
	color: #fff;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 60px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}
input{
	width: 60%;
	height: 20px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
}
button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #573b8a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
button:hover{
	background: #6d44b8;
}
.login{
	height: 460px;
	background: #eee;
	border-radius: 60% / 10%;
	transform: translateY(-180px);
	transition: .8s ease-in-out;
}
.login label{
	color: #573b8a;
	transform: scale(.6);
}

#chk:checked ~ .login{
	transform: translateY(-500px);
}
#chk:checked ~ .login label{
	transform: scale(1);	
}
#chk:checked ~ .signup label{
	transform: scale(.6);
}

</style>
</head>
<body>
<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="#" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="username" placeholder="User name" required="">
					<input type="text" name="phoneno" placeholder="Phoneno" pattern="^\d{10}$" title="please enter valid phone number max 10" required>
					<input type="text" name="address" placeholder="Address" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button type="submit" name="register">Sign up</button>
				</form>
				<?php
if(isset($_POST['register']))
{
	
	error_reporting(1);
	include("config.php");
	
	$email=$_POST['email'];

	$sql = "select * from register where email='$email'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);

	if($count>0)
	{
		echo "<script>
				alert('There is an existing account associated with this email.');
			</script>";
			echo "<script> location.href='register.php'; </script>";
	}
	else
	{
		
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$phoneno=$_POST['phoneno'];
		$address=$_POST['address'];
		$query = "INSERT INTO register(username,email,password,phone,address) VALUES('".$username."','".$email."','".$password."','".$phoneno."','".$address."')";
           
        mysqli_query($con,$query) or die(mysqli_error($con));
		
		
		echo "<script>
				alert('Registeration Completed, Please Login.');
			</script>";
			echo "<script> location.href='register.php'; </script>";

	}
}
?>
			</div>

			<div class="login">
				<form action="#" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title=" please enter valid email address" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button type="submit" name="login">login</button>
				</form>
				<?php
if(isset($_POST['login']))
{
	error_reporting(1);
	include("config.php");
	
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$sql = "select * from register where email='".$email."' and password='".$password."'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);


	if($count>0)
	{
		session_start();
		$_SESSION['user']=$email;
		$uid=$_SESSION['user'];
		echo "<script>
				alert('Login Successful $id');
			</script>";
		echo "<script> location.href='afterlogin/home.php'; </script>";
	}
	else
	{
		
		echo "<script>
				alert('Invalid Email or Password');
			</script>";
	}
}

?>
				
	</div>
	</div>
</body>
</html>