<?php

session_start();

?>


<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="../favicon.png" type="image/png">
</head>

<?php
header('Content-Type: text/html; charset=utf-8'); 

// $login=$_POST["login"];

$login=$_SESSION['login'];

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "t-andra", $login, "testDB");




// $person1=$_POST["person1"];

$person1=$_SESSION['person1'];

$q = "SELECT SUM(Summa) FROM Upravlenka WHERE Person='$person1'";

$q_= "SELECT SUM(Summa_) FROM Accrual WHERE Person_='$person1'";


$r = $mysqli->query($q);

$row = $r->fetch_row();

echo $row[0];

echo "<br/>";

$r_ = $mysqli->query($q_);

$row_ = $r_->fetch_row();

echo $row_[0];

echo "<br/>";

echo $row_[0]-$row[0];

mysqli_close($mysqli);

?>









<p>
Спасибо!
</p>
</html>

