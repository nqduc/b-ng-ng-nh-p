<?php 
    session_start();
    if(!$_SESSION['id']){
        header("location:login.php");
    }
    include "human.php";
    include "mysql.php";
    $duc = new human();  
    $conn1 = new DBconn();
    $conn1 ->connect();
    $table = "dang_nhap";
    $where = "id =".$_SESSION['id'];

    $user =$conn1->select1($table, $where);
    $user = mysqli_fetch_assoc($user);
    $duc->set_user($user);
?>
<html>
    <body>
        <form action="update.php" method="post">
            <table>
                <tr>
                    <th>Name:</th>
                    <td><input type="text" placeholder="name" name = "name" value = "<?php echo "" . $duc->get_user()['name'];?>"></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><input type="text" placeholder="email" name = "email" value = "<?php echo "" . $duc->get_user()['email'];?>"></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <th><input type="password" placeholder="password" name = "password" value = "<?php echo "" . $duc->get_user()['password'];?>"></th>
                </tr>
                <tr>
                    <th>Img</th>
                    <th><input type="text" placeholder="img" name = "img" value = "<?php echo "" . $duc->get_user()['img'];?>"></th>
                </tr>
                <tr>
                    <th>Fullname</th>
                    <th><input type="text" placeholder="fullname" name = "fullname" value = "<?php echo "" . $duc->get_user()['fullname'];?>"></th>
                </tr>
                <tr>
                    <th>Address</th>
                    <th><input type="text" placeholder="address" name = "address" value = "<?php echo "" . $duc->get_user()['address'];?>"></th>
                </tr>
                <tr>
                    <th>Phone1</th>
                    <th><input type="text" placeholder="phone1" name = "phone1" value = "<?php echo "" . $duc->get_user()['phone1'];?>"></th>
                </tr>
                <tr>
                    <th>Phone2</th>
                    <th><input type="text" placeholder="phone2" name = "phone2" value = "<?php echo "" . $duc->get_user()['phone2'];?>"></th>
                </tr>
            </table> 
            <button type="submit">Kết Nối</button>
        </form>  
    </body>
</html>
