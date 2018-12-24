<?php
include('Model/m_User.php');
class C_user{
function dangkiTK($name,$email,$password,$diachi){
    $m_User= new M_User();
    $id_user= $m_User->dangki($name,$email,$diachi,$password);
    if($id_user>0){
        $_SESSION['success']="Đăng kí thành công";
        header('location:index.php');
        if(isset($_SESSION['error'])){
            unset($_SESSION['error']);
        }
    }
    else{
        $_SESSION['error']="Đăng kí không thành công";
        header('location:DangKi.php');
    }
    }
    public function dangnhapTK($email,$password){
        $m_User=new M_user();
        $user=$m_User->dangnhap($email,$password);
        if($user==true){
            $_SESSION['user_name']=$user->TenKhachHang;
            header('location:DangKi.php');
            if(isset($_SESSION['user_error'])){
                unset($_SESSION['user_error']);
            }
        }
        else{
            $_SESSION['user_error']="Sai thông tin đăng nhập";
            header('location:DangNhap.php');
        }

        }
    }
?>