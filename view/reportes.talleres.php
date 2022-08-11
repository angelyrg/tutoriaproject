
<?php 
include_once('includes/principal.up.php');

include('../app/talleres.index.php');
?>

<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">

  <div class="row">

    <div class="col-lg-12 mb-4 order-0">

        <!-- Bootstrap Table with Caption -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Lista de talleres</h5>
                <a href="../app/talleres.reporte.php" class="btn btn-sm btn-primary btn-lg" >
                    <i class='bx bxs-download'></i> Descargar en PDF
                </a>
            </div>

            <div class="table-responsive text-nowrap">
                <table class="table">
                    <caption class="ms-4">
                        Lista de talleres
                    </caption>
                    <thead class="table-secondary">
                        <tr>
                            <th>ID</th>
                            <th>Nombre del taller</th>
                            <th>Ponente</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Fecha de registro</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                        foreach ($talleres as $taller) {
                            ?>
                            <tr>
                                <td><?php echo $taller['id'] ?></td>
                                <td><?php echo $taller['nombre_taller'] ?></td>
                                <td><?php echo $taller['ponente'] ?></td>
                                <td><?php echo date('d-m-Y', strtotime($taller['fecha_taller'])) ?></td>
                                <td><?php echo date('h:i A', strtotime($taller['hora_taller'])) ?></td>
                                <td><?php echo $taller['created_at'] ?></td>
                                

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
<!-- / Content -->


<?php 
include_once('includes/principal.down.php');
?>
