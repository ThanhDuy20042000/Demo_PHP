<?php
ob_start(); //start ob tạo vùng nhớ đệm lưu trữ // Xuất được header
session_start();//khoi tao session
include "model/pdo.php";
include "model/ham_main.php";
include "model/chitietsp.php";
include "model/mdgiohang.php";
//Kiem tra neu khong ton tai session thi tao moi
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];

$main = main();
$main_new = main_new();
$main_coffee = main_coffe();
include "admin/header.php";

if (isset($_GET['act'])) {
   $act = $_GET['act'];
   switch ($act) {
      case 'home':
         include "admin/main.php";
         break;

      case 'htgiohang':
         include 'admin/sanpham/giohang.php';
         break;

      case 'chitiet':
         if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = $_GET['id'];
            $ctsp = chitietsp($id);
            extract($ctsp);
            $spcl = spcungloai($id, $phanloai1);
            include "admin/sanpham/chitietsp.php";
         } else {
            include 'admin/main.php';
         }
         break;

      case 'giohang':
         if (isset($_POST['them']) && ($_POST['them'])) {
            $id = $_POST['id'];
            $ten = $_POST['ten'];
            $hinhanh = $_POST['hinhanh'];
            $gia = $_POST['gia'];
            $soluong =$_POST['soluong'];
            $tong = $soluong * $gia;
           
            //kiemtrasp trung
            $kt = 0;
            for ($i=0; $i < sizeof($_SESSION['giohang']) ; $i++) { 
               if($_SESSION['giohang'][$i][1]==$ten){
                  $kt =1;
                  $soluongnew= $soluong + $_SESSION['giohang'][$i][4];
                  $_SESSION['giohang'][$i][4] =$soluongnew;
                  break;
               }
            }
            //Them sp vao session
           if ($kt == 0) {
            $gio = [$id, $ten, $hinhanh, $gia, $soluong, $tong];
            array_push($_SESSION['giohang'], $gio);
           } include "admin/sanpham/giohang.php";
         } else {
            include 'admin/main.php';
         }
         break;

      case 'xoa':
         if (isset($_GET['idgio'])) {
            array_splice($_SESSION['giohang'], ($_GET['idgio']), 1); //Xoa gio hang
         } else {
            $_SESSION['giohang'] = [];
         }
         header('Location: index.php?act=htgiohang');
         break;

      case 'xoatb':
         session_unset();
         header('Location: index.php?act=htgiohang');
         break;

      case 'dathang':
         include "admin/sanpham/dathang.php";
         break;

      case 'xndathang':
         if (isset($_POST['dh']) && ($_POST['dh'])) {
            $ten = $_POST['name'];
            $sdt = $_POST['phone'];
            $dc = $_POST['dc'];
            $gc = $_POST['comment'];
            $ngaydat = date('d/m/y');
            $tongdonhang = tongdon();
            $idbill = datadh($ten, $sdt, $dc, $gc, $ngaydat, $tongdonhang);
         }
         for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
            $name = $_SESSION['giohang'][$i][1];
            $gia = $_SESSION['giohang'][$i][3];
            $soluong = $_SESSION['giohang'][$i][4];
            $tongdon = $_SESSION['giohang'][$i][5];
            $img = $_SESSION['giohang'][$i][2];
            datagh($img,$name,$gia,$soluong,$tongdon,$idbill);
         }
         include "admin/sanpham/hoadon.php";
         break;
         case 'hoanthanh':
            session_unset();
            include "admin/main.php";
            break;



      default:
         include 'admin/main.php';
         break;
   }
} else {
   include 'admin/main.php';
}
include 'admin/footer.php';
