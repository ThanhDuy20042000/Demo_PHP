<?php 
function chitietsp($id){
    $sql = "select * from sanpham where id =".$id;
    $chitiet = pdo_query_one($sql);
    return $chitiet;
}
function spcungloai($id,$phanloai1){
    $sql = "select * from sanpham where phanloai1 =".$phanloai1." AND id <> ".$id;
    $spcl = pdo_query($sql);
    return $spcl;
}
