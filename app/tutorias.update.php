<?php
include_once("../model/conexion.php");
date_default_timezone_set("America/Lima");

session_start();

if (isset($_POST['nombres']) && isset($_POST['dni']) && isset($_POST['codigo_matricula'])){

    $tutoria_id = $_POST['tutoria_id'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $dni = $_POST['dni'];
    $ciclo = $_POST['ciclo'];
    $codigo_matricula = $_POST['codigo_matricula'];
    $celular = $_POST['celular'];
    $correo_institucional = $_POST['correo_institucional'];
    $motivo = $_POST['motivo'];

    $sql = "UPDATE tutorias
            SET nombres='$nombres', apellidos='$apellidos', dni='$dni', ciclo='$ciclo', codigo_matricula='$codigo_matricula', celular='$celular', correo_institucional='$correo_institucional', motivo='$motivo'
            WHERE id='$tutoria_id' ";

    if (mysqli_query($conexion, $sql) === TRUE) {
        $_SESSION['success'] = '¡Registro actualizado exitosamente!';
    } else {
        $_SESSION['danger'] = '¡No se pudo actualizar el registro!';
    }

    header('Location: ../view/tutorias.php');

    mysqli_close($conexion);
}


?>