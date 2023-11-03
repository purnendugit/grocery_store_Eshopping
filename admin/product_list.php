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
                    <h1 class="h3 mb-4 text-gray-800">View All Prodcuts</h1>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php if(isset($_GET['del'])){ ?>
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                                        Delete Successfully....
                                    </div>
                                <?php } ?>
                                <?php if(isset($_GET['upd'])){ ?>
                                    <div class="alert alert-info alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <h5><i class="icon fas fa-info"></i> Alert!</h5>
                                        Update Successfully.....
                                    </div>
                                <?php } ?>
                                <table class="table">
                                    <thead>
                                        <th>SL NO.</th>
                                        <th>Parent Pro.</th>
                                        <th>Child Pro.</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                        <th>Sell Price</th>
                                        <th>Color</th>
                                        <th>Quentity</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            include '../Database/db.php';
                                            $a = 0;
                                            $sel = "SELECT * FROM products";
                                            $res = $db -> query($sel);
                                            while($dt = $res -> fetch_assoc()){
                                                $a++;
                                        ?>

                                            <tr>
                                                <td><?php echo $a; ?></td>
                                                <td><?php echo $dt['pr_name']; ?></td>
                                                <td><?php echo $dt['ch_name']; ?></td>
                                                <td><?php echo $dt['prod_name']; ?></td>
                                                <td><?php echo $dt['pp']; ?></td>
                                                <td><?php echo $dt['p_disc']; ?></td>
                                                <td><?php echo $dt['ps']; ?></td>
                                                <td><?php echo $dt['p_col']; ?></td>
                                                <td><?php echo $dt['p_qty']; ?></td>
                                                <td><?php echo $dt['p_desc']; ?></td>
                                                <td>
                                                    <img src="../UPLOAD IMAGES/<?php echo $dt['p_images']; ?>" style="width: 60px;" alt="">
                                                </td>
                                                <td>
                                                    <a href="product_list_edit.php?id=<?php echo $dt['p_id']; ?>" class="btn btn-success" onclick="return confirm('Want To Edit');">Edit</a>
                                                </td>
                                                <td>
                                                    <a href="product_list_delete.php?id=<?php echo $dt['p_id']; ?>" class="btn btn-danger" onclick="return confirm('Want To Delete?');">Delete</a>
                                                </td>
                                            </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
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