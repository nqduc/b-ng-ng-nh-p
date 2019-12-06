<?php
//    include('config.php');
   session_start();
   
   if(!isset($_SESSION['user']) && $_SESSION['pass']){
    var_dump($_SESSION);
    echo "Thành Công";

//    $user_check = $_SESSION['login_user'];
   
//    $ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");
   
//    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
//    $login_session = $row['username'];
   
//    if(!isset($_SESSION['user']) && $_SESSION['pass']){
//        var_dump($_SESSION);
//       header("location:login.php");
//       die();
   }
?>