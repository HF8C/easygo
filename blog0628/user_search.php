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
        <title>�û�����ҳ</title>
          <link href="style/index.css" rel="stylesheet" type="text/css">
          <link href="style/myblog.css" rel="stylesheet" type="text/css">
          <link href="style/user_search.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
           <?php include 'inc/header2.php';?>
            <div id="content">
               <?php include 'inc/left.php';?>
      
                <div id="right">
                    <h2>�û���ѯ</h2>
                    <div id="blog_search">
                        <span>��ѯ������
                            <select name="b_search" class="search_text">
                                <option value="ID��" selected>ID��</option>
                                <option value="�û���">�û���</option>
                                <option value="����">����</option>
                                <option value="e_mail">e_mail</option>
                                <option value="QQ��">QQ��</option>
                                <option value="����">����</option>
                                
                            </select>
                            �ؼ��֣�<input type="text" class="txt"/>
                        </span>
                        <br>
                        <span>
                            <input type="button" value="����" class="btn">
                        </span>
                        <div class="line"></div>
                        <div id="blog_list">
                        <table cellspacing="0">
                            <tr>
                                <td width="9%">ID��</td>
                                <td width="9%">�û���</td>
                                <td width="18%">����</td>
                                <td width="22%">e_mail</td>
                                <td width="25%">QQ��</td>
                                <td width="23%">����</td>
                            </tr> 
                            
                            <tr>
                                <td>12</td>
                                <td>hhh</td>
                                <td>�Ʒ��</td>
                                <td>23123455@qq.com</td>
                                <td>23123455</td>
                                <td><img src="images/delete.png"><a href="#">ɾ��</a></td>
                            </tr>
                           <tr>
                                <td>12</td>
                                <td>hhh</td>
                                <td>�Ʒ��</td>
                                <td>23123455@qq.com</td>
                                <td>23123455</td>
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
