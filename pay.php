<?php
session_start();


$cust_name= $_POST['cust_name'];
$allvalues= $_SESSION['kela'];
$total= $_POST['total_price'];
$delivery= $_POST['delivery'];
$pay_type= $_POST['pay_type'];

//print_r($cust_name);

$some= json_decode($allvalues);
//print_r($some);

$sent= array();

$items = array();
		foreach($some as $arr) {
		    foreach($arr as $key => $value) {
		        $items[$key] = $value;
		    }
		    /*print_r($items);
		    echo "<br />";*/
		}
if($delivery == 1){
	$total= $total + 50;
}
elseif($delivery == 2) {
			$total= $total + 150;
		}

$_SESSION['del']= $delivery;

if($pay_type ==1){
	
   

$_SESSION['pay_type']='Razorpay';






	  
	
















    $apiKey = "rzp_live_3qYJNhBETtOQuv";
   
   ?>
   
   <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
   
   
   
   <form action="pay_success.php" method="POST">
   <script
       src="https://checkout.razorpay.com/v1/checkout.js"
       data-key="<?php echo $apiKey;?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
       data-amount="<?php echo ($total*100)-6500;?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
       data-currency="INR"// You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
       data-id="order_CgmcjRh9ti2lP7"// Replace with the order_id generated by you in the backend.
       data-buttontext="Pay with Razorpay"
       data-name="Acme Corp"
       data-description="A Wild Sheep Chase is the third novel by Japanese author Haruki Murakami"
       data-image="https://example.com/your_logo.jpg"
       data-prefill.name="Kedaresh G"
       data-prefill.email="kedareshg2000@gmail.com"
       data-theme.color="#F37254"
   ></script>
   <input type="hidden" custom="Hidden Element" name="hidden">
   </form>
   <style>
   .razorpay-payment-button
   {
       display:none;
   }
   </style>
    <script>
   $(document).ready(function(){
       $('.razorpay-payment-button').click();
   })
   </script>
  <?php



}
else if($pay_type==3)
{
    $_SESSION['pay_type']='Paytm';
    header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$checkSum = "";
$paramList = array();

$ORDER_ID = "ORDS".rand(10000,99999999);
$CUST_ID = "CUST".rand(10000,99999999);
$INDUSTRY_TYPE_ID = "Retail";
$CHANNEL_ID = "WEB";
$TXN_AMOUNT = $total-69;

// Create an array having all required parameters for creating checksum.
$paramList["MID"] = PAYTM_MERCHANT_MID;
$paramList["ORDER_ID"] = $ORDER_ID;
$paramList["CUST_ID"] = $CUST_ID;
$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
$paramList["CHANNEL_ID"] = $CHANNEL_ID;
$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
$paramList["CALLBACK_URL"] = "https://prasannastoreby.000webhostapp.com/Grocery-Ecommerce-master/pgResponse.php";
/*

$paramList["MSISDN"] = $MSISDN; //Mobile number of customer
$paramList["EMAIL"] = $EMAIL; //Email ID of customer
$paramList["VERIFIED_BY"] = "EMAIL"; //
$paramList["IS_USER_VERIFIED"] = "YES"; //

*/

//Here checksum string will return by getChecksumFromArray() function.
$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);

?>

<center><h1>Please do not refresh this page...</h1></center>
		<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
		<table border="1">
			<tbody>
			<?php
			foreach($paramList as $name => $value) {
				echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
			}
			?>
			<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
			</tbody>
		</table>
		<script type="text/javascript">
			document.f1.submit();
		</script>
	</form>
    <?php

}
else{
    $_SESSION['reload']='r';
	header("location:order_success.php");
}
?>