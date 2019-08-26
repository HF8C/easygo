<?php
header("Content-type:text/html; charset=gb2312");
session_start();
include 'inc/conn.php';
$UserName=$_GET[x];
$sql=  mysql_query("select * from tb_user where regname='$UserName'");
$result=  mysql_fetch_array($sql);
if($result)
    {
    echo "用户[".$UserName."]已存在";
    }
 else {
     echo "用户[".$UserName."]可用";    
}