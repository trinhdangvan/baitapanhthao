<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form dang nhap</title>
    <style type="text/css">
        .login {
            height: 230px;
            width: 230px;
            margin: 0;
            padding: 48px;
            border: 1px #CCC solid;
        }

        .login input {
            padding: 10px;
            margin: 10px
        }
        form{
            width: 328px;
            background: chartreuse;
        }
    </style>
</head>
<body>
<form method="post">
    <div class="login">
        <h1>Accout Login</h1>
        <input type="text" name="email" placeholder="E-mail">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="SIGN IN">
    </div>
</form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    if ($email == "admin@gmail.com" && $password == "admin") {
        //echo "Đăng nhập thành công";
        header("Location: http://james.codegym.vn");
    } else {
        echo "Đăng nhập thất bại";
    }
}


?>
</body>
</htm>