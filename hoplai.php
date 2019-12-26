<?php 

$hostname ='localhost';
$usename ='root';
$password = '';
$databasename ='bist_training';

    $id ="";
    $name = "";
    $email = "";
    $password = "";
    $fullname = "";
    $address = "";
    $phone1 = "";
    $phone2 = "";

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    try{
        $conect = mysqli_connect($hostname, $username, $password, $databasename);
    }catch (Exception $ex) {
        echo 'Error';
    }

    function getPosts()
    {
        $posts = array ();
        $posts[0] = $_POST['id'];
        $posts[1] = $_POST['name'];
        $posts[2] = $_POST['email'];
        $posts[3] = $_POST['password'];
        $posts[4] = $_POST['fullname'];
        $posts[5] = $_POST['address'];
        $posts[6] = $_POST['phone1'];
        $posts[7] = $_POST['phone2'];
    }

    if (insset($_POST['search']))
    {
        $data = getPosts();
        $search_Query = "SELECT * FRROM user WHERE id = $data [0]";
        $search_Result = mysqli_query($connect, $search_Query);

        if ($search_Result)
        {
            if (mysqli_num_rows($search_Result))
            {
                while($row = mysqli_fetch_array($search_Rusult))
                {
                    $id = $row ['id'];
                    $name = $row ['name'];
                    $email = $row ['email'];
                    $password = $row ['password'];
                    $fullname = $row ['fullname'];
                    $address = $row ['address'];
                    $phone1 = $row ['phone1'];
                    $phone2 = $row ['phone2'];                  
                }
            }else{
                echo 'NO Data For This Id';
            }
        }else{
            echo "error";
        }
    }

?>
<html>
    <head>
    </head>
    <body>
    <form action="php_insert_update_delete.php" method="post">
        <table>
            <tr>
                <th>ID:</th>
                <td><input type="id" placeholder="id" name = "id" value = "<?php echo $id; ?>"></td>
            </tr>
            <tr>
                <th>Name:</th>
                <td><input type="name" placeholder="name" name = "name"  value = "<?php echo $name; ?>"></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" placeholder="email" name = "email"  value = "<?php echo $email; ?>"></td>
            </tr>
            <tr>
                <th>Password</th>
                <th><input type="password" placeholder="password" name = "pass"  value = "<?php echo $password; ?>"></th>
            </tr>
            <tr>
                <th>Fullname</th>
                <th><input type="fullname" placeholder="fullname" name = "fullname" value = "<?php echo $fullname; ?>"></th>
            </tr>
            <tr>
                <th>Address</th>
                <th><input type="address" placeholder="address" name = "address"  value = "<?php echo $address; ?>"></th>
            </tr>
            <tr>
                <th>Phone1</th>
                <th><input type="phone1" placeholder="phone1" name = "phone1"  value = "<?php echo $phone1; ?>"></th>
            </tr>
            <tr>
                <th>Phone2</th>
                <th><input type="phone2" placeholder="phone2" name = "phone2"  value = "<?php echo $phone2; ?>"></th>
            </tr>
        </table>
         <input type ="submit" name = "insert" value = "Insert">
         <input type ="submit" name = "update" value = "Update">
         <input type ="submit" name = "delete" value = "Delete">
    </form>    
    </body>
</html>
