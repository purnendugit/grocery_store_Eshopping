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
                    <h1 class="h3 mb-4 text-gray-800">Products Category List</h1>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php if(isset($_GET['del'])){ ?>
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                                        Delete Done....
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
                                        <th>Parent Product</th>
                                        <th>Child Product</th>
                                        <th>Created At</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            include '../Database/db.php';
                                            $a = 0;
                                            $sel = "SELECT A.*,B.product_name AS pname FROM category AS A LEFT JOIN category AS B ON B.ctg_id = A.product_id";
                                            $res = $db -> query($sel);
                                            while($data = $res -> fetch_assoc()){
                                                $a++;
                                        ?>
                                            <tr>
                                                <td><?php echo $a; ?></td>
                                                <td><?php echo $data['pname']; ?></td>
                                                <td><?php echo $data['product_name']; ?></td>
                                                <td><?php echo $data['created_at']; ?></td>
                                                <td><a href="product_category_list_edit.php?id=<?php echo $data['ctg_id']; ?>" class="btn btn-success" onclick="return confirm('Want To Edit?');">Edit</a></td>
                                                <td>
                                                    <?php 
                                                        $b = $data['ctg_id'];
                                                        $sell = "SELECT * FROM category WHERE product_id = '$b'";
                                                        $rs = $db -> query($sell);
                                                        if($rs -> num_rows == 0){
                                                    ?>
                                                        <a href="product_category_list_delete.php?id=<?php echo $data['ctg_id']; ?>" class="btn btn-danger" onclick="return confirm('Want To Delete?');">Delete</a>
                                                    <?php } ?>
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