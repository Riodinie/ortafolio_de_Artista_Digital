<?php

$conex = mysqli_connect("localhost", "root", "", "registro");

if (!$conex) {
    die("Conexión fallida: " . mysqli_connect_error());
}

$conex->set_charset("utf8");

?>