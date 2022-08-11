<?php
include_once("../model/conexion.php");
date_default_timezone_set("America/Lima");

session_start();

$taller_id = $_POST['taller_id'];
$nombre_taller = $_POST['nombre_taller'];
$ponente = $_POST['ponente'];
$fecha_taller = $_POST['fecha_taller'];
$hora_taller = $_POST['hora_taller'];


$sql = "UPDATE talleres
        SET nombre_taller='$nombre_taller', ponente='$ponente', fecha_taller='$fecha_taller', hora_taller='$hora_taller'
        WHERE id='$taller_id' ";

if (mysqli_query($conexion, $sql) === TRUE) {
    $_SESSION['success'] = 'Taller actualizado exitosamente!';
} else {
    $_SESSION['danger'] = '¡No se pudo actualizar el registro!';
}

header('Location: ../view/talleres.php');

mysqli_close($conexion);

?>