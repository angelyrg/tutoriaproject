<!-- Modal -->
<div class="modal fade" id="modal-eliminar-tutoria-<?php echo $tutoria['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Eliminar tutoría</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../app/tutorias.destroy.php" method="post">
                <div class="modal-body">

                <p>¿Está seguro que desea eliminar el registro?</p>

                <input type="hidden" name="tutoria_id" value="<?php echo $tutoria['id']; ?>">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class='bx bx-x'></i> Cancelar</button>
                    <button type="submit" class="btn btn-danger"><i class='bx bx-trash'></i> Sí, Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>