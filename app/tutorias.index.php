<?php
include_once("../model/conexion.php");
date_default_timezone_set("America/Lima");


$tutorias = [];

$sql = "SELECT * FROM tutorias";
$result = $conexion->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $tutorias[] = $row;
    }
}

$conexion->close();

?>