<?php
session_start();
if(isset($_SESSION['userlogin'])){
    if($_SESSION['userlogin']=='admin'){
        header('location: ./admin/index.php');
        exit;
    }
    elseif($_SESSION['userlogin']=='user'){
        header("location: ./user/user.php");
    }
}


if(isset($_POST["login"])){
    $user=$_POST['username'];
    $pass=$_POST['pass'];

    if($user=='admin' && $pass==123){
        $_SESSION['userlogin']='admin';
        header('location: ./admin/index.php');
    }
    elseif($user=='user' && $pass==123){
        $_SESSION['userlogin']='user';
        header('location: ./user/user.php');
    }
    
    else{
        header('location: sistem_login.php');
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            margin;0;
            padding:0;
            font-family: montserrat;
            background:skyblue;
            height:100vh;
            overflow:hidden;
        }
        .center{
            position:absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background:white;
            width:400px;
            border-radius:10px;
        }

        .center h1{
            text-align:center;
            padding: 0 0 20px 0;
            border-bottom: 1px solid;
            color:darkblue;
        }

        .center form{
            padding:0 40px;
            box-sizing:border-box;
        }

        form .txt{
            position:relative;
            border-bottom:2px solid;
            margin:30px 0;
        }

        .txt input{
            width:100%;
            padding: 0 5px;
            height:30px;
            font-size:16px;
            border:none;
            background:none;
            outline:none;
        }

        .txt label{
            top:50px;
            left:5px;
            color:black;
            transform:translate(-50%);
            font-size:16px;
            pointer-events:none;
        }

        input[type="submit"]{
            width:100%;
            height:50px;
            border: 1px solid;
            background:darkblue;
            border-radius:25px;
            color:white;
            margin-bottom:20px;
            font-size:18px;
        }

    </style>
</head>
<body>
    <div class="center">
        <h1>LOGIN</h1>
        <form method="POST" action="">
            <div class="txt">
                <label for="">Username</label>
                <input type="text" name="username" required><br>
            </div>
            <div class="txt">
                <label for="">Password</label>
                <input type="password" name="pass" required><br>
            </div>
            <input type="submit" name="login" value="LOGIN"><br>
        </form>
    </div>
    
</body>
</html>