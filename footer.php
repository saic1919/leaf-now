<?php 
session_start();

include("connection.php");
error_reporting(0);

$cust= $_SESSION['customer'];
?>

<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grid">
			<h3>About Us</h3>
			<p> Ever since industrialization started the care for plants has made it to our least priority
list, Even though mankind requires plants to balance the food chain that he’s a part of,
but the plant enthusiasts are everywhere, be it big metropolitan cities or rural areas, so
we aim to bring in a platform that can connect these plant/nature enthusiasts.
s</p>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Menu</h3>
			<!-- <ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="kitchen.php">Kitchen</a></li>
				<li><a href="care.php">Personal Care</a></li>
				<li><a href="snacks.php">Snacks and Branded Foods</a></li>
				<li><a href="bake.php">Bakery, Eggs and Meat</a></li> 
				<li><a href="hold.php">Household</a></li> 
				<li><a href="contact.php">Contact</a></li>
			</ul> -->
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="item.php?name=water_and_beverages">Baunsi</a></li>
				<li><a href="item.php?name=haircare">Flower</a></li>
				<li><a href="item.php?name=snacks">Vegetables</a></li>
				<li><a href="item.php?name=breads_and_buns">Show Plants</a></li> 
				<li><a href="donate.php">Donate</a></li> 
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Customer Services</h3>
			<ul>
				<li><a href="shipping.php">Shipping</a></li>
				<li><a href="terms.php">Terms & Conditions</a></li>
				<li><a href="faqs.php">FAQs</a></li>
				<li><a href="contact.php">Contact</a></li>
										 
				 
			</ul>
		</div>
		<?php 
			if(isset($_SESSION['customer']))
			{
				
			?>
		<div class="col-md-3 footer-grid">
			<h3>My Account</h3>
			<ul>
			
				<li><a href="cust-logout.php">Logout</a></li>
				
			</ul>
		</div>
		<?php
			}

			else{
				?>
		<div class="col-md-3 footer-grid">
			<h3>My Account</h3>
			<ul>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
				
			</ul>
		</div>
		<?php
			}

			?>		
		<div class="clearfix"></div>
			<div class="footer-bottom">
				<h2 ><a href="index.php"><b>T<br>H<br>E</b>Leaf Now <span> Best Nursary</span></a></h2>
				<p class="fo-para"> We Believe in providing you with the Best and Supreme Quality products for you</p>
				<ul class="social-fo">
					<li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				</ul>
				<div class=" address">
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-home" aria-hidden="true"></i> Davanagere </p>
					</div>
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-phone" aria-hidden="true"></i> +91 9482182149 </p>	
					</div>
					<div class="col-md-4 fo-grid1">
						<p><a href="mailto:info@example.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> kedareshg2000@gmail.com </a></p>
					</div>
					<div class="clearfix"></div>
					
					</div>
			</div>
		
	</div>
</div>