<!-- Modal -->
<div class="modal fade" id="modal-editar-taller-<?php echo $taller['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar taller</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../app/talleres.update.php" method="post">
                <div class="modal-body">

                    <input type="hidden" name="taller_id" value="<?php echo $taller['id']; ?>">

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Taller</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i class='bx bx-comment-detail' ></i></span>
                                <input type="text" name="nombre_taller"  value="<?php echo $taller['nombre_taller']; ?>" class="form-control" placeholder="Nombre de taller" required/>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Ponente</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i class='bx bxs-user-detail'></i></span>
                                <input type="text" name="ponente"  value="<?php echo $taller['ponente']; ?>" class="form-control" placeholder="Nombres y apellidos del ponente" required/>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Fecha</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i class='bx bxs-id-card' ></i></span>
                                <input type="date" name="fecha_taller"  value="<?php echo $taller['fecha_taller']; ?>" class="form-control" required />
                            </div>
                            <div class="form-text">Fecha del taller</div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Hora</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i class='bx bxs-id-card' ></i></span>
                                <input type="time" name="hora_taller"  value="<?php echo $taller['hora_taller']; ?>" class="form-control" required />
                            </div>
                            <div class="form-text">Hora del taller</div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class='bx bx-x'></i> Cancelar</button>
                    <button type="submit" class="btn btn-primary"><i class='bx bxs-save' ></i> Actualizar datos</button>
                </div>
            </form>
        </div>
    </div>
</div>