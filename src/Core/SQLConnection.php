<?php

namespace App\Core;

Use PDO;
Use PDOException;

class SQLConnection {

    public $mysql;
    
    public function __construct()
    {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $database = 'consultas_cto';
        $charset = 'utf-8';
        $options = [PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC];

        $this->mysql = new PDO("mysql:host={$host};dbname={$database};charset{$charset}",$user,$pass, $options);
    }
    
    


}