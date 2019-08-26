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
        <title>公共列表页</title>
          <link href="style/index.css" rel="stylesheet" type="text/css">
          <link href="style/myblog.css" rel="stylesheet" type="text/css">
          <link href="style/pub_list.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
           <?php include 'inc/header2.php';?>
             <div id="content">
              <?php include 'inc/left.php';?>
            
                <div id="right">
                    <h2>所有公共列表页</h2>
                    <ul>
                        <li><a href="#"><strong>1.公告一</strong></a><span><a href="#"><img src="images/delete.png">删除</a></span></li>
                        <li><a href="#"><strong>2.公告二</strong></a><span><a href="#"><img src="images/delete.png">删除</a></span></li>
                        <li><a href="#"><strong>3.公告三</strong></a><span><a href="#"><img src="images/delete.png">删除</a></span></li>
                        <li><a href="#"><strong>4.公告四</strong></a><span><a href="#"><img src="images/delete.png">删除</a></span></li>
                        <li><a href="#"><strong>5.公告五</strong></a><span><a href="#"><img src="images/delete.png">删除</a></span></li>
                    </ul>
                     <p>页次：1/3页 记录：18条 <a href="#">首页</a>&nbsp;<a href="#">上一页</a>&nbsp;<a href="#">下一页</a></p>
                </div>
                </div>  
                 <?php include 'inc/footer.php'; ?>
            </div>
                 
        
        
    </body>
</html>
