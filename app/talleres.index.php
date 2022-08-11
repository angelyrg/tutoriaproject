<?php
include_once("../model/conexion.php");
date_default_timezone_set("America/Lima");


$talleres = [];

$sql = "SELECT * FROM talleres";
$result = $conexion->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $talleres[] = $row;
    }
}

$conexion->close();

?>