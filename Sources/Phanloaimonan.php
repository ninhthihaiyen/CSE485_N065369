<?php 
include('Controller/c_MonAn.php');
$c_MonAn = new C_MonAn();
$monans=$c_MonAn->loaimonan();
$monan=$monans['danhmucmonan'];
$menu=$monans['menu'];
$title=$monans['title'];

//print_r($monan);
//print_r($title);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Danh mục Món Ăn</title>
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
    <div class="row main-left">
      <div class="col-md-3 ">
      <ul class="list-group" id="menu" >
      <li href="./Food" class="list-group-item menu1 active" style="background-color:#f05f40; color:white;">Menu</li>
      <?php
         foreach($menu as $mn){
         	?>
      <li href="#" class="list-group-item menu1"><?=$mn->TenLoaiMonAn?>
      </li>
      <ul>
      <?php 
         $phanloaimonan = explode(',',$mn->PhanLoaiMonAn);
         //print_r($phanloaimonan);
         foreach($phanloaimonan as $loai){
         
         	list($id, $TenMonAn) =explode(':',$loai);
         ?>
      <li class ="list-group-item">
      <a href="Phanloaimonan.php?id_loai=<?=$id?>"><?=$TenMonAn?></a>
      </li>
      <?php
         }
         
           ?>			
      </ul>
      <?php
         }
         ?>
      <ul>	
      </div>

            <div class="col-md-9 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#f05f40; color:white;">
                        <h4><b><?=$title->TenMonAn?></b></h4>
                    </div>
                    <?php
                    foreach ($monan as $mon) {
                        ?>
                       <div class="row-item row">
                        <div class="col-md-3">

                            <a href="chitiet.php?id_monan=<?=$mon->id?>&loai_monan=<?TenKhongDau?>">
                                <br>
                                <img width="200px" height="200px" class="img-responsive" src=".//public/image/<?=$mon->Hinh?>" alt="">
                            </a>
                        </div>
                        <div class="col-md-9">
                            <h3><?=$mon->TenMonAn?></h3>
                            <a class="btn btn-primary" href="chitiet.php?id_monan=<?=$mon->id?>&loai_monan=<?TenKhongDau?>" style="background-color:#f05f40; color:white; ">Chi tiết món ăn<span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                        <div class="break"></div>
                        </div>
                        <?php
                        
                    }
                    ?>
                </div>
                </div>
                </div>
                        
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <ul class="pagination">
                                <li>
                                    <a href="#">&laquo;</a>
                                </li>
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">5</a>
                                </li>
                                <li>
                                    <a href="#">&raquo;</a>
                                </li>
                            </ul>
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
