<?php
include_once("../model/conexion.php");
date_default_timezone_set("America/Lima");

session_start();

if (isset($_POST['nombres']) && isset($_POST['dni']) && isset($_POST['codigo_matricula'])){

    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $dni = $_POST['dni'];
    $ciclo = $_POST['ciclo'];
    $codigo_matricula = $_POST['codigo_matricula'];
    $celular = $_POST['celular'];
    $correo_institucional = $_POST['correo_institucional'];
    $motivo = $_POST['motivo'];

    $sql = "INSERT INTO tutorias (nombres, apellidos, dni, ciclo, codigo_matricula, celular, correo_institucional, motivo)
            VALUES ('$nombres', '$apellidos', '$dni', '$ciclo', '$codigo_matricula', '$celular', '$correo_institucional', '$motivo')";

    if (mysqli_query($conexion, $sql) === TRUE) {
        $_SESSION['success'] = '¡Registro guardado exitosamente!';
    } else {
        $_SESSION['danger'] = '¡No se pudo guardar el registro!';
    }

    header('Location: ../view/tutorias.php');

    
    
    mysqli_close($conexion);
}


?>