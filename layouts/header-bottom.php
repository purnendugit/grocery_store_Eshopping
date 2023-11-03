
<!-- header -->
	<div class="agileits_header">
		<div class="w3l_offers">
			<a href="products.php">Today's special Offers !</a>
		</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		<div class="product_list_header"> 
		
		<?php 
				if(isset($_SESSION['login']) && $_SESSION['login']==true){ 

					$a = $_SESSION['user_id'];
					
					include 'Database/db.php';
					$sel = "SELECT * FROM user_cart WHERE uid = '$a'";
					$res = $db -> query($sel);
					$no = $res -> num_rows;

					echo "
					<input type=\"submit\" name=\"submit\" value=\"View your cart\" class=\"button\"  /> <a href=\"user_view.php\"> <span style=\"top: -10px;
					color:white;
					border-radius: 40%;
					background: red;
					padding: 8px; font-size:14px; font-weight:800;\">$no</a></span>
					";
				}else{

					echo"
					<form action=\"#\" method=\"post\" class=\"last\">
                 	<fieldset>
                     <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
                     <input type=\"hidden\" name=\"display\" value=\"1\" />
                     <input type=\"submit\" name=\"submit\" value=\"View your cart\" class=\"button\" />
                 	</fieldset>
            		</form>
					";

				}
		?>

										
		
		 	<!-- <form action="#" method="post" class="last">
                 <fieldset>
                     <input type="hidden" name="cmd" value="_cart" />
                     <input type="hidden" name="display" value="1" />
                     <input type="submit" name="submit" value="View your cart" class="button" />
                 </fieldset>
             </form> -->
		 </div>

		<div class="w3l_header_right">
			<ul>
			
			<?php
				if(isset($_SESSION['login']) && $_SESSION['login']==true){
					include 'Database/db.php';
					$a=$_SESSION['user_id'];
					$sel="SELECT * FROM user_register WHERE user_id='$a'";
					$res=$db->query($sel);
					$data=$res->fetch_assoc();
					$b=$data['full_name'];
					$c=$data['image'];
					echo "
					<li>
					<img src=\"UPLOAD IMAGES/$c\" alt=\"\" style=\"width:20px; border-radius:50%\">&nbsp;&nbsp;&nbsp;<h6 style=\"color:white\">$b</h6>
				   </li>

				<li>
					<a href=\"logout.php\"><h6 style=\"color:white; font-weight:200px;\">Logout</h6></a>
				</li>
					";
				}
				else{
					echo "
					<li class=\"dropdown profile_details_drop\">
					<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span class=\"caret\"></span></a>
					<div class=\"mega-dropdown-menu\">
						<div class=\"w3ls_vegetables\">

							<ul class=\"dropdown-menu drp-mnu\">

							


								<li><a href=\"login.php\">Login</a></li> 
								<li><a href=\"login.php\">Sign Up</a></li>
							

							
							</ul>
						</div>                  
					</div>	
				</li>
					";
				}
			?>
				
				
				
				
							<!-- <li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
								<div class="mega-dropdown-menu">
									<div class="w3ls_vegetables">

										<ul class="dropdown-menu drp-mnu">

										


											<li><a href="login.php">Login</a></li> 
											<li><a href="login.php">Sign Up</a></li>
										

										
										</ul>
									</div>                  
								</div>	
							</li> -->


							
			
							
			
			</ul>
		</div>

		<?php
				if(isset($_SESSION['login']) && $_SESSION['login']==true){
					echo "";
				}
				else{
					echo" 
					<div class=\"w3l_header_right1\">
			<h2><a href=\"mail.php\">Contact Us</a></h2>			

		</div>
					";
				}
		
				?>

		<div class="clearfix"> </div>
	</div>
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>