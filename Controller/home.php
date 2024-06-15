<?php
$action="home";

if(isset($_GET['act']))
{
    $action=$_GET['act'];//sanpham
}
switch($action){
    case "home":
        include 'View/home.php';
        break;
    case "sanpham":
        include 'View/sanpham.php';
        break;
    case "khuyenmai":
        include 'View/sanpham.php';
        break;
    case "gioithieu":
        include 'View/gioithieu.php';
         break;
    case "detail":
        include 'View/sanphamchitiet.php';
        break;
    case "comment":
      
        $makh=$_SESSION['makh'];//
        $mahh=$_POST['txtmahh'];// 21
        $noidung=$_POST['comment'];// ngon quá
        $u=new User();
        $u->insertComment($mahh,$makh,$noidung);
        include 'View/sanphamchitiet.php';
        break;
    }   
?>