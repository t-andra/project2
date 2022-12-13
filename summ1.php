<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="favicon.png" type="image/png">
</head>

<?php
header('Content-Type: text/html; charset=utf-8'); 



mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "t-andra", "Belev1", "testDB");



/*
$query = "SELECT * FROM Upravlenka";

$result = $mysqli->query($query);

while ($row = $result->fetch_row()) {
printf("%s (%s)\n", $row[0], $row[1],$row[2],$row[3]);}

*/

$query_ = "SELECT Summa FROM Upravlenka	WHERE Key_=1";

$result_ = $mysqli->query($query_);


/* получение массива объектов */
while ($row = $result_->fetch_row()) {
printf("%s (%s)\n", $row[0]);}




?>









<p>
Спасибо!
</p>
</html>

