<?php
session_start();
include 'inc/conn.php';
$comment_id=$_GET[comment_id];
$query="delete from tb_filecomment where  id='$comment_id'";
$result=  mysql_query($query);
if($result)
    {
   echo " <script>alert('ɾ���ɹ�!');window.location.href='$_SERVER[HTTP_REFERER]';</script>";
    }
 else {
     echo " <script>alert('ɾ��ʧ��!');history.go(-1);</script>";    
}