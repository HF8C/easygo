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
        <title>图片搜索页</title>
          <link href="style/index.css" rel="stylesheet" type="text/css">
          <link href="style/myblog.css" rel="stylesheet" type="text/css">
          <link href="style/pic_search.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
           <?php include 'inc/header2.php';?>
            <div id="content">
              <?php include 'inc/left.php';?>
      
                <div id="right">
                    <h2>搜索图片</h2>
                    <div id="blog_search">
                        <span>查询条件：
                            <select name="b_search" class="search_text">
                                <option value="图片名称" selected>图片名称</option>
                                <option value="图片1">图片1</option>
                                <option value="图片2">图片2</option>
                                <option value="图片3">图片3</option>
                                <option value="图片4">图片4</option>
                                <option value="图片5">图片5</option>
                                
                            </select>
                            关键字：<input type="text" class="txt"/>
                        </span>
                        <br>
                        <span>
                            <input type="button" value="检索" class="btn">
                        </span>
                        </div>
                        <div class="line"></div>
                        <div id="blog_img">
                       <ul>
                           <li><a href="#"><img src="images/I15.jpg"/></a><span>图片I15.jpg</span><span>作者：张三</span><strong><img class="img2"src="images/delete.png"><a href="#">删除</a></strong></li>
                           <li><a href="#"><img src="images/I16.jpg"/></a><span>图片I16.jpg</span><span>作者：张三</span><strong><img class="img2"src="images/delete.png"><a href="#">删除</a></strong></li>
                           <li><a href="#"><img src="images/I17.jpg"/></a><span>图片I17.jpg</span><span>作者：张三</span><strong><img class="img2"src="images/delete.png"><a href="#">删除</a></strong></li>
                           <li><a href="#"><img src="images/I18.jpg"/></a><span>图片I18.jpg</span><span>作者：张三</span><strong><img class="img2"src="images/delete.png"><a href="#">删除</a></strong></li>
                       </ul>
                        </div>
                    
                
                  <p>页次：1/3页 记录：18条 <a href="#">首页</a>&nbsp;<a href="#">上一页</a>&nbsp;<a href="#">下一页</a></p>
               </div>
             </div>
               <?php include 'inc/footer.php'; ?>     
        </div>
        
    </body>
</html>
