<?php 
    include "mysql.php";
    session_start();
    $username = $_POST['name'];   
    $pass = $_POST['pass'];
    
    if ($username == "" || $pass == ""){
        echo "không đăng nhập được";
    } else{
        $conn1 = new DBconn();
        $conn1->connect();
        $table = "dang_nhap";
        $where = "name = '$username' && password = '$pass'";
        $rows = $conn1->select($table,$where);
    }
    if(empty($rows)){
    header("location: dangnhap.php");
    echo "Đăng nhập tài khoản thất bại";
    }else{
    $_SESSION['id'] = $rows['id'];
    header("location: cv.php");
    }
?>
