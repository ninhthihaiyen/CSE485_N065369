<?php
include('Model/m_MonAn.php');
class c_MonAn{

    public function index()
    {
        $m_MonAn = new M_MonAn();
        $menu =$m_MonAn->getMenu();
        return array('menu'=>$menu);

    }
}
?>