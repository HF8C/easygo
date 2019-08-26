<header>
       <?php session_start();?>
       <?php   error_reporting(E_ALL^E_NOTICE^E_WARNING);?> 
                <div id="banner">
                    <img src="images/banner2.jpg"/>
                </div>
                <div id="nav">
                    <div id="login">
                        <p>»¶Ó­Äã£º<?php echo $_SESSION['username'];?>
                       <a href="index.php">²©¿ÍÊ×Ò³</a>&nbsp;
                      <a href="safeexit.php">ÍË³öµÇÂ¼</a>
                  </p>
                    </div>
                </div>
</header>