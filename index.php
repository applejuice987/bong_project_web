
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
            
            <?php
            ?>  
            <div>
                <header>
                    <div className = "header_wrap">
                        <div className = "gnb">
                            <a className = "mmove" href = "login.php">관리자페이지 </a>
                        </div>
                        
                        
                    </div>
                    <div >
                            <h1 className="logo">유해 정보 및 관리자에 의해 차단되었습니다.</h1>
                    </div>
                </header>
                <div className = "block_img_div">
                    <img className = "block_img" src="img/block.jpeg" ></img>
                </div>
            </div>
            ,
            document.body
        );
    </script>
</body>
</html>