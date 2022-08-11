
<?php 
include_once('includes/principal.up.php');
include_once('includes/toasts.php');
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
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-sm btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modal-create-taller">
                    <i class='bx bx-plus'></i> Registrar taller
                </button>
            </div>

            <div class="table-responsive text-nowrap">
                <table class="table">
                    <caption class="ms-4">
                        Lista de talleres
                    </caption>
                    <thead class="table-secondary">
                        <tr>
                            <!-- <th>ID</th> -->
                            <th>Nombre del taller</th>
                            <th>Ponente</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                        foreach ($talleres as $taller) {
                            ?>
                            <tr>
                                <!-- <td><?php //echo $tutoria['id'] ?></td> -->
                                <td><?php echo $taller['nombre_taller'] ?></td>
                                <td><?php echo $taller['ponente'] ?></td>
                                <td><?php echo date('d-m-Y', strtotime($taller['fecha_taller'])) ?></td>
                                <td><?php echo date('h:i A', strtotime($taller['hora_taller'])) ?></td>
                                
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modal-editar-taller-<?php echo $taller['id']; ?>">
                                        <i class='bx bx-edit-alt' ></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modal-eliminar-taller-<?php echo $taller['id']; ?>">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </td>
                            </tr>

                            <?php
                            include('talleres.modal-editar.php');
                            include('talleres.modal-eliminar.php');
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
include('talleres.modal-create.php');
?>


<?php 
include_once('includes/principal.down.php');
?>
