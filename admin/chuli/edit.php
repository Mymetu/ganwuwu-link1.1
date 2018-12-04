<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="药药的主页">
    <meta name="author" content="药药">
    <title>编辑-干物屋</title>
    <link rel="icon" type="image/ico" href="../../img/logowu.png">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/edit.css">
</head>
<body>
<div class="container">
    <div class="logo">
        <a href="../../index.php">
            <img class="img-responsive center-block" src="../../img/logowu.png">
        </a>
    </div>
    <?php
    include_once '../user.php';
    //判断是否登录:
    if (isset($_COOKIE["one"]) && isset($_COOKIE["two"])) {
        $x = $_COOKIE["one"];
        //mysql查询命令:
        $sql= "select * from useradd where user = '$x';";
        $res = $conn->query($sql);  //发送到mysql执行。
        while ($row = $res->fetch_row()) {  //循环得到所有数据。

            $a1 = $row[2];  //名称
            $a2 = $row[3];  //链接
            $a3 = $row[4];  //图标
            $a4 = $row[0];  //id

            echo "<form action='./linkedit.php' method='post'>
<div class='row'>
            <div class='col-md-1'>
                <img class='img-responsive center-block' src='../.$a3'>
                <input type='hidden' name='a' value='$a4'>
            </div>";

            echo "
            <div class='col-md-1'>
                <input type='text' style='width: 100%;' name='b'>
            </div>
            ";

            echo "<div class='col-md-2'>
                <input type='text' value='$a1' style='width: 80%;' name='c'>
            </div>";

            echo "<div class='col-md-6'>
                <input type='text' value='$a2' style='width: 100%;' name='d'>
            </div>
            <div class='col-md-1'>
                <input type='text' style='width: 100%;' name='e'>
            </div>
            <div class='col-md-1'>
                <input type='submit' value='确认修改'>
            </div>
        </div>
        
</form>";
        }

        echo "<br><br><br>";
        echo <<< eod
        
<div class="row" style="color: #6d757a">
    <div class="col-md-12">
        <div class='images-ku'><a href='./images.php'>图标库</a></div>
        <br /><br /><br />
        <p id="red">修改方法：</p>
        <p>1，从左向右的输入框依次是 <span>图片</span>， <span>网站名称</span>， <span>网站地址</span>， <span>删除代码</span>。</p>
        <p>2，点击&nbsp;<a href="./images.php" id="red" target="_blank">&nbsp;此处&nbsp;&nbsp;</a>选择图片编号填入第一个框。</p>
        <p>3，删除代码为<span>delete</span></p>
        <p>4，若图库没有图标需要手动添加，请联系管理员，QQ群：418584939，图片尺寸最好200px*200px。</p>
    </div>
</div>

<hr><br>

<div class="row" style="color: #6d757a">
    <div class="col-md-6">
        <p>本站点处于1.0版本。待完善内容有如下：</p>
    </div>
    <div class="col-md-6">
        <p>你的支持是对我最大的鼓励。可以投食哦。</p>
    </div>
</div>

<div class="row notice" style="color: #6d757a">
        <div class="col-md-6" style="text-align: left;">
            <p>1，用户名密码未加密，请尽量不要用常用的用户名密码注册。</p>
            <p class="delete">2，不能修改或删除已经添加的站点</p>
            <p>3，仅适配PC端，移动端适配未完成，使用起来界面或许不太友好。</p>
            <p class="delete">4，暂时不可以自定义站点logo图标。</p>
            <p class="delete">5，暂时没有退出登录功能。</p>
            <p class="delete">6，添加网址必须带上http或https，暂时是这样。</p>
            <p>7,用户可以自行添加图标，50kb以内的png文件，分辨率200*200或150*150</p>
            <p>8，需要使用未登录的默认站点，<a href="../../index-bak.php">点击这里</a>。</p>
            <p>9，后期代码开源并有视屏教程，大神勿喷。</p>
            <br><br><br>
        </div>
        
            <div class="row col-md-6">
                <div class="col-md-6">
                    <img class="img-responsive center-block" src="../../img/zhifubao.jpg">
                    <p class="zhifu">支付宝</p>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive center-block" src="../../img/weixin.jpg">
                    <p class="zhifu">微信</p>
                </div>
            </div>
        </div>
        
        <hr>
        <div class="about">
            <a href="http://www.yaoyao.ink">个人Blog</a>&nbsp&nbsp&nbsp <a href="https://space.bilibili.com/31126513/#/">Bilibili</a>
        </div>
        <div class="footer">© 2018 干物屋—-药药的小屋. All Rights Reserved. </div>


eod;

    } else {
        echo <<< eod

<div class="form">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action='../../land.php' method="post">
                    <div class="form-table">
                        <div class="zhanghao">账号：<input type="text" name="name"></div>
                        <div class="mima">密码：<input type="password" name="passwd"></div>
                    </div>
                    <div class="button">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <input type="submit" class="denglu" value="登录">
                        </div>
                        <div class="col-md-3">
                            <div class="zhuce"><a href=".././register.php">注册</a></div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>

eod;
    }
    $conn->close();
    ?>
</div>
</body>