<?php
    $inputcode = $_POST["inputcode"];

    $dbcon = new mysqli("localhost","bong","1234","project");     

    $sql = "insert into domain_table values(now(),'$inputcode')";

    $result = mysqli_query($dbcon, $sql);

    

?>
<script>
	alert("도메인이 추가 되었습니다!");
</script>

<?php

    header("Location: adminpage.php?forward=1"); 

?>