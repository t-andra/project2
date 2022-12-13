<?php
echo "Hello";

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();}

echo dd($_SERVER);
