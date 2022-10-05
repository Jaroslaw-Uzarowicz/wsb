<?php
$con = @new mysqli("localhost","root","","project");
echo "<hr>";
echo $con ->connect_errno;
?>
