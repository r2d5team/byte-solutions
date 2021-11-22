<?php

namespace App\Core;

class SQLQueryRepository implements IQueryRepository {

        private $table = "querys";
        private $connection;

        function __construct(){
            $this->connection = (new SQLConnection())->mysql;
        }

        function getAll(){
            $query = $this->connection->query("select * FROM {$this->table}");
            $result = $query->fetchAll();
            return $result;
        }
}