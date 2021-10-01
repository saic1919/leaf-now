<?php
session_start();

include("connection.php");
error_reporting(0);

if (!isset($_COOKIE['HI'])) {
	header("location:login.php");
}

$cust = $_COOKIE['HI'];
?>

<!DOCTYPE html>
<html>

<head>
	<title>Leaf Now</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta property="og:title" content="Vide" />
	<meta name="keywords" content="Grocery Store" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
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
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
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
	<script src="https://kit.fontawesome.com/5326a73388.js" crossorigin="anonymous"></script>
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
	<!--- start-rate---->
	<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	<script type="text/javascript">
		jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
				starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
				}).bind('starbox-value-changed', function(event, value) {
					if (starbox.hasClass('random')) {
						var val = Math.random();
						starbox.kitchen().text(' ' + val);
						return val;
					}
				})
			});
		});


		$("#editing-view-port").change(function() {
			alert("The text has been changed.");
		});
	</script>
	<!---//End-rate---->

</head>

<body class="container">


	<div class="header">

		<div class="container">

			<div class="logo">
				<h1><a href="index.php"><b>T<br>H<br>E</b>Leaf Now<br /><span>Best Nursary</span></a></h1>
			</div>

			<?php
			if (isset($_COOKIE['HI'])) {

			?>


				<div class="head-t">
					<ul class="card">
						<li><a href="order.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Orders</a></li>
						<li><a href="about.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>About Us</a></li>
						<li><a href="shipping.php"><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
						<li><a href="cust-logout.php"><i class="fa fa-user" aria-hidden="true"></i>Logout</a></li>
					</ul>
				</div>


			<?php
			}

			?>



			<?php include_once("top.php"); ?>

		</div>
	</div>

	<script>
		window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')
	</script>
	<script src="js/jquery.vide.min.js"></script>


	<form action="pay.php" method="post">
		<div class="row">
			<!-- Shopping Cart Section Begin -->

			<div class="col-lg-8">
				<div class="shopping__cart__table">
					<table>
						<thead>
							<tr>
							
								<th> Product</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Total</th>
									<th> </th>
							</tr>
						</thead>
						<tbody>


							<?php
							if (isset($_GET['array']) && isset($_GET['total'])) {
								$some = json_decode($_GET['array']);
								$_SESSION['kela'] = $_GET['array'];
								/*echo gettype($some);*/
								$tot = $_GET['total'];
							} else {
								header("location:index.php");
							}
							$items = array();
							foreach ($some as $arr) {
								foreach ($arr as $key => $value) {
									$items[$key] = $value;
								}
							?>



								<input type="hidden" name="cust_name" value="<?php echo $cust; ?>">
								<input type="hidden" name="total_price" value="<?php echo $tot; ?>">

								<tr>
									<td class="product__cart__item">
										<div class="product__cart__item__pic">
											<img class="simple" src="<?php echo $items['image']; ?>" alt="">

											<h6><?php echo $items['name']; ?></h6>

										</div>
									</td>
									<td class="quantity__item">
										<div class="quantity" class="product-price">
											<div class=" pro-qty-2 " class=" product-price">
											<p><?php echo $items['price']; ?></p>
											</div>
										</div>
									</td>
									<td class="quantity__item">
										<div class="quantity" class="product-quantity">
											<div class="pro-qty-2 " class="product-quantity">
											<p><?php echo $items['quantity']; ?></p>
											</div>
										</div>
									</td>
									<td class="cart__price" id="cart-subtotal">₹ <?php echo $items['quantity'] * $items['price']; ?></td>
									

								</tr>


							<?php
							}
							?>
						</tbody>
					</table>
				</div>

			</div>

			<div class="col-lg-4">

				<div class="cart__total">
					<div class="text-center text-danger mb-3" style="padding-top: 20px;">
						<h4>
							<img src="./images/delivery-truck.png" alt="" style="height:50px; width: 50px;">
							Choose Delivery Method
						</h4>






						<div class="">
							<div class="col-lg-6 mx-auto" style="width:100%;text-align:left;">
								<div class="card ">
									<div class="card-header">
										<div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
											<!-- Credit card form tabs -->
											<ul class="nav bg-light nav-pills rounded nav-fill mb-3">
												<li class="nav-item1"> <a data-toggle="pill" href="#credit-card" class="nav-link"> <i class="fas fa-credit-card mr-2"></i> Normal (+ ₹50)</a> </li>
												<li class="nav-item1"> <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fab fa-paypal mr-2"></i> Express (+ ₹150) </a> </li>

											</ul>
										</div> <!-- End -->
										<!-- Credit card form content -->

										<!-- Paypal info -->

										<!-- bank transfer info -->

										<!-- End -->
									</div>
								</div>
							</div>
						</div>













					</div>

					<div class="text-center text-success mb-3" style="padding-top: 20px;">
						<h4>
							<img src="./images/pay.png" alt="" style="height:50px; width: 50px;">
							Choose Payment Method

						</h4>



						<div class="" style="box-shadow:0px;">
							<div class="col-lg-6 mx-auto" style="width:100%;text-align:left;">
								<div class="card ">
									<div class="card-header">
										<div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
											<!-- Credit card form tabs -->


											<ul class="nav bg-light nav-pills rounded nav-fill mb-3">
												<li class="nav-item1"> <i class="fas fa-credit-card mr-2"></i> <input type="radio"  name="pay_type" value="3" required>
  <label for="male">Credit</label> </li>
												<li class="nav-item1"> <p class="nav-link "> <i class="fab fa-paypal mr-2"></i> 										
  <input type="radio"  name="pay_type" value="3" required>
  <label for="female">Paytm</label> </p> </li>
												<li class="nav-item1"> <p  class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i>  <input type="radio" name="pay_type" value="3" required>
  <label for="other">Net Banking</label></p> </li>
  <li class="nav-item1"> <p  class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i>  <input type="radio" name="pay_type" value="2" required>
  <label for="other">Cash on delivery</label></p> </li>
											</ul>
										</div> <!-- End -->
										<!-- Credit card form content -->

										<!-- Paypal info -->

										<!-- bank transfer info -->

										<!-- End -->
									</div>
								</div>
							</div>
						</div>













						<!-- <select type="d" class="selectpicker" name="pay_type">
							<option value='fa-apple'>&#xf179; fa-500px</option>
							<option class="" value="2">Online Payment</option>
							<option value="3"><i class="fas fa-home"></i>

								CoD (Cash on Delivery)<img src="images/ho.png" width=""></option>

						</select> -->
					</div>

					<h6>Cart total</h6>
					<ul>
						<li>Subtotal <span>₹<?php echo $tot; ?></span></li>
						<li>Total <span>₹ <?php echo $tot; ?></span></li>
					</ul>
					<button class="primary-btn" name="payment">Proceed to Checkout</button><br>
					<a href="cust-index.php" class="primary-btn">Continue Shopping</a>



				</div>
			</div>

		</div>
		</section>
		</div>
		<!-- Shopping Cart Section End -->








	</form>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<script type='text/javascript' src="js/jquery.mycart.js"></script>
	<script type="text/javascript">
		$(function() {

			var goToCartIcon = function($addTocartBtn) {
				var $cartIcon = $(".my-cart-icon");
				var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({
					"position": "fixed",
					"z-index": "999"
				});
				$addTocartBtn.prepend($image);
				var position = $cartIcon.position();
				$image.animate({
					top: position.top,
					left: position.left
				}, 500, "linear", function() {
					$image.remove();
				});
			}

			$('.my-cart-btn').myCart({
				classCartIcon: 'my-cart-icon',
				classCartBadge: 'my-cart-badge',
				affixCartIcon: true,
				checkoutCart: function(products) {
					$.each(products, function() {
						console.log(this);
					});
				},
				clickOnAddToCart: function($addTocart) {
					goToCartIcon($addTocart);
				},
				getDiscountPrice: function(products) {
					var total = 0;
					$.each(products, function() {
						total += this.quantity * this.price;
					});
					return total * 1;
				}
			});

		});
	</script>

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
		$(document).ready(function() {
			$('.offer-img').click(function() {
				/*	      console.log("what"); */
				var id = $(this).attr("id");
				/*console.log(id);*/
				$.ajax({
					url: "select.php",
					method: "post",
					data: {
						id: id
					},
					success: function(data) {
						$('#item_detail').html(data);
						$('#myModal1').modal("show");
					}
				});
			});
		});
	</script>


</body>

</html>