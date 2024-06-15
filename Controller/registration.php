<?php
$action="registration";
if(isset($_GET['act']))
{
    $action=$_GET['act'];
}
switch($action)
{
    case "registration":
        include 'View/registration.php';
        break;
    case "registration_action":
        
        $tenkh=$_POST['txttenkh'];
        $username=$_POST['txtusername'];
        $password=$_POST['txtpass'];
        $crypt=md5($password);
        $email=$_POST['txtemail'];
        $diachi=$_POST['txtdiachi'];
        $dt=$_POST['txtsodt'];
       
        $u=new User();
        $u->InsertUser1($tenkh,$username,$crypt,$email,$diachi,$dt);
        echo '<script> alert("Đăng Ký Thành Công")</script>';
        
        include 'View/home.php';
        break;
}
?>