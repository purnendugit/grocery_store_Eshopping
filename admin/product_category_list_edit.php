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
                    <h1 class="h3 mb-4 text-gray-800">Edit Prodcuts Category Page</h1>

                    <?php 
                        include '../Database/db.php';
                        $req = $_GET['id'];
                        $sel = "SELECT A.*,B.product_name AS pname FROM category AS A LEFT JOIN category AS B ON B.ctg_id = A.product_id WHERE A.ctg_id = '$req'";
                        $res = $db -> query($sel);
                        $data = $res -> fetch_assoc();
                                            
                    ?>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4">
                                <form action="products_controller.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $data['ctg_id']; ?>">
                                    <table cellpadding="10">
                                        <tr>
                                            <td><b>Category</b></td>
                                            <td>
                                                <select name="category" id="">
                                                    <?php if($data['pname'] == ""){ ?>
                                                        <option value="<?php echo $data['product_id']; ?>" selected>No Parent</option>
                                                    <?php } else{ ?>
                                                        <option value="<?php echo $data['product_id']; ?>" selected><?php echo $data['pname']; ?></option>                                       
                                                    <?php } ?>                                                      
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Prodcut Name</b></td>
                                            <td>
                                                <input type="text" name="product" value="<?php echo $data['product_name']; ?>" id="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Confirm</b></td>
                                            <td>
                                                <input type="reset" value="Refresh" class="btn btn-primary">&nbsp;
                                                <input type="submit" value="Update Now" name="category_upd" class="btn btn-success toastsDefaultSuccess">
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