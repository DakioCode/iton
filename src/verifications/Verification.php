<?php

use data\DatabaseHandler;

class Verification 
{
  private $dbHandler;

  public function __construct(DatabaseHandler $dbHandler)
  {
    $this->dbHandler = $dbHandler;
  }

  public function loginVerification(string $password)
  {
    $query = $this->dbHandler->getUserByPassword($password);

    $fetch = $query->fetchAll();
    if (!isset($fetch[0]["username"])) return false;
    else return $fetch[0]["username"];
  }
}