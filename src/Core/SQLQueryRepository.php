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

        function save($name, $email, $title, $message)
        {
            //$this->connection->query("INSERT INTO `{$this->table}` (`name`,`email`,`title_query`,`problem_query`) VALUES ('{$name}','{$email}','{$title}','{$message}')");
            $this->connection->query("INSERT INTO `{$this->table}` (`name`,`email`,`title_query`,`problem_query`) VALUES ('{$name}','{$email}','{$title}','{$message}')");

        }
        
}