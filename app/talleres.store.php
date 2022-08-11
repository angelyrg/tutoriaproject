<?php
include_once("../model/conexion.php");
date_default_timezone_set("America/Lima");

session_start();

$nombre_taller = $_POST['nombre_taller'];
$ponente = $_POST['ponente'];
$fecha_taller = $_POST['fecha_taller'];
$hora_taller = $_POST['hora_taller'];


$sql = "INSERT INTO talleres (nombre_taller, ponente, fecha_taller, hora_taller )
        VALUES ('$nombre_taller', '$ponente', '$fecha_taller', '$hora_taller')";

if (mysqli_query($conexion, $sql) === TRUE) {
    $_SESSION['success'] = '¡Taller registrado exitosamente!';
} else {
    $_SESSION['danger'] = '¡No se pudo guardar el registro!';
}

header('Location: ../view/talleres.php');

mysqli_close($conexion);

?>