<?php 
    session_start();
    if(isset($_SESSION['id'])){
        header("location:cv.php");
    }
?>
<html>
<head>
<title> Trang Đăng Nhập </title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel = "stylesheet" type = "text/css" href = "background.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3><p class="text-warning">Đăng Nhập</p></h3>
			</div>
			<div class="card-body">
			<form method = "post" action = "handling.php" >
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user"></i></span>
						</div>
					<input type="text"  class="form-control" placeholder="name" name ="name">						
				</div>
			<div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                        <input type="password" class="form-control" placeholder="password" name = "pass">
					        </div>
                            <div class="form-group">
						<form method = "post" action = "handling.php" >
							<input type="submit" value="Login" class="btn float-right login_btn">
						</form>
					</div>		
					<div class = "form-group">
						<form action="form.php" method="post">
							<button class="btn float-left login_btn" type="submit">Registration</button>
						</form>
					</div>
				</div>
			</form>
	    </div>
	</div>
</body>
</html>
