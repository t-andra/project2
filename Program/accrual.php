<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="../favicon.svg" type="image/svg">
</head>

<?php
header('Content-Type: text/html; charset=utf-8'); 

echo $_POST["date_"];
echo ' <br/>';
echo $_POST["person_"];
echo ' <br/>';
echo $_POST["summa_"];
echo ' <br/>';
echo $_POST["comment_"];
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


$person_=$_POST["person_"];
$summa_=$_POST["summa_"];
$comment_=$_POST["comment_"];


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
 

$sql = "INSERT INTO Accrual (Person_, Summa_, Comment_) VALUES ($person_, $summa_, '$comment_')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




mysqli_close($conn);

?>




<p>
Спасибо!
</p>
</html>

