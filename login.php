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
        // var_dump($rows);
        // die;
    }
     if(empty($rows)){
         header("location: dangnhap.php");
     }else{
         $_SESSION['id'] = $rows['id'];
         header("location: cv.php");
     }

//         $_SESSION ['user'] = $username;
//         $_SESSION['pass'] = $pass;
//         echo "Bạn đã đăng nhập Thành Công";
//         // header ("location: config.php");
//         var_dump($_SESSION);
//         die();
    // }else {
    //     echo "Đăng nhập tài khoản thất bại";
    //     $_SESSION ['error'] =  "Đăng nhập tài khoản thất bại";
    //     var_dump($_SESSION);
    //     die();
    //     header ("location: dangnhap.php");
    // } 
// 


?>