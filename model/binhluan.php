<?php 
// thêm bình luận
function insert_binhluan($noidung, $iduser,$idpro,$ngaybinhluan){
    $sql = "insert into binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung', '$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}
// load all bình luận
function loadall_binhluan ($idpro) {
    $sql = "select * from binhluan where 1";
    if($idpro>0) $sql.=" AND idpro='".$idpro."'";
    $sql.=" order by id desc";
            $listbl = pdo_query($sql);
            return $listbl;
}
// xóa bình luận
function delete_binhluan($id){
    $sql = "delete from binhluan where id=".$id;
                pdo_execute($sql);
}

?>