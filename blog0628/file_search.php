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
        <title>��������ҳ</title>
          <link href="style/index.css" rel="stylesheet" type="text/css">
          <link href="style/myblog.css" rel="stylesheet" type="text/css">
          <link href="style/file_search.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
           <?php include 'inc/header2.php';?>
            <div id="content">
               <?php include 'inc/left.php';?>
                <div id="right">
                    <h2>������������</h2>
                    <div id="blog_search">
                        <form method="post" action="" name="myform">
                        <span>��ѯ������
                            <select name="b_search" class="search_text">
                                <option value="����" selected>����</option>
                                <option value="��������">��������</option>
                            </select>
                            <input type="text" name="txt_search" class="txt"/>
                        </span>
                        <br>
                        <span>
                            <input type="submit" value="����" class="btn">
                        </span>
                        </form>
                        <div class="line"></div>
                        <div id="blog_list">
                        <table cellspacing="0">
                            <tr>
                                <td width="9%">����</td>
                                <td width="21%">��������</td>
                                <td width="18%">���ʱ��</td>
                                <td width="22%">����</td>
                                <td width="13%">����</td>
                            </tr> 
                            
                            <tr>
                                <td>����</td>
                                <td>ʱ�����ۣ���������ϧ</td>
                                <td>2018-04-24 12:34:23</td>
                                <td>�����ڲ�֪������...</td>
                                <td><img src="images/delete.png"><a href="#">ɾ��</a></td>
                            </tr>
                               <tr>
                                <td>����</td>
                                <td>ʱ�����ۣ���������ϧ</td>
                                <td>2018-04-24 12:34:23</td>
                                <td>�����ڲ�֪������...</td>
                                <td><img src="images/delete.png"><a href="#">ɾ��</a></td>
                            </tr>
                            
                            
                        </table>
                          
                    </div>
                     <p>ҳ�Σ�1/3ҳ ��¼��18�� <a href="#">��ҳ</a>&nbsp;<a href="#">��һҳ</a>&nbsp;<a href="#">��һҳ</a></p>
                </div>
              </div>
           </div>
                <?php include 'inc/footer.php'; ?>   
        </div>
       
    </body>
</html>
