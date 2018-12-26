<?php
include('Model/m_MonAn.php');
class c_MonAn{

    public function index()
    {
        $m_MonAn = new M_MonAn();
        $menu =$m_MonAn->getMenu();
        return array('menu'=>$menu);

    }
    public function loaimonan()
    {
        $id_loai=$_GET['id_loai'];
        $m_MonAn = new M_MonAn();
        $danhmucmonan =$m_MonAn->getMonAnByIdPhanLoaiMonAn($id_loai);
        $menu=$m_MonAn->getMenu();
        $title=$m_MonAn->getTitlebyId($id_loai);
        return array('danhmucmonan'=>$danhmucmonan,'menu'=>$menu,'title'=>$title);
    }
    function chitietMonAn(){
        $id_monan=$_GET['id_monan'];
        $alias =$_GET['loai_monan'];
        $m_MonAn = new M_MonAn();
        $chitietMonAn=$m_MonAn->getChitietMonAn($id_monan);
        $comment=$m_MonAn->getComment($id_monan);
        $relatednews=$m_MonAn->getRelatedNews($alias);
        return array ('chitietMonAn'=>$chitietMonAn,'comment'=>$comment,'relatednews'=>$relatednews);
    }
}
?>