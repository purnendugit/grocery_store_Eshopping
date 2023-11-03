<?php 

    include '../Database/db.php';

    if(isset($_POST['category_add'])){

        $a = $_POST['category'];
        $b = $_POST['product'];

        $ins = "INSERT INTO category SET product_id = '$a', product_name = '$b'";
        if($db -> query($ins)){
            header("location:product_category.php?ins=msg");
        }

    }

    if(isset($_POST['category_upd'])){

        $req = $_POST['id'];
        $a = $_POST['category'];
        $b = $_POST['product'];

        $ins = "Update category SET product_id = '$a', product_name = '$b' WHERE ctg_id = '$req'";
        if($db -> query($ins)){
            header("location:product_category_list.php?upd=msg");
        }

    }

    if(isset($_POST['add_product'])){

        $a = $_POST['parent'];
        $b = $_POST['child'];
        $c = $_POST['pn'];
        $d = $_POST['pp'];
        $e = $_POST['pd'];
        $f = $_POST['ps'];
        $g = $_POST['col'];
        $h = $_POST['qty'];
        $i = $_POST['desc'];
        $j = $_FILES['img']['tmp_name'];
        $j_em = time().$_FILES['img']['name'];
        move_uploaded_file($j,"../UPLOAD IMAGES/".$j_em);

        $sel = "SELECT A.*,B.product_name AS P FROM category AS A LEFT JOIN category AS B ON B.product_id = A.ctg_id WHERE A.ctg_id = '$a';";
        $res = $db -> query($sel);
        $row = $res -> fetch_assoc();

        $ppppp = $row['product_name'];

        $sell = "SELECT A.*,B.product_name AS P FROM category AS A LEFT JOIN category AS B ON B.product_id = A.ctg_id WHERE A.ctg_id = '$b';";
        $ress = $db -> query($sell);
        $roww = $ress -> fetch_assoc();
        
        $ccccc = $roww['product_name'];

        $ins = "INSERT INTO products SET pr_name = '$ppppp', ch_name = '$ccccc', prod_name = '$c', pp = '$d', p_disc = '$e', ps = '$f', p_col = '$g', p_qty = '$h', p_desc = '$i', p_images = '$j_em'";
        if($db -> query($ins)){
            header("location:product_add.php?ins=msg");
        }

    }

    if(isset($_POST['update_product'])){

        $req = $_POST['id'];
        $c = $_POST['pn'];
        $d = $_POST['pp'];
        $e = $_POST['pd'];
        $f = $_POST['ps'];
        $g = $_POST['col'];
        $h = $_POST['qty'];
        $i = $_POST['desc'];

        if(isset($_FILES['img']['name']) && $_FILES['img']['name']!=""){
            $sel = "SELECT * FROM products WHERE p_id = '$req'";
            $res = $db -> query($sel);
            $dt = $res -> fetch_assoc();
        
            unlink("../UPLOAD IMAGES/".$dt['p_images']);

            $j = $_FILES['img']['tmp_name'];
            $j_em = time().$_FILES['img']['name'];
            move_uploaded_file($j,"../UPLOAD IMAGES/".$j_em);

            $upd = "UPDATE products SET prod_name = '$c', pp = '$d', p_disc = '$e', ps = '$f', p_col = '$g', p_qty = '$h', p_desc = '$i', p_images = '$j_em' WHERE p_id = '$req'";
            if($db -> query($upd)){
                header("location:product_list.php?upd=msg");
            }
        } else {
            $upd = "UPDATE products SET prod_name = '$c', pp = '$d', p_disc = '$e', ps = '$f', p_col = '$g', p_qty = '$h', p_desc = '$i' WHERE p_id = '$req'";
            if($db -> query($upd)){
                header("location:product_list.php?upd=msg");
            }
        }

    }

    if(isset($_POST['Change_Status'])){
        $id=$_POST['id'];
        $d=$_POST['order_status'];
        echo $id;
        echo $d;
        $upd="UPDATE orders SET status='$d' WHERE o_id='$id'";
        if($db->query($upd)){
            echo "

            <script>
                alert(' Update.....');
                window.location.href='order-page.php';
            </script>
        ";
        }
    }

    

?>