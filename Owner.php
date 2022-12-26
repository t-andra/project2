<?php

class Owner
{
public $person;
public $summa;
public $comment;


public function accrual() {

    echo 'Начисление';
}

public function payment() {
    $db =new Database();
    $db->query("INSERT INTO Upravlenka (Person, Summa, Comment) VALUES ($this->person, $this->summa, $this->comment)");

}


}