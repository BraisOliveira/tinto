<?php

$host = "localhost";
$bd = "avenida";
$user = "root";
$pass = "";

$conn = mysqli_connect($host, $user, $pass, $bd) or die("Error en la conexión a la base de datos " . $bd);
mysqli_set_charset($conn, "UTF8");
