<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="药药的主页">
    <meta name="author" content="药药">
    <title>上传-干物屋</title>
    <link rel="icon" type="image/ico" href="../../img/logowu.png">
      <link rel="stylesheet" href="../../css/bootstrap.min.css">
  </head>
  <body>
  <div class="container">
      <div class="logo" style="margin: 0px 0px 30px 0px;">
          <img class="center-block img-responsive" src="../../img/logowu.png">
      </div>
  <div class="row">
      <div class="col-md-6">
          <?php
          include_once '../user.php';
          if (isset($_COOKIE['one']) && isset($_COOKIE['two'])) {

              echo <<< eod
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-3">选择图片：</div>
                <div class="col-md-5"><input type="file" name="file" id="file" /> </div>
                <div class="col-md-4"><input type="submit" name="submit" value="上传" /></div>
            </div>
        </form>
eod;

          } else {
              echo "<a href='.././index.php'>请登录</a>";
          }
          ?>
      </div>

      <div class="col-md-6" style="color: #6d757a">
          <p>1，上传图标格式必须为png格式。</p>
          <p>2，建议图标分辨率为200*200或者150*150。（长宽相等并大于100px）</p>
          <p>3，仅50kb以内的图片。</p>
      </div>
  </div>

  </div>
  </body>
</html>
