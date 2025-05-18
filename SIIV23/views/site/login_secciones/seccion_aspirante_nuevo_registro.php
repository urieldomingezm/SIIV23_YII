<form id="formulario_primera_vez_aspirantes_registro" class="rounded" method="POST">
    <input type="hidden" name="form_type" value="aspirante_registro">

    <div class="row g-3">
        <!-- Datos Personales Card -->
        <div class="col-md-6">
            <div class="card mb-3 h-100">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Datos Personales</h5>
                </div>
                <div class="card-body">
                    <div class="row g-2">
                        <div class="col-md-4">
                            <label for="primera_vez_apellido_paterno" class="form-label small">APELLIDO PATERNO</label>
                            <input type="text" class="form-control form-control-sm" id="primera_vez_apellido_paterno" name="primera_vez_apellido_paterno">
                            <div class="invalid-feedback small"></div>
                        </div>
                        <div class="col-md-4">
                            <label for="primera_vez_apellido_materno" class="form-label small">APELLIDO MATERNO</label>
                            <input type="text" class="form-control form-control-sm" id="primera_vez_apellido_materno" name="primera_vez_apellido_materno">
                            <div class="invalid-feedback small"></div>
                        </div>
                        <div class="col-md-4">
                            <label for="primera_vez_nombre" class="form-label small">NOMBRE(S)</label>
                            <input type="text" class="form-control form-control-sm" id="primera_vez_nombre" name="primera_vez_nombre">
                            <div class="invalid-feedback small"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Información Adicional Card -->
        <div class="col-md-6">
            <div class="card mb-3 h-100">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Información Adicional</h5>
                </div>
                <div class="card-body">
                    <div class="row g-2">
                        <div class="col-md-4">
                            <label for="primera_vez_fecha_nacimiento" class="form-label small">FECHA NACIMIENTO</label>
                            <input type="date" class="form-control form-control-sm" id="primera_vez_fecha_nacimiento" name="primera_vez_fecha_nacimiento" value="2003-01-01">
                            <div class="invalid-feedback small"></div>
                        </div>
                        <div class="col-md-4">
                            <label for="primera_vez_sexo" class="form-label small">SEXO</label>
                            <select class="form-select form-select-sm" id="primera_vez_sexo" name="primera_vez_sexo">
                                <option value="" disabled selected>Selecciona</option>
                                <option value="H">Masculino</option>
                                <option value="F">Femenino</option>
                            </select>
                            <div class="invalid-feedback small"></div>
                        </div>
                        <div class="col-md-4">
                            <label for="primera_vez_entidad" class="form-label small">ESTADO</label>
                            <select class="form-select form-select-sm" id="primera_vez_entidad" name="primera_vez_entidad">
                                <option value="TS">Tamaulipas</option>
                                <option value="AS">Aguascalientes</option>
                                <option value="BC">Baja California</option>
                                <option value="BS">Baja California Sur</option>
                                <option value="CC">Campeche</option>
                                <option value="CL">Coahuila</option>
                                <option value="CM">Colima</option>
                                <option value="CS">Chiapas</option>
                                <option value="CH">Chihuahua</option>
                                <option value="DF">Ciudad de México</option>
                                <option value="DG">Durango</option>
                                <option value="GT">Guanajuato</option>
                                <option value="GR">Guerrero</option>
                                <option value="HG">Hidalgo</option>
                                <option value="JC">Jalisco</option>
                                <option value="MC">México</option>
                                <option value="MN">Michoacán</option>
                                <option value="MS">Morelos</option>
                                <option value="NT">Nayarit</option>
                                <option value="NL">Nuevo León</option>
                                <option value="OC">Oaxaca</option>
                                <option value="PL">Puebla</option>
                                <option value="QT">Querétaro</option>
                                <option value="QR">Quintana Roo</option>
                                <option value="SL">San Luis Potosí</option>
                                <option value="SR">Sonora</option>
                                <option value="SP">Sinaloa</option>
                                <option value="TC">Tabasco</option>
                                <option value="TL">Tlaxcala</option>
                                <option value="VZ">Veracruz</option>
                                <option value="YN">Yucatán</option>
                                <option value="ZS">Zacatecas</option>
                            </select>
                            <div class="invalid-feedback small"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Información de Contacto Card -->
    <div class="card mb-3">
        <div class="card-header bg-primary text-white">
            <h5 class="card-title mb-0">Información de Contacto</h5>
        </div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="primera_vez_curp" class="form-label small">CURP</label>
                    <input type="text" class="form-control form-control-sm" id="primera_vez_curp" name="primera_vez_curp" maxlength="18">
                    <div class="invalid-feedback small"></div>
                </div>
                <div class="col-md-3">
                    <label for="primera_vez_celular" class="form-label small">CELULAR</label>
                    <input type="text" class="form-control form-control-sm" id="primera_vez_celular" name="primera_vez_celular" maxlength="10">
                    <div class="invalid-feedback small"></div>
                </div>
                <div class="col-md-3">
                    <label for="primera_vez_email" class="form-label small">EMAIL</label>
                    <input type="email" class="form-control form-control-sm" id="primera_vez_email" name="primera_vez_email">
                    <div class="invalid-feedback small"></div>
                </div>
                <div class="col-md-3">
                    <label for="primera_vez_aspirante_registro_captcha" class="form-label small">CAPTCHA</label>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control captchaInput" id="primera_vez_aspirante_registro_captcha" name="primera_vez_aspirante_registro_captcha" maxlength="5">
                        <canvas class="captchaCanvas" width="100" height="30"></canvas>
                        <button type="button" class="btn btn-secondary btn-sm" onclick="generateCaptcha('formulario_primera_vez_aspirantes_registro')">
                            <i class="bi bi-arrow-clockwise"></i>
                        </button>
                    </div>
                    <div class="invalid-feedback small"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Registrar</button>
            <button type="reset" class="btn btn-secondary">Vaciar</button>
        </div>
    </div>
</form>