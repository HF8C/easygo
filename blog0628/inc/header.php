
<?php session_start();?>
<header>
     <?php   error_reporting(E_ALL^E_NOTICE^E_WARNING);?> 
                <div id="banner">
                    <img src="images/banner2.jpg"/>
                </div>
                <div id="nav">
                    <ul>
                    <li class="current"><a href="index.php">������ҳ</a></li>
                        <?php
                        if(isset($_SESSION['username']))
                            {
                            echo "  <li><a href='myblog.php'>�ҵĲ���</a></li>";
                             echo "  <li><a href='safeexit.php'>��ȫ�˳�</a></li>";
                            }
                       else {
                           echo "  <li><a href='regpro_page.php'>����ע��</a></li>";
                            }   
                           
                      ?>
                    </ul> 
                        <div id="login">
                            <?php
                            if(!isset($_SESSION['username'])){
                            ?>
                            <form name="frm_login" method="post" action="checkuser.php">
                                �û�����<input type="text" name="txt_user" value="" class="txt"/>
                                ���룺<input type="password" name="txt_pwd" value="" class="txt"/>
                                <input type="submit" name="subbtn" value="��¼" class="btn"/>
                            </form>
                            <?php
                            }else {
                                ?>
                            <p><span><?php echo $_SESSION['username'];?></span>&nbsp;��ӭ��Ĺ��٣�<?php echo date("Y-m-d l");?></p>
                            <?php
                            }
                            ?>
                        </div>
                </div>
              
            </header>