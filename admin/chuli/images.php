<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>图标库-干物屋</title>
    <link rel="icon" type="image/ico" href="../../img/logowu.png">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
        <?php
        //统计一个文件夹一共有多少文件
        $dir = '../../img/logo-ganwuwu';
        $arr = scandir($dir);
        $all = count($arr)-2;//所有文件总数除./和../

        //获得总行数：
        $row = floor($all/12);
        //取余：
        $yu = fmod($all,12);


        for ($i=1;$i<=$row;$i++) {
            echo "<div class='row'>";
            for ($h=$i*12,$k=$h-11;$k<=$h;$k++) {
                echo "
                    <div class='col-md-1 col-xs-2'>
                        <a>
                            <img src='../../img/logo-ganwuwu/$k.png' class='img-responsive center-block'>
                        </a>
                        <p>$k</p>
                    </div>
                    ";
            }
            echo "</div>";
        }

        echo "<div class='row'>";
        for ($x=1;$x<=$yu;$x++) {
            $num = $row*12+$x;
            echo "
                    <div class='col-md-1 col-xs-2'>
                        <a>
                            <img src='../../img/logo-ganwuwu/$num.png' class='img-responsive center-block'>
                        </a>
                        <p>$num</p>
                    </div>
                    ";
        }
        echo "</div>";
        ?>
</div>

</body>