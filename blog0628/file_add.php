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
        <title>��Ӳ�������</title>
          <link href="style/index.css" rel="stylesheet" type="text/css">
          <link href="style/myblog.css" rel="stylesheet" type="text/css">
          <link href="style/file_add.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
           <?php 
           include 'inc/conn.php';
           include 'inc/header2.php';
           ?>
             <div id="content">
                <?php include 'inc/left.php';?>
            
                <div id="right">
                    <h2>��Ӳ�������</h2>
                    <form name="frm_add" method="post" action="add_article.php">
                    <p>�������⣺<input type="text" name="txt_title" class="txt"></p>
                    <p>�������ݣ�<br><textarea class="text_con" name="txt_con"></textarea></p>
                    <span>
                        <input type="submit" class="btn" name="add_btn" value="���"/>
                        <input type="reset" class="btn2" name="add_btn" value="����"/>
                    </span>
                    </form>
                </div>
                </div>  
                 <?php include 'inc/footer.php'; ?>
            </div>
                 
        
        
    </body>
</html>
