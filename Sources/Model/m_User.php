<?php
include('database.php');
class M_user extends database
{
    function dangki($name,$email,$diachi,$password){
    $sql="INSERT INTO users(TenKhachHang,email,Diachi,Password) VALUES(?,?,?,?)";
    $this->setQuery($sql);
    $result=$this->execute(array($name,$email,md5($password),$diachi));
    if($result){
        return $this->getLastId();       
    }
    else{
        return false;
    }
    }
    function dangnhap($email,$md6_password){
        $sql="SELECT*FROM users WHERE email='$email' and Password ='$md5_password'";
        $this->setQuery($sql);
        return $this->loadRow(array($email,$md5_password));
    }
}
?>