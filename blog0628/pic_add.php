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
        <title>ͼƬ���</title>
          <link href="style/index.css" rel="stylesheet" type="text/css">
          <link href="style/myblog.css" rel="stylesheet" type="text/css">
          <link href="style/pic_add.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
           <?php include 'inc/header2.php';?>
            <div id="content">
             <?php include 'inc/left.php';?>
            
                <div id="right">
                    <h2>���ͼƬ</h2>
                    <p>ͼƬ���ƣ�<input type="text" name="text_pic" class="text"/></p>
                    <p>�ϴ�·����<input type="file" class="file" name="multipleFileUpload" multiple /></p>
                    <span>
                        <input type="submit" name="subbtn" class="btn" value="�ύ"/>    
                        <input type="reset" name="subbtn" class="btn2" value="��д"/>    
                    </span>
                </div>
                </div>
           
                  <?php include 'inc/footer.php'; ?>
        </div>
        
    </body>
</html>
