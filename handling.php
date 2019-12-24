<?php 
    include "mysql.php";
    session_start();
    // echo "<pre>";
    // var_dump($_POST);
    // die;
    $username = $_POST['name']; 
    $email = $_POST['email'];   
    $password = $_POST['pass'];
    $fullname = $_POST['fullname']; 
    $address = $_POST['address'];  
    $phone1 = $_POST['phone1'];
    $phone2 = $_POST['phone2'];   


    if ( $username== "" || $email = "" || $password = "" || $fullname = "" || $address = "" || $phone1 = "" || $phone2 = || ){
        echo "khong the dang nhap duoc";
    }else{
    $conn1 = new DBconn();
    $conn1 ->connect();
    $table = "dang_nhap";
    $column ="name, email, password, fullname, address, phone1, phone2";
    $value="('$username'), ('$email'), ('$password'), ('$fullname'), ('$address'), ('$phone1'), ('$phone2')";
    $conn1->insert($table ,$column ,$value);
    }
?>