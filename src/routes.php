<?php
namespace App;
use App\Controllers\AppointmentController;
use App\Core\SQLConnection;

$uri = $_SERVER["REQUEST_URI"];

/*$db = (new SQLConnection())->mysql;

$query = $db->query("select * FROM querys");

$result = $query->fetchAll();*/

$controller = new AppointmentController();

if($_POST){
    $controller->store($_POST);
}

if ($uri == '/checklist' || $uri=='/'){
    $controller -> index();
}

if ($uri == '/create'){
    $controller -> create();
}

if ($uri == '/checklist'){
    $controller -> read();
}

if ($uri == '/edit'){
    $controller -> update();
}

?>