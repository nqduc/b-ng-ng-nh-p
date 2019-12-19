<?php
   session_start();
   if(isset($_SESSION['user_id']) && $_SESSION['id']!= NULL){
    // var_dump($_SESSION);
    echo "chúc các bạn một ngày tốt lành";
    header ("location: cv.php");

?>
<!-- <a href="logout.php">Đăng Xuất</a> -->
<?php 
}
?>
<!--  
    // $_SESSION ["user"] ="";
    // session_destroy();
    // var_dump($_SESSION);
    // echo "Việt Nam chiến thắng";

//    $user_check = $_SESSION['login_user'];
   
//    $ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");
   
//    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
//    $login_session = $row['username'];
   
//    if(!isset($_SESSION['user']) && $_SESSION['pass']){
//        var_dump($_SESSION);
//       header("location:login.php");
//       die();

?> -->