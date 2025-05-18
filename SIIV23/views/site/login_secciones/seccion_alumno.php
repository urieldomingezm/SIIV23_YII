<form id="formulario_alumno" method="POST" class="rounded">
    <input type="hidden" name="form_type" value="alumno_login">

    <div class="row g-2">
        <!-- Número de Control -->
        <div class="col-md-4">
            <div class="mb-2">
                <label for="alumno_numero_control" class="form-label">NUMERO DE CONTROL</label>
                <input type="text" class="form-control form-control-sm" id="alumno_numero_control" name="alumno_numero_control">
                <div class="invalid-feedback" style="display: block; font-size: 0.8rem;"></div>
            </div>
        </div>

        <!-- NIP -->
        <div class="col-md-4">
            <div class="mb-2">
                <label for="alumno_password" class="form-label">NIP</label>
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1 position-relative">
                        <input type="password" class="form-control form-control-sm passwordInput" id="alumno_password" name="alumno_password" maxlength="4">
                        <div class="invalid-feedback" style="display: block; font-size: 0.8rem;"></div>
                    </div>
                    <button type="button" class="btn btn-secondary btn-sm ms-2 togglePassword" onclick="togglePasswordVisibility('alumno_password', this)">
                        <i class="bi bi-eye-slash"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- CAPTCHA -->
        <div class="col-md-4">
            <div class="mb-2">
                <label for="alumno_captcha" class="form-label">CAPTCHA</label>
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1 position-relative">
                        <input type="text" class="form-control form-control-sm captchaInput" id="alumno_captcha" name="alumno_captcha" maxlength="5">
                        <div class="invalid-feedback" style="display: block; font-size: 0.8rem;"></div>
                    </div>
                    <canvas class="captchaCanvas" width="128" height="44" class="ms-2"></canvas>
                    <button type="button" class="btn btn-secondary btn-sm me-1 ms-2" onclick="generateCaptcha('formulario_alumno')">
                        <i class="bi bi-arrow-clockwise"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-3">
        <button type="submit" class="btn btn-primary btn-sm">Iniciar Sesión</button>
    </div>
</form>