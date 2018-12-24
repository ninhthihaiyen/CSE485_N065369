<?php 
include ('database.php');
class m_MonAn extends database{
    function getMenu(){
        $sql ="SELECT tl.* ,GROUP_CONCAT(DISTINCT pl.id,':',pl.TenMonAn)AS PhanLoaiMonAn,ma.id as idMonAn,ma.TenMonAn as TenMonAn, ma.Hinh as Hinh FROM loaimonan tl  INNER JOIN phanloaimonan pl ON pl.idloaimonan=tl.id INNER JOIN monan ma ON ma.idphanloaimonan=pl.id GROUP BY tl.id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function getMonAnByIdPhanLoaiMonAn($id_Phanoaimonan){
        $sql ="SELECT * FROM monan WHERE idPhanloaimonan = $id_phanloaimonan";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_loaimonan));
    }
    function getChitietMonAn($id){
        $sql ="SELECT * FROM monan WHERE id = $id";
        $this->setQuery($sql);
        return $this ->loadRow(array($id));
    }

}

?>