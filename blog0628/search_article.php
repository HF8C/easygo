<?php
header("Content-type:text/html;charset=gb2312");
session_start();
include 'inc/conn.php';
$select=$_POST[b_search];
$txt_search=$_POST[txt_search];
$query="";