<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <?php   error_reporting(E_ALL^E_NOTICE^E_WARNING);?> 
        <meta charset="GB2312">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>����</title>
          <link href="style/index.css" rel="stylesheet" type="text/css">
          <script src="js/check.js"></script>
          <link href="style/article.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
             <?php 
             include 'inc/conn.php';
             include 'inc/header.php';
             ?>
            <div id="content">
                <div id="left" >
                    <div id="article">
                   <?php
                   $file_id=$_GET['file_id'];
                   $sql=  mysql_query("select * from tb_article where id=".$file_id);
                   $result=  mysql_fetch_array($sql);
                   ?>
                        <h1><?php echo $result['title'];?></h1>
                        <h3>���ߣ�<?php echo $result['author'];?> ����ʱ�䣺<?php echo $result['now'];?></h3>
                        <p><?php echo $result['content'];?></p>
                    </div>
                    <?php
                    $page=$_GET["page"];
                    if($page==""){$page=1;};
                    $page_size=3;
                    $query="select count(*) as total from tb_filecomment where fileid='".$file_id."' order by id desc";
                    $result=  mysql_query($query);
                    $message_count=  mysql_result($result,0,"total");
                    $page_count=  ceil($message_count/$page_size);
                    $offset=($page-1)*$page_size;
                    $sql=  mysql_query("select * from tb_filecomment where fileid='$file_id' order by id desc limit $offset,$page_size");
                    if(mysql_num_rows($sql)==0){
                        echo "<div id='ping'><p>�Բ���û��������ۣ�</p></div>";
                    }
                    while ($result=  mysql_fetch_array($sql))
                    {
                      ?>
                     <div id="ping">
                        <li>�����ˣ�<?php echo $result['username'];?><span>����ʱ�䣺<?php echo $result['datetime'];?></span></li>
                        <p>
                            <?php
                            if($_SESSION[fig]==1){
                                ?>
                            <a href="del_comment.php?comment_id=<?php echo $result['id'];?>">
                                <img src="images/delete2.jpg" class='picdel' onclick='return pic_del();'></a>
                          
                               <?php
                              
                            }
                             ?>
                            <?php echo $result['content'];?>
                        </p>
                        
                    </div>
                    <?php
                    }
                    ?>
                   
                    <p class="page">
                        ҳ�Σ�<?php echo $page;?>/<?php echo $page_count;?>ҳ&nbsp;
                        ��¼��<?php echo $message_count;?>��&nbsp;
                        <?php
                        if($page!=1){
                            echo "<a href=article.php?page=1&file_id=".$file_id.">��ҳ</a>&nbsp;";
                            echo "<a href=article.php?page=".($page-1)."&file_id=".$file_id.">��һҳ</a>&nbsp;";
                        }
                        if($page<$page_count)
                        {
                           echo "<a href=article.php?page=".($page+1)."&file_id=".$file_id.">��һҳ</a>&nbsp;";
                           echo "<a href=article.php?page=".$page_count."&file_id=".$file_id.">βҳ</a>&nbsp;";
                        }
                        ?>
                    </p>
                    <div id="say">
                    <!--<dt>ҳ�Σ�1/3ҳ ��¼��18�� <a href="#">��ҳ</a>&nbsp;<a href="#">��һҳ</a>&nbsp;<a href="#">��һҳ</a> </dt>-->
                    <form name="myform" method="post" action="check_comment.php">
                        <dd>��������<input type="submit" name="submit" class="btn" value="����" onclick="return r_check();"></dd>
                        <textarea name="txt_content" id="txt_content" rows="4" cols="50"></textarea>
                        <input name="htxt_fileid" width="50" height="3" type="hidden" value="<?php echo $_GET['file_id'];?>">
                    </form>
               </div> 
             </div>
            </div>
                  <?php include 'inc/footer.php'; ?>
        </div>
        
    </body>
</html>
