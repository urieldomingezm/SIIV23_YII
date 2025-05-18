<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 text-center mb-4">
            <h2>INICIO DE SESIÓN GENERAL</h2>
        </div>
        <div class="col-md-10"> <!-- Cambiado de col-md-9 a col-md-10 para hacerlo más ancho -->
            <!-- Pestañas fuera de la tarjeta para parecerse más a la imagen -->
            <ul class="nav nav-pills justify-content-center mb-4" id="loginTabs" role="tablist"> <!-- Aumentado mb-3 a mb-4 -->
                <li class="nav-item" role="presentation">
                    <button class="nav-link custom-tab active" id="aspirantes-tab" data-bs-toggle="tab" data-bs-target="#aspirantes" type="button" role="tab" aria-controls="aspirantes" aria-selected="true" style="min-width: 120px;">ASPIRANTES</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link custom-tab" id="alumnos-tab" data-bs-toggle="tab" data-bs-target="#alumnos" type="button" role="tab" aria-controls="alumnos" aria-selected="false" style="min-width: 120px;">ALUMNOS</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link custom-tab" id="personal-tab" data-bs-toggle="tab" data-bs-target="#personal" type="button" role="tab" aria-controls="personal" aria-selected="false" style="min-width: 120px;">PERSONAL</button>
                </li>
            </ul>

            <div class="card custom-card"> <!-- Añadida clase custom-card -->
                <div class="card-body p-4"> <!-- Añadido p-4 para padding interno -->
                    <div class="tab-content" id="loginTabsContent">
                        <div class="tab-pane fade show active" id="aspirantes" role="tabpanel" aria-labelledby="aspirantes-tab">
                            <!-- Contenido para Aspirantes con Acordeones -->
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
                        <div class="tab-pane fade" id="alumnos" role="tabpanel" aria-labelledby="alumnos-tab">
                            <!-- Contenido para Alumnos (basado en la imagen) -->
                            <div class="card-title custom-card-title">Alumno</div> <!-- Título "Alumno" -->
                            <div class="accordion-body">
                                <?php echo $this->render('login_secciones/seccion_alumno'); ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                            <!-- Contenido para Personal Académico -->
                            <div class="card-title custom-card-title">Personal Académico</div> <!-- Título "Personal Académico" -->
                            <div class="accordion-body">
                                <?php echo $this->render('login_secciones/seccion_personal'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>