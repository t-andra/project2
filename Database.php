<?php

class Database
{
    public $connection;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=testDB;charset=utf8mb4";

        $this->connection = new PDO($dsn, 't-andra', $_SESSION['pass']);
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }

    public function errorCode()
    {
    }
}
