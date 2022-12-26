<?php

session_start();


$_SESSION['pass']=$_POST["pass"];

require 'Database.php';

try {
    $db = new Database();
//    $_SESSION['db']=$db;
//    $posts = $db->query("select * from Upravlenka")->fetchAll(PDO::FETCH_ASSOC);
    require 'views/program.view.php';
}

catch (Exception $e) {

    require 'views/denied.php';
}

