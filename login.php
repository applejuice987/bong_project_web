
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>차단우회사이트</title>
    <script src="https://unpkg.com/react@15.3.2/dist/react.js"></script>
    <script src="https://unpkg.com/react-dom@15.3.2/dist/react-dom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js"></script>
    <link rel="stylesheet" href = "css/login.css"> 
    <link rel="stylesheet" href = "css/default.css">
</head>
<body>
    
    <script type="text/babel">
        ReactDOM.render(
            <div>
                <div className="login-form">
                    <div className="form-wrap">
                        <span>관리자 기능을 이용하려면 로그인해주세요.</span>
                        <form name ="login" method="post" action="login_process.php">
                            <input type="password" name="password" placeholder="비밀번호" size="40" ></input>
                            <a className = "login" href="javascript:login_check()">로그인</a>&nbsp;
                            <div className="register">
                                <a href="index.php" target="_top">메인으로 돌아가기</a>
                            </div>
                        </form>
                    </div>
                    
                </div>
                
            </div>
            ,
            document.body
        );
    </script>
</body>
</html>