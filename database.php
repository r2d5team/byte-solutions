<?php

class Database {
    public $appointments = [];
   
    public function getAll() {
        return $this->appointments;
    }
}