<!DOCTYPE html>
<html lang="pl" dir="Itr">
<head>
  <meta charset="utf-8"
  <title>Użytkownicy</title>
</head>
<body>
  <h3>Użytkownicy z tabeli users</h3>
  <?php
require_once('./script/1_connect.php');
$sql = "SELECT * FROM `users`;";
$result = $conn->query($sql);
$count = 0;
while ($user = $result->fetch_assoc()){
    $count++;
    echo <<< E
    Użytkownik $count:<br>
    Imię i nazwisko: $user[Imie] $user[Nazwisko]<br>
    Miasto: $user[city_id]<br>
    Data urodzenia: $user[Created_at]<br>
    <hr>
E;
  }
   ?>
 </body>
 </html>
