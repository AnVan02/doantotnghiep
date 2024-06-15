<?php
$action="order";
if(isset($_GET['act']))
{
    $action=$_GET['act'];
}
switch($action)
{
    case "order":
        include "View/order.php";
        break;
    case "order_detail":
      
        $hd=new HoaDon();//$_SESSION['makh']
        $sohdid=$hd->insertOrder($_SESSION['makh']);//50
        
        $_SESSION['sohd']=$sohdid;
       
        $total=0;
        foreach($_SESSION['cart'] as $key=>$item)
        {
            $hd->insertOrderDetail($sohdid,$item['mahh'],$item['qty'],$item['size'],$item['total']);
            $total+=$item['total'];
        }
        
        $hd->updateOrderTotal($sohdid,$total);
        include 'View/order.php';
        break;
}
?>