<?php
/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
    <?= Html::jsFile('@web/js/form-validations.js') ?>
    <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl ?>/css/custom-validate.css">
    <style>
        /* Estilo para el botón Back to Top */
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 99;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #343a40;
            color: white;
            border: none;
            outline: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.3);
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .back-to-top:hover {
            background: #495057;
        }
        
        .back-to-top.show {
            opacity: 1;
        }
    </style>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <!-- Topbar siempre visible -->
    <div class="topbar bg-primary text-white fixed-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="topbar-images">
                        <?= Html::img('@web/images/plecaa.png', ['alt' => 'Imagen 1', 'class' => 'topbar-image']) ?>
                        <?= Html::img('@web/images/plecab.png', ['alt' => 'Imagen 2', 'class' => 'topbar-image']) ?>
                        <?= Html::img('@web/images/plecac.png', ['alt' => 'Imagen 3', 'class' => 'topbar-image']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if (!isset($this->params['hideNavbar'])): ?>
        <!-- Navbar simplificado -->
        <?php
        NavBar::begin([
            'brandLabel' => Html::img('@web/images/logo.png', ['alt' => 'Logo', 'style' => 'height: 40px;']),
            'brandUrl' => Yii::$app->homeUrl,
            'options' => ['class' => 'navbar navbar-expand navbar-dark bg-dark fixed-top mt-5'], // Quitamos navbar-expand-lg
            'innerContainerOptions' => ['class' => 'container-fluid'],
            'togglerOptions' => ['class' => 'd-none'] // Oculta el toggler predeterminado
        ]);

        // Botón personalizado para todos los dispositivos
        echo Html::button('<i class="bi bi-list"></i> Menú', [
            'class' => 'btn btn-outline-light ms-auto',
            'type' => 'button',
            'data-bs-toggle' => 'offcanvas',
            'data-bs-target' => '#sidebar',
            'aria-controls' => 'sidebar'
        ]);

        NavBar::end();
        ?>

        <!-- Menú lateral (ahora del lado derecho) -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
            <div class="offcanvas-header bg-dark text-white">
                <h5 class="offcanvas-title" id="sidebarLabel">
                    <i class="bi bi-menu-button-wide"></i> Menú Principal
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
            </div>
            <div class="offcanvas-body p-0">
                <div class="accordion accordion-flush" id="mainMenuAccordion">

                    <!-- Dashboard -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dashboardCollapse">
                                <i class="bi bi-speedometer2 me-2"></i> Dashboard
                            </button>
                        </h2>
                        <div id="dashboardCollapse" class="accordion-collapse collapse" data-bs-parent="#mainMenuAccordion">
                            <div class="accordion-body p-0">
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <i class="bi bi-house-door me-2"></i> Inicio
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <i class="bi bi-graph-up me-2"></i> Estadísticas
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Académico (Nivel 1) -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#academicoCollapse">
                                <i class="bi bi-book me-2"></i> Académico
                            </button>
                        </h2>
                        <div id="academicoCollapse" class="accordion-collapse collapse" data-bs-parent="#mainMenuAccordion">
                            <div class="accordion-body p-0">
                                <div class="accordion" id="academicoSubMenu">

                                    <!-- Programas (Nivel 2) -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#programasCollapse">
                                                <i class="bi bi-journal-bookmark me-2"></i> Programas
                                            </button>
                                        </h2>
                                        <div id="programasCollapse" class="accordion-collapse collapse" data-bs-parent="#academicoSubMenu">
                                            <div class="accordion-body p-0">
                                                <div class="accordion" id="programasSubMenu">

                                                    <!-- Licenciaturas (Nivel 3) -->
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#licenciaturasCollapse">
                                                                <i class="bi bi-mortarboard me-2"></i> Licenciaturas
                                                            </button>
                                                        </h2>
                                                        <div id="licenciaturasCollapse" class="accordion-collapse collapse" data-bs-parent="#programasSubMenu">
                                                            <div class="accordion-body p-0">
                                                                <div class="list-group list-group-flush">
                                                                    <a href="#" class="list-group-item list-group-item-action">
                                                                        <i class="bi bi-check-circle me-2"></i> Administración
                                                                    </a>
                                                                    <a href="#" class="list-group-item list-group-item-action">
                                                                        <i class="bi bi-check-circle me-2"></i> Informática
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Posgrados (Nivel 3) -->
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#posgradosCollapse">
                                                                <i class="bi bi-award me-2"></i> Posgrados
                                                            </button>
                                                        </h2>
                                                        <div id="posgradosCollapse" class="accordion-collapse collapse" data-bs-parent="#programasSubMenu">
                                                            <div class="accordion-body p-0">
                                                                <div class="accordion" id="posgradosSubMenu">

                                                                    <!-- Maestrías (Nivel 4) -->
                                                                    <div class="accordion-item">
                                                                        <h2 class="accordion-header">
                                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#maestriasCollapse">
                                                                                <i class="bi bi-bookmark-star me-2"></i> Maestrías
                                                                            </button>
                                                                        </h2>
                                                                        <div id="maestriasCollapse" class="accordion-collapse collapse" data-bs-parent="#posgradosSubMenu">
                                                                            <div class="accordion-body p-0">
                                                                                <div class="list-group list-group-flush">
                                                                                    <a href="#" class="list-group-item list-group-item-action">
                                                                                        <i class="bi bi-check-square me-2"></i> Educación
                                                                                    </a>
                                                                                    <a href="#" class="list-group-item list-group-item-action">
                                                                                        <i class="bi bi-check-square me-2"></i> Tecnologías
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Doctorados (Nivel 4) -->
                                                                    <div class="accordion-item">
                                                                        <h2 class="accordion-header">
                                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#doctoradosCollapse">
                                                                                <i class="bi bi-stars me-2"></i> Doctorados
                                                                            </button>
                                                                        </h2>
                                                                        <div id="doctoradosCollapse" class="accordion-collapse collapse" data-bs-parent="#posgradosSubMenu">
                                                                            <div class="accordion-body p-0">
                                                                                <div class="list-group list-group-flush">
                                                                                    <a href="#" class="list-group-item list-group-item-action">
                                                                                        <i class="bi bi-check-all me-2"></i> Ciencias
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Calificaciones (Nivel 2) -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#calificacionesCollapse">
                                                <i class="bi bi-clipboard-data me-2"></i> Calificaciones
                                            </button>
                                        </h2>
                                        <div id="calificacionesCollapse" class="accordion-collapse collapse" data-bs-parent="#academicoSubMenu">
                                            <div class="accordion-body p-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <i class="bi bi-journal-text me-2"></i> Registrar
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <i class="bi bi-graph-up me-2"></i> Histórico
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Administración (Nivel 1) -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#adminCollapse">
                                <i class="bi bi-building me-2"></i> Administración
                            </button>
                        </h2>
                        <div id="adminCollapse" class="accordion-collapse collapse" data-bs-parent="#mainMenuAccordion">
                            <div class="accordion-body p-0">
                                <div class="accordion" id="adminSubMenu">

                                    <!-- Usuarios (Nivel 2) -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#usuariosCollapse">
                                                <i class="bi bi-people me-2"></i> Usuarios
                                            </button>
                                        </h2>
                                        <div id="usuariosCollapse" class="accordion-collapse collapse" data-bs-parent="#adminSubMenu">
                                            <div class="accordion-body p-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <i class="bi bi-person-plus me-2"></i> Nuevo Usuario
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <i class="bi bi-person-lines-fill me-2"></i> Administrar
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Configuración (Nivel 2) -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#configCollapse">
                                                <i class="bi bi-gear me-2"></i> Configuración
                                            </button>
                                        </h2>
                                        <div id="configCollapse" class="accordion-collapse collapse" data-bs-parent="#adminSubMenu">
                                            <div class="accordion-body p-0">
                                                <div class="accordion" id="configSubMenu">

                                                    <!-- Sistema (Nivel 3) -->
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sistemaCollapse">
                                                                <i class="bi bi-pc-display me-2"></i> Sistema
                                                            </button>
                                                        </h2>
                                                        <div id="sistemaCollapse" class="accordion-collapse collapse" data-bs-parent="#configSubMenu">
                                                            <div class="accordion-body p-0">
                                                                <div class="list-group list-group-flush">
                                                                    <a href="#" class="list-group-item list-group-item-action">
                                                                        <i class="bi bi-sliders me-2"></i> Parámetros
                                                                    </a>
                                                                    <a href="#" class="list-group-item list-group-item-action">
                                                                        <i class="bi bi-shield-lock me-2"></i> Seguridad
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Reportes (Nivel 1) -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#reportesCollapse">
                                <i class="bi bi-file-earmark-bar-graph me-2"></i> Reportes
                            </button>
                        </h2>
                        <div id="reportesCollapse" class="accordion-collapse collapse" data-bs-parent="#mainMenuAccordion">
                            <div class="accordion-body p-0">
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <i class="bi bi-file-earmark-text me-2"></i> Académicos
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <i class="bi bi-file-earmark-spreadsheet me-2"></i> Administrativos
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ayuda (Nivel 1) -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ayudaCollapse">
                                <i class="bi bi-question-circle me-2"></i> Ayuda
                            </button>
                        </h2>
                        <div id="ayudaCollapse" class="accordion-collapse collapse" data-bs-parent="#mainMenuAccordion">
                            <div class="accordion-body p-0">
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <i class="bi bi-info-circle me-2"></i> Acerca del sistema
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <i class="bi bi-headset me-2"></i> Soporte técnico
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- Contenido principal -->
    <main id="main" class="flex-shrink-0" role="main">
        <div class="container <?= isset($this->params['isLoginPage']) ? 'mt-5 pt-5' : 'mt-4' ?>">
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <!-- Footer -->
    <footer id="footer" class="mt-auto py-3 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="mb-0">&copy; Instituto Tecnológico de Ciudad Victoria <?= date('Y') ?></p>
                    <small>Sistema Integral de Gestión Académica v2.0</small>
                </div>
            </div>
        </div>
    </footer>

    <!-- Botón Back to Top -->
    <button onclick="topFunction()" id="backToTopBtn" class="back-to-top" title="Volver arriba">
        <i class="bi bi-arrow-up"></i>
    </button>

    <script>
        // Mostrar u ocultar el botón cuando el usuario se desplaza
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            var backToTopBtn = document.getElementById("backToTopBtn");
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                backToTopBtn.classList.add("show");
            } else {
                backToTopBtn.classList.remove("show");
            }
        }

        // Cuando el usuario hace clic en el botón, sube al principio del documento
        function topFunction() {
            document.body.scrollTop = 0; // Para Safari
            document.documentElement.scrollTop = 0; // Para Chrome, Firefox, IE y Opera
        }
    </script>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>