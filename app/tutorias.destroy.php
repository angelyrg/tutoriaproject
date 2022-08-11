<?php
include_once("../model/conexion.php");
date_default_timezone_set("America/Lima");

session_start();

$tutoria_id = $_POST['tutoria_id'];

$sql = "DELETE FROM tutorias WHERE id='$tutoria_id' ";

if (mysqli_query($conexion, $sql) === TRUE) {
    $_SESSION['success'] = '¡Registro eliminado exitosamente!';
} else {
    $_SESSION['danger'] = '¡No se pudo eliminar el registro!';
}

header('Location: ../view/tutorias.php');

$conexion->close();

?>