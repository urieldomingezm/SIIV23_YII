<div class="registration-form py-4">
    <form id="formulario_primera_vez_aspirantes_registro" class="needs-validation" method="POST" novalidate>
        <input type="hidden" name="form_type" value="aspirante_registro">

        <!-- Stepper de progreso -->
        <div class="progress mb-4" style="height: 3px;">
            <div class="progress-bar" role="progressbar" style="width: 0%"></div>
        </div>

        <div class="row g-4">
            <!-- Datos Personales Card -->
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-header bg-primary bg-gradient text-white py-3">
                        <h5 class="card-title mb-0">
                            <i class="bi bi-person-circle me-2"></i>
                            Datos Personales
                        </h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="primera_vez_apellido_paterno" 
                                           name="primera_vez_apellido_paterno" placeholder="Apellido Paterno" required>
                                    <label for="primera_vez_apellido_paterno">Apellido Paterno</label>
                                    <div class="invalid-feedback">
                                        Por favor ingresa tu apellido paterno
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="primera_vez_apellido_materno" 
                                           name="primera_vez_apellido_materno" placeholder="Apellido Materno" required>
                                    <label for="primera_vez_apellido_materno">Apellido Materno</label>
                                    <div class="invalid-feedback">
                                        Por favor ingresa tu apellido materno
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="primera_vez_nombre" 
                                           name="primera_vez_nombre" placeholder="Nombre(s)" required>
                                    <label for="primera_vez_nombre">Nombre(s)</label>
                                    <div class="invalid-feedback">
                                        Por favor ingresa tu(s) nombre(s)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Información Adicional Card -->
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-header bg-primary bg-gradient text-white py-3">
                        <h5 class="card-title mb-0">
                            <i class="bi bi-info-circle me-2"></i>
                            Información Adicional
                        </h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="primera_vez_fecha_nacimiento" 
                                           name="primera_vez_fecha_nacimiento" value="2003-01-01" required>
                                    <label for="primera_vez_fecha_nacimiento">Fecha de Nacimiento</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <select class="form-select" id="primera_vez_sexo" name="primera_vez_sexo" required>
                                        <option value="" disabled selected>Selecciona</option>
                                        <option value="H">Masculino</option>
                                        <option value="F">Femenino</option>
                                    </select>
                                    <label for="primera_vez_sexo">Sexo</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <select class="form-select" id="primera_vez_entidad" name="primera_vez_entidad" required>
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
                                    <label for="primera_vez_entidad">Estado</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Información de Contacto Card -->
        <div class="card border-0 shadow-sm mt-4">
            <div class="card-header bg-primary bg-gradient text-white py-3">
                <h5 class="card-title mb-0">
                    <i class="bi bi-envelope me-2"></i>
                    Información de Contacto
                </h5>
            </div>
            <div class="card-body p-4">
                <div class="row g-3">
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="primera_vez_curp" 
                                   name="primera_vez_curp" maxlength="18" required>
                            <label for="primera_vez_curp">CURP</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="tel" class="form-control" id="primera_vez_celular" 
                                   name="primera_vez_celular" maxlength="10" required>
                            <label for="primera_vez_celular">Celular</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="primera_vez_email" 
                                   name="primera_vez_email" required>
                            <label for="primera_vez_email">Email</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label small">CAPTCHA</label>
                        <div class="input-group">
                            <input type="text" class="form-control captchaInput" 
                                   id="primera_vez_aspirante_registro_captcha" 
                                   name="primera_vez_aspirante_registro_captcha" maxlength="5" required>
                            <canvas class="captchaCanvas" width="100" height="38"></canvas>
                            <button type="button" class="btn btn-outline-secondary" 
                                    onclick="generateCaptcha('formulario_primera_vez_aspirantes_registro')">
                                <i class="bi bi-arrow-clockwise"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary btn-lg px-5">
                <i class="bi bi-check-circle me-2"></i>
                Registrar
            </button>
            <button type="reset" class="btn btn-outline-secondary btn-lg px-5 ms-2">
                <i class="bi bi-x-circle me-2"></i>
                Limpiar
            </button>
        </div>
    </form>
</div>

<style>
.card {
    transition: transform 0.2s;
}
.card:hover {
    transform: translateY(-5px);
}
.form-floating > label {
    font-size: 0.85rem;
}
.card-header {
    border-bottom: 0;
}
.btn-lg {
    border-radius: 30px;
}
</style>

<script>
// Validación del formulario
(function () {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
})()
</script>