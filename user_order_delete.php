<?php
    include 'Database/db.php';

 $id=$_GET['id'];

 $sel = "DELETE FROM orders WHERE o_id='$id'";

 if($db->query($sel)){
    echo "

    <script>
        alert(' Delete.....');
        window.location.href='user_make_payment.php';
    </script>
";
}
?>