<?php 
include ('database.php');
class m_MonAn extends database{
    function getMenu(){
        $sql ="SELECT tl.* ,GROUP_CONCAT(DISTINCT pl.id,':',pl.TenMonAn)AS PhanLoaiMonAn,ma.id as idMonAn,ma.TenMonAn as TenMonAn, ma.Hinh as Hinh FROM loaimonan tl  INNER JOIN phanloaimonan pl ON pl.idloaimonan=tl.id INNER JOIN monan ma ON ma.idphanloaimonan=pl.id GROUP BY tl.id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function getMonAnByIdPhanLoaiMonAn($id_Phanloaimonan){
        $sql ="SELECT * FROM monan WHERE idPhanloaimonan = $id_Phanloaimonan";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_Phanloaimonan));
    }
    function getTitlebyId($id_Phanloaimonan){
        $sql="SELECT TenMonAn FROM phanloaimonan WHERE id =$id_Phanloaimonan";
        $this->setQuery($sql);
        return $this->loadRow(array($id_Phanloaimonan));
    }
    function getChitietMonAn($id){
        $sql="SELECT *FROM monan WHERE id=$id";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    function getComment($id_MonAn){
        $sql ="SELECT * FROM comment WHERE idMonAn=$id_MonAn";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_MonAn));
    }
    function getRelatedNews($alias){
        $sql="SELECT ma.*,pl.TenKhongDau as TenKhongDau,pl.id as idphanloaimonan FROM monan ma INNER JOIN phanloaimonan pl 
        ON ma.idphanloaimonan= pl.id WHERE pl.TenKhongDau='$alias' limit 0,4" ;
        $this->setQuery($sql);
        return $this->loadAllRows(array($alias));
    }
}

?>