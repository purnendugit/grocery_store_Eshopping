<?php include_once "layouts/head.php" ?>

	
<!-- bottom-head -->
<?php include_once "layouts/header-bottom.php" ?>


<!-- //script-for sticky-nav -->
<?php include_once "layouts/navigation.php" ?>


<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>
				<li>Change Password</li>
			</ul>
		</div>
</div>

<div class="privacy about">
			    <h3>Change Password</h3>   
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

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <!-- tittle heading -->
                
            <!-- //tittle heading -->
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <form action="user_controller.php" method="post">
                <input type="hidden" name="id" value="<?php echo $_SESSION['user_id']; ?>">
                <table cellpadding="10">
                    <tr>
                        <td><b>Current Password</b></td>
                        <td>
                            <input type="password" name="cp" id="">
                        </td>
                    </tr>
                    <tr>
                        <td><b>New Password</b></td>
                        <td>
                            <input type="password" name="np" id="">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Confirm Password</b></td>
                        <td>
                            <input type="password" name="cfp" id="">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Confirm</b></td>
                        <td>
                            <input type="reset" value="Refresh" name="" class="btn btn-info">&nbsp;&nbsp;
                            <input type="submit" value="Update Now" name="upd_password" class="btn btn-success">
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