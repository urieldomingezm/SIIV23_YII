<?php
use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
?>

<div class="personal-login">
    <form id="formulario_personal" method="POST" class="needs-validation" novalidate>
        <?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->csrfToken) ?>
        <?= Html::hiddenInput('form_type', 'personal_login') ?>

        <div class="row g-3">
            <!-- Usuario -->
            <div class="col-md-6">
                <label class="form-label" for="personal_usuario">Usuario</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-person"></i>
                    </span>
                    <input type="text" 
                           class="form-control" 
                           id="personal_usuario"
                           name="personal_usuario"
                           data-validate-field="usuario"
                           placeholder="Ingresa tu usuario">
                </div>
                <div class="error-container mt-1" id="error_personal_usuario"></div>
            </div>

            <!-- Contraseña -->
            <div class="col-md-6">
                <label class="form-label" for="personal_password">Contraseña</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-lock"></i>
                    </span>
                    <input type="password" 
                           class="form-control" 
                           id="personal_password"
                           name="personal_password"
                           data-validate-field="password"
                           placeholder="Ingresa tu contraseña">
                    <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('personal_password', this)">
                        <i class="bi bi-eye-slash"></i>
                    </button>
                </div>
                <div class="error-container mt-1" id="error_personal_password"></div>
            </div>

            <!-- Captcha -->
            <div class="col-12">
                <label class="form-label" for="personal_captcha">Verificación de Seguridad</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-shield-lock"></i>
                    </span>
                    <input type="text" 
                           class="form-control" 
                           id="personal_captcha"
                           name="personal_captcha"
                           data-validate-field="captcha"
                           placeholder="Ingresa el código que ves en la imagen">
                    <canvas class="captcha-canvas" width="150" height="40"></canvas>
                    <button class="btn btn-outline-secondary" type="button" onclick="refreshCaptcha(this)">
                        <i class="bi bi-arrow-clockwise"></i>
                    </button>
                </div>
                <div class="error-container mt-1" id="error_personal_captcha"></div>
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