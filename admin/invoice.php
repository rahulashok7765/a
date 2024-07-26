<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Tax Invoice</title>
    <link rel="shortcut icon" type="image/png" href="./favicon.png" />
    <style>
      * {
        box-sizing: border-box;
      }

      .table-bordered td,
      .table-bordered th {
        border: 1px solid #ddd;
        padding: 10px;
        word-break: break-all;
      }

      body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        padding: 0;
        font-size: 16px;
      }
      .h4-14 h4 {
        font-size: 12px;
        margin-top: 0;
        margin-bottom: 5px;
      }
      .img {
        margin-left: "auto";
        margin-top: "auto";
        height: 30px;
      }
      pre,
      p {
        /* width: 99%; */
        /* overflow: auto; */
        /* bpicklist: 1px solid #aaa; */
        padding: 0;
        margin: 0;
      }
      table {
        font-family: arial, sans-serif;
        width: 100%;
        border-collapse: collapse;
        padding: 1px;
      }
      .hm-p p {
        text-align: left;
        padding: 1px;
        padding: 5px 4px;
      }
      td,
      th {
        text-align: left;
        padding: 8px 6px;
      }
      .table-b td,
      .table-b th {
        border: 1px solid #ddd;
      }
      th {
        /* background-color: #ddd; */
      }
      .hm-p td,
      .hm-p th {
        padding: 3px 0px;
      }
      .cropped {
        float: right;
        margin-bottom: 20px;
        height: 100px; /* height of container */
        overflow: hidden;
      }
      .cropped img {
        width: 400px;
        margin: 8px 0px 0px 80px;
      }
      .main-pd-wrapper {
        box-shadow: 0 0 10px #ddd;
        background-color: #fff;
        border-radius: 10px;
        padding: 15px;
      }
      .table-bordered td,
      .table-bordered th {
        border: 1px solid #ddd;
        padding: 10px;
        font-size: 14px;
      }
      .invoice-items {
        font-size: 14px;
        border-top: 1px dashed #ddd;
      }
      .invoice-items td{
        padding: 14px 0;
       
      }
	  .button {
  background-color: blue;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  ali
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

    </style>
  </head>
  <body>
    <section class="main-pd-wrapper" style="width: 450px; margin: auto">
      <div style="
                  text-align: center;
                  margin: auto;
                  line-height: 1.5;
                  font-size: 14px;
                  color: #4a4a4a;
                ">
                <img src="logo.png">
                
<?php
include("config.php");
$sql = "SELECT name,phone,date,bno from bill where bno='".$_SESSION['bno']."'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);
	if($count>0)
	{
		while($row = mysqli_fetch_array($result))
		{ 
			$name=$row[0];
			$phone=$row[1];
			$date=$row[2];
			$id=$row[3];
	  }
		
	}
	?>
                <p style="font-weight: bold; color: #000; margin-top: 15px; font-size: 18px;">
                  Tax Invoice/Bill Of Ashok Water Supply<br> Private Limited
                </p>
                <p style="margin: 15px auto;">
                  <?php echo $name;?>  <br>
                 <?php echo $phone;?>
				 <?php echo $date;?>
                </p>
                
                <hr style="border: 1px dashed rgb(131, 131, 131); margin: 25px auto">
              </div>
              <table style="width: 100%; table-layout: fixed">
                <thead>
                  <tr>
                    <th style="width: 50px; padding-left: 0;">Sn.</th>
                    <th style="width: 220px;">Particular</th>
                    <th>Capcity</th>
                  </tr>
                </thead>
                <tbody>
				<?php
					error_reporting(1);
					include("config.php");

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
                  <tr class="invoice-items">
                    <td><?php echo $sl; ?></td>
                    <td ><?php echo $bcapacity; ?></td>
                    <td><?php echo $bprice; ?></td>
                  </tr>
				  <?php
				$no=$no+1;
				$tot[]=$bprice;
				}?>
	  
	  <?php
			
	  $totalamt=array_sum($tot);
	   $discamt=($totalamt*$discount)/100;
	  $totalamt1=$totalamt-$discamt;
		
	}
	else
	{
		$totalamt=0;
		echo "<script>alert('Bill Not Updated');</script>";
		echo "<script> location.href='billgeneration.php'; </script>";
	}
			?>
               
                </tbody>
              </table>

              <table style="width: 100%;
              background: #fcbd024f;
              border-radius: 4px;">
                <thead>
                  <tr>
                    <th>Total</th>
                    <th style="text-align: center;">Item (5)</th>
                    <th>&nbsp;</th>
                    <th style="text-align: right;">₹ <?php echo $totalamt; ?></th>
                    
                  </tr>
                </thead>
             
              </table>

              <table style="width: 100%;
              margin-top: 15px;
              border: 1px dashed #00cd00;
              border-radius: 3px;">
                <thead>
                  <tr>
                    <td>Discount Is <?php echo $discount; ?>%: </td>
                    <td style="text-align: right;"><?php echo $discamt; ?></td>
                  </tr>
                  <tr>
                    <td>Total Amount: </td>
                    <td style="text-align: right;"><?php  echo $totalamt1; ?></td>
                  </tr>
				 
                </thead>
             
              </table>
			  <br>
			
     <button class="button" style="" onclick="window.print()">Print</button>
	 
    </section>
  </body>
</html>

