<?php

class Database {
    private $appointments = [];
    //private $users=[];
    public function add($name,$email,$querytitle,$message){
        $datetime = date("Y-m-d h:i:sa");
    }
    public function getAll() {
        return $this->appointments;
    }
}