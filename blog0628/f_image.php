<?php  
    include "inc/conn.php";
    $pic_id=$_GET["pic_id"];	
    $query="select * from tb_tpsc where id=".$pic_id;
    $result=mysql_query($query);
    if(!$result) die("error: mysql query"); 
    $num=mysql_num_rows($result); 
    if($num<1) die("error: no this recorder");     
    $data = mysql_result($result,0,"file"); 
    echo $data;     
?> 



