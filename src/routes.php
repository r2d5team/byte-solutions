<?php

//var_dump($_SERVER["REQUEST_URI"]);

$uri = $_SERVER["REQUEST_URI"];

if ($uri == '/AppointmentModel') {
    require_once __DIR__ . '/Views/CheckList.php';
}