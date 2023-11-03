<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php"><span>Grocery</span> Store</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="special_items">
				
				<?php
				if(isset($_SESSION['login']) && $_SESSION['login']==true){
					include 'Database/db.php';
					$a=$_SESSION['user_id'];
					echo"
					<li><a href=\"user_make_payment.php\">Orders</a><i>/</i></li>		
					<li><a href=\"about.php\">About Us</a><i>/</i></li>
					<li><a href=\"products.php\">Best Deals</a><i>/</i></li>
					<li><a href=\"services.php\">Services</a><i>/</i></li>
					<li><a href=\"user_profile_update.php?id=$a\">Update Profile</a><i>/</i></li>
					<li><a href=\"user_change_password.php\">Password change</a></li>
					";
				}
				else{
					echo"
					<li><a href=\"events.php\">Events</a><i>/</i></li>		
					<li><a href=\"about.php\">About Us</a><i>/</i></li>
					<li><a href=\"products.php\">Best Deals</a><i>/</i></li>
					<li><a href=\"services.php\">Services</a></li>
					";
				}
				
				?>
					
					
				</ul>
				<!-- <ul class="special_items">
				

					<li><a href="events.html">Events</a><i>/</i></li>		
					<li><a href="about.html">About Us</a><i>/</i></li>
					<li><a href="products.html">Best Deals</a><i>/</i></li>
					<li><a href="services.html">Services</a></li>
					
					
				</ul> -->
			</div>
			<!-- <div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>(+0123) 234 567</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">store@grocery.com</a></li>
				</ul>
			</div> -->
			<div class="clearfix"> </div>
		</div>
	</div>