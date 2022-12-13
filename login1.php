<?php

session_start();


$_SESSION['person1']=$_POST["person1"];
$_SESSION['login']=$_POST["login"];

echo 'OK';

echo '<br/>';

echo $_SESSION['person1'];

echo '<br/>';

echo $_SESSION['login'];


?>
