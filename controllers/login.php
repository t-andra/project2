<?php

session_start();


$_SESSION['pass']=$_POST["pass"];

//echo $_POST([pass]);
//dd($_POST['pass']);
//require 'views/program.view.php';

if ($_SESSION['pass'] === 'Belev1') {
    require 'views/program.view.php';
} else {
    require 'views/denied.php';
}


