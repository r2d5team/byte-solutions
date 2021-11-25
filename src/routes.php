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
    $controller->store($_POST);//hay que distinguir porque habra diferentes posts
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
//$url=/edit/1
if (substr($uri, 0,6) == '/edit/'){//comprovar url valido
    $id = str_replace("/edit/", "", $uri);
    $controller -> update($id);
}

?>