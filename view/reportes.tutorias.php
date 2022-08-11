
<?php 
include_once('includes/principal.up.php');
include('../app/tutorias.index.php');
?>


<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">

  <div class="row">

    <div class="col-lg-12 mb-4 order-0">

        <!-- Bootstrap Table with Caption -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Lista de tutorías</h5>
                <a href="../app/tutorias.reporte.php" class="btn btn-sm btn-primary btn-lg" >
                    <i class='bx bxs-download'></i> Descargar en PDF
                </a>
            </div>

            <div class="table-responsive text-nowrap">
                <table class="table">
                    <caption class="ms-4">
                        Lista de tutorías
                    </caption>
                    <thead class="table-secondary">
                        <tr>
                            <th>ID</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>DNI</th>
                            <th>Ciclo</th>
                            <th>Código</th>
                            <th>Celular</th>
                            <th>Correo</th>
                            <th>Motivo</th>
                            <th>Fecha de registro</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                        foreach ($tutorias as $tutoria) {
                            ?>
                            <tr>
                                <td><?php echo $tutoria['id'] ?></td>
                                <td><?php echo $tutoria['nombres'] ?></td>
                                <td><?php echo $tutoria['apellidos'] ?></td>
                                <td><?php echo $tutoria['dni'] ?></td>
                                <td><?php echo $tutoria['ciclo'] ?></td>
                                <td><?php echo $tutoria['codigo_matricula'] ?></td>
                                <td><?php echo $tutoria['celular'] ?></td>
                                <td><?php echo $tutoria['correo_institucional'] ?></td>
                                <td><?php echo $tutoria['motivo'] ?></td>
                                <td><?php echo $tutoria['created_at'] ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Bootstrap Table with Caption -->


    </div>

  </div>

</div>


<?php 
include_once('includes/principal.down.php');
?>
