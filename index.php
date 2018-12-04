<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/ico" href="./img/logowu.png">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>干物屋</title>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img class="img-responsive center-block" src="./img/logo.gif">
        </div>
        <div class="search">
            <form action="https://baidu.com/s" method="get">
                <div class="row">
                    <div class="col-md-3 col-xs-3">
                        <div class="col-md-9 col-xs-2"></div>
                        <div class="col-md-3 col-xs-10">
                            <a href="./admin/index.php">
                                <img class="img-responsive center-block" src="./img/logo-ganwuwu/251.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-5">
                        <input type="text" class="search_input" autofocus="autofocus" autocomplete="off" name="wd" required>
                    </div>
                    <div class="col-md-1 col-xs-2">
                        <input type="submit" class="search_submit"  value="问度娘">
                    </div>
                    <div class="col-md-3 col-xs-2"></div>
                </div>
            </form>
        </div>

        <div class="row">
            <?php
            include_once './admin/user.php';
            if (isset($_COOKIE["one"]) && isset($_COOKIE["two"])){
                $x = $_COOKIE["one"];
                $sql= "select * from useradd where user = '$x';"; //mysql查询命令
                $res = $conn->query($sql);  //发送到mysql执行。
                while ($row = $res->fetch_row()) {  //循环得到所有数据。
                    $a1 = $row[2];  //名称
                    $a2 = $row[3];  //链接
                    $a3 = $row[4];  //图标
                    echo "
                        <div class='col-md-1 col-xs-3'>
                            <a href='$a2'>
                                <img src='$a3' class='img-responsive center-block'>
                            </a>
                            <p>$a1</p>
                        </div>";
                }
            } else {
                echo <<< eod

            <div class="col-md-1 col-xs-3">
                <a href="https://www.google.com/">
                    <img src="img/google.png" class="img-responsive center-block">
                </a>
                    <p>Google</p>
            </div>

            <div class="col-md-1 col-xs-3">
                <a href="https://www.youtube.com/">
                    <img src="img/youtube.png" class="img-responsive center-block">
                </a>
                <p>Youtube</p>
            </div>

            <div class="col-md-1 col-xs-3">
                <a href="http://www.yaoyao.ink/">
                    <img src="img/logowu.png" class="img-responsive center-block">
                </a>
                    <p>干物屋</p>
            </div>

            <div class="col-md-1 col-xs-3">
                <a href="https://www.bilibili.com/">
                    <img src="img/bilibili.png" class="img-responsive center-block">
                </a>
                    <p>哔哩哔哩</p>
            </div>

            <div class="col-md-1 col-xs-3">
                <a href="https://pan.baidu.com/">
                    <img src="img/baiduyun.png" class="img-responsive center-block">
                </a>
                    <p>百度云</p>
            </div>

            <div class="col-md-1 col-xs-3">
                <a href="https://www.zhihu.com/">
                    <img src="img/zhihu.png" class="img-responsive center-block">
                </a>
                    <p>知乎</p>
            </div>

            <div class="col-md-1 col-xs-3">
                <a href="https://www.imooc.com/">
                    <img src="https://www.imooc.com/static/img/common/touch-icon-ipad.png" class="img-responsive center-block">
                </a>
                    <p>慕课网</p>
            </div>

            <div class="col-md-1 col-xs-3">
                <a href="https://juejin.im/">
                    <img src="https://b-gold-cdn.xitu.io/favicons/v2/apple-touch-icon.png" class="img-responsive center-block">
                </a>
                    <p>掘金</p>
            </div>

            <div class="col-md-1 col-xs-3">
                <a href="http://www.iconfont.cn/">
                    <img src="http://gtms04.alicdn.com/tps/i4/TB1_oz6GVXXXXaFXpXXJDFnIXXX-64-64.ico" class="img-responsive center-block">
                </a>
                    <p>矢量图库</p>
            </div>

            <div class="col-md-1 col-xs-3">
                <a href="https://www.taobao.com/">
                    <img src="https://img.alicdn.com/tps/i3/T1OjaVFl4dXXa.JOZB-114-114.png" class="img-responsive center-block">
                </a>
                    <p>淘宝</p>
            </div>

            <div class="col-md-1 col-xs-3">
                <a href="https://www.fczbl.vip/">
                    <img src="https://cdn.jsdelivr.net/gh/showrbq/kratos-alpha@0.2.7/images/favicon.ico" class="img-responsive center-block">
                </a>
                    <p>犬の窝</p>
            </div>

            <div class="col-md-1 col-xs-3">
                <a href="https://www.jianshu.com/">
                    <img src="./img/114jianshu.png" class="img-responsive center-block">
                </a>
                    <p>简书</p>
            </div>

eod;

            }
            $conn->close();
            ?>
        </div>
</body>
</html>