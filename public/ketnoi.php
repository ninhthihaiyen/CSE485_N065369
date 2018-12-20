<?php
$ketnoi['host']='localhost';
$ketnoi['dbname']='food';
$ketnoi['username']='root';
$ketnoi['password']='';
@mysqli_connect(
    "{$ketnoi['host']}",
    "{$ketnoi['username']}",
    "{$ketnoi['password']}")
    or
    die("Không thể kết nối database");
    @mysqli_select_db(
        "{$ketnoi['dbname']}")
        or
        die("Không thể chọn database");
    ?>