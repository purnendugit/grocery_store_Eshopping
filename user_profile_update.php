<?php include_once "layouts/head.php" ?>

	
<!-- bottom-head -->
<?php include_once "layouts/header-bottom.php" ?>


<!-- //script-for sticky-nav -->
<?php include_once "layouts/navigation.php" ?>


<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>
				<li>Update Profile</li>
			</ul>
		</div>
	</div>


    <style>
    /* Add CSS styles to create space between table rows */
   /* Add CSS styles to create space between table cells */
table {
    border-spacing: 10px; /* Adjust the value as needed to create space between cells */
}

/* Style the table cells if necessary */
table td {
    padding: 10px; /* Add padding to table cells */
}

</style>

    <?php 
                
                include 'Database/db.php';


                $id=$_GET['id'];

                $sel="SELECT * FROM user_register WHERE user_id='$id'";
                $res=$db->query($sel);
                $dt=$res->fetch_assoc();

                
                ?>

            <div class="privacy about">
			    <h3>Update Profile</h3>   
            </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">      
				
                </div>		
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form action="user_controller.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $dt['user_id']; ?>">
                    <table cellpadding="10">
                        <tr>

                            <td><b>User Name:</b></td>
                            <td>
                                <input type="text" name="unm" value="<?php echo $dt['full_name'];?>" id="">
                            </td>
                        </tr>
                        <tr>
                            <td><b>Email:</b></td>
                            <td>
                                <input type="email" name="em" value="<?php echo $dt['email'];?>" id="">
                            </td>
                        </tr>
                        <br>
                        <tr>
                            <td><b>Mobile:</b></td>
                            <td>
                                <input type="text" name="mb" value="<?php echo $dt['phone'];?>" id="">
                            </td>
                        </tr>
                        <tr>
                            <td><b>Upload Images:</b></td>
                            <td>
                                <input type="file" name="img" id="">
                            </td>
                            <td>
                                <img src="UPLOAD IMAGES/<?php echo $dt['image'];?>" style="width: 80px;" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td><b>Confirm</b></td>
                            <td>
                                <input type="reset" value="Refresh" name="" class="btn btn-info">&nbsp;&nbsp;
                                <input type="submit" value="Update Now" name="upd_profile" class="btn btn-success">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>

    <br>
    <br>

    
    <?php include_once "layouts/footer.php" ?>
	