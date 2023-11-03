
<?php include_once "layouts/head.php" ?>

	
<!-- bottom-head -->
<?php include_once "layouts/header-bottom.php" ?>


<!-- //header -->
<!-- products-breadcrumb -->

<?php include_once "layouts/navigation.php" ?>
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>
				<li>View Cart</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<li><a href="products.html">Branded Foods</a></li>
						<li><a href="household.html">Households</a></li>
						<li class="dropdown mega-dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Veggies & Fruits<span class="caret"></span></a>				
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>	
										<li><a href="vegetables.html">Vegetables</a></li>
										<li><a href="vegetables.html">Fruits</a></li>
									</ul>
								</div>                  
							</div>				
						</li>
						<li><a href="kitchen.html">Kitchen</a></li>
						<li><a href="short-codes.html">Short Codes</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
										<li><a href="drinks.html">Soft Drinks</a></li>
										<li><a href="drinks.html">Juices</a></li>
									</ul>
								</div>                  
							</div>	
						</li>
						<li><a href="pet.html">Pet Food</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Frozen Foods<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
										<li><a href="frozen.html">Frozen Snacks</a></li>
										<li><a href="frozen.html">Frozen Nonveg</a></li>
									</ul>
								</div>                  
							</div>	
						</li>
						<li><a href="bread.html">Bread & Bakery</a></li>
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
	</div>
		<div class="w3l_banner_nav_right">
