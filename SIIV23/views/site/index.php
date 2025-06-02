<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Inicio de Sesión';
?>

<div class="site-index">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center mb-4">
                <h2 class="text-uppercase fw-bold">Inicio de Sesión General</h2>
            </div>
            <div class="col-lg-10">
                <!-- Tabs con bordes y mejor estilizado -->
                <ul class="nav nav-pills nav-justified mb-4" id="loginTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active border rounded-top px-4 py-3 shadow-sm" 
                                id="aspirantes-tab" 
                                data-bs-toggle="tab" 
                                data-bs-target="#aspirantes" 
                                type="button" 
                                role="tab" 
                                aria-controls="aspirantes" 
                                aria-selected="true">
                            <i class="bi bi-person-plus-fill me-2"></i>
                            Aspirantes
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link border rounded-top px-4 py-3 shadow-sm" 
                                id="alumnos-tab" 
                                data-bs-toggle="tab" 
                                data-bs-target="#alumnos" 
                                type="button" 
                                role="tab" 
                                aria-controls="alumnos" 
                                aria-selected="false">
                            <i class="bi bi-mortarboard-fill me-2"></i>
                            Alumnos
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link border rounded-top px-4 py-3 shadow-sm" 
                                id="personal-tab" 
                                data-bs-toggle="tab" 
                                data-bs-target="#personal" 
                                type="button" 
                                role="tab" 
                                aria-controls="personal" 
                                aria-selected="false">
                            <i class="bi bi-person-badge-fill me-2"></i>
                            Personal
                        </button>
                    </li>
                </ul>

                <!-- Card -->
                <div class="card shadow rounded">
                    <div class="card-body p-4">
                        <div class="tab-content" id="loginTabsContent">
                            <!-- Aspirantes Tab -->
                            <div class="tab-pane fade show active" id="aspirantes" role="tabpanel" aria-labelledby="aspirantes-tab">
                                <div class="accordion" id="aspirantesAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingNuevoIngreso">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNuevoIngreso" aria-expanded="false" aria-controls="collapseNuevoIngreso">
                                                Nuevo Ingreso
                                            </button>
                                        </h2>
                                        <div id="collapseNuevoIngreso" class="accordion-collapse collapse" aria-labelledby="headingNuevoIngreso" data-bs-parent="#aspirantesAccordion">
                                            <div class="accordion-body">
                                                <?php echo $this->render('login_secciones/seccion_aspirante_nuevo_registro'); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingIniciarSesionAspirante">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIniciarSesionAspirante" aria-expanded="false" aria-controls="collapseIniciarSesionAspirante">
                                                Iniciar Sesión de Aspirante
                                            </button>
                                        </h2>
                                        <div id="collapseIniciarSesionAspirante" class="accordion-collapse collapse" aria-labelledby="headingIniciarSesionAspirante" data-bs-parent="#aspirantesAccordion">
                                            <div class="accordion-body">
                                                <?php echo $this->render('login_secciones/seccion_aspirante_iniciar'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Alumnos Tab -->
                            <div class="tab-pane fade" id="alumnos" role="tabpanel" aria-labelledby="alumnos-tab">
                                <h5 class="text-primary fw-semibold mb-3">Ingreso de Alumnos</h5>
                                <?php echo $this->render('login_secciones/seccion_alumno'); ?>
                            </div>

                            <!-- Personal Tab -->
                            <div class="tab-pane fade" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                                <h5 class="text-primary fw-semibold mb-3">Ingreso del Personal Académico</h5>
                                <?php echo $this->render('login_secciones/seccion_personal'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </div>
        </div>
    </div>
</div>

<!-- Modal de Mensajes -->
<div class="modal fade" id="mensajeModal" tabindex="-1" aria-labelledby="mensajeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mensajeModalLabel">
                    <i class="bi bi-info-circle me-2"></i>
                    <span id="modalTitulo">Mensaje del Sistema</span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="modalMensaje" class="alert mb-0">
                    <!-- El mensaje se insertará aquí -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Agregar estos estilos en tu archivo CSS o en un bloque de estilo -->
<style>
.nav-pills .nav-link {
    background-color: #f8f9fa;
    color: #6c757d;
    margin: 0 2px;
    transition: all 0.3s ease;
}

.nav-pills .nav-link:hover {
    background-color: #e9ecef;
    transform: translateY(-2px);
}

.nav-pills .nav-link.active {
    background-color: #fff;
    color: #0d6efd;
    border-bottom: none !important;
    transform: translateY(-2px);
}

.nav-pills .nav-link.active:after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    right: 0;
    height: 2px;
    background-color: #fff;
}
</style>
