<?php 

    include '../Database/db.php';
    
    $req = $_GET['id'];
    
    $sel = "SELECT * FROM products WHERE p_id = '$req'";
    $res = $db -> query($sel);
    $dt = $res -> fetch_assoc();

    unlink("../UPLOAD IMAGES/".$dt['p_images']);

    $del = "DELETE FROM products WHERE p_id = '$req'";
    if($db -> query($del)){
        header("location:product_list.php?del=msg");
    }

?>