<!-- about -->
		<div class="privacy about">
			<h3>View<span>Cart</span></h3>
		</div>
	      <div class="checkout-right">
					
				<!-- <table class="timetable_sub">
					<thead>
						<tr>
							<th>SL No.</th>	
							<th>Product</th>
							<th>Quality</th>
							<th>Product Name</th>
						
							<th>Price</th>
							<th>Remove</th>
						</tr>
					</thead>
					<tbody><tr class="rem1">
						<td class="invert">1</td>
						<td class="invert-image"><a href="single.html"><img src="images/1.png" alt=" " class="img-responsive"></a></td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<td class="invert">Fortune Sunflower Oil</td>
						
						<td class="invert">$290.00</td>
						<td class="invert">
							<div class="rem">
								<div class="close1"> </div>
							</div>

						</td>
					</tr>
					<tr class="rem2">
						<td class="invert">2</td>
						<td class="invert-image"><a href="single.html"><img src="images/3.png" alt=" " class="img-responsive"></a></td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<td class="invert">Basmati Rise (5 Kg)</td>
					
						<td class="invert">$250.00</td>
						<td class="invert">
							<div class="rem">
								<div class="close2"> </div>
							</div>

						</td>
					</tr>
					<tr class="rem3">
						<td class="invert">3</td>
						<td class="invert-image"><a href="single.html"><img src="images/2.png" alt=" " class="img-responsive"></a></td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<td class="invert">Pepsi Soft Drink (2 Ltr)</td>
						
						<td class="invert">$15.00</td>
						<td class="invert">
							<div class="rem">
								<div class="close3"> </div>
							</div>
	
						</td>
					</tr>

				</tbody></table> -->

				<div class="row">
            <div class="container">
                <div class="row">
                <?php 
                    include 'Database/db.php';
					$sid = $_SESSION['user_id'];
                    $sl = "SELECT * FROM user_cart WHERE uid = '$sid'";
                    $rs = $db -> query($sl);
                    $n = $rs -> num_rows;
                ?>
                <h4 class="mb-sm-4 mb-3">Your shopping cart contains:
					<span><?php echo $n; ?> Products</span>
				</h4>
                    <table class="table">
                        <thead>
                            <th>Sl No.</th>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Product Quantity</th>
                            <th>Product Price</th>
                            <th>Total</th>
                            <th>Remove</th>
							<th>Update</th>
                        </thead>
                        <tbody>
                            <?php
                                include 'Database/db.php';
                                $a = $_SESSION['user_id'];
                                $b = 0;
                                $total = 0;
                                $g_total = 0;
                                $sel = "SELECT * FROM user_cart WHERE uid = '$a'";
                                $res = $db -> query($sel);
                                while($data = $res -> fetch_assoc()){
                                    $b++;
                                    $x = $data['pid'];
                                    $xyz = (int)$data['p_price'];
                                    $abc = (int)$data['p_qty'];
                            ?>

                                <tr>
                                    <td><?php echo $b; ?></td>
                                    <td><?php echo $data['p_name']; ?></td>
                                    <td>
                                        <img src="UPLOAD IMAGES/<?php echo $data['p_img']; ?>" style="width: 60px;" alt="">
                                    </td>
                                    <td>
                                        <form action="user_controller.php" method="post">
                                            <input type="hidden" name="uid" value="<?php echo $a; ?>">
                                            <input type="hidden" name="pid" value="<?php echo $x; ?>">
                                            <input type="number" name="qty" class="form-control" min="1" max="5" value="<?php echo $abc; ?>" id=""><br>
                                            <input type="submit" value="Update Quantity" name="upd_qty" class="btn btn-success">
                                        </form>
                                    </td>
                                    <td><?php echo $xyz; ?></td>
                                    <td><?php $total = number_format($xyz * $abc); echo $total; ?></td>
                                    <td>
                                        <form action="user_controller.php" method="post">
                                            <input type="hidden" name="uid" value="<?php echo $a; ?>">
                                            <input type="hidden" name="pid" value="<?php echo $x; ?>">
                                            <input type="submit" value="Remove" name="product_delete" class="btn btn-danger" onclick="return confirm('Want TO Remove From Cart?');">
                                        </form>
                                    </td>
                                </tr>

                            <?php 
                                $g_total += (int)$total;
                                }
                            ?>
                            <tr>
                                <td>
                                    <?php echo "<h4>Number Of Items: $n</h4>"; ?>
                                </td>
                                <td colspan="3">
                                    <?php echo "<h4 class='text-center'>Grand Total: - $g_total</h4>"; ?>
                                </td>
                                <td colspan="2">
                                    <form action="user_controller.php" method="post">
                                        <input type="hidden" name="uid" value="<?php echo $a; ?>">
                                        <input type="submit" value="Remove All Items" name="full_del" class="btn btn-outline-danger" onclick="return confirm('Want To Remove All Items From Cart?');">
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
					
					
                    <!-- <a href="user_checkout.php" class="btn btn-outline-success">Good To Go For CheckOut</a> -->
                </div>
            </div>
        </div>
			</div>
			<div class="checkout-right-basket">
				        	<a href="user_checkout.php">Good To Go For CheckOut <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
			</div>

			<br>
			<br>
			<!-- <div class="checkout-left">	
				<div class="col-md-4 checkout-left-basket">
					<h4>Continue to basket</h4>
					<ul>
						<li>Product1 <i>-</i> <span>$15.00 </span></li>
						<li>Product2 <i>-</i> <span>$25.00 </span></li>
						<li>Product3 <i>-</i> <span>$29.00 </span></li>
						<li>Total Service Charges <i>-</i> <span>$15.00</span></li>
						<li>Total <i>-</i> <span>$84.00</span></li>
					</ul>
				</div>
				<div class="col-md-8 address_form_agile">
					  <h4>Add a new Details</h4>
				<form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
									<section class="creditly-wrapper wthree, w3_agileits_wrapper">
										<div class="information-wrapper">
											<div class="first-row form-group">
												<div class="controls">
													<label class="control-label">Full name: </label>
													<input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
												</div>
												<div class="w3_agileits_card_number_grids">
													<div class="w3_agileits_card_number_grid_left">
														<div class="controls">
															<label class="control-label">Mobile number:</label>
														    <input class="form-control" type="text" placeholder="Mobile number">
														</div>
													</div>
													<div class="w3_agileits_card_number_grid_right">
														<div class="controls">
															<label class="control-label">Landmark: </label>
														 <input class="form-control" type="text" placeholder="Landmark">
														</div>
													</div>
													<div class="clear"> </div>
												</div>
												<div class="controls">
													<label class="control-label">Town/City: </label>
												 <input class="form-control" type="text" placeholder="Town/City">
												</div>
													<div class="controls">
															<label class="control-label">Address type: </label>
												     <select class="form-control option-w3ls">
																							<option>Office</option>
																							<option>Home</option>
																							<option>Commercial</option>
							
																					</select>
													</div>
											</div>
											<button class="submit check_out">Delivery to this Address</button>
										</div>
									</section>
								</form>
									<div class="checkout-right-basket">
				        	<a href="payment.html">Make a Payment <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
			      	</div>
					</div>
			
				<div class="clearfix"> </div>
				
			</div> -->

		
<!-- //about -->
		</div>
		<div class="clearfix"></div>
	</div>

<!-- //banner -->

<div class="newsletter">
		<div class="container">
			<div class="w3agile_newsletter_left">
				<h3>sign up for our newsletter</h3>
			</div>
			<div class="w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="subscribe now">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

<?php include_once "layouts/footer.php" ?>