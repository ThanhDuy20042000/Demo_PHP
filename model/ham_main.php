<?php
function main() {
    $sql = "select * from sanpham where phanloai='sanphamkhuyenmai' order by id limit 0,6 "; 
    $list_sp = pdo_query($sql);
    return $list_sp;
}// Hàm có giá trị trả về thì phải gán biến cho hàm đó rồi mới sử dụng được

function main_new() {
    $sql = "select * from sanpham where 1 order by id limit 0,6 "; // lấy sản phẩm mới nhất và lấy 6 sản phẩm
    $list_spnew = pdo_query($sql);
    return $list_spnew;
}
function main_coffe() {
    $sql = "select * from sanpham where phanloai1 = 2 order by id desc limit 0,6 "; // lấy sản phẩm mới nhất và lấy 6 sản phẩm
    $list_spcoffee = pdo_query($sql);
    return $list_spcoffee;
}
function main_mayphacaffee() {
    $sql = "select * from sanpham where phanloai1 = 3 order by id desc limit 0,6 "; // lấy sản phẩm mới nhất và lấy 6 sản phẩm
    $list_spcoffee = pdo_query($sql);
    return $list_spcoffee;
}
function main_phulieu() {
    $sql = "select * from sanpham where phanloai1 = 4 order by id desc limit 0,6 "; // lấy sản phẩm mới nhất và lấy 6 sản phẩm
    $list_spcoffee = pdo_query($sql);
    return $list_spcoffee;
}
