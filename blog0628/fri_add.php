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
        <title>�������</title>
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
                    <h2>�������</h2>
                    <form name="fri_add" method="post" action="#">
                        <p> ��&nbsp;&nbsp;&nbsp;����<input type="text" name="text_" class="text"></p>
                        <p> ��&nbsp;&nbsp;&nbsp;��<select name="fri_select" class="fri_select">
                                        <option value="����" selected>����</option>
                                        <option value="��">��</option>
                                        <option value="Ů">Ů</option>
                                         </select>
                       </p>  
                       <p>��&nbsp;&nbsp;&nbsp;�գ�<input type="text" name="text_birthday" class="text">���ڸ�ʽΪ��(yyyy-mm-dd)</p>
                       <p>��&nbsp;&nbsp;&nbsp;�У�
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
                       <p>ס&nbsp;&nbsp;&nbsp;ַ��<input type="text" class="text"></p>
                       <p>��&nbsp;&nbsp;&nbsp;�ࣺ<input type="text" class="text"></p>
                       <p>e-mail��&nbsp;&nbsp;<input type="text" class="text"></p>
                       <p>��ͥ�绰��<input type="text" class="text"></p>
                       <p>�ֻ����룺<input type="text" class="text"></p>
                       <p>Q&nbsp;Q&nbsp;�ţ�&nbsp;&nbsp;<input type="text" class="text"></p>
                    </form>
                    <span>
                        <input type="submit"name="subbtn" value="�ύ" class="btn">
                        <input type="reset" name="rest" value="����" class="btn2">
                    </span>
                </div>
                </div>
           
                  <?php include 'inc/footer.php'; ?>
        </div>
        
    </body>
</html>
