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
        <title>图片列表</title>
          <link href="style/index.css" rel="stylesheet" type="text/css">
          <link href="style/myblog.css" rel="stylesheet" type="text/css">
          <link href="style/pic_list.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
           <?php include 'inc/header2.php';?>
            <div id="content">
             <?php include 'inc/left.php';?>
            
                <div id="right">
                    <h2>我的图片</h2>
                    <ul class="my_img">
                        <li><a href="#"><img src="images/I15.jpg"/></a><span>图片I15.jpg</span><span><img class="img2"src="images/delete.png"><a href="#">删除</a></span></li>
                        <li><a href="#"><img src="images/I16.jpg"/></a><span>图片I16.jpg</span><span><img class="img2"src="images/delete.png"><a href="#">删除</a></span></li>
                        <li><a href="#"><img src="images/I17.jpg"/></a><span>图片I17.jpg</span><span><img class="img2"src="images/delete.png"><a href="#">删除</a></span></li>
                        <li><a href="#"><img src="images/I18.jpg"/></a><span>图片I18.jpg</span><span><img class="img2"src="images/delete.png"><a href="#">删除</a></span></li>
                        <li><a href="#"><img src="images/I15.jpg"/></a><span>图片I15.jpg</span><span><img class="img2"src="images/delete.png"><a href="#">删除</a></span></li>
                        <li><a href="#"><img src="images/I16.jpg"/></a><span>图片I16.jpg</span><span><img class="img2"src="images/delete.png"><a href="#">删除</a></span></li>
                        <li><a href="#"><img src="images/I18.jpg"/></a><span>图片I18.jpg</span><span><img class="img2"src="images/delete.png"><a href="#">删除</a></span></li>
                        <li><a href="#"><img src="images/I17.jpg"/></a><span>图片I17.jpg</span><span><img class="img2"src="images/delete.png"><a href="#">删除</a></span></li>
                       
                    </ul>
                       <p>页次：1/3页 记录：18条 <a href="index.php">首页</a> <a href="#">上一页</a> <a href="#">下一页</a> <a href="#">尾页</a></p>
                </div>
                </div>
           
                  <?php include 'inc/footer.php'; ?>
        </div>
        
    </body>
</html>
