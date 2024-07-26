<?php 
session_start();
if(isset($_GET['bill']))
{
	$billno=$_GET['bill'];
}
?>
<html>
<title>User Payment</title>
<head>
<style>
* {
  box-sizing: border-box;
}
html {
  min-height: 100%;
}

body {
  font-family: "Dax", Arial;
  font-size: 18px;
  cursor: auto;
  margin: 0;
  height: 100%;
  background: linear-gradient(0deg, #a9abae 35%, #e6e7e8 100%);
  text-align: center;
}

.cvvStyle {
  margin-left: 88px;
}
.cvvStyle2 {
  margin-left: 70px;
}

.card {
  width: 100%;
  max-width: 400px;
  height: 178px;
  position: relative;
  margin: 0 auto;
  overflow: hidden;
  z-index: 1;
  border-radius: 6px;
  box-shadow: 0 15px 24px rgba(37, 44, 65, 0.32);
  background: linear-gradient(90deg, #a9abae 35%, #e6e7e8 100%);
}

.card-content {
  width: 100%;
  padding: 20px;
  position: relative;
  float: left;
  z-index: 1;
}

.infoTarjeta {
  position: relative;
  top: 45px;
}

.infoTarjeta h5 {
  font-size: 12px;
  color: #c9cdcf;
  text-align: left;
  text-transform: uppercase;
}

.infoTarjeta h6 {
  font-size: 18px;
  color: #fff;
  text-align: left;
  text-transform: uppercase;
}

input {
  padding: 12px 20px 12px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

button {
  font-family: "Dax", Arial;
  font-size: 14px;
  transition: 0.2s;
  border: none;
  width: 100%;
  height: 40px;
  background-color: #a9abae;
  color: white;
  margin: 2px;
  border-radius: 5px;
}
button:hover {
  background-color: #e6e7e8;
  color: black;
  cursor: pointer;
}

.imgResumen {
  width: 100%;
  max-height: 500px;
  border-radius: 5px;
}

.logoFranquicia {
  width: 70px;
  float: right;
}

.column {
  float: left;
  width: 50%;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}

.divPay {
  border: none;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 40%;
  margin: auto;
  margin-top: 10px;
  margin-bottom: 10px;
  border-radius: 10px;
  text-align: center;
  background: #c9cdcf;
  height: 630px;
}
.divPay h1,
h2,
h3,
h4,
h5,
h6 {
  margin: 0;
  line-height: 1.4;
}

.c1 {
  background: #e6e7e8;
  min-height: 630px;
  padding: 10px;
  border-radius: 10px 0px 0px 10px;
}

.c2 {
  background: #c9cdcf;
  padding: 10px;
  border-radius: 0px 10px 10px 0px;
}

.totalTxt {
  position: relative;
  top: 50px;
}

@media screen and (max-width: 700px) {
  .column,
  .divPay {
    width: 100%;
  }

  .totalTxt {
    position: initial;
  }

  .c1,
  .c2 {
    min-height: 330px;
    border-radius: 0px;
  }
}

@media screen and (max-width: 1200px) {
  .divPay {
    width: 90%;
  }

  .totalTxt {
    position: initial;
  }
}

</style>
</head>
<body>
<?php
	error_reporting(1);
	include("config.php");

	$sql = "SELECT * from bill where bno='".$billno."'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);

	$tot=array();
	if($count>0)
	{
		$no=1;
		while($row = mysqli_fetch_array($result))
		{ 
			$rowid=$row[0];
			$bservice=$row['capacity'];
			$btotal=$row['price'];
			$discount=$row['discount'];
			
			$no=$no+1;
			$tot[]=$btotal;
			}
			
			$totalamt=array_sum($tot);
			$discamt=($totalamt*$discount)/100;
			$totalamt1=$totalamt-$discamt;
		
	}
	else
	{
		$totalamt=0;
		echo "<script>alert('Bill Not Updated');</script>";
		echo "<script> location.href='vb.php'; </script>";
	}
			?>
<form method="post" action="#">
<div class="row divPay">
  <div class="column c1">
    <h2 style="margin-bottom: 10px;">Bill</h2>

    <img src="logo.png" class="imgResumen">

    <div class="totalTxt">
      <h3 style="color: #a9abae">Total</h3>
      <h1>₹.<?php echo number_format($totalamt1,2); ?>/-</h1>
    </div>

  </div>
  <div class="column c2">
    <h2 style="margin-bottom: 10px;">Payment</h2>

    <div class="card" id="divCard">
      <div class='card-content'>
        <img style="display: none" id="imgFranchise" class="logoFranquicia">
        <div class="infoTarjeta">
          <h5>Card Number</h5>
          <h6 id="cardNumber">0000 0000 0000 0000</h6>
          <h5>Expiration<span class="cvvStyle">CVV</span></h5>
          <h6><span id="cardMonth">00</span> / <span id="cardYear">0000</span><span class="cvvStyle2" id="cardCVV">000</span></h6>
        </div>
      </div>
    </div>

    <br>
    <div style="width: 100%;margin: auto;">
      <div style="width: 50%;display: inline-block;"><b>Cardholder</b></div>
      <input type="text" id="pagarTarjetaTit" placeholder="Cardholder" maxlength="16" style="width: 100%" required>
    </div>

    <div style="width: 100%;margin: auto;">
      <div style="width: 50%;display: inline-block;"><b>Card Number</b></div>
      <input type="text" id="pagarTarjetaNum" placeholder="Eg. 1111222233334444" style="width: 100%" maxlength="16" oninput="showCN()" required>
    </div>

    <div style="width: 100%;margin: auto;">
      <div style="width: 50%;display: inline-block;"><b>Expiration</b></div>

      <div class="row">
        <div class="column">
          <div style="width: 100%;display: inline-block;"><b>Month</b></div>
          <input type="number" id="pagarTarjetaMes" placeholder="Eg. 03" min="01" max="12" style="width: 80%" oninput="showCE()" required >
        </div>
        <div class="column">
          <div style="width: 100%;display: inline-block;"><b>Year</b></div>
          <input type="number" id="pagarTarjetaAno" placeholder="Eg. 2024" min="2020" max="2100" style="width: 80%" oninput="showCE()" required>
        </div>
      </div>
    </div>

    <div style="width: 100%;margin: auto;">
      <div style="width: 50%;display: inline-block;"><b>CVV</b></div>
      <input type="number" id="pagarTarjetaCVV" placeholder="Eg. 123" min="001" max="9999" style="width: 50%" oninput="showCV()" required>
    </div>

    <button type="submit" name="pay" title="Make payment">Make payment</button>

  </div>
</div>
</form>
<?php
    include("config.php");
    if(isset($_POST['pay'])){
            // Insert record
            $query = "update bill set paystatus='paid' where bno='".$billno."'";
            mysqli_query($con,$query) or die(mysqli_error($con));
            echo "<script>
				alert('payment Successful');
			</script>";
			echo "<script> location.href='billdetails.php'; </script>";
        }
    ?>


<script>
function showCN() {
  var i = document.getElementById("pagarTarjetaNum").value;
  document.getElementById("cardNumber").innerHTML = i;

  if (i.length == 16) {
    document.getElementById("pagarTarjetaMes").focus();
  }

  if (i.includes("1111") == true) {
    document.getElementById("imgFranchise").src =
      "https://brand.mastercard.com/content/dam/mccom/brandcenter/thumbnails/mastercard_vrt_pos_92px_2x.png";
    document.getElementById("imgFranchise").style.display = "block";
    document.getElementById("divCard").style.background =
      "linear-gradient(90deg, #E40003 35%, #A40000 100%)";
  } else if (i.includes("2222") == true) {
    document.getElementById("imgFranchise").src =
      "https://usa.visa.com/dam/VCOM/regional/lac/ENG/Default/Partner%20With%20Us/Payment%20Technology/visapos/full-color-800x450.jpg";
    document.getElementById("imgFranchise").style.display = "block";

    document.getElementById("divCard").style.background =
      "linear-gradient(90deg, #FF8D00 35%, #FFA700 100%)";
  } else {
    document.getElementById("imgFranchise").style.display = "none";

    document.getElementById("divCard").style.background =
      "linear-gradient(90deg, #a9abae 35%, #e6e7e8 100%)";
  }

  if (i == "") {
    document.getElementById("cardNumber").innerHTML = "0000 0000 0000 0000";
  }
}

function showCE() {
  var im = document.getElementById("pagarTarjetaMes").value;
  var iy = document.getElementById("pagarTarjetaAno").value;
  document.getElementById("cardMonth").innerHTML = im;
  document.getElementById("cardYear").innerHTML = iy;

  if (im.length == 2) {
    document.getElementById("pagarTarjetaAno").focus();
  }
  if (iy.length == 4) {
    document.getElementById("pagarTarjetaCVV").focus();
  }
}

function showCV() {
  var i = document.getElementById("pagarTarjetaCVV").value;
  document.getElementById("cardCVV").innerHTML = i;
}

</script>
</body>
</html>