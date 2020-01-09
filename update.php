<?php 
    include "mysql.php";
    session_start();
    $id = $_SESSION['id']; 
    $conn1 = new DBconn();
    $conn1->connect();
    
    $username = $_POST['name'];
    $email = $_POST['email'];   
    $password = $_POST['password'];
    $img = $_POST['img'];
    $fullname = $_POST['fullname']; 
    $address = $_POST['address'];  
    $phone1 = $_POST['phone1'];
    $phone2 = $_POST['phone2'];   

        $table = "dang_nhap";
        $column1 = "name";
        $column2 = "email";
        $column3 = "password";
        $column4 = "img";
        $column5 = "fullname";
        $column6 = "address";
        $column7 = "phone1";
        $column8 = "phone2";
        $array =[
            $column1 => $username,
            $column2 => $email,
            $column3 => $password,
            $column4 => $img,
            $column5 => $fullname,
            $column6 => $address,
            $column7 => $phone1,
            $column8 => $phone2,
        ];
        $where = "id = $id";
        $update = $conn1->update($table, $array, $where);
        // var_dump($update);
        // die;
        if($update == true){
            header("location:cv.php");
        }else{
            header("location:form2.php");
            }
?>
