<!DOCTYPE html>

<html>
    <head>
        <meta charset="GB2312">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ע����ҳ</title>
          <link href="style/index.css" rel="stylesheet" type="text/css">
          <link href="style/regpro_page.css" rel="stylesheet" type="text/css">
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
                    <p>
                        Ϊά�����Ϲ������������ȶ������Ծ������������<br>
                        һ���������ñ�վΣ�����Ұ�ȫ��й¶�������ܣ������ַ����Һ���Ἧ��ĺ͹���ĺϷ�Ȩ��,�������ñ�վ���������ƺʹ���������Ϣ��<br>
                        (һ)ɿ�����ܡ��ƻ��ܷ��ͷ��ɡ���������ʵʩ��;<br>
                        (��)ɿ���߸�������Ȩ,�Ʒ���������ƶȵ�;<br>
                        (��)ɿ�����ѹ��ҡ��ƻ�����ͳһ��;<br>
                        (��)ɿ�������ޡ���������,�ƻ������Ž��;<br>
                        (��)�������������ʵ,ɢ��ҥ�ԣ�������������;<br>
                        (��)����⽨���ŵġ����ࡢɫ�顢�Ĳ�����������ɱ���ֲ������������;<br>
                        (��)��Ȼ�������˻���������ʵ�̰����˵ģ����߽����������⹥����;<br>
                        (��)�𺦹��Ұ�ȫ����������;<br>
                        (��)����Υ���ܷ��ͷ������������;<br>
                        (ʮ)������ҵ�����Ϊ�ġ�<br>
                        �����������أ����Լ������ۺ���Ϊ����
                        
                    </p>
                    <span>
                        <input type="submit" value="ͬ����������" class="sbtn"  onclick="window.location.href='register_page.php'">
                        <input type="reset" value="��ͬ��" class="sbtn" onclick="window.location.href='index.php'">
                    </span>
                </div>
               
               
                  <?php include 'inc/right.php'; ?>
                
            </div>
                  <?php include 'inc/footer.php'; ?>
        </div>
        
    </body>
</html>
