<?php

class Database {
    private static $appointments = [];
    private static $id=0;
    //private $users=[];
    public static function create($name, $email,$querytitle,$message){
        self::$id++;
        $datetime = date("Y-m-d h:i:sa");
        array_push(self::$appointments, [
            'id' => self::$id,
            'name' => $name,
            'email' => $email,
            'querytitle' => $querytitle,
            'message' => $message,
            'datetime' => $datetime
            ]
        );
    }
    public function getAll() {
        return $this->appointments;
    }
}