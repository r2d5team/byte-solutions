<?php
namespace App\Models;   
use App\Core\Database;

class AppointmentModel {
    public $id;
    public $name;
    public $email;
    public $message;
    

    private $db;
    
    public function __construct($data = null)
     {
        if ($data) {
            $this->id = $data['id'];
            $this->name = $data['name'];
            $this->email = $data['email'];
            $this->message = $data['message'];
            
        }
        
        $this->db = new Database();

     }
        public function all(){
            $appointmentList = [];
            foreach($this->db->getAll() as $appointment) {
                array_push($appointmentList, new self ($appointment));
            }
            return $appointmentList;
    }
   
}

///this es (yo)
////self es para mi clase