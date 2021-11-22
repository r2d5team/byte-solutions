<?php
namespace App\Models;   
use App\Core\FakeQueryRepository;

class AppointmentModel {
    public $id;
    public $name;
    public $email;
    public $title;
    public $message;

    private $db;
    
    public function __construct($data = null)
     {
        if ($data) {
            $this->id = $data['id'];
            $this->name = $data['name'];
            $this->email = $data['email'];
            $this->title = $data['title_query'];
            $this->message = $data['problem_query'];
        }
        
        $this->db = new FakeQueryRepository();

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