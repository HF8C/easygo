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
    echo "<script>alert('��¼�ɹ���');window.location.href='myblog.php'</script>";
    }
    else{
       echo "<script>alert('�Բ�����������û��������벻��ȷ�����������룡');window.location.href='index.php'</script>";  
    }
    