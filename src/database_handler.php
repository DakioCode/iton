<?php

function getDatabase(): PDO
{
    return new PDO("mysql:host=localhost;dbname=iton;charset=utf8", "root", "root");
}