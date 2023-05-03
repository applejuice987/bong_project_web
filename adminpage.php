
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>차단우회사이트</title>
    <script src="https://unpkg.com/react@15.3.2/dist/react.js"></script>
    <script src="https://unpkg.com/react-dom@15.3.2/dist/react-dom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js"></script>
    <link rel="stylesheet" href = "css/admin.css"> 
    <link rel="stylesheet" href = "css/default.css">
    <style>
          nav{
            width: 390px;
            height: 68px;
            margin: 130px auto;
            text-align: center;
            background-color:navy;
            line-height: 68px;
        }  
    </style>
</head>
<body>
    
    <script type="text/babel">
        ReactDOM.render(
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
            ?> 
            <header>
		        <div className="header_wrap">
			        <div className="gnb">
				        환영합니다!
				
			        </div>
		        </div>
		        <nav>
			        <div className="lnb">
				        <h2>관리자 페이지</h2>
			        </div>
		        </nav>
            </header>
             <h6>관리자페이지</h6>
        
            <?php
            }
            ?>
            </div>
            ,
            document.body
        );
    </script>
</body>
</html>