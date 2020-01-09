<html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<link rel = "stylesheet" type = "text/css" href = "color.css">
    <body>
        <div class="container">
            <form class="form-horizontal" action="insert.php" role="form"  method="post">
                <h2>Registration</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="Name" placeholder="Name" class="form-control" name = "name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" id="email" placeholder="Email" class="form-control" name = "email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" class="form-control" name = "pass">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Img</label>
                    <div class="col-sm-9">
                        <input type="text" id="imd" placeholder="img" class="form-control" name = "img">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Fullname</label>
                    <div class="col-sm-9">
                        <input type="text" id="fullname" placeholder="fullname" class="form-control" name ="fullname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-9">
                        <input type="text" id="address" placeholder="address" class="form-control" name = "address">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Phone1</label>
                    <div class="col-sm-9">
                        <input type="text" id="phone1" placeholder="phone1" class="form-control" name = "phone1">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Phone2</label>
                    <div class="col-sm-9">
                        <input type="text" id="phone2" placeholder="phone2" class="form-control" name = "phone2">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form> 
        </div> 
    </div>
    </body>
</html>
