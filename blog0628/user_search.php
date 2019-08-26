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
        <title>用户搜索页</title>
          <link href="style/index.css" rel="stylesheet" type="text/css">
          <link href="style/myblog.css" rel="stylesheet" type="text/css">
          <link href="style/user_search.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
           <?php include 'inc/header2.php';?>
            <div id="content">
               <?php include 'inc/left.php';?>
      
                <div id="right">
                    <h2>用户查询</h2>
                    <div id="blog_search">
                        <span>查询条件：
                            <select name="b_search" class="search_text">
                                <option value="ID号" selected>ID号</option>
                                <option value="用户名">用户名</option>
                                <option value="真名">真名</option>
                                <option value="e_mail">e_mail</option>
                                <option value="QQ号">QQ号</option>
                                <option value="操作">操作</option>
                                
                            </select>
                            关键字：<input type="text" class="txt"/>
                        </span>
                        <br>
                        <span>
                            <input type="button" value="检索" class="btn">
                        </span>
                        <div class="line"></div>
                        <div id="blog_list">
                        <table cellspacing="0">
                            <tr>
                                <td width="9%">ID号</td>
                                <td width="9%">用户名</td>
                                <td width="18%">真名</td>
                                <td width="22%">e_mail</td>
                                <td width="25%">QQ号</td>
                                <td width="23%">操作</td>
                            </tr> 
                            
                            <tr>
                                <td>12</td>
                                <td>hhh</td>
                                <td>黄凤成</td>
                                <td>23123455@qq.com</td>
                                <td>23123455</td>
                                <td><img src="images/delete.png"><a href="#">删除</a></td>
                            </tr>
                           <tr>
                                <td>12</td>
                                <td>hhh</td>
                                <td>黄凤成</td>
                                <td>23123455@qq.com</td>
                                <td>23123455</td>
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
