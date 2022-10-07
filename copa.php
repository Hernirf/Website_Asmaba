<?php
session_start();
if(isset($_POST["login"])){
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
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <table border=1>
            <tr>
                <td colspan="2">Halaman Login</td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" placeholder="Enter your name"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass" placeholder="Enter your password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="login" value="LOGIN"></td>
            </tr>
        </table>
        
    </form>
</body>
</html>