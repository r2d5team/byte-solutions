<?php
namespace App;
use App\Controllers\AppointmentController;

$uri = $_SERVER["REQUEST_URI"];
$controller = new AppointmentController();

if ($uri == '/landingpage'){
    $controller -> index();
}

if ($uri == '/create'){
    $controller -> create();
}

if ($uri == '/checklist'){
    $controller -> read();
}

/*if ($uri == '/edit'){
    $controller -> update();
}*/

?>