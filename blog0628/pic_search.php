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
        <title>ͼƬ����ҳ</title>
          <link href="style/index.css" rel="stylesheet" type="text/css">
          <link href="style/myblog.css" rel="stylesheet" type="text/css">
          <link href="style/pic_search.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
           <?php include 'inc/header2.php';?>
            <div id="content">
              <?php include 'inc/left.php';?>
      
                <div id="right">
                    <h2>����ͼƬ</h2>
                    <div id="blog_search">
                        <span>��ѯ������
                            <select name="b_search" class="search_text">
                                <option value="ͼƬ����" selected>ͼƬ����</option>
                                <option value="ͼƬ1">ͼƬ1</option>
                                <option value="ͼƬ2">ͼƬ2</option>
                                <option value="ͼƬ3">ͼƬ3</option>
                                <option value="ͼƬ4">ͼƬ4</option>
                                <option value="ͼƬ5">ͼƬ5</option>
                                
                            </select>
                            �ؼ��֣�<input type="text" class="txt"/>
                        </span>
                        <br>
                        <span>
                            <input type="button" value="����" class="btn">
                        </span>
                        </div>
                        <div class="line"></div>
                        <div id="blog_img">
                       <ul>
                           <li><a href="#"><img src="images/I15.jpg"/></a><span>ͼƬI15.jpg</span><span>���ߣ�����</span><strong><img class="img2"src="images/delete.png"><a href="#">ɾ��</a></strong></li>
                           <li><a href="#"><img src="images/I16.jpg"/></a><span>ͼƬI16.jpg</span><span>���ߣ�����</span><strong><img class="img2"src="images/delete.png"><a href="#">ɾ��</a></strong></li>
                           <li><a href="#"><img src="images/I17.jpg"/></a><span>ͼƬI17.jpg</span><span>���ߣ�����</span><strong><img class="img2"src="images/delete.png"><a href="#">ɾ��</a></strong></li>
                           <li><a href="#"><img src="images/I18.jpg"/></a><span>ͼƬI18.jpg</span><span>���ߣ�����</span><strong><img class="img2"src="images/delete.png"><a href="#">ɾ��</a></strong></li>
                       </ul>
                        </div>
                    
                
                  <p>ҳ�Σ�1/3ҳ ��¼��18�� <a href="#">��ҳ</a>&nbsp;<a href="#">��һҳ</a>&nbsp;<a href="#">��һҳ</a></p>
               </div>
             </div>
               <?php include 'inc/footer.php'; ?>     
        </div>
        
    </body>
</html>
