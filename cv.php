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
$table = "experience";
$where = "user_id = ".$_SESSION['id'];
$experience = $conn1->select1($table, $where);
$duc->set_experience($experience);

$table = "dang_nhap";
$where = "id =".$_SESSION['id'];
$user =$conn1->select1($table, $where);
$user = mysqli_fetch_assoc($user);
$duc->set_user($user);


$table = "education";
$where ="user_id = ".$_SESSION['id'];
$education = $conn1->select1($table, $where);
$duc->set_education($education);

$profile = [
    [
        "content" => "It is a long established fact that a reader will be distracted by the readable content of a page It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that"
    ],
];
$duc->set_profile($profile);


$table = "skills";
$where ="user_id = " . $_SESSION['id'];
$skills = $conn1->select1($table, $where);
$duc->set_skills($skills);


$table = "referen";
$where="user_id =".$_SESSION['id'];
$reperences = $conn1->select1($table,$where);
$duc->set_reperences($reperences);


$table ="awards";
$where = "user_id =" .$_SESSION ['id'];
$awards = $conn1 ->select1($table, $where);
$duc->set_awards($awards);

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV design of ✰グエン クアン ドゥック✰</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body style="margin-top: 40px; margin-bottom: 40px; width: 1100px; margin-left: 50px; margin-right: 50px;">

<form method = "post" action = "logout.php">
        <input type = "submit" value = "logout"/>
        
    </form>
    <header class="container" style="margin-top: 40px; margin-bottom: 15px; margin-right: 40px; margin-left: 40px;">
        <div class="row">
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-md-5">
                        <span class="rounded-circle" style="border: rgb(225, 248, 225);border-image-outset: 5px;">
                            <img src= <?php echo "" . $duc->get_user()['img'];?> class="rounded-circle float-left namae-img" alt="avatar" width="269px" height="269px" left="375" top="57">
                        </span>
                    </div>
                    <div class="col-md-7" style="line-height: 10px;">
                        <h4><b>
                                <?php
                                echo "" . $duc->get_user()['fullname'];
                                ?>
                            </b>
                            <h4>
                                <h6 class="colorRed"><i>WBS VIET NAM</i></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 flex-column ml-auto">
                <div class="row">
                    <div class="col-sm-2">
                        <i class="fas fa-phone-square" style="font-size: 30px;"></i>
                    </div>
                    <div class="col-sm-10" style="font-size: 10px;">
                        <p><?php echo $duc->get_user()["phone1"] ?></p>
                        <p><?php echo $duc->get_user()["phone2"] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <i class="fas fa-envelope" style="font-size: 25px;"></i>
                    </div>
                    <div class="col-sm-10" style="font-size: 10px;">
                        <p><?php echo $duc->get_user()['email'] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <i class="fas fa-home" style="font-size: 25px;"></i>
                    </div>
                    <div class="col-sm-10" style="font-size: 10px;">
                        <?php
                        echo "" . $duc->get_user()['address'];
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-7 flex-column">
            <div>
                <h3>
                    Experience
                </h3>

                <div class="row">
                    <?php
                   foreach($experience as $value){
                    // while($value = $mysqli_fetch_assoc($experience)) {}
                        ?>
                        <div class="col-md-3">
                            <?php echo "" . $value['time']; ?>
                        </div>
                        <div class="col-md-9">
                            <p><b>
                                    <?php echo "" . $value['name'] ?>
                                </b></p>
                            <mark>DEVELOPER</mark>
                            <p><?php echo "" . $value['content']; ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div>
                <h3>Education</h3>
                <div class="row">
                    <?php
                    foreach ($education as $value) {
                        ?>
                        <div class="col-md-3"> <?php echo "" . $value["time"]; ?></div>
                        <div class="col-md-9">
                            <p><b> <?php echo "" . $value["Name_school"] ?></b></p>
                            <mark>DEVELOPER</mark>
                            <p>
                                <p><?php echo "" . $value["content"]; ?></p>
                            </p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-lg-5 flex-column">
            <div class ="hamho">
                <h3>Profle</h3>
                <p><?php echo "" . $value["content"] ?></p>
            </div>
            <div class="abc">
                <h3>SKILLS</h3>
                <div>
                    <?php foreach ($skills as $value) { ?>
                        <h7><?php echo $value ['skills'] ?></h7>
                        <div class="progress">
                            <div class="progress-bar bg-success" style ="width: <?= $value['lever'].'%'; ?>">
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <footer class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <h3>AWARDS</h3>
                    <?php foreach ($awards as $value) { ?>
                        <p><b><?php echo $value["name"] ?></b></p>
                        <p><?php echo $value["content"] ?></p>
                        <p><?php echo $value["reward"] ?> </p>
                    <?php } ?>
                </div>
            <div class="col-sm-4">
                <h3>REFERENCES</h3>
                    <?php foreach ($reperences as $value) { ?>
                        <p><b><?php echo '' . $value["name"] ?></b></p></h3>
                        <div class="row">
                            <div class=""><b>Phone:</b></div>
                            <div class="">
                                <p><?php echo '' . $value["phone"] ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class=""><b>Email:</b></div>
                            <div class="">
                                <p><?php echo '' . $value["email"] ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-sm-4">
                    <h3>INTEREST</h3>
                    <img src="anh.jpg" class="rounded float-left can-img">
                </div>
            </div>

        </footer>
</body>
</html>

