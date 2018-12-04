<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>用户中心-干物屋</title>
    <link rel="icon" type="image/ico" href="../img/logowu.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style-admin.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <a href="../index.php">
                <img class="img-responsive center-block" src="../img/logowu.png">
            </a>
        </div>

        <?php
        include_once './user.php';
        if (isset($_COOKIE["one"]) && isset($_COOKIE["two"])) {    //判断是否登录
            echo <<< eod

        <div class="add">
            <div class="col-md-12">
                <form action="./chuli/add.php" method="post">
                    <div class="col-md-2"></div>
                    <div class="col-md-1">名称：</div>
                    <div class="col-md-2">
                        <input type="text" name="linkname">
                    </div>
                    <div class="col-md-1">网址：</div>
                    <div class="col-md-3">
                        <input class="linkname" type="text" name="link">
                    </div>
                    <div class="col-md-1">
                        <input class="link" type="submit" value="添加">
                    </div>
                    <div class="col-md-2">  </div>
                </form>
            </div>
        </div>

eod;
            $x = $_COOKIE["one"];
            $sql= "select * from useradd where user = '$x';"; //mysql查询命令
            $res = $conn->query($sql);  //发送到mysql执行。
            while ($row = $res->fetch_row()) {  //循环得到所有数据。

                $a1 = $row[2];  //名称
                $a2 = $row[3];  //链接
                $a3 = $row[4];  //图标

                echo "<div class='row'>
            <div class='col-md-1'>
                <img class='img-responsive center-block' src='.$a3'>
            </div>";

                echo "<div class='col-md-2'>
                $a1
            </div>";

                echo "<div class='col-md-7'>
                <a href='$a2'>
                    $a2
                </a>
            </div>
            <div class='col-md-2'>
                <a href='./chuli/edit.php'>编辑</a>
            </div>
        </div>";
            }

            echo "<div class='logout'>
              <a class='footer' href='../logout.php'>退出登录&nbsp;&nbsp;</a>
              <a href='./chuli/images.php'>图标库&nbsp;&nbsp;</a>
              <a class='footer' href='./chuli/userupload.php'>上传图标</a>
            </div>";
        } else {
            echo <<< eod

<div class="form">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action='../land.php' method="post">
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
                            <div class="zhuce"><a href="register.php">注册</a></div>
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
</html>
