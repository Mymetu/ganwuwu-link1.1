<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>注册--干物屋</title>
    <link rel="icon" type="image/ico" href="../img/logowu.png">
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="logo">
        <a href="../index.php"><img class="logo" src="../img/logowu.png"></a>
    </div>

<?php
include_once './user.php';
$username = $_POST["zhanghao"];
$userpasswd = $_POST["mima"];
$t = time();

$sql = 'SELECT * FROM user WHERE name=\''.$username.'\';';
//获得查询的结果
$res = $conn->query($sql);
//返回结果中的总行数
$chongfu = $res->num_rows;

if (strlen($username)<16 && strlen($username)>3 && strlen($userpasswd)<16 && strlen($userpasswd)>7 && $chongfu !=1 ) {
    //创建用户的数据表
    $insert_sql = "insert into user (name,password,date) values ('$username','$userpasswd',$t);";
        $conn->query($insert_sql);
        echo "注册成功";

        echo <<< eod
    
    <div class="form">
            <form action='../land.php' method="post">
                <div class="form-table">
                    <div class="zhanghao">账号：<input type="text" name="name"></div>
                    <div class="mima">密码：<input type="password" name="passwd"></div>
                </div>
                <div class="button">
                    <input type="submit" class="denglu" value="登录">
                </div>
            </form>
        </div>

eod;

} else {
    echo "注册用户名重复或不符合要求，请检查";
    echo <<< eod

<div class="form">
        <form action="zhucechuli.php" method="post">
            账号：<input type="text" name="zhanghao">
            密码：<input type="password" name="mima">
            <input type="submit" value="注册">
        </form>
</div>


eod;

}
$conn->close();
?>
</div>
</body>