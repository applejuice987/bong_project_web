
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>차단우회사이트</title>
    <link rel="stylesheet" href = "css/login.css"> 
    <link rel="stylesheet" href = "css/default.css">
    <script langueage="javaScript">
        function login_check() {
            if (!document.login.password.value) {
                alert("패스워드를 입력하세요!");
                document.login.password.focus();
                return;
                }
            document.login.submit();
 }
    </script>
</head>
<body>
            <div>
                <div class="login-form">
                    <div class="form-wrap">
                        <span>관리자 기능을 이용하려면 로그인해주세요.</span>
                        <form name ="login" method="post" action="login_process.php">
                            <input type="password" name="password" placeholder="비밀번호" size="40" ></input>
                            <a class = "login" href="javascript:login_check()">로그인</a>&nbsp;
                            <div class="register">
                                <a href="index.php" target="_top">메인으로 돌아가기</a>
                            </div>
                        </form>
                    </div>
                    
                </div>
                
            </div>
           
</body>
</html>