<?php

include "Database/db.php";

session_start();

if(isset($_POST['Register'])){

    $a=$_POST['Name'];
    $b=$_POST['Email'];
    $c=$_POST['Phone'];

    $user_exist = "SELECT * FROM user_register WHERE email='$b' OR phone='$c'";
    $result=$db->query($user_exist);

    if( $result){

        if( $result -> num_rows > 0){
            
        $data = $result -> fetch_assoc();
        if($data['email'] == $b){
            echo "
                <script>
                    alert(' $data[email] - This Email Already Exits.... ');
                    window.location.href='index.php';
                </script>
            ";
        } elseif($data['phone'] == $c){
            echo "
                <script>
                    alert(' $data[phone] - This Mobile No. Already Exits.... ');
                    window.location.href='index.php';
                </script>
            ";
        }

    } else {

        $d = $_FILES['Image']['tmp_name'];
        $d_nm = time().$_FILES['Image']['name'];
        move_uploaded_file($d,"UPLOAD IMAGES/".$d_nm);

        $password = password_hash($_POST['Password'], PASSWORD_BCRYPT);

        $ins = "INSERT INTO user_register SET full_name = '$a', email = '$b', phone = '$c', image = '$d_nm', password = '$password'";
        if($db -> query($ins)){
            echo "
                <script>
                    alert('Registration Done....');
                    window.location.href='index.php';
                </script>
            ";
        }

    }

}

}


// if(isset($_POST['Login'])){

//     $a=$_POST['email_mobile'];
//     // $b=$_POST['email_mobile'];
//     $b=$_POST['Password'];

//     $alredy="SELECT * FROM user_register WHERE email='$a' OR phone='$b'";

//     $res=$db->query($alredy);

//     if($res){

//         if($res->num_rows==1){
//             $data=$res->fetch_assoc();
//             if(password_verify($c,$data['password'])){
//                 $_SESSION['login']=true;
//                 $_SESSION['user_name']=$data['full_name'];
//                 $_SESSION['u_id']=$data['user_id'];
//                 header("location:index.php");
//             }

//             else{
//                 echo "
//                 <script>
//                 alert('Password incorrect');
//                 window.location.href='index.php';
//                 </script>
//             ";
//             }
//         }else{
//             echo "
//                 <script>
//                 alert('Email Or phone no incorrect');
//                 window.location.href='index.php';
//                 </script>
//             ";
//         }

//     }else{
//         echo "
//                 <script>
//                 alert('you re not abel to login');
//                 window.location.href='index.php';
//                 </script>
//             ";
//     }
// }

if(isset($_POST['Login'])){

    $a=$_POST['email_mobile'];
    $b=$_POST['email_mobile'];
    $c=$_POST['Password'];

    $alredy="SELECT * FROM user_register WHERE email='$a' OR phone='$b'";

    $res=$db->query($alredy);

    if($res){

        if($res->num_rows==1){
            $data=$res->fetch_assoc();
            if(password_verify($c,$data['password'])){
                $_SESSION['login']=true;
                $_SESSION['user_name']=$data['user_name'];
                $_SESSION['user_id']=$data['user_id'];
                header("location:index.php");
            }

            else{
                echo "
                <script>
                alert('Password incorrect');
                window.location.href='index.php';
                </script>
            ";
            }
        }else{
            echo "
                <script>
                alert('Email Or phone no incorrect');
                window.location.href='index.php';
                </script>
            ";
        }

    }else{
        echo "
                <script>
                alert('you re not abel to login');
                window.location.href='index.php';
                </script>
            ";
    }
}


if(isset($_POST['upd_profile'])){

    $req = $_POST['id'];
    $a = $_POST['unm'];
    $b = $_POST['em'];
    $c = $_POST['mb'];

    if(isset($_FILES['img']['name']) && $_FILES['img']['name']!=""){

        $sel = "SELECT * FROM user_register WHERE user_id = '$req'";
        $res = $db -> query($sel);
        $dt = $res -> fetch_assoc();

        unlink("UPLOAD IMAGES/".$dt['image']);

        $d = $_FILES['img']['tmp_name'];
        $d_nm = time().$_FILES['img']['name'];
        move_uploaded_file($d,"UPLOAD IMAGES/".$d_nm);

        $upd = "UPDATE user_register SET full_name = '$a', email = '$b', phone = '$c', image = '$d_nm' WHERE user_id = '$req'";
        if($db -> query($upd)){
            echo "
                <script>
                    alert('Update Done....');
                    window.location.href='index.php';
                </script>
            ";
        }

    } else {

        $upd = "UPDATE user_register SET full_name = '$a', email = '$b', phone = '$c' WHERE user_id = '$req'";
        if($db -> query($upd)){
            echo "
                <script>
                    alert('update Done....');
                    window.location.href='index.php';
                </script>
            ";
        }

    }

}


