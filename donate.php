<?php
session_start();
if (!isset($_COOKIE['HI'])) {
	header("location:login.php");
}

include("connection.php");
error_reporting(0);

$namess = $_COOKIE['HI'];
echo "<script type='text/javascript'>alert('$namess')</script>";

?>

<!DOCTYPE html>
<html>

<head>
	<title>Leaf Now</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta property="og:title" content="Vide" />
	<meta name="keywords" content="Leaf Now" />
	
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- js -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- //js -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>

	<!-- start-smoth-scrolling -->
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

	<!-- Css Styles -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
	<link rel="stylesheet" href="css/nice-select.css" type="text/css">
	<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
	<link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
	<!--- start-rate---->
	<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
	
	<!---//End-rate---->

</head>

<body>
	<?php

	include "header_cust.php"

	?>

	
	<!-- <script src="js/jquery.vide.min.js"></script> -->

	<!--content-->
	<div class="content-top ">
		<div class="container ">
			<div class="spec ">
				<h3>Donate Now</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
		

		</div>
	</div>
	</div>

    <!-- donation form -->

    <div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Donate</h3>
					<form>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Username" id="username" name="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="true">
							<div class="clearfix"></div>
						</div>
						<div class="key" style="display: none;">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" id="email" name="email" <?php
		if (isset($_COOKIE['HI'])) {
                                $username = $_SESSION['username'];
                            ?>
                            value="<?php echo $namess ?>"
                            <?php
                            }
                            ?>
 required="true">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<input  type="text" value="Phone" id="phone" name="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="true">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Street Address" name="street" id="street" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Street';}" required="true">
							<div class="clearfix"></div>
						</div>
						<div class="key">
						<select class="form-control" id="selecttype" name="selecttype"   >
                                <!-- <option selected>Interested in</option> -->
                                <option value="Plants">Plants</option>
                                    <option value="Seeds">Seeds</option>
                                </select>
						</div>
						
						<div class="key">
							<i class="fa fa-dollar" aria-hidden="true"></i>
							<input  type="text" placeholder="Amount" name="amount" id="amount"   required="true">
							<div class="clearfix"></div>
						</div>
					
						

						<div class="submit-area">
                                    <button type="button" name="btn" id="btn"class="theme-btn submit-btn" onclick="pay_now();">Donate Now</button>
                                </div>

								
					</form>

		


					


				</div>
				
			</div>
		</div>






		




    <!-- donation form end -->
	

	
	<!--footer-->
	<?php include_once("footer.php"); ?>
	<!-- //footer-->



	<!-- product -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa" id="item_detail">

				</div>
			</div>
		</div>
	</div>




	<script>


    function pay_now(){
	
	
        var username=jQuery('#username').val();
        var email=jQuery('#email').val();
        var phone=jQuery('#phone').val();
        var street=jQuery('#street').val();
        var selecttype=jQuery('#selecttype').val();
        var amount=jQuery('#amount').val();
		
         jQuery.ajax({
               type:'post',
               url:'donateprocess.php',
               data:"amount="+amount+"&username="+username+"&email="+email+"&phone="+phone+"&street="+street+"&selecttype="+selecttype+"&amount="+amount,
               success:function(result){
                   var options = {
                        "key": "rzp_test_0llsnDPKZW60yo", 
                        "amount": amount*100, 
                        "currency": "INR",
                        "name": "Acme Corp",
                        "description": "Test Transaction",
                        "image": "https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg",
                        "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'donateprocess.php',
                               data:"payment_id="+response.razorpay_payment_id,
                               success:function(result){
                                   window.location.href="cust-index.php";
                               }
                           });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }
           });
        
        
    }
</script>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'>
        </script>
</body>

</html>