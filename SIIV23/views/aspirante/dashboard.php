<?php
namespace app\modules\personal;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\personal\controllers';

    public function init()
    {
        parent::init();
    }
}
use yii\helpers\Html;

$this->title = 'Dashboard de Aspirante';
?>

<div class="aspirante-dashboard">
    <div class="container py-4">
        <h1><?= Html::encode($this->title) ?></h1>
        
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Datos Personales</h5>
                        <p>Nombre: <?= Html::encode($model->aspirante_nombre) ?></p>
                        <p>CURP: <?= Html::encode($model->aspirante_curp) ?></p>
                        <p>Email: <?= Html::encode($model->aspirante_email) ?></p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Proceso de Admisión</h5>
                        <!-- Agregar contenido relevante -->
                        <?= Html::a('Ver proceso', ['proceso/index'], ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Documentación</h5>
                        <!-- Agregar contenido relevante -->
                        <?= Html::a('Subir documentos', ['documentos/index'], ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>