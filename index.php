<?php

require 'functions.php';

require 'router.php';
/*
require 'Owner.php';

$person1=new Owner();

$person1->person=1;

echo $person1->accrual()."\n";
echo $person1->payment()."\n";

/*require 'Database.php';

$db = new Database();
$posts = $db->query("select * from Upravlenka")->fetchAll(PDO::FETCH_ASSOC);

dd($posts);





// Connect to the MySQL database.
$dsn = "mysql:host=localhost;port=3306;dbname=testDB;user=t-andra;password=Belev1;charset=utf8mb4";

// Tip: This should be wrapped in a try-catch. We'll learn how, soon.
$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from Upravlenka");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

//dd($posts);
foreach ($posts as $post) {
    echo "<li>" . $post ['Person'] . $post ['Summa'] . "</li>";
}
*/