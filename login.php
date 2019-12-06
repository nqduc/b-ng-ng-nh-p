<?php 
    session_start();
    $username = $_POST['name'];
    
    $pass = $_POST['pass'];
    
    if ($username == "anhduc" and $pass == "123456"){
        echo "Thành Công";
        $_SESSION [ 'use'] = $username;
        $_SESSION['pass'] = $pass;
        var_dump($_SESSION);
        die();
    } else {
        echo "Không Thành Công";
    }
    header ("location: config.php");
?>