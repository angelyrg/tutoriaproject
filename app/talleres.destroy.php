<?php
include_once("../model/conexion.php");
date_default_timezone_set("America/Lima");

session_start();

$taller_id = $_POST['taller_id'];

$sql = "DELETE FROM talleres WHERE id='$taller_id' ";

if (mysqli_query($conexion, $sql) === TRUE) {
    $_SESSION['success'] = '¡Registro eliminado exitosamente!';
} else {
    $_SESSION['danger'] = '¡No se pudo eliminar el registro!';
}

header('Location: ../view/talleres.php');

$conexion->close();

?>