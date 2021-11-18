<?php

require_once __DIR__ . "/../AppointmentModel.php";

class AppointmentController {

    public function index(){

        require_once __DIR__ . "/../views/pages/landingpageView.php";
    }
    public function create(){
        require_once __DIR__ . "/../views/pages/createView.php";
    }
    public function read(){
        $appointment = (new AppointmentModel())->all();
        require_once __DIR__ . "/../views/pages/checklistView.php";
    }
    public function update(){
        require_once __DIR__ . "/../views/pages/editView.php";
    }

}