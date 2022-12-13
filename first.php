<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="favicon.svg" type="image/svg">
</head>

<?php
header('Content-Type: text/html; charset=utf-8'); 

mail("ivan.pomidorov27@gmail.com",$_POST["name"]."telephon".$_POST["tel"]."mail".$_POST["email"],$_POST["info"],"From: t-andra@artemoff.ru");

echo $_POST["name"]
?>
<p>
Спасибо!
</p>
</html>
