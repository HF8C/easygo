<?php
header("Content-type:text/html;charset=gb2312");
session_start();
include "inc/conn.php";
$name=$_POST['txt_user'];
$pwd=$_POST['txt_pwd'];
$sql=  mysql_query("select * from tb_user where regname='".$name."'and regpwd='".$pwd."'");
$result=  mysql_fetch_array($sql);

if($result!="")
    {
    $_SESSION['fig']=$result['fig'];
    $_SESSION['username']=$name;
    echo "<script>alert('登录成功！');window.location.href='myblog.php'</script>";
    }
    else{
       echo "<script>alert('对不起，你输入的用户名或密码不正确，请重新输入！');window.location.href='index.php'</script>";  
    }
    