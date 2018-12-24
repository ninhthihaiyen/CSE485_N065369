<?php
   include('Controller/c_MonAn.php');
   $c_MonAn =new C_MonAn();
   $noi_dung=$c_MonAn->index();
   
   $menu =$noi_dung['menu'];
   
   
   //print_r($menu);
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>FoodOnline.Com</title>
      <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
         rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
         rel='stylesheet' type='text/css'>
      <link href="public/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
      <link href="public/css/creative.min.css" rel="stylesheet">
      <link href="public/css/shop-homepage.css" rel="stylesheet">
      <link href="public/css/my.css" rel="stylesheet">
      <link href="public/css/bootstrap.min.css" rel="stylesheet">
   </head>
   <body id="page-top">
      <div class="container">
         <nav id="fixNav">
            <ul>
               <?
               <li><a href="./index.php">Food Online</a></li>
               <li><a href="#">Giới Thiệu</a></li>
               <li><a href="#">Liên hệ</a></li>
               <li><a href="./DangKi.php">Đăng Kí </a></li>
               <li><a href ="./DangNhap.php">Đăng Nhập</a></li>
               <li>
                    <a>
                        <span class="glyphicon glyphicon-user"></span>Hải Yến</a></li>
            </ul>
         </nav>
      </div>
      <header class="masthead text-center text-white d-flex">
         <div class="container my-auto">
         <div class="row">
            <div class="col-lg-10 mx-auto">
               <h1 class="text-uppercase">
                  <strong>Tìm kiếm món ăn dễ dàng!</strong>
               </h1>
               <hr>
            </div>
            <div class="col-lg-8 mx-auto">
               <p class="text-faded mb-5" >
                  <i>
               <h3>Chọn món ăn bạn cần tìm:</h3></i></p>
               <div class="Chọn">
                  <form class="navbar-form navbar-left" role="search" style=" width: 700px;  " >
                     <h3>
                        <div class="form-group">
                           <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default"  >Tìm Kiếm</button>
                  </form>
               </div>
               </h3>
            </div>
      </header>
      <section id="services">
      <div class="container">
      <div class="row">
      <div class="col-lg-12 text-center">
      <h2 class="section-heading">Sử dụng FoodOnline.Com như thế nào?</h2>
      <hr class="my-4">
      </div>
      </div>
      </div>
      <div class="container">
      <div class="row">
      <div class="col-lg-3 col-md-6 text-center">
      <div class="service-box mt-5 mx-auto">
      <i class="fas fa-4x fa-gem text-primary mb-3 sr-icon-1"></i>
      <h3 class="mb-3">1.Nhập món ăn bạn cần tìm kiếm</h3>
      <p class="text-muted mb-0">Chọn món ăn bạn hiển thị danh sách món ăn.</p>
      </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
      <div class="service-box mt-5 mx-auto">
      <i class="fas fa-4x fa-paper-plane text-primary mb-3 sr-icon-2"></i>
      <h3 class="mb-3">2.Chọn món ăn.</h3>
      <p class="text-muted mb-0">Bạn muốn xem thông tin món ăn gì? Chọn món ăn và xem chi tiết thông tin món ăn
      đó.</p>
      </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
      <div class="service-box mt-5 mx-auto">
      <i class="fas fa-4x fa-code text-primary mb-3 sr-icon-3"></i>
      <h3 class="mb-3">3.Xem chi tiết thông tin, những comment review món ăn.</h3>
      <p class="text-muted mb-0">Từ khảo sát thông tin món ăn bạn có thể đến nhà hàng theo địa chỉ hoặc đặt món
      ăn theo số liên hệ.</p>
      </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
      <div class="service-box mt-5 mx-auto">
      <i class="fas fa-4x fa-heart text-primary mb-3 sr-icon-4"></i>
      <h3 class="mb-3">4.Chúc bạn ngon miệng!</h3>
      <p class="text-muted mb-0">Cảm ơn bạn vì đã tin tưởng FoodOnline!</p>
      </div>
      </div>
      </div>
      </div>
      </section>
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
      <a herf="loaitin.html"><?=$TenMonAn?></a>
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
      <div class="col-md-9">
      <div class="panel panel-default">
      <div class="panel-heading" style="background-color:#f05f40; color:white;">
      <h2 style="margin-top:0px; margin-bottom:0px;"> Món Ăn</h2>
      </div>
      <div class="panel-body">
      <?php
         foreach($menu as $mn){
         	?>
      <div class="row-item row">
      <h3>
      <a href="#"><?=$mn->TenLoaiMonAn?></a> |
      <?php $phanloaimonan = explode(',',$mn->PhanLoaiMonAn);
         foreach ($phanloaimonan as $loai){
         	list($id,$TenMonAn)= explode(':',$loai);
         	?>
      <small><a hefl="loaitin.html"><i><?=$TenMonAn?></a>/</small>
      <?php
         }
         
         ?>
      </h3>
      <div class="col-md-12 border-right">
      <div class="col-md-3">
      <a href="chitiet.html">
      <img class="img-responsive" src=".//public/image/<?=$mn->Hinh?>" alt="">
      </a>
      </div>
      <div class="col-md-9">
      <h3><?=$mn->TenMonAn?></h3>
      <a class="btn btn-primary" href="chitiet.html" style="background-color:#f05f40; color:white;">Chi tiết Món Ăn <span class="glyphicon glyphicon-chevron-right"></span></a>
      </div>
      </div>
      </div>
      <?php
         }
         ?>
      </div>
      </div>
      </div>
      </div>
      <br/>
      <br/>
      <br/>
      </div>
      <br/>
      <br/>
      <br/>
      <section class="bg-primary" id="about">
      <div class="container">
      <div class="row">
      <div class="col-lg-8 mx-auto text-center">
      <h2 class="section-heading text-white">Chúng tôi cung cấp những gì bạn cần!</h2>
      <hr class="light my-4">
      <p class="text-faded mb-4">Bạn thích dịch vụ của chúng tôi?Theo dõi Food.Online trên Facebook ngay.</p>
      <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Facebook</a>
      </div>
      </div>
      </div>
      </section>
      <section id="contact">
      <div class="container">
      <div class="row">
      <div class="col-lg-8 mx-auto text-center">
      <h2 class="section-heading">Thời gian quý báu của bạn!</h2>
      <hr class="my-4">
      <p class="mb-5">Hãy bắt đầu với FoodOnline.com để chúng tôi giúp bạn!</p>
      </div>
      </div>
      <div class="row">
      <div class="col-lg-4 ml-auto text-center">
      <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
      <p>123-456-6789</p>
      </div>
      <div class="col-lg-4 mr-auto text-center">
      <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
      <p>
      <a href="mailto:yennth62@wru.vn.com">feedback@FoodOnline.com</a>
      </p>
      </div>
      </div>
      </div>
      </div>
      </section>
      </div>
      <script src="public/vendor/jquery/jquery.min.js"></script>
      <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="public/vendor/jquery-easing/jquery.easing.min.js"></script>
      <script src="public/vendor/scrollreveal/scrollreveal.min.js"></script>
      <script src="public/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
      <script src="public/js/creative.min.js"></script>
      <script src="public/js/jquery.js"></script>
      <script src="public/js/bootstrap.min.js"></script>
      <script src="public/js/my.js"></script>
   </body>
</html>