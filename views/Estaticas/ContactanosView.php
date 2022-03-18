<main>
    <div class="container-fluid">
        <div id="card-formulario-mapa" class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <form class="form_contacto" id="form_contacto" method="post">
                            <p class="label" style="font-weight: bold">ESCRIBENOS</p>
                            <p class="label" style="color: gray">
                                Tu direccion de correo electronico no sera publicada.
                            </p>
                            <p>Motivo del mensaje</p>
                            <div class="form-group">
                                <input class="form-check-input" type="radio" name="mensaje_motivo" id="agradecimiento"
                                    value="Agradecimiento" />
                                <label class="form-check-label">Agradecimiento</label>
                                <br>
                                <input class="form-check-input" type="radio" name="mensaje_motivo" id="reclamo"
                                    value="Reclamo" />
                                <label class="form-check-label">Reclamo</label>
                                <br>
                                <input class="form-check-input" type="radio" name="mensaje_motivo" id="sugerencia"
                                    value="Sugerencia" />
                                <label class="form-check-label">Sugerencia</label>
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input class="form-control" id="nombre" type="text" name="nombre" />
                            </div>
                            <div class="form-group">
                                <label for="apellido">Apellidos</label>
                                <input class="form-control" id="apellido" type="text" name="apellido" />
                            </div>
                            <div class="form-group">
                                <label for="correo">Correo Electronico</label>
                                <input class="form-control" id="correo" type="text" name="correo" />
                            </div>
                            <div class="form-group">
                                <label class="estado_civil">Estado Civil</label>
                                <select class="form-select" name="estadoC" id="estadoC">
                                    <option value="0">Seleccione...</option>
                                    <option value="Soltero/a">Soltero/a</option>
                                    <option value="Casasado/a">Casado/a</option>
                                    <option value="Viudo/a">Viudo/a</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="comentario">Comentario</label>
                                <textarea class="form-control" name="comentario" id="comentario"></textarea>
                            </div>
                            <br>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Enviar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mapa-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15947.569565414111!2d-79.90175261463163!3d-2.194418750203137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d6fe73ca7ba95%3A0x38f7ce3fe186b7d1!2sFlores%20chino!5e0!3m2!1ses!2sec!4v1639701904419!5m2!1ses!2sec"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>