<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="favicon.svg" type="image/svg">
</head>

<?php
header('Content-Type: text/html; charset=utf-8'); 

echo $_POST["date"];
echo ' <br/>';
echo $_POST["person"];
echo ' <br/>';
echo $_POST["summa"];
echo ' <br/>';
echo $_POST["comment"];
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

//$sql = "INSERT INTO Upravlenka (Person, Summa, Comment) VALUES (2, 3, 'ok')";



$person=$_POST["person"];
$summa=$_POST["summa"];
$comment=$_POST["comment"];


echo ' <br/>';
echo ' <br/>';
echo ' <br/>';
echo ' <br/>';
echo $person;
echo ' <br/>';
echo $summa;
echo ' <br/>';
echo $comment;
echo ' <br/>';
 

$sql = "INSERT INTO Upravlenka (Person, Summa, Comment) VALUES ($person, $summa, '$comment')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


//$result = mysqli_query($conn, "SELECT * FROM Upravlenka");
//printf("Запрос SELECT вернул %d строк.\n", mysqli_num_rows($result));


mysqli_close($conn);

?>




<p>
Спасибо!
</p>
</html>

