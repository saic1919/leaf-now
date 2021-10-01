<?php
session_start();
if (isset($_COOKIE['HI'])) {
	header("location:cust-index.php");
}

include("connection.php");
error_reporting(0);

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
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
	<!--- start-rate---->
	<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
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
	</script>
	<!---//End-rate---->

</head>

<body>
	<?php

include "header.php"
	?>

	<!-- <script>
		window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')
	</script>
	<script src="js/jquery.vide.min.js"></script> -->

	<!--content-->
	<!-- <div class="content-top ">
		<div class="container ">
			<div class="spec ">
				<h3>Special Offers</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
			<div class="tab-head ">
				<nav class="nav-sidebar">
					<ul class="nav tabs ">
						<li class="active"><a href="#tab1" data-toggle="tab">Staples</a></li>
						<li class=""><a href="#tab2" data-toggle="tab">Snacks</a></li>
						<li class=""><a href="#tab3" data-toggle="tab">Fruits & Vegetables</a></li>
						<li class=""><a href="#tab4" data-toggle="tab">Breakfast & Cereal</a></li>
					</ul>
				</nav> -->

				<div class=" tab-content tab-content-t ">
					<div class="tab-pane active text-style" id="tab1">
						<div class=" con-w3l">
							<?php
							/*$q = "SELECT v.email from vendors v JOIN  customers c ON v.pincode= c.pincode WHERE c.email='$cust'";
								$data= mysqli_query($conn, $q);
								$total= mysqli_num_rows($data);
								while($res= mysqli_fetch_assoc($data)){
								if($total > 0){
									$vendor= $res['email'];
								}*/

							$q2 = "SELECT * FROM products WHERE product_cat=17 LIMIT 4";
							$data2 = mysqli_query($conn, $q2);
							$total2 = mysqli_num_rows($data2);

							while ($res2 = mysqli_fetch_assoc($data2)) {
							?>
								<div class="col-md-3 m-wthree">
									<div class="col-m">
										<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img" id="<?php echo $res2['product_id']; ?>">
											<?php echo "<img src='images/" . $res2['product_image'] . "'>"; ?>
											<div class="offer">
												<p><span>Offer</span></p>
											</div>
										</a>
										<div class="mid-1">
											<div class="women">
												<h6>
													<?php echo $res2['product_title']; ?>
												</h6>
											</div>
											<div class="mid-2">
												<p><label> Rs <?php echo $res2['product_price'] + 20; ?></label><em class="item_price"> Rs <?php echo $res2['product_price']; ?></em></p>
												<div class="block">
													<div class="starbox small ghosting"> </div>
												</div>
												<div class="clearfix"></div>
											</div>
											<?php
											$s = "images/";
											$ext = $res2['product_image'];
											$image = $s . $ext;
											?>
											<div class="add">
												<button class="btn btn-danger my-cart-btn my-cart-b " data-id="<?php echo $res2['product_id']; ?>" data-name="<?php echo $res2['product_title']; ?>" data-summary="summary 1" data-price="<?php echo $res2['product_price']; ?>" data-quantity="1" data-image="<?php echo $image; ?>">Add to Cart</button>
											</div>

										</div>
									</div>
								</div>
							<?php
							}

							?>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="tab-pane  text-style" id="tab2">
						<div class=" con-w3l">
							<?php
							/*$q = "SELECT v.email from vendors v JOIN  customers c ON v.pincode= c.pincode WHERE c.email='$cust'";
								$data= mysqli_query($conn, $q);
								$total= mysqli_num_rows($data);
								while($res= mysqli_fetch_assoc($data)){
								if($total > 0){
									$vendor= $res['email'];
								}*/

							/*echo $vendor;*/
							$q2 = "SELECT * FROM products WHERE product_cat=20 LIMIT 4";
							$data2 = mysqli_query($conn, $q2);
							$total2 = mysqli_num_rows($data2);

							while ($res2 = mysqli_fetch_assoc($data2)) {
							?>
								<div class="col-md-3 m-wthree">
									<div class="col-m">
										<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img" id="<?php echo $res2['product_id']; ?>">
											<?php echo "<img src='images/" . $res2['product_image'] . "'>"; ?>
											<div class="offer">
												<p><span>Offer</span></p>
											</div>
										</a>
										<div class="mid-1">
											<div class="women">
												<h6>
													<?php echo $res2['product_title']; ?>
												</h6>
											</div>
											<div class="mid-2">
												<p><label> Rs <?php echo $res2['product_price'] + 20; ?></label><em class="item_price"> Rs <?php echo $res2['product_price']; ?></em></p>
												<div class="block">
													<div class="starbox small ghosting"> </div>
												</div>
												<div class="clearfix"></div>
											</div>
											<?php
											$s = "images/";
											$ext = $res2['product_image'];
											$image = $s . $ext;
											?>
											<div class="add">
												<button class="btn btn-danger my-cart-btn my-cart-b " data-id="<?php echo $res2['product_id']; ?>" data-name="<?php echo $res2['product_title']; ?>" data-summary="summary 1" data-price="<?php echo $res2['product_price']; ?>" data-quantity="1" data-image="<?php echo $image; ?>">Add to Cart</button>
											</div>

										</div>
									</div>
								</div>
							<?php
							}

							?>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="tab-pane  text-style" id="tab3">
						<div class=" con-w3l">
							<?php
							/*$q = "SELECT v.email from vendors v JOIN  customers c ON v.pincode= c.pincode WHERE c.email='$cust'";
								$data= mysqli_query($conn, $q);
								$total= mysqli_num_rows($data);
								while($res= mysqli_fetch_assoc($data)){
								if($total > 0){
									$vendor= $res['email'];
								}*/

							/*echo $vendor;*/
							$q2 = "SELECT * FROM products WHERE product_cat=16 LIMIT 4";
							$data2 = mysqli_query($conn, $q2);
							$total2 = mysqli_num_rows($data2);

							while ($res2 = mysqli_fetch_assoc($data2)) {
							?>
								<div class="col-md-3 m-wthree">
									<div class="col-m">
										<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img" id="<?php echo $res2['product_id']; ?>">
											<?php echo "<img src='images/" . $res2['product_image'] . "'>"; ?>
											<div class="offer">
												<p><span>Offer</span></p>
											</div>
										</a>
										<div class="mid-1">
											<div class="women">
												<h6>
													<?php echo $res2['product_title']; ?>
												</h6>
											</div>
											<div class="mid-2">
												<p><label> Rs <?php echo $res2['product_price'] + 20; ?></label><em class="item_price"> Rs <?php echo $res2['product_price']; ?></em></p>
												<div class="block">
													<div class="starbox small ghosting"> </div>
												</div>
												<div class="clearfix"></div>
											</div>
											<?php
											$s = "images/";
											$ext = $res2['product_image'];
											$image = $s . $ext;
											?>
											<div class="add">
												<button class="btn btn-danger my-cart-btn my-cart-b " data-id="<?php echo $res2['product_id']; ?>" data-name="<?php echo $res2['product_title']; ?>" data-summary="summary 1" data-price="<?php echo $res2['product_price']; ?>" data-quantity="1" data-image="<?php echo $image; ?>">Add to Cart</button>
											</div>

										</div>
									</div>
								</div>
							<?php
							}

							?>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="tab-pane text-style" id="tab4">
						<div class=" con-w3l">
							<?php
							/*$q = "SELECT v.email from vendors v JOIN  customers c ON v.pincode= c.pincode WHERE c.email='$cust'";
								$data= mysqli_query($conn, $q);
								$total= mysqli_num_rows($data);
								while($res= mysqli_fetch_assoc($data)){
								if($total > 0){
									$vendor= $res['email'];
								}*/

							/*echo $vendor;*/
							$q2 = "SELECT * FROM products WHERE product_cat=19 LIMIT 4";
							$data2 = mysqli_query($conn, $q2);
							$total2 = mysqli_num_rows($data2);

							while ($res2 = mysqli_fetch_assoc($data2)) {
							?>
								<div class="col-md-3 m-wthree">
									<div class="col-m">
										<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img" id="<?php echo $res2['product_id']; ?>">
											<?php echo "<img src='images/" . $res2['product_image'] . "'>"; ?>
											<div class="offer">
												<p><span>Offer</span></p>
											</div>
										</a>
										<div class="mid-1">
											<div class="women">
												<h6>
													<?php echo $res2['product_title']; ?>
												</h6>
											</div>
											<div class="mid-2">
												<p><label> Rs <?php echo $res2['product_price'] + 20; ?></label><em class="item_price"> Rs <?php echo $res2['product_price']; ?></em></p>
												<div class="block">
													<div class="starbox small ghosting"> </div>
												</div>
												<div class="clearfix"></div>
											</div>
											<?php
											$s = "images/";
											$ext = $res2['product_image'];
											$image = $s . $ext;
											?>
											<div class="add">
												<button class="btn btn-danger my-cart-btn my-cart-b " data-id="<?php echo $res2['product_id']; ?>" data-name="<?php echo $res2['product_title']; ?>" data-summary="summary 1" data-price="<?php echo $res2['product_price']; ?>" data-quantity="1" data-image="<?php echo $image; ?>">Add to Cart</button>
											</div>

										</div>
									</div>
								</div>
							<?php
							}
							?>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	</div>

	<!--content-->
	<!-- <div class="content-mid">
		<div class="container">

		
		
			
			<div class="clearfix"></div>
		</div>
	</div> -->
	<!--content-->
	<!-- Carousel
    ================================================== -->
	<!-- <div id="myCarousel" class="carousel slide" data-ride="carousel"> -->
		<!-- Indicators -->
		<!-- <ol class="carousel-indicators"> -->
			<!-- <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li> -->
			<!-- <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li> -->
		</ol>
		<!-- <div class="carousel-inner" role="listbox">
			<div class="item active">
				<a href="kitchen.php"> <img class="first-slide" src="images/ba.jpg" alt="First slide"></a>

			</div>
			<div class="item">
				<a href="care.php"> <img class="second-slide " src="images/ba1.jpg" alt="Second slide"></a>

			</div>
			<div class="item">
				<a href="hold.php"><img class="third-slide " src="images/ba2.jpg" alt="Third slide"></a>

			</div> -->
			<!-- 
        <div class="item">
          <a href="bake.php"><img class="fourth-slide " src="images/ba3.jpg" alt="Third slide" style="height: 450px; width: 1600px;"></a>
          
        </div>

        <div class="item">
          <a href="snacks.php"><img class="fifth-slide " src="images/ba4.png" alt="Third slide"  style="height: 450px; width: 1600px;"></a>
          
        </div> -->

		</div>

	</div><!-- /.carousel -->

	<!--content-->
	<div class="product">
		<div class="container">
			<div class="spec ">
				<h3>Special Offers</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
			<div class=" con-w3l">
				<?php
				/*$q = "SELECT v.email from vendors v JOIN  customers c ON v.pincode= c.pincode WHERE c.email='$cust'";
								$data= mysqli_query($conn, $q);
								$total= mysqli_num_rows($data);
								while($res= mysqli_fetch_assoc($data)){
								if($total > 0){
									$vendor= $res['email'];
								}*/

				/*echo $vendor;*/
				$q2 = "SELECT * FROM products LIMIT 16, 24";
				$data2 = mysqli_query($conn, $q2);
				$total2 = mysqli_num_rows($data2);

				while ($res2 = mysqli_fetch_assoc($data2)) {
				?>
					<div class="col-md-3 pro-1">
						<div class="col-m">
							<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img" id="<?php echo $res2['product_id']; ?>">
								<?php echo "<img src='images/" . $res2['product_image'] . "'>"; ?>
							</a>
							<div class="mid-1">
								<div class="women">
									<h6>
										<?php echo $res2['product_title']; ?>
									</h6>
								</div>
								<div class="mid-2">
									<p><label> Rs <?php echo $res2['product_price'] + 20; ?></label><em class="item_price"> Rs <?php echo $res2['product_price']; ?></em></p>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="clearfix"></div>
								</div>
								<?php
								$s = "images/";
								$ext = $res2['product_image'];
								$image = $s . $ext;
								?>
								<div class="add">
									<button class="btn btn-danger my-cart-btn my-cart-b " data-id="<?php echo $res2['product_id']; ?>" data-name="<?php echo $res2['product_title']; ?>" data-summary="summary 1" data-price="<?php echo $res2['product_price']; ?>" data-quantity="1" data-image="<?php echo $image; ?>">Add to Cart</button>
								</div>

							</div>
						</div>
					</div>
				<?php
				}
				?>
				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<!--footer-->
	<?php include_once("footer.php"); ?>
	<!-- //footer-->

	<!-- smooth scrolling -->
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
				console.log(id);
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