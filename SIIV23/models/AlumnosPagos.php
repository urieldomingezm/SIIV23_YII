<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * AlumnosPagos es el modelo que representa la tabla `alumnos_pagos`.
 */
class AlumnosPagos extends Model
{
    public $pagos_id;
    public $pagos_alumno_id;
    public $pagos_numero_control;
    public $pagos_nombre;
    public $pagos_apellido;
    public $pagos_carrera;
    public $pagos_semestre;
    public $pagos_periodo;
    public $pagos_realizado;
    public $pagos_descuento;
    public $pagos_total;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['pagos_alumno_id', 'pagos_numero_control', 'pagos_nombre', 'pagos_apellido', 'pagos_carrera', 'pagos_semestre', 'pagos_periodo', 'pagos_realizado', 'pagos_descuento', 'pagos_total'], 'required'],
            [['pagos_realizado', 'pagos_descuento', 'pagos_total'], 'number'],
            [['pagos_numero_control'], 'string', 'max' => 20],
            [['pagos_nombre', 'pagos_apellido', 'pagos_carrera'], 'string', 'max' => 100],
            [['pagos_semestre', 'pagos_periodo'], 'string', 'max' => 10],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'pagos_id' => 'ID de Pago',
            'pagos_alumno_id' => 'ID del Alumno',
            'pagos_numero_control' => 'Número de Control',
            'pagos_nombre' => 'Nombre',
            'pagos_apellido' => 'Apellido',
            'pagos_carrera' => 'Carrera',
            'pagos_semestre' => 'Semestre',
            'pagos_periodo' => 'Periodo',
            'pagos_realizado' => 'Pago Realizado',
            'pagos_descuento' => 'Descuento',
            'pagos_total' => 'Total',
        ];
    }
}