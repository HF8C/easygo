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
        <title>博客列表</title>
          <link href="style/index.css" rel="stylesheet" type="text/css">
          <link href="style/myblog.css" rel="stylesheet" type="text/css">
          <link href="style/fri_list.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
           <?php include 'inc/header2.php';?>
              <div id="content">
                <?php include 'inc/left.php';?>
     
                <div id="right">
                     <h2>我的朋友</h2>
                      <div id="blog_list">
                        <table cellspacing="0">
                            <tr>
                                <td width="9%">姓名</td>
                                <td width="9%">性别</td>
                                <td width="18%">住址</td>
                                <td width="22%">e_mail</td>
                                <td width="25%">手机号</td>
                                <td width="23%">操作</td>
                            </tr> 
                            
                            <tr>
                                <td>张三</td>
                                <td>男</td>
                                <td>重庆万州</td>
                                <td>23123455@qq.com</td>
                                <td>13896852356</td>
                                <td><img src="images/delete.png"><a href="#">删除</a></td>
                            </tr>
                            <tr>
                                <td>张三</td>
                                <td>男</td>
                                <td>重庆万州</td>
                                <td>23123455@qq.com</td>
                                <td>13896852356</td>
                                <td><img src="images/delete.png"><a href="#">删除</a></td>
                            </tr>
                            
                        </table>
                          
                    </div>
                     <p>页次：1/3页 记录：18条 <a href="#">首页</a>&nbsp;<a href="#">上一页</a>&nbsp;<a href="#">下一页</a></p>
                </div>
              </div>
                
          <?php include 'inc/footer.php'; ?>
                  
        </div>
       
      
        
    </body>
</html>
