<?php
 include '../Database/db.php';

 $id=$_GET['id'];

 $sel = "DELETE FROM ORDERS WHERE o_id = '$id'";
 if($db->query($sel)){
    echo "

    <script>
        alert(' Delete.....');
        window.location.href='order-page.php';
    </script>
";
}
?>