<?php 
include ('database.php');
class m_MonAn extends database{
    function getMenu(){
        $sql ="SELECT tl.* ,GROUP_CONCAT(DISTINCT pl.id,':',pl.TenMonAn)AS PhanLoaiMonAn,ma.id as idMonAn,ma.TenMonAn as TenMonAn, ma.Hinh as Hinh FROM loaimonan tl  INNER JOIN phanloaimonan pl ON pl.idloaimonan=tl.id INNER JOIN monan ma ON ma.idphanloaimonan=pl.id GROUP BY tl.id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function getMonAnByIdLoai($id_Loaimonan){
        $sql ="SELECT * FROM monan WHERE idPhanloaimonan = $id_loaimonan";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_loaimonan));
    }

}

?>