<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>注销登录-干物屋</title>
    <link rel="icon" type="image/ico" href="img/logowu.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .success {
            text-align: center;
            margin: 50px;
        }
    </style>
</head>
<body
<div class="container">
    <div class="logo">
        <a href="admin/index.php">
            <img class="img-responsive center-block" src="img/logowu.png">
        </a>
    </div>

<?php
$name = $_COOKIE["one"];
$passwd = $_COOKIE["two"];
setcookie("one",$name,time()-63072000);
setcookie("two",$passwd,time()-63072000);
?>
    <div class="success">
        <p>注销成功</p>
        <div><a href="index.php">点击返回</a></div>
    </div>

</div>
</body>