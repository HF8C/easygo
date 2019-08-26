<?php
header("Content-type:text/html;charset=gb2312");
session_start();
include 'inc/conn.php';
$pubsql="select * from tb_public where id=".$_GET[id];
$pubrst= mysql_query($pubsql,$connect);
$pubrow=  mysql_fetch_array($pubrst);
echo "<pre>".$pubrow['content']."</pre>";