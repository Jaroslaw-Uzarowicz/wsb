<?php
$con = @new mysqli("localhost","root","","wsb");
echo "plik z połączeniem db";
echo $con ->connect_errno;
?>
