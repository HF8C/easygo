<?php
header("Content-type:text/html;charset=gb2312");
session_start();
include 'inc/conn.php';
$title=$_POST[txt_title];
$con=$_POST[txt_con];
$UserName=$_SESSION[username];
$datetime=date("Y-m-d H:i:s");
$query="insert into  tb_article(content,author,now,title) values ('$con','$UserName','$datetime','$title' )";
$result=  mysql_query($query);
if($result)
    {
   echo " <script>alert('添加文章成功!');window.location.href='$_SERVER[HTTP_REFERER]';</script>";
    }
 else {
     echo " <script>alert('添加文章失败!');history.go(-1);</script>";    
}
