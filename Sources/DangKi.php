<?php
include('Controller/c_user.php');
$c_user= new C_user();
if(isset($_POST['dangki'])){
    $name= $_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $repassword=$_POST['passwordAgain'];
    $diachi=$_POST['diachi'];
    if($password==$repassword){
        $user= $c_user-> dangkiTK($name,$email,$password,$diachi);

    }
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

    <title>Đăng Kí</title>
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/shop-homepage.css" rel="stylesheet">
    <link href="public/css/my.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <nav id="fixNav">
            <ul>
                <li><a href="#">Food Online</a></li>
                <li><a href="#">Giới Thiệu</a></li>
                <li><a href="#">Liên hệ</a></li>
                <li><a href="./public/dangki.html">Đăng Kí </a></li>
                <li><a href="./public/dangnhap.html">Đăng Nhập</a></li>
            </ul>
        </nav>
    </div>
    <div class="container">
        <div class="row carousel-holder">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <?php
                if(isset($_SESSION['error'])){
                    echo"<div class='alert alert=danger'>".$_SESSION['error']."</div>";
                }
                ?>
                <div class="panel panel-default">
                    <div class="panel-heading">Đăng ký tài khoản</div>
                    <div class="panel-body">
                        <form method="POST" action="#">
                            <div>
                                <label>Họ tên</label>
                                <input type="text" class="form-control" placeholder="Username" name="name"
                                    aria-describedby="basic-addon1">
                            </div>
                            <br>
                            <div>
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="email"
                                    aria-describedby="basic-addon1">
                            </div>
                            <br>
                            
                            <div>
                                <label>Địa Chỉ:</label>
                                <input type="text" class="form-control" placeholder="Diachi" name="diachi"
                                    aria-describedby="basic-addon1">
                            </div>
                            
                            <div>
                                <label>Nhập mật khẩu</label>
                                <input type="password" class="form-control" name="password" aria-describedby="basic-addon1">
                            </div>
                            <br>
                            <div>
                                <label>Nhập lại mật khẩu</label>
                                <input type="password" class="form-control" name="passwordAgain" aria-describedby="basic-addon1">
                            </div>
                            <br>
                            <button type="submit" name="dangki" class="btn btn-success">Đăng ký
                            </button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
    <script src="public/js/jquery.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/my.js"></script>

</body>

</html>