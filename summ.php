<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="favicon.png" type="image/png">
</head>

<?php
header('Content-Type: text/html; charset=utf-8'); 

echo $_POST["person1"];
echo ' <br/>';

$servername = "localhost";
$username = "t-andra";
$password = "Belev1";
$dbname = "testDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

echo mysqli_connect_error($servername, $username, $password, $dbname);
  
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);

}

$person1=$_POST["person1"];


echo ' <br/>';
echo ' <br/>';
echo ' <br/>';
echo ' <br/>';
echo $person1;
echo ' <br/>';

//$sql1 = "SELECT SUM(Summa) FROM Upravlenka WHERE 'Person'='$person1'";

//$sql1 = "SELECT Summa FROM Upravlenka WHERE 'Person'='$person1'";

//$sql1 = "SELECT Summa FROM Upravlenka WHERE 'Person'=1";
$sql1 = "SELECT Summa FROM Upravlenka";


if (mysqli_query($conn, $sql1)) {
  echo "Расчет";
} else {
  echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}

echo ' <br/>';

$result=mysqli_query($conn, $sql1);

 
printf("Select returned %d rows.\n", mysqli_num_rows($result));

echo ' <br/>';
//echo mysqli_num_rows($result);
echo ' <br/>';

//echo mysqli_free_result($result);
echo ' <br/>';
//echo $row

mysqli_close($conn);

?>




<p>
Спасибо!
</p>
</html>

