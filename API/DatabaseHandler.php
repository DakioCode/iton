<?php

namespace API;

use PDO;

class DatabaseHandler
{
    /** @var self $instance */
    public static self $instance;

    /** @var PDO $database */
    private static $database;

    public function __construct()
    {
        self::$instance = $this;
        self::$database = $this->getDatabase();
    }

    public function getDatabase(): PDO
    {
        return new PDO("mysqli:host=localhost;db_name=iton;charset=utf8", "root", "root");
    }

    public static function getInstance(): self
    {
        return self::$instance;
    }
}