<?php
header("Content-type:text/html; charset=gb2312");
session_start();
include 'inc/conn.php';
$UserName=$_GET[x];
$sql=  mysql_query("select * from tb_user where regname='$UserName'");
$result=  mysql_fetch_array($sql);
if($result)
    {
    echo "�û�[".$UserName."]�Ѵ���";
    }
 else {
     echo "�û�[".$UserName."]����";    
}