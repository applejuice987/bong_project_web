
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>차단우회사이트</title>
    <script src="https://unpkg.com/react@15.3.2/dist/react.js"></script>
    <script src="https://unpkg.com/react-dom@15.3.2/dist/react-dom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js"></script>
    <link rel="stylesheet" href = "css/main.css"> 
    <link rel="stylesheet" href = "css/default.css">
</head>
<body>
    
    <script type="text/babel">
        ReactDOM.render(
            <div>
            <?php

            if(!session_id()){
            ?>
            <h1>세션이 없습니다.</h1>
            <a href="index.php" target="_top">메인으로</a>
            <?php
            }
            else
            {
            ?> 
            
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