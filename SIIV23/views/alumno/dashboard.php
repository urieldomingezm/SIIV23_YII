<?php
$this->title = 'Dashboard Alumno';
?>

<div class="alumno-dashboard">
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bienvenido, <?= Yii::$app->user->identity->alumno_nombre ?></h5>
                    <p class="card-text">Último acceso: <?= Yii::$app->user->identity->alumno_ultimo_acceso ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Tarjeta de Calificaciones -->
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="bi bi-journal-check me-2"></i>
                        Calificaciones
                    </h5>
                    <!-- Aquí irá el contenido de calificaciones -->
                </div>
            </div>
        </div>

        <!-- Tarjeta de Horario -->
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="bi bi-calendar3 me-2"></i>
                        Horario Actual
                    </h5>
                    <!-- Aquí irá el contenido del horario -->
                </div>
            </div>
        </div>
    </div>
</div>