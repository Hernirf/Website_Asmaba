<?php
session_start();
$user=$_POST['username'];
$pass=$_POST['pass'];
if($user=='admin' && $pass==11){
    $_SESSION['userlogin']='admin';
    header('location: admin.php');
}
elseif($user=='user' && $pass==111){
    $_SESSION['userlogin']='user';
    header('location: inner-page.html');
}

else{
    echo "gagal";
}

?>