
<html>
<head>
<title> Trang Đăng Nhập </title>
<link rel = "biểu định kiểu" type = "text / css" href = "style.css">
</head>
<body>

<h3>ĐĂNG KÝ TÀI KHOẢN </h3>
    <form method = "post" action = "login.php">
        <tr>
            <td> <abc for = "user_id"> Tên người dùng</abc> </td>
            <td> <input type = "text" name = "name" id = "user_id"> </td>
        </tr>
        <tr>
            <td> <abc for = "user_pass"> Mật khẩu </abc></td>
            <td> <input type = "password" name = "pass" id = "user_pass"> </input> </td>
        </tr>
        
        <tr>
            <td> <input type = "submit" value = "Đăng Nhập"/></td>
            <td> <input type = "reset" value = "Reset"/></td>
        </tr> 
    </form>
</body>
</html>