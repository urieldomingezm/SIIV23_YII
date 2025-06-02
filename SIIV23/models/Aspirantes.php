<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * Aspirantes is the model behind the aspirantes table.
 */
class Aspirantes extends ActiveRecord implements IdentityInterface
{
    public $aspirante_id;
    public $aspirante_apellido_paterno;
    public $aspirante_apellido_materno;
    public $aspirante_nombre;
    public $aspirante_fecha_nacimiento;
    public $aspirante_sexo;
    public $aspirante_curp;
    public $aspirante_celular;
    public $aspirante_email;
    public $aspirante_nip;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['aspirante_apellido_paterno', 'aspirante_apellido_materno', 'aspirante_nombre', 'aspirante_fecha_nacimiento', 'aspirante_sexo', 'aspirante_curp', 'aspirante_celular', 'aspirante_email', 'aspirante_nip'], 'required'],
            ['aspirante_email', 'email'],
            ['aspirante_curp', 'string', 'length' => 18],
            ['aspirante_celular', 'string', 'length' => 10],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'aspirante_id' => 'ID',
            'aspirante_apellido_paterno' => 'Apellido Paterno',
            'aspirante_apellido_materno' => 'Apellido Materno',
            'aspirante_nombre' => 'Nombre',
            'aspirante_fecha_nacimiento' => 'Fecha de Nacimiento',
            'aspirante_sexo' => 'Sexo',
            'aspirante_curp' => 'CURP',
            'aspirante_celular' => 'Celular',
            'aspirante_email' => 'Email',
            'aspirante_nip' => 'NIP',
        ];
    }

    public static function tableName()
    {
        return 'aspirantes';
    }

    /**
     * Métodos requeridos por IdentityInterface
     */
    public static function findIdentity($id)
    {
        return static::findOne(['aspirante_id' => $id]);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return null;
    }

    public function getId()
    {
        return $this->aspirante_id;
    }

    public function getAuthKey()
    {
        return null;
    }

    public function validateAuthKey($authKey)
    {
        return true;
    }

    /**
     * Valida el login del aspirante
     */
    public static function login($curp, $nip)
    {
        $aspirante = static::findOne(['aspirante_curp' => $curp]);
        if ($aspirante && $aspirante->validateNip($nip)) {
            return $aspirante;
        }
        return null;
    }

    /**
     * Valida el NIP del aspirante
     */
    public function validateNip($nip)
    {
        return Yii::$app->security->validatePassword($nip, $this->aspirante_nip);
    }
}