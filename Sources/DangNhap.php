<?php
include('Controller/c_user.php');
$c_user=new C_user();
if(isset($_POST['dangnhap'])){
    $email =$_POST['email'];
    $password =$_POST['password'];
    $user=$c_user->dangnhapTK($email,md5($password));
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Đăng Nhập FoodOnline.Com</title>
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/shop-homepage.css" rel="stylesheet">
    <link href="public/css/my.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <nav id="fixNav">
            <ul>
                <li><a href="./index.php">Food Online</a></li>
                <li><a href="#">Giới Thiệu</a></li>
                <li><a href="#">Liên hệ</a></li>
                <li><a href="./public/dangki.html">Đăng Kí </a></li>
                <li><a href="./public/dangnhap.html">Đăng Nhập</a></li>
                <li>
                    <a>
                        <span class="glyphicon glyphicon-user"></span>Hải Yến</a></li>
            </ul>
        </nav>
    </div>
    <div class="container">
        <div class="row carousel-holder">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <?php
                if(isset($_SESSION['user_error'])){
                    echo"<div class='alert alert-danger'>".($_SESSION['user_error'])."</div>";
            }
            ?>
                <div class="panel panel-default">
                    <div class="panel-heading">Đăng nhập</div>
                    <div class="panel-body">
                        <form method="POST" action="#">
                            <div>
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                            <br>
                            <div>
                                <label>Mật khẩu</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <br>
                            <button type="submit" name="dangnhap" class="btn btn-success">Đăng nhập
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <script src="public/js/jquery.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/my.js"></script>

</body>

</html>