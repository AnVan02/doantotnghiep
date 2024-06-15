<?php
function add_item($mah,$quantity,$size)
{
    
    $pros=new HangHoa();
    $pro=$pros->getListDetail($mah);
    
   
    if(isset($_SESSION['cart'][$mah]))
    {
        $quantity+=$_SESSION['cart'][$mah]['qty'];
        update_item($mah, $quantity);
        return;
    }
    
    $cost=$pro['dongia'];
    $ten=$pro['tenhh'];
    $hinh=$pro['hinh'];
    $total=$cost*$quantity;
  
    $item=array(
        'mahh'=>$mah,
        'hinh'=>$hinh,
        'name'=> $ten,
        'size'=>$size,
        'cost'=>$cost,
        'qty'=>$quantity,
        'total'=>$total,
    );
    
    $_SESSION['cart'][$mah]=$item;
   
}
 
function get_subtotal()
{
    
    $subtotal=0;
    foreach($_SESSION['cart'] as $item)
    {
        $subtotal+=$item['total'];
    }
    $subtotal=number_format($subtotal,2);
    return $subtotal;
}

function update_item($mahh,$quantity)//10,5
{
    
    if($quantity<=0)
    {
        unset($_SESSION['cart'][$mahh]);
    }
    else{
        $_SESSION['cart'][$mahh]['qty']=$quantity;
        
        $totalnew=$_SESSION['cart'][$mahh]['qty']*$_SESSION['cart'][$mahh]['cost'];//2tr
        $_SESSION['cart'][$mahh]['total']= $totalnew;
    }
}
?>