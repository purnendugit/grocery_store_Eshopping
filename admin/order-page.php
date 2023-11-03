<!-- Heade -->
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
                    <h1 class="h3 mb-2 text-gray-800">Orders Table</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>User Name</th>
                                            <th>Mobile</th>
                                            <th>Landmark</th>
                                            <th>Town</th>
                                            <th>Address</th>
                                            <th>Total Product</th>
                                            <th>Total Price</th>
                                            <th>Created At</th>
                                            <th>Change Status</th>
                                            <th class="text-center" colspand="2">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            include '../Database/db.php';
                                            $sel = "SELECT * FROM orders";
                                            $res = $db -> query($sel);
                                            while($dt = $res -> fetch_assoc()){
                                        ?>

                                            <tr>
                                                <td><?php echo $dt['u_name']; ?></td>
                                                <td><?php echo $dt['mobile']; ?></td>
                                                <td><?php echo $dt['landmark']; ?></td>
                                                <td><?php echo $dt['town']; ?></td>
                                                <td><?php echo $dt['address']; ?></td>
                                                <td><?php echo $dt['t_product']; ?></td>
                                                <td><?php echo $dt['t_price']; ?></td>
                                                <td><?php echo $dt['created_at']; ?></td>
                                                <td>
                                                    <form action="products_controller.php" method="post">
                                                        <input type="hidden" name="id" value="<?php echo $dt['o_id']; ?>">
                                                        <select name="order_status" id="">
                                                            <option value="" selected>--Selected--</option>
                                                            <option value="0">--Pending--</option>
                                                            <option value="1" >--Processing--</option>
                                                            <option value="2" >--Deliver--</option>
                                                            <option value="3" >--Reject--</option>
                                                        </select>
                                                        <br>
                                                        <br>
                                                        <input class="btn btn-warning" type="submit" value="Change Status" name="Change_Status">
                                                    </form>
                                                   
                                                   
                                            
                                                </td>
                                                <td>
                                                <?php 
                                                    if($dt['status']==0){
                                                        echo "Pending";
                                                    }
                                                    else if($dt['status']==1){
                                                        echo "Processing";
                                                    }
                                                    else if($dt['status']==2){
                                                        echo "Deliver";
                                                    }
                                                    else if($dt['status']==3){
                                                        echo "Reject";
                                                    }
                                                       
                                                    
 
                                                
                                                ?>
                                                   
                                                   <a class="btn btn-danger" href="order_delete.php?id=<?php echo $dt['o_id'];?> " onclick="return confirm('Want To Cancel Order?')">Delete</a>
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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>