<?php
class HangHoa{
    // thuộc tính(tức là các cột trong bảng dữ liệu)
    var $mahh=null;
    var $tenhh=null;
    // tại sao khởi gán bằng 0 vì kiểu của nó là kiểu số
    var $dongia=0;
    var $giamgia=0;
    var $hinh="image/";
    var $nhom=0;
    var $maloai=null;
    // đặc biệt là kiểu bit(chỉ có 2 giá trị 0 và 1) cũng là số nên khởi tạo=0
    var $dacbiet=0;
    var $soluotxem=0;
    var $ngaylap=null;
    var $mota=null;
    var $solt=0;
    var $size=0;
    // hàm tạo
    public function __construct(){
        if(func_num_args()==14)
        {
            $this->mahh=func_get_arg(0);
            $this->tenhh=func_get_arg(1);
            $this->dongia=func_get_arg(2);
            $this->giamgia=func_get_arg(3);
            $this->hinh=func_get_arg(4);
            $this->nhom=func_get_arg(5);
            $this->maloai=func_get_arg(6);
            $this->dacbiet=func_get_arg(7);
            $this->soluotxem=func_get_arg(8);
            $this->ngaylap=func_get_arg(9);
            $this->mota=func_get_arg(10);
            $this->solt=func_get_arg(11);
            $this->size=func_get_arg(13);
           
        }
    }
    function getListHangHoaNew()
    {
        // đầu tiên phải có câu truy vấn
        $select="select * from hanghoa order by mahh DESC limit 12";
        // ai thực thi câu truy vấn này là query thực hiện
        $db=new connect();
        $result=$db->getList($select);
        return $result;
    }
 
    function getListHangHoaSale()
    {
        // đầu tiên phải có câu truy vấn
        $select="select * from hanghoa where giamgia>0 limit 8";
        // ai thực thi câu truy vấn này là query thực hiện
        $db=new connect();
        $result=$db->getList($select);
        return $result;
    }
    function getListHangHoaAll()
    {
        $select="select * from hanghoa";
        
        $db=new connect();
        $result=$db->getList($select);
        return $result;
    }
    function getCountHangHoaAll()
    {
        $select="select count(*) from hanghoa";
       
        $db=new connect();
        
        $result=$db->getInstance($select);
        return $result[0];
    }
    function getListHangHoaSaleAll()
    {
        
        $select="select * from hanghoa where giamgia>0";
        
        $db=new connect();
      
        $result=$db->getList($select);
        return $result;
    }
    function getListDetail($id)
    {
        $select ="select * from hanghoa where mahh=$id";
        
        $db=new connect();
        $result=$db->getInstance($select);
        return $result;
    }
    function getListDetailNhom($nhom)
    {
        $select ="select * from hanghoa where nhom=$nhom";
        $db=new connect();
        $result=$db->getList($select);
        return $result;
    }
    function getListDetailNhomSize($nhom)
    {
        $select ="select distinct(size) from hanghoa where nhom=:nhom";
        $db=new connect();
        $stm=$db->execP($select);
        $stm->bindParam(':nhom',$nhom);
        $stm->execute();
       
        return $stm;
    }
    function getSeach($search){
        $select="select * from hanghoa where tenhh like :tenhh";
        $db=new connect();
        $stm=$db->execP($select);
        
        $stm->bindvalue(':tenhh',"%".$search."%");
        $stm->execute();
        return $stm;
    }
}
?>