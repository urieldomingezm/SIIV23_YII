<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Personal es el modelo que representa la tabla `personal`.
 */
class Personal extends Model
{
    public $personal_id;
    public $personal_usuario;
    public $personal_password;
    public $personal_rol;
    public $personal_activo;
    public $personal_ultimo_acceso;
    public $personal_fecha_registro;

    /**
     * @return array las reglas de validación.
     */
    public function rules()
    {
        return [
            [['personal_usuario', 'personal_password', 'personal_rol'], 'required'],
            [['personal_activo'], 'boolean'],
            [['personal_ultimo_acceso', 'personal_fecha_registro'], 'safe'],
            [['personal_usuario'], 'string', 'max' => 255],
            [['personal_password'], 'string', 'max' => 64],
            [['personal_rol'], 'in', 'range' => ['admin', 'user']],
        ];
    }

    /**
     * @return array etiquetas personalizadas para los atributos.
     */
    public function attributeLabels()
    {
        return [
            'personal_id' => 'ID',
            'personal_usuario' => 'Usuario',
            'personal_password' => 'Contraseña',
            'personal_rol' => 'Rol',
            'personal_activo' => 'Activo',
            'personal_ultimo_acceso' => 'Último Acceso',
            'personal_fecha_registro' => 'Fecha de Registro',
        ];
    }
}