<?php
$connect= mysql_connect("localhost","root", "");
mysql_select_db("db_tmlog",$connect);
mysql_query("set names 'gb2312'");
