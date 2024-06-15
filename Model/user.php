<?php
class User{
    // thuộc tính
    var $makh=0;
    var $tenkh=null;
    var $user=null;
    var $pass=null;
    var $email=null;
    var $diachi=null;
    var $sodt=null;
    var $vaitro=0;
    // hàm tạo
    public function __construct(){}
   
   public function InsertUser($tenkh,$user,$matkhau,$email,$diachi,$dt)
    {
       
        $query="insert into khachhang1(makh,tenkh,username,matkhau,email,diachi,sodienthoai,vaitro) values(Null,?,?,?,?,?,?,default)";
       
        $db=new connect();
        $stm=$db->execP($query);
       
        $stm->execute([$tenkh,$user,$matkhau,$email,$diachi,$dt]);
    }
    
    public function InsertUser1($tenkh,$user,$matkhau,$email,$diachi,$dt)
    {
      
        $query="insert into khachhang1(makh,tenkh,username,matkhau,email,diachi,sodienthoai,vaitro) values(Null,:tenkh,:username,:matkhau,:email,:diachi,:sodienthoai,default)";
       
        $db=new connect();
        $stm=$db->execP($query);
       
        $stm->bindParam(':tenkh',$tenkh);
        $stm->bindParam(':username',$user);
        $stm->bindParam(':matkhau',$matkhau);
        $stm->bindParam(':email',$email);
        $stm->bindParam(':diachi',$diachi);
        $stm->bindParam(':sodienthoai',$dt);
        $stm->execute();
    }
    
    public function InsertUser2($tenkh,$user,$matkhau,$email,$diachi,$dt)
    {
        
        $query="insert into khachhang1(makh,tenkh,username,matkhau,email,diachi,sodienthoai,vaitro) values(Null,'$tenkh','$user','$matkhau','$email','$diachi','$dt',default)";
       
        $db=new connect();
        $stm=$db->exec($query);   
    }
    public function login($username, $password)
    {
        $select="select * from khachhang1 WHERE username='$username' and matkhau='$password'";
        $db=new connect();
        $result=$db->getList($select);
        
        $set= $result->fetch();
        return $set;// $set[sony,123]
    }
    public function insertComment($mahh,$makh,$noidung)
    {
        $query="insert into binhluan1(mabl,mahh,makh,ngaybl,noidung)values(NULL,:mahh,:makh,:ngaybl,:noidung)";
        $date=new DateTime("now");
        $ngay=$date->format("Y-m-d");
        $db=new connect();
        $stm=$db->execP($query);
        
        $stm->bindParam(':mahh',$mahh);
        $stm->bindParam(':makh',$makh);
        $stm->bindParam(':ngaybl',$ngay);
        $stm->bindParam(':noidung',$noidung);
       
        $stm->execute();

    }
    
    function displayComment($mahh)
    {
       
        $select="select a.username,b.noidung from khachhang1 a INNER join binhluan1 b on a.makh=b.makh where  mahh=$mahh
        order by b.mabl desc";
        $db=new connect();
        $result= $db->getList($select);
        return $result;// lấy được dữ liệu từ database về
    }
    
    function getTotalComment($mahh)
    {
        $select="select count(makh) from binhluan1 where mahh=$mahh";
        $db=new connect();
        $result= $db->getInstance($select);
        return $result;
    }
   function getemai($email)
   {
       $select ="select email,matkhau from khachhang1 where email='$email'";
       $db=new connest();
       $result= $db->getInstance($select);
       return $result;
   }
   function updateEmai($emailold,$passnew)
   {
       $db =new connect();
      $query="update khachhang1 set matkhau='$passnew' where email='$emailold'";
      $db->exec($query);
   }

}

?>