<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Alumnos es el modelo que representa la tabla `alumnos`.
 */
class Alumnos extends Model
{
    public $alumno_id;
    public $alumno_numero_control;
    public $alumno_password;
    public $alumno_rol;
    public $alumno_ultimo_acceso;
    public $alumno_fecha_registro;

    /**
     * @return array las reglas de validación.
     */
    public function rules()
    {
        return [
            [['alumno_numero_control', 'alumno_password', 'alumno_rol'], 'required'],
            [['alumno_numero_control'], 'string', 'max' => 20],
            [['alumno_password'], 'string', 'max' => 255],
            [['alumno_rol'], 'in', 'range' => ['estudiante', 'administrador']],
            [['alumno_ultimo_acceso', 'alumno_fecha_registro'], 'safe'],
        ];
    }

    /**
     * @return array etiquetas personalizadas para los atributos.
     */
    public function attributeLabels()
    {
        return [
            'alumno_id' => 'ID del Alumno',
            'alumno_numero_control' => 'Número de Control',
            'alumno_password' => 'Contraseña',
            'alumno_rol' => 'Rol',
            'alumno_ultimo_acceso' => 'Último Acceso',
            'alumno_fecha_registro' => 'Fecha de Registro',
        ];
    }

    /**
     * Método para obtener el alumno por su número de control.
     * @param string $numeroControl
     * @return Alumnos|null
     */
    public static function findByNumeroControl($numeroControl)
    {
        // Implementar la lógica para buscar un alumno por su número de control
    }
}