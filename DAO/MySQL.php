<?php

class MySQL extends PDO
{
    private $dsn = 'mysql:host=localhost:3307;dbname=db_pokedex';
    private $user = 'root';
    private $pass = 'etecjau';

    public function __construct()
    {
        return parent::__construct($this->dsn, $this->user, $this->pass);
    }
}