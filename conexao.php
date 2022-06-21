<?php

$host = "localhost";
$db = "crud_clientes";
$user = "root";
$pass = "";


$mysqli = new mysqli($host, $user, $pass, $db);

if($mysqli->connect_errno) {
    die("falhou");
}

// if(isset($_POST['enviado'])) {

// $_POST['teste'] = ( isset($_POST['teste']) );
//     echo "Enviado";
// }