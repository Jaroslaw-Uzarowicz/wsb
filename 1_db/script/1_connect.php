<?php
$con = @new mysqli("localhost","root","","wsbs");
echo "plik z połączeniem db";
echo $con ->connect_errno;
?>
