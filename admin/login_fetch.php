<?php 

    include '../Database/db.php';

    session_start();

    if(isset($_POST['admin_login'])){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sel = "SELECT * FROM admin WHERE ad_email = '$email' AND ad_password = '$password'";
        $res = $db -> query($sel);

        if($res -> num_rows > 0){
            $data = $res -> fetch_assoc();
            $_SESSION['name'] = $data['ad_name'];
            header("location:dashboard.php?succ=msg");
        } else {
            header("location:login.php?err=msg");
        }

    }

?>