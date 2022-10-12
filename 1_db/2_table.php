<!DOCTYPE html>
<html lang="pl" dir="Itr">
<head>
  <meta charset="utf-8"
  <link rel="stylesheet"href=".style/style.css">
  <title>Użytkownicy</title>
</head>
<body>
  <h3>Użytkownicy z tabeli users</h3>
  <table>
    <tr>
      <th>Imie i Nazwisko</th>
      <th>Miasto</th>
      <th>Data utworzenia konta</th>
    </tr>
  </table>
  <?php
require_once('./script/1_connect.php');
$sql = "SELECT * FROM `cities` INNER JOIN `cities` ON `users`.`city_id`=`cities`.id;";
$result = $conn->query($sql);
$count = 0;
while ($user = $result->fetch_assoc()){

    echo <<< E
    Użytkownik $count:
    Imię i nazwisko: $user[Imie] $user[Nazwisko]
    Miasto: $user[city_id]
    Data urodzenia: $user[Created_at]
    <hr>
E;
  }
   ?>
 </body>
 </html>
