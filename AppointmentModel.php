<?php
require_once 'Database.php';

class AppointmentModel {
    public $id;
    public $name;
    public $email;
    public $querytitle;
    public $message;
    public $datetime;

    private $db;
    
    public function __construct($data = null)
     {
        if ($data) {
            $this->id = $data['id'];
            $this->name = $data['name'];
            $this->querytitle = $data['querytitle'];
            $this->message = $data['message'];
            $this->datetime = $data['datetime'];
        }
        
        $this->db = new Database();

     }
        public function all(){
            $appointmentList = [];
            foreach(Database::getAll() as $appointment) {
                array_push($appointmentList, new self ($appointment));
            }
            return $appointmentList;
    }
   
}

///this es (yo)
////self es para mi clase