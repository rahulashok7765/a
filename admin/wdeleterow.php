<?Php
session_start();

foreach ($_POST['bid'] as $key => $value) {
	$bid=$value;
	//$_SESSION['bid']=$bid;
	error_reporting(1);
	include("config.php");
	$sql = "delete from bill where id='".$id."'";
	mysqli_query($con,$sql) or die(mysqli_error($con));
		}
		echo "<script> location.href='externalbill.php'; </script>"; 

?>