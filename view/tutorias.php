
<?php 
include_once('includes/principal.up.php');
include_once('includes/toasts.php');
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
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-sm btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modal-create-tutoria">
                    <i class='bx bx-plus'></i> Registrar tutoría
                </button>
            </div>

            <div class="table-responsive text-nowrap">
                <table class="table">
                    <caption class="ms-4">
                        Lista de tutorías
                    </caption>
                    <thead class="table-secondary">
                        <tr>
                            <!-- <th>ID</th> -->
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>DNI</th>
                            <th>Ciclo</th>
                            <th>Código</th>
                            <th>Celular</th>
                            <th>Correo</th>
                            <th>Motivo</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                        foreach ($tutorias as $tutoria) {
                            ?>
                            <tr>
                                <!-- <td><?php //echo $tutoria['id'] ?></td> -->
                                <td><?php echo $tutoria['nombres'] ?></td>
                                <td><?php echo $tutoria['apellidos'] ?></td>
                                <td><?php echo $tutoria['dni'] ?></td>
                                <td><?php echo $tutoria['ciclo'] ?></td>
                                <td><?php echo $tutoria['codigo_matricula'] ?></td>
                                <td><?php echo $tutoria['celular'] ?></td>
                                <td><?php echo $tutoria['correo_institucional'] ?></td>
                                <td><?php echo $tutoria['motivo'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modal-editar-tutoria-<?php echo $tutoria['id']; ?>">
                                        <i class='bx bx-edit-alt' ></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modal-eliminar-tutoria-<?php echo $tutoria['id']; ?>">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </td>
                            </tr>

                            <?php
                            include('tutorias.modal-editar.php');
                            include('tutorias.modal-eliminar.php');
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
include('tutorias.modal-create.php');
?>


<?php 
include_once('includes/principal.down.php');
?>
