<?php include_once "layouts/head.php" ?>


	
<!-- bottom-head -->
<?php include_once "layouts/header-bottom.php" ?>


<!-- //script-for sticky-nav -->
<?php include_once "layouts/navigation.php" ?>

<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>
				<li>Orders</li>
			</ul>
		</div>
	</div>
    
		<div class="w3l_banner_nav_center">

        <div class="privacy about">
			<h3>Order<span> History </span></h3>
	</div>
      
	<table class="table table-striped table-inverse table-responsive">
		<thead class="thead-inverse">
			<tr>
					<th>SL No.</th>
                    <th>User Name</th>
                    <th>Mobile No.</th>
                    <th>Landmak</th>
                    <th>Town</th>
                    <th>Address</th>
                    <th>Products</th>
                    <th>Total Price</th>
                    <th colspand="2" class="text-center">Action</th>
			</tr>
			</thead>
			<tbody>
				

    <!-- <div class="row">
	<table class="table">
                <thead>
                    <th>SL No.</th>
                    <th>User Name</th>
                    <th>Mobile No.</th>
                    <th>Landmak</th>
                    <th>Town</th>
                    <th>Address</th>
                    <th>Products</th>
                    <th>Total Price</th>
                    <th colspand="2" class="text-center">Action</th>
                </thead>
                <tbody> -->
                    <?php 
                        include 'Database/db.php';
                        $a = $_SESSION['user_id'];
                        $b = 0;
                        $sel = "SELECT * FROM ORDERS WHERE uid = '$a'";
                        $rs = $db -> query($sel);
                        while($data = $rs -> fetch_assoc()){
                            $b++;
                    ?>

                        <tr>
                            <td scope="row" > <b> <?php echo $b; ?> </b></td>
                            <td><?php echo $data['u_name']; ?></td>
                            <td><?php echo $data['mobile']; ?></td>
                            <td><?php echo $data['landmark']; ?></td>
                            <td><?php echo $data['town']; ?></td>
                            <td><?php echo $data['address']; ?></td>
                            <td><?php echo $data['t_product']; ?></td>
                            <td><?php echo $data['t_price']; ?></td>
                            <td>
							<?php 
                                                    if($data['status']==0){
                                                        echo "<button type=\"button\" class=\"btn btn-info\" style=\"font-weight:bold;\"><span class=\"fa fa-bars\"  aria-hidden=\"true\" >Pending</button>";
                                                    }
                                                    else if($data['status']==1){
                                                        echo "<button type=\"button\" class=\"btn btn-warning\"><span class=\"fa fa-cog fa-spin\"  aria-hidden=\"true\" ></span> Processing!</button>";
                                                    }
                                                    else if($data['status']==2){
                                                        echo "<button type=\"button\" class=\"btn btn-success\" ><span  class=\"fa fa-check-circle\" aria-hidden=\"true\">Delivered</button>";
                                                    }
													else if($data['status']==3){
                                                        echo "<button type=\"button\" class=\"btn btn-danger\"> <i class=\"fa fa-close\"></i>cancelled</button>";
                                                    }
													?>
							</td>
							
                            <!-- <td>
                                <form action="" method="post">
                                    <input type="hidden" name="id" value="<?php echo $a; ?>">
                                    <input type="submit" value="Cancel Order" name="order_cancel" class="btn btn-outline-danger" onclick="return confirm('Want To Cancel Order?');">
                                </form></form>
                            </td> -->
							<td> <a class="btn btn-delete" href="user_order_delete.php?id=<?php echo $data['o_id'];?>" onclick="return confirm('Want To Cancel Order?')" ><i class="fa-solid fa-trash fa-fade fa-lg" style="color: #d20404;"></i></a> </td>
                        </tr>



                    <?php } ?>
                </tbody>
            </table>
            <div class="checkout-right-basket">
						<a href="payment.html">Make a Payment
							<span class="far fa-hand-point-right"></span>
						</a>
					</div>
    </div>

		</div>
		<div class="clearfix"></div>
	</div>
   

    <!-- banner -->
	
<!-- //banner -->
    