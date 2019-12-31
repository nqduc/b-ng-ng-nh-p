<?php 
    include "mysql.php";
    session_start();
    $id = $_SESSION['id'];
        $conn1 = new DBconn();
        $conn1->connect();
        $table = "dang_nhap";
        $condition = "id = $id";
        $delete = $conn1->delete($table , $condition);

        if ($delete == TRUE){
            header("location: login.php");
            unset($_SESSION['id']);
        }else {
            header("location: delete.php");
        }
?>
