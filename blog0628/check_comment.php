<?php
header("Content-type:text/html;charset=gb2312");
session_start();
include 'inc/conn.php';
if(!isset($_SESSION['username'])){
    $user="匿名";
}
 else {
$user=$_SESSION['username'];    
}
if($_POST["submit"]){
    $content=$_POST['txt_content'];
    $datetime=  date("Y-m-d H-i-s");
    $INS="insert into tb_filecomment (fileid,username,content,datetime) values"
            ."($_POST[htxt_fileid],'$user','$content','$datetime')";
    $info=  mysql_query($INS);
    if($info){
        echo "<script>alert('成功发表评论！');</script>";
        echo "<script>window.location.href='$_SERVER[HTTP_REFERER]';</script>";
    }
    else{
         echo "<script>alert('评论发表失败！');</script>";
          echo "<script>history.go(-1);</script>";
    }
}