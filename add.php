<?php
require_once 'Database.php';
//Validamos que hayan llegado estas variables, y que no esten vacias:
if (isset($_POST["name"], $_POST["email"], $_POST["querytitle"], $_POST["message"]) and $_POST["name"] !="" and $_POST["email"]!="" and $_POST["querytitle"]!="" and $_POST["message"]!="" ){
    //traspasamos a variables locales, para evitar complicaciones con las comillas:
$formulario = [ 
    "name" => $_POST["name"],
    "email" => $_POST["email"],
    "querytitle" => $_POST["querytitle"],
    "message" => $_POST["message"],];

    Database::create($formulario["name"],$formulario["email"],$formulario["querytitle"],$formulario["message"]);
    var_dump(Database::getAll());
} else {

echo '<p>Por favor, complete el <a href="create.php">formulario</a></p>';
}


?>