<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "crud_clientes";

$mysqli = new mysqli($host, $user, $pass, $db);

if($mysqli->connect_errno) {
    die("falhou");
}

if(isset($_POST['enviado'])) {

$_POST['teste'] = ( isset($_POST['teste']) );
    echo "Enviado";
}