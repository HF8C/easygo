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
        <title>添加朋友</title>
          <link href="style/index.css" rel="stylesheet" type="text/css">
          <link href="style/myblog.css" rel="stylesheet" type="text/css">
          <link href="style/fri_add.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
           <?php include 'inc/header2.php';?>
            <div id="content">
             <?php include 'inc/left.php';?>
            
                <div id="right">
                    <h2>添加朋友</h2>
                    <form name="fri_add" method="post" action="#">
                        <p> 姓&nbsp;&nbsp;&nbsp;名：<input type="text" name="text_" class="text"></p>
                        <p> 性&nbsp;&nbsp;&nbsp;别：<select name="fri_select" class="fri_select">
                                        <option value="保密" selected>保密</option>
                                        <option value="男">男</option>
                                        <option value="女">女</option>
                                         </select>
                       </p>  
                       <p>生&nbsp;&nbsp;&nbsp;日：<input type="text" name="text_birthday" class="text">日期格式为：(yyyy-mm-dd)</p>
                       <p>城&nbsp;&nbsp;&nbsp;市：
                       <select name="fri_select" class="fri_select">
                                        <option value="" selected></option>
                                        <option value=""></option>
                                        <option value=""></option>
                       </select>&nbsp;
                      <select name="fri_select" class="fri_select">
                                        <option value="" selected></option>
                                        <option value=""></option>
                                        <option value=""></option>
                      </select>
                       </p>
                       <p>住&nbsp;&nbsp;&nbsp;址：<input type="text" class="text"></p>
                       <p>邮&nbsp;&nbsp;&nbsp;编：<input type="text" class="text"></p>
                       <p>e-mail：&nbsp;&nbsp;<input type="text" class="text"></p>
                       <p>家庭电话：<input type="text" class="text"></p>
                       <p>手机号码：<input type="text" class="text"></p>
                       <p>Q&nbsp;Q&nbsp;号：&nbsp;&nbsp;<input type="text" class="text"></p>
                    </form>
                    <span>
                        <input type="submit"name="subbtn" value="提交" class="btn">
                        <input type="reset" name="rest" value="重置" class="btn2">
                    </span>
                </div>
                </div>
           
                  <?php include 'inc/footer.php'; ?>
        </div>
        
    </body>
</html>
