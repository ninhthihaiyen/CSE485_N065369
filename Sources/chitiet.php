<?php
include 'Controller/c_MonAn.php';
$c_MonAn = new C_MonAn();
$mon =$c_MonAn->chitietMonAn();
$chitietMon =$mon['chitietMonAn'];
$comment=$mon['comment'];
$relatednews=$mon['relatednews'];
//print_r($chitietMon);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chi Tiết Món Ăn</title>
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
                <?php
                if(isset($_SESSION['user_name'])){
                    ?>
                <li>
                    <a>
                        <span class="glyphicon glyphicon-user"></span><?=$_SESSION['user_name']?></a></li>
                        <?php
                }
                    ?>
                    <li><a href="./dangki.php">Đăng Kí </a></li>
                    <li><a href="./dangnhap.php">Đăng Nhập</a></li>
         
         </nav>
      </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h1><?=$chitietMon->TenMonAn?></h1>
                <p class="lead">
                    by <a href="#">Admin</a>
                </p>

               
                <img class="img-responsive" src="public/image/<?=$chitietMon->Hinh?>" alt="">
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?=$chitietMon->created_at?></p>
                <hr>
                <p class="lead"><?=$chitietMon->NoiDung?></p>
                <p>Nhà Hàng: <?=$chitietMon->NhaHang?></p>
                <p>Giá Cả: <?=$chitietMon->GiaCa?></p>
                <p>Địachỉ: <?=$chitietMon->DiaChi?></p>
                <p>Số liên hệ đặt hàng: <?=$chitietMon->SoLienHeDatHang?></p>
                
                <hr>
                <div class="well">
                    <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi</button>
                    </form>
                </div>

                <hr>
                <?php
                foreach($comment as $cmt){
                    ?>
                    <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <small><?=$cmt->created_at?></small>
                        </h4>
                        <?=$cmt->NoiDung?>
                        </div>
                </div>
                <?php
                }
                ?>

                

            </div>
            <div class="col-md-3">

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Món Ăn liên quan</b></div>
                    <div class="panel-body">
                        <?php
                        foreach($relatednews as $related){
                            ?>
                        
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="chitiet.php?id_monan=<?=$related->id?>&loai_monan=<?=$related->TenKhongDau?>">
                                    <img class="img-responsive" src="public/image/<?=$related->Hinh?>" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="chitiet.php?id_monan=<?=$related->id?>&loai_monan=<?=$related->TenKhongDau?>"><b><?=$related->TenMonAn?></b></a>
                            </div>
                            <div class="break"></div>
                        </div>
                    </div>
                </div>
                <?php
                        }
                        ?>
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Món ăn nổi bật</b></div>
                    <div class="panel-body">
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="image/Food7.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>Project Five</b></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>Project Five</b></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>

                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>Project Five</b></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>Project Five</b></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <hr>
    <script src="public/js/jquery.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/my.js"></script>

</body>

</html>
