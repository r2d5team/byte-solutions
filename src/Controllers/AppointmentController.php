<?php
namespace App\Controllers;
use App\Models\AppointmentModel;


class AppointmentController {

    public function index(){

        require_once __DIR__ . "/../views/pages/landingpageView.php";
    }
    public function create(){
        require_once __DIR__ . "/../views/pages/createView.php";
        
    }
    public function read(){
        require_once __DIR__ . "/../views/pages/checklistView.php";
        $appointment = (new AppointmentModel())->all();
        foreach ($appointment as $elementAppointment) {
            echo "
            <div class='card' style='width: 18rem;'>
              <div class='card-body'>
                <h5 class='card-title'>{$elementAppointment->name}</h5>
                <h6 class='card-subtitle mb-2 text-muted'>{$elementAppointment->email}</h6>
                <p class='card-text'> {$elementAppointment->message}</p>
              </div>
            </div>    
            ";
          }
        
    }
    public function update(){
        require_once __DIR__ . "/../views/pages/editView.php";
    }

}