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




$person2=$_POST["person2"];

$q = "SELECT Date, Summa FROM Upravlenka WHERE Person='$person2'";


$r = $mysqli->query($q);

/* извлечение ассоциативного массива */
while ($row = $r->fetch_assoc()) {
    printf("%s (%s)\n", $row["Date"], $row["Summa"]);
	echo "<br/>";
}


mysqli_close($conn);

?>









<p>
Спасибо!
</p>
</html>
