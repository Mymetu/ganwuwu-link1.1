<div style="text-align: center;">
<?php
header("Content-Type: text/html;charset=utf-8");
if (isset($_COOKIE['one']) && isset($_COOKIE['two'])) {
    include_once '../user.php';

    $t = time();
    $user = $_COOKIE['one'];
    $dir = '../../img/logo-ganwuwu';
    $arr = scandir($dir);
    $all = count($arr)-2;//所有文件总数除./和../
    $new_image = $all + 1;

    if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/x-png")) && ($_FILES["file"]["size"] < 51200))
    {
        if ($_FILES["file"]["error"] > 0)
        {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
        }
        else
        {
            echo "上传成功<br /><br />";
            echo "上传文件名: " . $_FILES["file"]["name"] . "<br />";
            echo "类型: " . $_FILES["file"]["type"] . "<br />";
            echo "大小: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
            echo "图库内序号：".$new_image."<br /><br />";

            move_uploaded_file($_FILES["file"]["tmp_name"], "../../img/logo-ganwuwu/" . $new_image . ".png");
            $sql = "insert into images (date,image,user) values ($t,'$new_image','$user');";
            $conn->query($sql);

            echo "<a href='../../index.php'>返回主页</a>";
        }
    }
    else
    {
        echo "图片大小或者格式错误";
        echo <<< eod
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="file">选择图片:</label>
            <input type="file" name="file" id="file" /> 
            <br />
            <input type="submit" name="submit" value="上传" />
        </form>
eod;

    }
} else {
    echo "<a href='.././index.php'>请登录</a>";
}

?>
</div>