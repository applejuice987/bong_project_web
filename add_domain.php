
<?php

   
    if($_GET["codestate"]== null) //코드상태값 없으면 0으로 초기화
    {
        $codestate=0;
    }
    else //있다면 받은값 정수형으로 형변환해서 저장
    {
        $codestate= (int)($_GET["codestate"]);
    }
    $inputcodedata = $_GET["usingcode"];
    $codeinfo="";
    if($codestate ==1)//코드상태 검사하여 중복이나 사용여부 확인.
    {
    $codeinfo="이미존재하는도메인입니다.";
    }else if($codestate ==2)
    {
        $codeinfo ="생성가능한 도메인입니다.";
    }
    if($inputcodedata == NULL) $inputcodedata ="";

?>
<html>
    <head>
        <script>
            function codesubmit()
            {

                //document.write로 폼생성하여 토큰값확인 하는 php파일로 데이터 전달.
                document.write('<form action="domain_check.php" id="smb_form" method="get"><input type="hidden" name="inputcode" value="'+document.getElementById("codetext").value +'"><input type="hidden" name="called" value="1"></form>');
                document.getElementById("smb_form").submit();

            }

            function createsubmit(){
                form = document.add_domain;


                if (form.codestate1.value==1)
                {
                    alert("이미 존재하는 도메인입니다!")
                }
                else 
                {
                    form.submit();
                }


            }
        </script>
    </head>
    <body>
        <form name="add_domain" method="post" action = "new_domain_process.php">
            <span>추가할 도메인을 입력해주세요</span>
            <input id="codestate1"  type="hidden" value = <?php echo($codestate) ?>>
            <input id="codetext" type="text" name="inputcode" onchange="codesubmit()"  value = <?php  echo($inputcodedata); ?>  >
            <input type="button" value="추가" onclick="createsubmit()">
            <?php echo($codeinfo)?>
        </form>

    </body>
</html>