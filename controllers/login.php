<?php

session_start();


$_SESSION['pass']=$_POST["pass"];

//echo $_POST([pass]);
//dd($_POST['pass']);
//require 'views/program.view.php';

require 'Database.php';



$db = new Database();

$posts = $db->query("select * from Upravlenka")->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post ['Person'] .'-'. $post ['Summa'] . "</li>";
}
/*
if ($_SESSION['pass'] === 'Belev1') {
    require 'views/program.view.php';
} else {
    require 'views/denied.php';
}


