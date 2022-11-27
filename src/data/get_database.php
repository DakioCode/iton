<?php

function get_database(): PDO
{
    return new PDO("mysql:host=localhost;dbname=iton;charset=utf8", "root", "root");
}