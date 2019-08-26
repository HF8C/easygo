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
        <title>添加公告</title>
          <link href="style/index.css" rel="stylesheet" type="text/css">
          <link href="style/myblog.css" rel="stylesheet" type="text/css">
          <link href="style/pub_add.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
           <?php include 'inc/header2.php';?>
             <div id="content">
                <?php include 'inc/left.php';?>
            
                <div id="right">
                    <h2>添加公告</h2>
                    <p>公告主题：<input type="text" class="txt"></p>
                    <p>公告内容：<br><textarea class="text_con"></textarea></p>
                    <span>
                        <input type="button" class="btn" name="button" value="添加"/>
                        <input type="button" class="btn2" name="button" value="重填"/>
                    </span>
                </div>
                </div>  
                 <?php include 'inc/footer.php'; ?>
            </div>
                 
        
        
    </body>
</html>
