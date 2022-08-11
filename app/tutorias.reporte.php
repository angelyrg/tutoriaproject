<?php 

session_start();

if (!isset($_SESSION['user'])){
    header("location: login.php");
}

ob_start();


include('tutorias.index.php');
?>

<!DOCTYPE html>

<html lang="es" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free" >
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>EPIS | Tutoría</title>
    <meta name="description" content="" />
    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


</head>

<body>


<!-- Content -->

<h2>Reporte de tutorías realizadas</h2>

<div class="">

  <div class="row">

    <div class="col-12">

            <div class="table-responsive">
                <table class="table table-bordered" >
                    <thead class="table-dark ">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">DNI</th>
                            <th scope="col">Ciclo</th>
                            <th scope="col">Código</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Motivo</th>
                            <th scope="col">Fecha de registro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach ($tutorias as $tutoria) {
                            ?>
                            <tr>
                                <td scope="row"><?php echo $tutoria['id'] ?></td>
                                <td><?php echo $tutoria['nombres'] ?></td>
                                <td><?php echo $tutoria['apellidos'] ?></td>
                                <td><?php echo $tutoria['dni'] ?></td>
                                <td><?php echo $tutoria['ciclo'] ?></td>
                                <td><?php echo $tutoria['codigo_matricula'] ?></td>
                                <td><?php echo $tutoria['celular'] ?></td>
                                <td><?php echo $tutoria['correo_institucional'] ?></td>
                                <td><?php echo $tutoria['motivo'] ?></td>
                                <td><?php echo $tutoria['fecha'] ?></td>
                                
                            </tr>

                            <?php
                        }
                        ?>                        
                    </tbody>
                </table>
            </div>
        </div>

        
    </div>

  </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>


<?php

$html = ob_get_clean();

require('../assets/dompdf/autoload.inc.php');
use Dompdf\Dompdf;
$dompdf = new Dompdf();

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream('tutorias.pdf', array('Attachment'=>true));

?>