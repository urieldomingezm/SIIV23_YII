<?php

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
?>

<div class="alumno-login">
    <form id="formulario_alumno" method="POST" class="needs-validation" novalidate>
        <?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->csrfToken) ?>
        <?= Html::hiddenInput('form_type', 'alumno_login') ?>

        <div class="row g-3">
            <!-- Número de Control -->
            <div class="col-md-6">
                <label class="form-label" for="alumno_numero_control">Número de Control</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-person"></i>
                    </span>
                    <input type="text"
                        class="form-control"
                        id="alumno_numero_control"
                        name="alumno_numero_control"
                        data-validate-field="numero_control"
                        placeholder="Ingresa tu número de control"
                        >
                </div>
                <div class="error-container mt-1" id="error_alumno_numero_control"></div>
            </div>

            <!-- NIP -->
            <div class="col-md-6">
                <label class="form-label" for="alumno_password">NIP</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-lock"></i>
                    </span>
                    <input type="password"
                        class="form-control"
                        id="alumno_password"
                        name="alumno_password"
                        data-validate-field="password"
                        placeholder="Ingresa tu NIP"
                        maxlength="4">
                    <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('alumno_password', this)">
                        <i class="bi bi-eye-slash"></i>
                    </button>
                </div>
                <div class="error-container mt-1" id="error_alumno_password"></div>
            </div>

            <!-- Captcha -->
            <div class="col-12">
                <label class="form-label" for="alumno_captcha">Verificación de Seguridad</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-shield-lock"></i>
                    </span>
                    <input type="text"
                        class="form-control"
                        id="alumno_captcha"
                        name="alumno_captcha"
                        data-validate-field="captcha"
                        placeholder="Ingresa el código que ves en la imagen"
                        maxlength="5">
                    <canvas class="captcha-canvas" width="150" height="40"></canvas>
                    <button class="btn btn-outline-secondary" type="button" onclick="refreshCaptcha(this)">
                        <i class="bi bi-arrow-clockwise"></i>
                    </button>
                </div>
                <div class="error-container mt-1" id="error_alumno_captcha"></div>
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