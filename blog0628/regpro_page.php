<!DOCTYPE html>

<html>
    <head>
        <meta charset="GB2312">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>注册首页</title>
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
                    <h1>新用户注册</h1>
                    <p>
                        为维护网上公共秩序和社会稳定，请自觉遵守以下条款：<br>
                        一、不得利用本站危害国家安全，泄露国家秘密，不得侵犯国家和社会集体的和公民的合法权益,不得利用本站制作、复制和传播以下信息：<br>
                        (一)煽动抗拒、破坏宪法和法律、行政法规实施的;<br>
                        (二)煽动颠覆国家政权,推翻社会主义制度的;<br>
                        (三)煽动分裂国家、破坏国家统一的;<br>
                        (四)煽动民族仇恨、民族歧视,破坏民族团结的;<br>
                        (五)捏造或者歪曲事实,散步谣言，扰乱社会秩序的;<br>
                        (六)宣扬封建迷信的、淫秽、色情、赌博、暴力、凶杀、恐怖、教唆犯罪的;<br>
                        (七)公然侮辱他人或者捏造事实诽谤他人的，或者进行其他恶意攻击的;<br>
                        (八)损害国家安全机关信誉的;<br>
                        (九)其它违反宪法和法律行政法规的;<br>
                        (十)进行商业广告行为的。<br>
                        二、互相尊重，对自己的言论和行为负责。
                        
                    </p>
                    <span>
                        <input type="submit" value="同意以上条款" class="sbtn"  onclick="window.location.href='register_page.php'">
                        <input type="reset" value="不同意" class="sbtn" onclick="window.location.href='index.php'">
                    </span>
                </div>
               
               
                  <?php include 'inc/right.php'; ?>
                
            </div>
                  <?php include 'inc/footer.php'; ?>
        </div>
        
    </body>
</html>
