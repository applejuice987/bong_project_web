<?php
    $inputcode = $_POST["inputcode"];

    $dbcon = new mysqli("localhost","bong","1234","project");     

    $sql = "delete from domain_table where domain_str = '$inputcode'";

    $result = mysqli_query($dbcon, $sql);

    

?>
<script>
	alert("도메인이 제거 되었습니다!");
</script>

<?php

    header("Location: adminpage.php?forward=1"); 

?>