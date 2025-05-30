<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * AlumnosInfoAcademica es el modelo que representa la tabla `alumnos_info_academica`.
 */
class AlumnosInfoAcademica extends Model
{
    public $academica_id;
    public $academica_alumno_id;
    public $academica_numero_control;
    public $academica_carrera_id;
    public $academica_semestre;
    public $academica_periodo;
    public $academica_promedio;

    /**
     * @return array las reglas de validación.
     */
    public function rules()
    {
        return [
            [['academica_alumno_id', 'academica_numero_control', 'academica_carrera_id', 'academica_semestre', 'academica_periodo'], 'required'],
            [['academica_promedio'], 'number'],
            [['academica_alumno_id', 'academica_numero_control', 'academica_carrera_id', 'academica_semestre'], 'integer'],
            [['academica_periodo'], 'string', 'max' => 10],
        ];
    }

    /**
     * @return array etiquetas personalizadas para los atributos.
     */
    public function attributeLabels()
    {
        return [
            'academica_id' => 'ID',
            'academica_alumno_id' => 'ID Alumno',
            'academica_numero_control' => 'Número de Control',
            'academica_carrera_id' => 'ID Carrera',
            'academica_semestre' => 'Semestre',
            'academica_periodo' => 'Periodo',
            'academica_promedio' => 'Promedio',
        ];
    }
}