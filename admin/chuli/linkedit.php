<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="药药的主页">
    <meta name="author" content="药药">
    <title>修改成功-干物屋</title>
    <link rel="icon" type="image/ico" href="../../img/logowu.png">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <style>
        body {
            text-align: center;
            color: #6d757a;
            font-size: large;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="logo">
        <a href="../../index.php">
            <img class="img-responsive center-block" src="../../img/logowu.png">
        </a>
    </div>

<?php
if (isset($_COOKIE["one"]) && isset($_COOKIE["two"])) {

include_once './../user.php';
$a = $_POST["a"];
if ($_POST["e"]=='delete') {
    $sql = "delete from useradd where id=$a;";
    $res = $conn->query($sql);
    echo "删除成功";
    echo "
            <div>
                <a href='./edit.php'>点击返回</a>
            </div>";
} else {
    //判断是否要修改图标
    if ($_POST["b"]>=1 && $_POST["b"] <10000) {
        $b = $_POST["b"];
        $c = $_POST["c"];
        $d = $_POST["d"];
        $sql1 = 'update useradd set linkname="';
        $sql2 = '",link="';
        $sql3 = '",image="./img/logo-ganwuwu/';
        $sql4 = '.png" where id=';
        $sql = $sql1.$c.$sql2.$d.$sql3.$b.$sql4.$a.";";

        $res = $conn->query($sql);

        echo "
            <div>
                <div>修改成功</div>
                <a href='./edit.php'>点击返回</a>
            </div>";
    } else {
        $c = $_POST["c"];
        $d = $_POST["d"];
        $sql1 = 'update useradd set linkname="';
        $sql2 = '",link="';
        $sql3 = '" where id=';
        $sql = $sql1.$c.$sql2.$d.$sql3.$a.";";

        $res = $conn->query($sql);

        echo "
            <div>
                <div>修改成功</div>
                <a href='./edit.php'>点击返回</a>
            </div>";
    }
}
$conn->close();
} else {
    echo "请返回登陆";
}
?>
</div>
</body>
</html>