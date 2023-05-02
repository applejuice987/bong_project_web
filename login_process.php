<?php
$passwd = $_POST["password"];

if($passwd =="1234")
{
    session_start();
    echo"<script>location.href = 'adminpage.php'</script>";
}
else
{
    echo"<script>alert('비밀번호를 확인하세요');history.back();</script>";
}
?>