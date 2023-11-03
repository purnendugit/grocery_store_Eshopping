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
                    <h1 class="h3 mb-4 text-gray-800"><b>Add New Prodcut</b></h1>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4">
                                <form action="products_controller.php" method="post" enctype="multipart/form-data">
                                    <table cellpadding="10">
                                        <tr>
                                            <td><b>Parent Category</b></td>
                                            <td>
                                                <select name="parent" id="parent">
                                                    <option value="" selected>--CHOOSE--</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Child Category</b></td>
                                            <td>
                                                <select name="child" id="child">
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Product Name</b></td>
                                            <td>
                                                <input type="text" name="pn" placeholder="Product Name" id="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Product Price</b></td>
                                            <td>
                                                <input type="text" name="pp" placeholder="100.00" id="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Discount On Prodcut</b></td>
                                            <td>
                                                <input type="text" name="pd" placeholder="10%" id="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Prodcut Sell Price</b></td>
                                            <td>
                                                <input type="text" name="ps" placeholder="90.00" id="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Product Type</b></td>
                                            <td>
                                                <input type="text" name="col" placeholder="Drinks/Cake" id="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Prodcut Quentity</b></td>
                                            <td>
                                                <input type="number" name="qty" placeholder="10" id="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Description</b></td>
                                            <td>
                                                <textarea name="desc" id="" cols="30" rows="10"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Images</b></td>
                                            <td>
                                                <input type="file" name="img" id="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Confirm</b></td>
                                            <td>
                                                <input type="reset" value="Refresh" class="btn btn-primary">&nbsp;
                                                <input type="submit" value="Add To Prodcut List" name="add_product" class="btn btn-success">
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                            <div class="col-sm-4">
                                <?php if(isset($_GET['ins'])){ ?>
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <h5><i class="icon fas fa-check"></i> Alert!</h5>
                                        Success Added....
                                    </div>
                                <?php } ?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            function loadData(type, c_id){
                $.ajax({
                    url: "ajax-dependent.php",
                    type: "POST",
                    data: {type : type, id : c_id},
                    success: function(data){
                        if(type == "childdata"){
                            $("#child").html(data);
                        } else {
                            $("#parent").append(data);
                        }
                    }
                });
            }   
            
            loadData();
            
            $("#parent").on("change", function(){
                var par = $("#parent").val();
                
                loadData("childdata", par);
            });
        });
        </script>

    <!-- script -->
    <?php include_once 'layouts/script.php'; ?>