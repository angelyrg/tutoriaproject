<?php

include_once('../../model/conexion.php');
session_start();

if ($_POST['username'] != "" && $_POST['password'] != ""){

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = mysqli_query($conexion, "SELECT * FROM users WHERE username='$username' ");
    
    if($data = mysqli_fetch_array($sql)){

        if ( password_verify($password, $data['password']) ){
            $_SESSION['user'] = $data['name'];
            $_SESSION['rol'] = $data['rol'];
            header("location: ../../view/");

        }else{
            $_SESSION['danger'] = 'Usuario y/o contraseña incorrecta!';
            header("location: ../../view/");
        }


    }else{
        $_SESSION['danger'] = 'Usuario y/o contraseña incorrecta!';
        header("location: ../../view/");
    }

}

mysqli_close($conexion);


?>