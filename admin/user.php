<?php
$servername = "数据库地址";
$sqlusername = "用户名";
$sqlpasswd = "密码";
$sqlname = "数据库名";


$conn = new mysqli($servername,$sqlusername,$sqlpasswd,$sqlname);
$conn->set_charset('utf8');
?>