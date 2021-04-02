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
        <fieldset>Login </br>
            <input type="text" placeholder="username" name="username"></br>
            <input type="password" placeholder="password" name="password"></br>
            <button type="submit" >Sign in</button>
        </fieldset>
    </div>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($username === "admin" && $password === "admin") {
        echo "đăng nhập thành công";
    } else {
        echo "đăng nhập thất bại</h2>";
    }
}
?>
</body>
</htm>