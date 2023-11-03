<?php 

    include '../Database/db.php';

    if($_POST['type'] == ""){

        $sel = "SELECT * FROM category WHERE product_id = '0'";
        $res = $db -> query($sel);
        $data = "";
        while($dt = $res -> fetch_assoc()){
            $data .= "<option class=\"form-control\" value='{$dt['ctg_id']}'>{$dt['product_name']}</option>";
        }
    } else if($_POST['type'] == "childdata") {
        $sel = "SELECT * FROM category WHERE product_id = {$_POST['id']}";
        $res = $db -> query($sel);
        $data = "";
        while($dt = $res -> fetch_assoc()){
            $data .= "<option class=\"form-control\" value='{$dt['ctg_id']}'>{$dt['product_name']}</option>";
        }
    }

    echo $data;

?>