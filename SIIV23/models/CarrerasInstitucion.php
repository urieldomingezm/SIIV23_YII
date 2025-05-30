<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * CarrerasInstitucion es el modelo que representa la tabla `carreras_institucion`.
 */
class CarrerasInstitucion extends Model
{
    public $carrera_id;
    public $carrera_clave;
    public $carrera_nombre_completo;

    /**
     * @return array las reglas de validación.
     */
    public function rules()
    {
        return [
            [['carrera_id', 'carrera_clave', 'carrera_nombre_completo'], 'required'],
            [['carrera_id'], 'integer'],
            [['carrera_clave'], 'string', 'max' => 10],
            [['carrera_nombre_completo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @return array etiquetas personalizadas para los atributos.
     */
    public function attributeLabels()
    {
        return [
            'carrera_id' => 'ID de Carrera',
            'carrera_clave' => 'Clave de Carrera',
            'carrera_nombre_completo' => 'Nombre Completo de Carrera',
        ];
    }
}