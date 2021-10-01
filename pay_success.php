<?php \
session_start();
if($_SESSION['reload']==='r')
{


include("connection.php");
error_reporting(0);
$N=$_COOKIE['HI'];
echo "<script>alert('$N')</script>";
if(!isset($_COOKIE['HI']))
{
	header("location:index.php");
}

$cust= $_COOKIE['HI'];
$_SESSION['reload']='M';

?>

<!DOCTYPE html>
<html>
<head>
<title>Order Placed</title>
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
</style>
</head>
<body onload="myFunction()" style="margin:0;">

	 <?php 
		    $q2= "SELECT * FROM customers WHERE email= '$cust'";
			$data2= mysqli_query($conn, $q2);
			while($res2= mysqli_fetch_assoc($data2)){
				 $address= $res2['street'].", ".$res2['city'].", ".$res2['pincode'];
			}
			
		    ?>

	<div id="loader"></div>
	<div id= "myDiv" class="container" style="display:none;">
		<div class="row justify-content-center">
			<div class="table-responsive">
				<?php
				$somerand= "COD".mt_rand(100000000,999999999);
				$q2= "SELECT * FROM customers WHERE email='$cust'";
				$data2= mysqli_query($conn, $q2);
				$res2= mysqli_fetch_assoc($data2);

				 ?>
				<h2 class="text-center text-black mb-5" style="margin-top: 20px;"> Order Placed </h2>
						<table class="table table-bordered" style="margin-top: 40px;">
							<tr>
								<th>Purchased from</th>
								<td>Leaf Nows</td>
							</tr>
							<tr>
								<th>Payment ID</th>
								<td><?php echo $somerand; ?></td>
							</tr>
							<tr>
								<th>Buyer Name</th>
								<td><?= $res2['username']; ?></td>
							</tr>
							<tr>
								<th>Buyer Phone No.</th>
								<td><?= $res2['phone']; ?></td>
							</tr>
							<tr>
								<th>Buyer Email</th>
								<td><?= $res2['email']; ?></td>
							</tr>
							<tr>
								<th>Buyer Address</th>
								<td><?= $address; ?></td>
							</tr>
							<tr>
								<th>Payment Status</th>
								<td>Success</td>
							</tr>
							<tr>
								<th>Order Date</th>
								<td><?php 		    
								date_default_timezone_set('Asia/Kolkata');
								$date = date('d/m/Y H:i:s', time());
								echo $date;?></td>
							</tr>
						</table>
<?php



include('smtp/PHPMailerAutoload.php');
$html='Msg';

function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->SMTPDebug  = 3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "prithamcs062@gmail.com";
	$mail->Password = "54321Dpp";
	$mail->SetFrom("prithamcs062@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		return 'Sent';
	}
}






?>
						<div class="text-center text-danger mb-2">
						<button name="order" class="btn btn-danger" onclick='window.location.href = "http://localhost/big_store/web/order.php"'>Track your Order</button>
						<button name="shopping" class="btn btn-success" onclick='window.location.href = "http://localhost/big_store/web/index.php"'>Continue Shoppping</button>
					</div>

					<?php 
						$spay_id= $somerand;
						$sbuyer_name= $res2['username'];
						$sbuyer_email= $res2['email'];
						$sbuyer_phone= $res2['phone'];
						if($_SESSION['pay_type']==='Paytm')
						{
						$sstatus= "Paytm";
						}
						else
						{
							$sstatus= "Razorpay";
						}

						$allvalues= $_SESSION['kela'];
						$delivery= $_SESSION['del'];

						if($delivery ==1 )
						{
							$shipping= "Normal";
						}
						else{
							$shipping= "Express";
						}

/*						$sent= array();
						$vendors= array();
						$names= array();
						$qtys= array();*/

						$some= json_decode($allvalues);
						$items = array();
						foreach($some as $arr) {
		    				foreach($arr as $key => $value) {
		        				$items[$key] = $value;
		    				}
		    				$sid= $items['id'];
		    				$stitle= $items['name']; 
		    				$sprice= $items['price'];  
		    				$sqty= $items['quantity']; 
		    				$simage= $items['image'];
		    				$svendor='';

		    				$q2= "SELECT * FROM products WHERE product_id= $sid ";
							$data2= mysqli_query($conn, $q2);

							while($res2= mysqli_fetch_assoc($data2)){
								 $svendor= $res2['vendor_name'];
								 $q3= "SELECT * FROM vendors WHERE email= '$svendor' ";
								 $data3= mysqli_query($conn, $q3);
								 while($res3= mysqli_fetch_assoc($data3)){
								 	$svendor_name= $res3['username'];
								 	$svendor_address= $res3['street'].", ".$res3['city'].", ".$res3['pincode'];
								 	$svendor_phone= $res3['phone'];
								 }
							}

							$q3= "INSERT INTO `orders`(`product_title`, `product_price`, `product_qty`, `product_image`, `vendor_name`, `payment_id`, `payment_status`, `buyer_email`, `buyer_phone`, `buyer_name`,`order_date`,`delivery_status`,`shipping_method`, `buyer_address`)
							 VALUES ('$stitle', '$sprice', '$sqty', '$simage', '$svendor', '$spay_id', '$sstatus', '$sbuyer_email', '$sbuyer_phone', '$sbuyer_name','$date','ND','$shipping','$address')";
							if(mysqli_query($conn, $q3)){
						
						echo smtp_mailer('manojkumarbadiger452@gmail.com','Newordercame',$html);
							}else {
							    echo "Error: " . $q3 . "<br>" . mysqli_error($conn);
							}
						}
					?>
			</div>
		</div>
	</div>

<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
</body>
</html>
<?php
}
else
{
  	echo "<script>window.open('cust-index.php','_self')</script>";  
}
    ?>


