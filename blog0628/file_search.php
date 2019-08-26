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
        <title>文章搜索页</title>
          <link href="style/index.css" rel="stylesheet" type="text/css">
          <link href="style/myblog.css" rel="stylesheet" type="text/css">
          <link href="style/file_search.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
           <?php include 'inc/header2.php';?>
            <div id="content">
               <?php include 'inc/left.php';?>
                <div id="right">
                    <h2>搜索博客文章</h2>
                    <div id="blog_search">
                        <form method="post" action="" name="myform">
                        <span>查询条件：
                            <select name="b_search" class="search_text">
                                <option value="作者" selected>作者</option>
                                <option value="博文主题">博文主题</option>
                            </select>
                            <input type="text" name="txt_search" class="txt"/>
                        </span>
                        <br>
                        <span>
                            <input type="submit" value="检索" class="btn">
                        </span>
                        </form>
                        <div class="line"></div>
                        <div id="blog_list">
                        <table cellspacing="0">
                            <tr>
                                <td width="9%">作者</td>
                                <td width="21%">博文主题</td>
                                <td width="18%">添加时间</td>
                                <td width="22%">内容</td>
                                <td width="13%">操作</td>
                            </tr> 
                            
                            <tr>
                                <td>张三</td>
                                <td>时光荏苒，且行且珍惜</td>
                                <td>2018-04-24 12:34:23</td>
                                <td>我们在不知不觉间...</td>
                                <td><img src="images/delete.png"><a href="#">删除</a></td>
                            </tr>
                               <tr>
                                <td>张三</td>
                                <td>时光荏苒，且行且珍惜</td>
                                <td>2018-04-24 12:34:23</td>
                                <td>我们在不知不觉间...</td>
                                <td><img src="images/delete.png"><a href="#">删除</a></td>
                            </tr>
                            
                            
                        </table>
                          
                    </div>
                     <p>页次：1/3页 记录：18条 <a href="#">首页</a>&nbsp;<a href="#">上一页</a>&nbsp;<a href="#">下一页</a></p>
                </div>
              </div>
           </div>
                <?php include 'inc/footer.php'; ?>   
        </div>
       
    </body>
</html>
