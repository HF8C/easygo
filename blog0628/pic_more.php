<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="GB2312">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>班级多用户博客首页</title>
          <link href="style/index.css" rel="stylesheet" type="text/css">
          <link href="style/pic_more.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
           <?php 
           include 'inc/conn.php';
           include 'inc/header.php';
           ?>
            <div id="content">
                <div id="left" >
                   <h2>图片推荐</h2>
                    <div class="line"></div>
                    <ul>
                    <?php
                    $page=$_GET["page"];
                    if($page==""){$page=1;};
                    $page_size=10;
                    $query="select count(*) as total from tb_tpsc  order by id desc";
                    $result=  mysql_query($query);
                    $message_count=  mysql_result($result,0,"total");
                    $page_count=  ceil($message_count/$page_size);
                    $offset=($page-1)*$page_size;
                    $sql=  mysql_query("select id,tpmc,file from tb_tpsc order by scsj desc limit $offset,$page_size");
                   $i=1;
                    while ($info=  mysql_fetch_array($sql))
                    {
                      ?>
                        <li><a href="image.php?recid=<?php echo $info['id'];?>" target="_blank">
                                <img src="f_image.php?pic_id=<?php echo $info['id']?>"/>
                            </a>
                            <span>图片:<?php echo $info['tpmc']?></span>
                        </li>
                    <?php
                    $i++;
                    }
                    ?>
                        <p>
                        页次：<?php echo $page;?>/<?php echo $page_count;?>页&nbsp;
                        记录：<?php echo $message_count;?>条&nbsp;
                            <?php
                        if($page!=1){
                            echo "<a href=pic_more.php?page=1>首页</a>&nbsp;";
                            echo "<a href=pic_more.php?page=".($page-1).">上一页</a>&nbsp;";
                        }
                        if($page<$page_count)
                        {
                           echo "<a href=pic_more.php?page=".($page+1).">下一页</a>&nbsp;";
                           echo "<a href=pic_more.php?page=".$page_count.">尾页</a>&nbsp;";
                        }
                        ?>
                        </p>
                    </ul>
                </div>
           
            
                  <?php include 'inc/right.php'; ?>
              
            </div>
          
                  <?php include 'inc/footer.php'; ?>
          
        </div>
        
    </body>
</html>
