
<?php
    $forward = $_GET['forward'];
    if ($forward==NULL)
        $forward==0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>차단우회사이트</title>
    <link rel="stylesheet" href = "css/admin.css"> 
    <link rel="stylesheet" href = "css/default.css">
    <link rel="stylesheet" href = "css/codecreate.css">
    
    
    <style>
        nav{ width: 390px; height: 68px; margin: 130px auto; text-align: center; background-color:black; line-height: 68px; }  
        .menu{position: absolute;top: 200px;left: 50px;padding: 60px 50px 0 0;}
        .menu h2{padding: 0px 0px 20px 0;margin: 0px 0px 40px 0;border-bottom: 2px solid #000;text-align: center;}
        .menu li{height: 65px; margin: 0 0px 0px 20px;}
        .menu .border-right{border-right:1px solid #acacac;height: 800px;width: 250px;position: absolute; z-index: -999; top: 0px;}
        .active{margin: 0 0px 0px 10px !important;}
        .active a{background-color: #0c82e9;color: white;padding: 13px 14px 14px 10px;}
        form{position:absolute;left: 50%; top: 600px;transform: translateX(-50%);}
        form input:last-child{height: 35px;width: 60px;line-height: 35px;text-align: center;font-weight: 700;background-color: #0f59a5;color: #fff;padding: 0;font-size: 18px;border-radius: 3px;border: none;outline: none;}
        
        <?php
            if($forward == 1)
            {
        ?>
        section h1{margin: 84px 0 108px 0 ; text-align: center;font-size: 4.8rem;}

        <?php
            }
        ?>
    </style>
</head>
<body>
    
    
        <div>
            <?php
            session_start();
            if($_SESSION['logined']==NULL){
            ?>
            <h1>세션이 없습니다.</h1>
            <a href="index.php" target="_top">메인으로</a>
            <?php
            }
            else
            {
                
                if ($forward==NULL)
                    $forward==0;

                
            ?> 
            <header>
		        <div class="header_wrap">
			        <div class="gnb">
				        환영합니다!
				
			        </div>
		        </div>
		        <nav>
			        <div class="lnb">
				        <h2>관리자 페이지</h2>
			        </div>
		        </nav>
            </header>
            <ul class="menu">
	            <div class="border-right"></div>
			        <h2>메뉴</h2>
			            <li <?php if($forward==0) { ?> class= "active"  <?php } ?> ><a href="adminpage.php?forward=0"> 차단도메인관리</a></li>
			            <li <?php if($forward==1) { ?> class= "active"  <?php } ?> ><a href="adminpage.php?forward=1"> 유해ip접속기록</a></li>

            </ul>
            
            <section>

            <?php
                switch($forward)
                {

                    case 1:
                        include 'ip_list.php';
                }
            ?>
            </section>

            <?php
            }
            ?>
        </div>
            
</body>
</html>