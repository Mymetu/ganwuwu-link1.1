<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/ico" href="../../img/logowu.png">
    <style>
        .add-success {
            text-align: center;
            margin: 20px 0px 20px 0px;
        }
        .logo {
            text-align: center;
        }
    </style>
    <title>干物屋-添加</title>
</head>
<body>
<div class="container">
    <div class="logo">
        <img class="img-responsive center-block" src="../../img/logo.gif">
    </div>
    <div class="add-success">

<?php
include_once '../user.php';

if (isset($_COOKIE["one"]) && isset($_COOKIE["two"])) {
    $t = time();
    $dir = '../../img/logo-ganwuwu';
    $arr = scandir($dir);
    //所有文件总数除./和../
    $all = count($arr)-2;
    //获取一个随机数，去的一个随机的logo图片
    $rand = rand(1,$all);
    $image = "./img/logo-ganwuwu/$rand.png";

    $linkname = $_POST["linkname"];
    $link = $_POST["link"];
    if (strlen($linkname)>0 && strlen($link)>0) {  //如果输入名字和网址都不为空，则保存进数据库
        if (substr($link,0,4) == 'http') {
            $x = $_COOKIE["one"];
            $sql = "insert into useradd (date,linkname,link,image,user) values ('$t','$linkname','$link','$image','$x');";
            $conn->query($sql);
            echo "添加成功";
        } else {
            $link = "http://".$link;
            $x = $_COOKIE["one"];
            $sql = "insert into useradd (date,linkname,link,image,user) values ('$t','$linkname','$link','$image','$x');";
            $conn->query($sql);
            echo "添加成功";
        }

    } else {
        echo "添加失败";
    }
    $conn->close();
} else {
    echo "请登录";
}
?>

    </div>

    </div>
    <div class="add-success">
        <a href="../index.php">
            点击返回主页
        </a>
    </div>

</body>
