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
        <title>班级多用户博客注册页</title>
          <link href="style/index.css" rel="stylesheet" type="text/css"> 
          <script src="js/check.js" lang="javascript"></script>
           <link href="style/register_page.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
           <?php 
            include 'inc/conn.php';
           include 'inc/header.php';
           ?>
            <div id="content">
                <div id="left" >
                    <h1>新用户注册</h1>
                    <h2>必填内容</h2>
                    <form name="myform" action="register_chk.php" method="post">
                    <p>
                        用&nbsp;户&nbsp;名：<input type="text" name="txt_regname" class="txt2"><a href="#" onclick="javascript:openwin(myform.txt_regname.value)">[检测用户]</a><br>
                        真实姓名：<input type="text" name="txt_regrealname" class="txt2"><br>
                        密&nbsp;&nbsp;&nbsp;&nbsp;码：<input type="password" name="txt_regpwd" class="txt2"><span>英文字母或数字不少于3位</span><br>
                        确认密码：<input type="password" name="txt_regpwd2" class="txt2"><br>
                        出生日期：<input type="text" name="txt_birthday" class="txt2"><span>(日期格式为：yyyy-mm-dd)</span><br>
                        Email:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_regemail" class="txt2"><br>
                   </p>
<!--                   所在城市：<script src="js/initcity.js"></script>
                   <select name="txt_province" onchange="initcity(); " class="sele">
                   <script>creatprovince();</script>
                   </select>
                   <select name="txt_city" class="sele"> </select> <br/>-->
                   <p>
                   所在城市：<script src="js/initcity.js"></script>
                   <select name="txt_province" onchange="initcity();">
                       <script>creatprovince();</script>
                   </select>
                   <select name="txt_city" class="sele" ></select> <br/> 
                   </p>
                   <p>
                        选择头像：
                        <script language="javascript">
                        function showlogo(){
                            document.images.img.src="images/head/"+document.myform.txt_ico.options[document.myform.txt_ico.selectedIndex].value;
                        }
                        </script>
                        <img src="images/head/0.gif" name="img" id="photo"/>&nbsp;
                        <select name="txt_ico" size="1" onChange="showlogo()">
                            <option value="0.gif" selected>头像一</option>
                                 <option value="1.gif">头像二</option>
                                 <option value="2.gif">头像三</option>
                                 <option value="3.gif">头像四</option>
                                 <option value="4.gif">头像五</option>
                                 <option value="5.gif">头像六</option>
                                 </select>
                    </p>
                   <h2>选填内容</h2>
                   <p>
                       性别：&nbsp;&nbsp;&nbsp;&nbsp;<select name="txt_regsex">
                           <option value="0" selected="selected">保密</option>
                             <option value="1">男</option>
                             <option value="2">女</option>
                            </select><br>
                             QQ:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_regqq" class="txt2"><br>
                             个人主页：<input type="text" name="txt_reghomepage" class="txt2" ><br>
                             个性化签名：<br><textarea cols="20" rows="2" name="txt_regintroduce"></textarea><br>
                             自我简介：&nbsp;&nbsp<br><textarea cols="20" rows="2"></textarea><br>
                   </p>
                    <span>
                       <input type="submit" name="regsubmit" value="提交" class="sbtn" onclick="return check()">
                       <input type="reset" name="Submit2" value="重填" class="sbtn">
                   </span>
                    </form>
                </div>
             
            
                  <?php include 'inc/right.php'; ?>
             
            </div>
            <?php include 'inc/footer.php'; ?>
        </div>
        
    </body>
</html>
