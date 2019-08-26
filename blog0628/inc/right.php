<div id="right"> 
<div id="rtop">
    <h2>最新公告</h2>
    <div class="line"></div>
 <ul>
   <?php
   $p_sql="select * from tb_public order by id desc limit 5";
   $p_rst=  mysql_query($p_sql,$connect);
   while ($p_row=  mysql_fetch_array($p_rst)){
       ?>
     <li><a href="#" onclick="wopen=open('show_pub.php?id=<?php echo $p_row['id'];?>','','height=200,width=500,scollbars=no')">
     <?php echo $p_row[title];?></a></li>
     
     <?php
   }
   ?>
 </ul>
</div>
 <div id="rbott">
      <h2>常联系</h2>
       <div class="line"></div>
              <ul>
              <li>QQ：2478790106</li>
              <li>邮箱：2478790106qq.com</li>
              <li>手机：13896563561</li>
               </ul>
  </div>
</div>