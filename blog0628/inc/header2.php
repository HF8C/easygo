<header>
       <?php session_start();?>
       <?php   error_reporting(E_ALL^E_NOTICE^E_WARNING);?> 
                <div id="banner">
                    <img src="images/banner2.jpg"/>
                </div>
                <div id="nav">
                    <div id="login">
                        <p>��ӭ�㣺<?php echo $_SESSION['username'];?>
                       <a href="index.php">������ҳ</a>&nbsp;
                      <a href="safeexit.php">�˳���¼</a>
                  </p>
                    </div>
                </div>
</header>