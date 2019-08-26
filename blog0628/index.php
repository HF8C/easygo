<!DOCTYPE html>
<?php session_start();?>
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
        <title>班级多用户博客首页</title>
          <link href="style/index.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
            <?php include 'inc/conn.php';
                   include 'inc/header.php';
            ?>

            <div id="content">
                <div id="left" >
                    <h2>博客最新文章<span><a href="file_more.php">MORE</a>&gt;&gt;</span></h2>
                    <div class="line"></div>
                    <ul>
                        <?php
                        $sql=  mysql_query("select id,title from tb_article order by now desc limit 10");
                        $i=1;
                        while($info=  mysql_fetch_array($sql))
                            {
                            ?>
                        <li><a href="article.php?file_id=<?php echo $info['id']?>">
                            <?php echo $i."、".  substr($info['title'],0,20)?></a></li>
                          <?php
                          $i=$i+1;
                            }
                        ?>
                       
                   
                         
                    </ul>
                </div>
                <div id="middle" >
                    <h2>最新图片推荐<span><a href="pic_more.php">MORE</a>&gt;&gt;</span></h2>
                    <div class="line"></div>
                    <ul>
                        <?php
                        $sql=  mysql_query("select id,tpmc,file from tb_tpsc order by scsj desc limit 8");
                        while($info=  mysql_fetch_array($sql))
                            {
                            ?>
                        <li><a href="image.php?recid=<?php echo $info['id'];?>" target="_blank">
                                <img src="f_image.php?pic_id=<?php echo $info['id']?>"/>
                            </a><span>图片:<?php echo $info['tpmc']?></span></li>
                           <?php
                            }
                        ?>
                      
                      
                    </ul>
                </div>
            <?php include 'inc/right.php';?>
            </div>
          <?php include 'inc/footer.php';?>
        </div>
        
    </body>
</html>