if(isset($_POST['upd_password'])){

    $a = $_POST['cp'];
    $b = $_POST['np'];
    $c = $_POST['cfp'];
    $req = $_POST['id'];

    $user_exist = "SELECT password FROM user_register WHERE user_id = '$req'";
    $result = $db -> query($user_exist);
    $data = $result -> fetch_assoc();

    if(password_verify($a, $data['password'])){

        if($c == ""){
            echo "
                <script>
                    alert('Please Confirm The Password....');
                    window.location.href='user_change_password.php';
                </script>
            ";
        } elseif($b == ""){
            echo "
                <script>
                    alert('Please Enter The New Password....');
                    window.location.href='user_change_password.php';
                </script>
            ";
        } elseif($b != $c){
            echo "
                <script>
                    alert('Your Current And Confirm Password Doesnot Match....');
                    window.location.href='user_change_password.php';
                </script>
            ";
        } else {

            $pass = password_hash($c, PASSWORD_BCRYPT);

            $upd = "UPDATE user_register SET password = '$pass' WHERE user_id = '$req'";
            if($db-> query($upd)){
                echo "
                <script>
                    alert('Change Password....');
                    window.location.href='index.php';
                </script>
            ";
            }

        }

    } else {

        echo "
        <script>
            alert('Incorrect Password....');
            window.location.href='user_change_password.php';
        </script>
    ";

    }

}


if(isset($_POST['add_cart'])){

    $a = $_POST['uid'];
    $b = $_POST['pid'];
    $c = $_POST['prnm'];
    $d = $_POST['psell'];
    $e = $_POST['pimg'];
    $f = 1;

    $check_cart = "SELECT * FROM user_cart WHERE uid = '$a' AND pid = '$b'";
    $result = $db -> query($check_cart);

    if($result){

        if($result -> num_rows > 0){
        
            $data = $result -> fetch_assoc();

            if($data['uid'] == $a && $data['pid'] == $b){
                echo "
                    <script>
                        alert(' $c - This Is Already Exsits In Cart.....');
                        window.location.href='index.php';
                    </script>
                ";
            }

        } else {

            $ins = "INSERT INTO user_cart SET uid = '$a', pid = '$b', p_name = '$c', p_qty = '$f', p_price = '$d', p_img = '$e'";
            if($db -> query($ins)){
                echo "
                    <script>
                        alert(' $c - Succefully Add In Cart.....');
                        window.location.href='index.php';
                    </script>
                ";
            }

        }
    }

}


if(isset($_POST['upd_qty'])){

    $a = $_POST['uid'];
    $b = $_POST['pid'];
    $c = $_POST['qty'];

    $upd = "UPDATE user_cart SET p_qty = '$c' WHERE uid = '$a' AND pid = '$b'";
    if($db -> query($upd)){
        echo "
            <script>
                alert(' Update.....');
                window.location.href='user_view.php';
            </script>
        ";
    }

}

if(isset($_POST['product_delete'])){

    $a = $_POST['uid'];
    $b = $_POST['pid'];

    $del = "DELETE FROM user_cart WHERE uid = '$a' AND pid = '$b'";
    if($db -> query($del)){
        header("location:user_view.php");
    }

}

if(isset($_POST['full_del'])){

    $a = $_POST['uid'];

    $del = "DELETE FROM user_cart WHERE uid = '$a'";
    if($db -> query($del)){
        header("location:index.php");
    }

}

if(isset($_POST['order'])){

    $a = $_POST['id'];
    $b = $_POST['name'];
    $c = $_POST['number'];
    $d = $_POST['landmark'];
    $e = $_POST['city'];
    $f = $_POST['address'];

    $sel = "SELECT * FROM user_cart WHERE uid = '$a'";
    $res = $db -> query($sel);
    $t_p = 0;

    if($res -> num_rows > 0 ){
        while($data = $res -> fetch_assoc()){
            $g = $data['p_name'];
            $h = (int)$data['p_qty'];
            $i = (int)$data['p_price'];

            $p_nm[] = $g .'('.$h.')';
            $p_price = number_format($i * $h);
            $t_p += $p_price;
            $t_g= ($t_p *0.18) + $t_p;

        }
    }

    $f_p = implode(", ", $p_nm);
    $ins = "INSERT INTO orders SET uid = '$a', u_name = '$b', mobile = '$c', landmark = '$d' , town = '$e' , address = '$f', t_product = '$f_p', t_price = '$t_g'";
    if($db -> query($ins)){
        header("location:user_make_payment.php?pay=msg");
    }

    $del = "DELETE FROM user_cart WHERE uid = '$a'";
    if($db -> query($del)){

    }

}

?>

