<?php

    $inputcode = $_GET["inputcode"];
    $called = $_GET["called"];

    $dbcon = new mysqli("localhost","bong","1234","project");     

    $sql = "select count(*) from domain_table where domain_str='$inputcode'";

    $result = mysqli_query($dbcon, $sql);

    $array = mysqli_fetch_array($result);

    $num = $array[0];
    
    //state값이 1일경우 중복값이 있음 2일경우 없음
    if($num =="1")
    {
        $state = 1;
    }
    else 
    {
        $state = 2;
       
    }
    
    if($called == "1")
    {
         
        
        header("Location: adminpage.php?forward=2&codestate=$state&usingcode=$inputcode"); 
    
        
    }
    else if($called =="2")
    {
        header("Location: adminpage.php?forward=3&codestate=$state&usingcode=$inputcode");  
    }
?>



