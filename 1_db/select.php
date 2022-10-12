<!DOCTYPE html>
<html lang="pl" dir="Itr">
<head>
  <meta charset="utf-8"
  <title>Użytkownicy</title>
</head>
<body>
  <h3>Użytkownicy z tabeli users</h3>
  <?php
require_once('/script/1_connect.php');
$sql = "SELECT * FROM 'users';";
$result = $coon->query($sql)
while ($user = $results->fetch_assoc()){
echo "string<br>"
  }
   ?>
 </body>
 </html>
