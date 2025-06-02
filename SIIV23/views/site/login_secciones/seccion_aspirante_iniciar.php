<?php
use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
?>

<div class="aspirante-login">
    <form id="formulario_iniciar_session_aspirante" method="POST" class="needs-validation" novalidate>
        <?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->csrfToken) ?>
        <?= Html::hiddenInput('form_type', 'aspirante_login') ?>

        <div class="row g-3">
            <!-- CURP -->
            <div class="col-md-6">
                <label class="form-label" for="iniciar_session_aspirante_curp">CURP</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-person"></i>
                    </span>
                    <input type="text" 
                           class="form-control" 
                           id="iniciar_session_aspirante_curp" 
                           name="iniciar_session_aspirante_curp" 
                           maxlength="18"
                           data-validate-field="curp"
                           placeholder="Ingresa tu CURP"
                           maxlength="18">
                </div>
                <div class="error-container mt-1" id="error_aspirante_curp"></div>
            </div>

            <!-- NIP -->
            <div class="col-md-6">
                <label class="form-label" for="iniciar_session_aspirante_password">NIP</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-lock"></i>
                    </span>
                    <input type="password" 
                           class="form-control" 
                           id="iniciar_session_aspirante_password" 
                           name="iniciar_session_aspirante_password" 
                           maxlength="4"
                           data-validate-field="password"
                           placeholder="Ingresa tu NIP">
                    <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('iniciar_session_aspirante_password', this)">
                        <i class="bi bi-eye-slash"></i>
                    </button>
                </div>
                <div class="error-container mt-1" id="error_aspirante_password"></div>
            </div>

            <!-- Captcha -->
            <div class="col-12">
                <label class="form-label" for="iniciar_session_aspirante_captcha">Verificación de Seguridad</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-shield-lock"></i>
                    </span>
                    <input type="text" 
                           class="form-control" 
                           id="iniciar_session_aspirante_captcha" 
                           name="iniciar_session_aspirante_captcha"
                           data-validate-field="captcha"
                           placeholder="Ingresa el código que ves en la imagen"
                           maxlength="5">
                    <canvas class="captcha-canvas" width="150" height="40"></canvas>
                    <button class="btn btn-outline-secondary" type="button" onclick="refreshCaptcha(this)">
                        <i class="bi bi-arrow-clockwise"></i>
                    </button>
                </div>
                <div class="error-container mt-1" id="error_aspirante_captcha"></div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-box-arrow-in-right me-2"></i>Iniciar Sesión
                </button>
            </div>
        </div>
    </form>
</div>