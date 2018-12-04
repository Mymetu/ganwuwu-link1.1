<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="药药的主页">
    <meta name="author" content="药药">
    <title>登陆处理</title>
    <link rel="icon" type="image/ico" href="./img/logowu.png">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/land.css">
</head>
<body>
<div class="container">
    <div class="logo">
        <a href="./index.php">
            <img class="img-responsive center-block" src="./img/logowu.png">
        </a>
    </div>
<?php
include_once './admin/user.php';
$name = $_POST["name"];
$passwd = $_POST["passwd"];
$a1 = 11;
$a2 = 12;

//查询数据库中是否存在用户，并匹配用户名密码
$sql = "select * from user where name = '$name';";
$res = $conn->query($sql);
while ($row = $res->fetch_row()) {
    $a1 = $row[1];
    $a2 = $row[2];
}
//用户名密码正确，创建cookie
if ($a1==$name && $a2==$passwd) {
    setcookie("one",$name,time()+63072000);
    setcookie("two",$passwd,time()+63072000);

    echo <<< eod
    <div class="link">
        <a href="./admin/index.php">用户中心</a>&nbsp&nbsp
        <a href="./index.php">首页</a>
    </div>
    
    <div class="row notice" style="color: #6d757a">
        <div class="col-md-6">
            <p>本站点处于1.0版本。待完善内容有如下：</p>
            <p>1，用户名密码未加密，请尽量不要用常用的用户名密码注册。</p>
            <p class="delete">2，不能修改或删除已经添加的站点</p>
            <p>3，仅适配PC端，移动端适配未完成，使用起来界面或许不太友好。</p>
            <p class="delete">4，暂时不可以自定义站点logo图标。</p>
            <p class="delete">5，暂时没有退出登录功能。</p>
            <p class="delete">6，添加网址必须带上http或https，暂时是这样。</p>
            <p>7,用户可以自行添加图标，50kb以内的png文件，分辨率200*200或150*150</p>
            <p>8，需要使用未登录的默认站点，<a href="./index-bak.php">点击这里</a>。</p>
            <p>9，后期代码开源并有视屏教程，大神勿喷。</p>
            <br><br><br>
        </div>
        <div>
            <p>你的支持是对我最大的鼓励。可以投食哦。</p>
            <div class="row col-md-6">
                <div class="col-md-6">
                    <img class="img-responsive center-block" src="./img/zhifubao.jpg">
                    <p class="zhifu">支付宝</p>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive center-block" src="./img/weixin.jpg">
                    <p class="zhifu">微信</p>
                </div>
            </div>
        </div>
    </div>
   

    
eod;
} else {
    echo '<div class="erro">用户名密码错误<br /><br /></div>';
    echo <<< eod

<div class="land">
    <form action="./land.php" method="post">
        账号：<input type="text" name="name">
        密码：<input type="text" name="passwd">
        <input type="submit" value="登陆">
    </form>
</div>


eod;

}
$conn->close();
?>
    <div class="about">
        <a href="http://www.yaoyao.ink">个人Blog</a>&nbsp&nbsp&nbsp <a href="https://space.bilibili.com/31126513/#/">Bilibili</a>
    </div>
    <div class="footer">© 2018 干物屋—-药药的小屋. All Rights Reserved. </div>
</div>
</body>
</html>