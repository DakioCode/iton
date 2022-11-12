<?php

$db = new PDO("mysql:host=localhost;dbname=iton;charset=utf8", "root", "root");

$password = "Test1";

$query = $db->query("SELECT username FROM members WHERE password='$password';");

print_r($query->fetchAll());