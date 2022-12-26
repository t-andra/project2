<?php


session_start();
require 'Owner.php';
require 'Database.php';


$Savin = new Owner();

$Savin->person=$_POST["person"];
$Savin->summa=$_POST["summa"];
$Savin->comment=$_POST["comment"];


$Savin->payment();

require ('views/addrecord.view.php');




