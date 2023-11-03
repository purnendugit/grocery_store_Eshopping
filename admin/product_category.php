<!-- head -->
<?php include_once 'layouts/head.php'; ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once 'layouts/side_bar.php'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include_once 'layouts/top_menu.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Create Prodcuts Category</h1>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4">
                                <?php if(isset($_GET['ins'])){ ?>
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <h5><i class="icon fas fa-check"></i> Alert!</h5>
                                        Success Added....
                                    </div>
                                <?php } ?>
                                <form action="products_controller.php" method="post">
                                    <table cellpadding="10">
                                        <tr>
                                            <td><b>Category</b></td>
                                            <td>
                                                <select name="category" id="">
                                                    <option value="" selected>--CHOOSE--</option>
                                                    <option value="0">No Category</option>
                                                    <?php 
                                                        include '../Database/db.php';
                                                        $sel = "SELECT * FROM category WHERE product_id = '0'";
                                                        $res = $db -> query($sel);
                                                        while($data = $res -> fetch_assoc()){
                                                    ?>
                                                        <option value="<?php echo $data['ctg_id']; ?>"><?php echo $data['product_name']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Prodcut Name</b></td>
                                            <td>
                                                <input type="text" name="product" placeholder="Type Prodcut Name" id="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Confirm</b></td>
                                            <td>
                                                <input type="reset" value="Refresh" class="btn btn-primary">&nbsp;
                                                <input type="submit" value="Add To List" name="category_add" class="btn btn-success toastsDefaultSuccess">
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include_once 'layouts/footer.php'; ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- script -->
    <?php include_once 'layouts/script.php'; ?>