<?php
class HoaDon{
    var $sohd=null;
    var $makh=null;
    var $ngaydat=null;
    var $tongtien=null;
    var $mahh=null;
    public function __construct()
    {
    }
    public function insertOrder($makh)
    {
        
        $date=new DateTime("now");
        $ngay=$date->format("Y-m-d");
        $query="insert into hoadon1(masohd,makh,ngaydat,tongtien)
        values(NULL,$makh,'$ngay',0)";
       
       
        $db=new connect();
        $db->exec($query);
        $select="select masohd from hoadon1 order by masohd desc limit 1";//50
       
        $result=$db->getInstance($select);
        return  $result[0];
    }
   
    public function insertOrderDetail($masohd,$mahh,$soluong,$size,$thanhtien)
    {
        $query="insert into cthoadon1(masohd,mahh,soluongmua,size,thanhtien,tinhtrang) values($masohd,$mahh,$soluong,$size,$thanhtien,0)";
      
        $db=new connect();
        $db->exec($query);
    }
    function updateOrderTotal($masohd,$total)
    {
        $query="update hoadon1 set tongtien=$total where masohd=$masohd";
        $db=new connect();
        $db->exec($query);
    }
    function getOrder($sohdid)
    {
        $select="select b.masohd,a.tenkh,b.ngaydat,a.diachi,a.sodienthoai from khachhang1 a 
        inner join hoadon1 b on a.makh=b.makh where masohd=$sohdid";
       
        $db=new connect();
        $result=$db->getInstance($select);
        return $result;
    }
    function getOrderDetail($sohdid)
    {
        $select="select a.tenhh,a.dongia,b.size,b.soluongmua,b.thanhtien 
        from hanghoa a inner join cthoadon1 b on a.mahh=b.mahh where masohd=$sohdid";
      
        $db=new connect();
        $result=$db->getList($select);
        return $result;
    }
}
?>