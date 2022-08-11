<!-- Modal -->
<div class="modal fade" id="modal-editar-tutoria-<?php echo $tutoria['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar tutoría</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../app/tutorias.update.php" method="post">
                <div class="modal-body">

                    <input type="hidden" name="tutoria_id" value="<?php echo $tutoria['id']; ?>">

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nombres</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                <input type="text" name="nombres" value="<?php echo $tutoria['nombres']; ?>" class="form-control" placeholder="Nombres"  required/>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Apellidos</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i class='bx bxs-user-detail'></i></span>
                                <input type="text" name="apellidos" value="<?php echo $tutoria['apellidos']; ?>" class="form-control" placeholder="Apellidos" required/>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">DNI</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i class='bx bxs-id-card' ></i></span>
                                <input type="text" name="dni" value="<?php echo $tutoria['dni']; ?>" class="form-control" maxlength="8" placeholder="Número de DNI" required />
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Ciclo</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i class='bx bx-list-ol' ></i></span>
                                <select name="ciclo" class="form-select" required>
                                    <option <?php if($tutoria['ciclo']=="I"){echo "selected";} ?>>I</option>
                                    <option <?php if($tutoria['ciclo']=="II"){echo "selected";} ?>>II</option>
                                    <option <?php if($tutoria['ciclo']=="III"){echo "selected";} ?>>III</option>
                                    <option <?php if($tutoria['ciclo']=="IV"){echo "selected";} ?>>IV</option>
                                    <option <?php if($tutoria['ciclo']=="V"){echo "selected";} ?>>V</option>
                                    <option <?php if($tutoria['ciclo']=="VI"){echo "selected";} ?>>VI</option>
                                    <option <?php if($tutoria['ciclo']=="VII"){echo "selected";} ?>>VII</option>
                                    <option <?php if($tutoria['ciclo']=="VIII"){echo "selected";} ?>>VIII</option>
                                    <option <?php if($tutoria['ciclo']=="IX"){echo "selected";} ?>>IX</option>
                                    <option <?php if($tutoria['ciclo']=="X"){echo "selected";} ?>>X</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Código</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i class='bx bx-credit-card-front' ></i></span>
                                <input type="text" name="codigo_matricula" value="<?php echo $tutoria['codigo_matricula']; ?>" class="form-control" maxlength="10" placeholder="Código de matrícula" required/>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-icon-default-phone">Celular</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                                <input type="text" name="celular" value="<?php echo $tutoria['celular']; ?>" class="form-control phone-mask" maxlength="9" placeholder="Número de celular" required/>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Correo</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                <input type="email" name="correo_institucional" value="<?php echo $tutoria['correo_institucional']; ?>" class="form-control" placeholder="Correo institucional" required/>                                       
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Motivo</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bx-align-left'></i></span>
                                <textarea name="motivo"  cols="30" rows="2" class="form-control" placeholder="Motivo de la tutoría" required><?php echo $tutoria['motivo']; ?></textarea>                                                                       
                            </div>
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