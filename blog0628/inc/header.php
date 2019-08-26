
<?php session_start();?>
<header>
     <?php   error_reporting(E_ALL^E_NOTICE^E_WARNING);?> 
                <div id="banner">
                    <img src="images/banner2.jpg"/>
                </div>
                <div id="nav">
                    <ul>
                    <li class="current"><a href="index.php">博客首页</a></li>
                        <?php
                        if(isset($_SESSION['username']))
                            {
                            echo "  <li><a href='myblog.php'>我的博客</a></li>";
                             echo "  <li><a href='safeexit.php'>安全退出</a></li>";
                            }
                       else {
                           echo "  <li><a href='regpro_page.php'>博客注册</a></li>";
                            }   
                           
                      ?>
                    </ul> 
                        <div id="login">
                            <?php
                            if(!isset($_SESSION['username'])){
                            ?>
                            <form name="frm_login" method="post" action="checkuser.php">
                                用户名：<input type="text" name="txt_user" value="" class="txt"/>
                                密码：<input type="password" name="txt_pwd" value="" class="txt"/>
                                <input type="submit" name="subbtn" value="登录" class="btn"/>
                            </form>
                            <?php
                            }else {
                                ?>
                            <p><span><?php echo $_SESSION['username'];?></span>&nbsp;欢迎你的光临！<?php echo date("Y-m-d l");?></p>
                            <?php
                            }
                            ?>
                        </div>
                </div>
              
            </header>