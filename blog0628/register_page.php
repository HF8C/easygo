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
        <title>�༶���û�����ע��ҳ</title>
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
                    <h1>���û�ע��</h1>
                    <h2>��������</h2>
                    <form name="myform" action="register_chk.php" method="post">
                    <p>
                        ��&nbsp;��&nbsp;����<input type="text" name="txt_regname" class="txt2"><a href="#" onclick="javascript:openwin(myform.txt_regname.value)">[����û�]</a><br>
                        ��ʵ������<input type="text" name="txt_regrealname" class="txt2"><br>
                        ��&nbsp;&nbsp;&nbsp;&nbsp;�룺<input type="password" name="txt_regpwd" class="txt2"><span>Ӣ����ĸ�����ֲ�����3λ</span><br>
                        ȷ�����룺<input type="password" name="txt_regpwd2" class="txt2"><br>
                        �������ڣ�<input type="text" name="txt_birthday" class="txt2"><span>(���ڸ�ʽΪ��yyyy-mm-dd)</span><br>
                        Email:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_regemail" class="txt2"><br>
                   </p>
<!--                   ���ڳ��У�<script src="js/initcity.js"></script>
                   <select name="txt_province" onchange="initcity(); " class="sele">
                   <script>creatprovince();</script>
                   </select>
                   <select name="txt_city" class="sele"> </select> <br/>-->
                   <p>
                   ���ڳ��У�<script src="js/initcity.js"></script>
                   <select name="txt_province" onchange="initcity();">
                       <script>creatprovince();</script>
                   </select>
                   <select name="txt_city" class="sele" ></select> <br/> 
                   </p>
                   <p>
                        ѡ��ͷ��
                        <script language="javascript">
                        function showlogo(){
                            document.images.img.src="images/head/"+document.myform.txt_ico.options[document.myform.txt_ico.selectedIndex].value;
                        }
                        </script>
                        <img src="images/head/0.gif" name="img" id="photo"/>&nbsp;
                        <select name="txt_ico" size="1" onChange="showlogo()">
                            <option value="0.gif" selected>ͷ��һ</option>
                                 <option value="1.gif">ͷ���</option>
                                 <option value="2.gif">ͷ����</option>
                                 <option value="3.gif">ͷ����</option>
                                 <option value="4.gif">ͷ����</option>
                                 <option value="5.gif">ͷ����</option>
                                 </select>
                    </p>
                   <h2>ѡ������</h2>
                   <p>
                       �Ա�&nbsp;&nbsp;&nbsp;&nbsp;<select name="txt_regsex">
                           <option value="0" selected="selected">����</option>
                             <option value="1">��</option>
                             <option value="2">Ů</option>
                            </select><br>
                             QQ:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_regqq" class="txt2"><br>
                             ������ҳ��<input type="text" name="txt_reghomepage" class="txt2" ><br>
                             ���Ի�ǩ����<br><textarea cols="20" rows="2" name="txt_regintroduce"></textarea><br>
                             ���Ҽ�飺&nbsp;&nbsp<br><textarea cols="20" rows="2"></textarea><br>
                   </p>
                    <span>
                       <input type="submit" name="regsubmit" value="�ύ" class="sbtn" onclick="return check()">
                       <input type="reset" name="Submit2" value="����" class="sbtn">
                   </span>
                    </form>
                </div>
             
            
                  <?php include 'inc/right.php'; ?>
             
            </div>
            <?php include 'inc/footer.php'; ?>
        </div>
        
    </body>
</html>
