<?php 
    include "mysql.php";
    session_start();
    $username = $_POST['name']; 
    $email = $_POST['email'];   
    $password = $_POST['pass'];
    $fullname = $_POST['fullname']; 
    $address = $_POST['address'];  
    $phone1 = $_POST['phone1'];
    $phone2 = $_POST['phone2'];   
    $conn1 = new DBconn();
    $conn1 ->connect();
    $table = "dang_nhap";
    $column ="name, email, password, fullname, address, phone1, phone2";
    $value ="('$username'), ('$email'), ('$password'), ('$fullname'), ('$address'), ('$phone1'), ('$phone2')";
    $insert = $conn1->insert($table ,$column ,$value);
    
    if(empty($insert)) {
        header("location: insert.php");
        } else {
        echo "Đăng nhập thành công";
        header("location: login.php");
        }
?>
