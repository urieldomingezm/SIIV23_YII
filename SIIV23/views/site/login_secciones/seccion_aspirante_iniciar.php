<form id="formulario_iniciar_session_aspirante" method="POST" class="rounded">
    <input type="hidden" name="form_type" value="aspirante_login">

    <div class="card mb-3">
        <div class="card-header bg-primary text-white">
            <h5 class="card-title mb-0">Iniciar Sesión Aspirante</h5>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <!-- CURP -->
                <div class="col-md-4">
                    <div class="mb-2">
                        <label for="iniciar_session_aspirante_curp" class="form-label">CURP</label>
                        <input type="text" class="form-control form-control-sm" id="iniciar_session_aspirante_curp" name="iniciar_session_aspirante_curp" maxlength="18">
                        <div class="invalid-feedback" style="display: block; font-size: 0.8rem;"></div>
                    </div>
                </div>

                <!-- Contraseña (NIP) -->
                <div class="col-md-4">
                    <div class="mb-2">
                        <label for="iniciar_session_aspirante_password" class="form-label">NIP</label>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 position-relative">
                                <input type="password" class="form-control form-control-sm passwordInput" id="iniciar_session_aspirante_password" name="iniciar_session_aspirante_password" maxlength="4">
                                <div class="invalid-feedback" style="display: block; font-size: 0.8rem;"></div>
                            </div>
                            <button type="button" class="btn btn-secondary btn-sm ms-2 togglePassword" onclick="togglePasswordVisibility('iniciar_session_aspirante_password', this)">
                                <i class="bi bi-eye-slash"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- CAPTCHA -->
                <div class="col-md-4">
                    <div class="mb-2">
                        <label for="iniciar_session_aspirante_captcha" class="form-label">CAPTCHA</label>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 position-relative">
                                <input type="text" class="form-control form-control-sm captchaInput" id="iniciar_session_aspirante_captcha" name="iniciar_session_aspirante_captcha" maxlength="5">
                                <div class="invalid-feedback" style="display: block; font-size: 0.8rem;"></div>
                            </div>
                            <canvas class="captchaCanvas" width="128" height="44" class="ms-2"></canvas>
                            <button type="button" class="btn btn-secondary btn-sm me-1 ms-2" onclick="generateCaptcha('formulario_iniciar_session_aspirante')">
                                <i class="bi bi-arrow-clockwise"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-3">
        <button type="submit" class="btn btn-primary btn-sm">Iniciar Sesión</button>
    </div>
</form>