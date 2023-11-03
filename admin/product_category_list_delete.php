<?php 

    include '../Database/db.php';

    $req = $_GET['id'];

    $del = "DELETE FROM category WHERE ctg_id = '$req'";
    if($db -> query($del)){
        header("location:product_category_list.php?del=msg");
    }

?>