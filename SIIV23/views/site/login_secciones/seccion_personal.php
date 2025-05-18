<form id="formulario_personal" method="POST" class="rounded">
                <input type="hidden" name="form_type" value="personal_login">
                
                <div class="row g-2">
                    <!-- Usuario -->
                    <div class="col-md-4">
                        <div class="mb-2">
                            <label for="personal_usuario" class="form-label">USUARIO</label>
                            <input type="text" class="form-control form-control-sm" id="personal_usuario" maxlength="20" name="personal_usuario">
                            <div class="invalid-feedback" style="display: block; font-size: 0.8rem;"></div>
                        </div>
                    </div>

                    <!-- Contraseña -->
                    <div class="col-md-4">
                        <div class="mb-2">
                            <label for="personal_password" class="form-label">CONTRASEÑA</label>
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 position-relative">
                                    <input type="password" class="form-control form-control-sm passwordInput" id="personal_password" name="personal_password">
                                    <div class="invalid-feedback" style="display: block; font-size: 0.8rem;"></div>
                                </div>
                                <button type="button" class="btn btn-secondary btn-sm ms-2 togglePassword" onclick="togglePasswordVisibility('personal_password', this)">
                                    <i class="bi bi-eye-slash"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- CAPTCHA -->
                    <div class="col-md-4">
                        <div class="mb-2">
                            <label for="personal_captcha" class="form-label">CAPTCHA</label>
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 position-relative">
                                    <input type="text" class="form-control form-control-sm captchaInput" id="personal_captcha" name="personal_captcha" maxlength="5">
                                    <div class="invalid-feedback" style="display: block; font-size: 0.8rem;"></div>
                                </div>
                                <canvas class="captchaCanvas" width="128" height="44" class="ms-2"></canvas>
                                <button type="button" class="btn btn-secondary btn-sm me-1 ms-2" onclick="generateCaptcha('formulario_personal')">
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