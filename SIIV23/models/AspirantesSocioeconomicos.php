<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * AspirantesSocioeconomicos is the model behind the aspirantes_socioeconomicos table.
 */
class AspirantesSocioeconomicos extends Model
{
    public $id;
    public $personal_apellido_paterno;
    public $personal_apellido_materno;
    public $personal_nombre;
    public $personal_fecha_nacimiento;
    public $personal_genero;
    public $personal_curp;
    public $personal_nacionalidad;
    public $personal_telefono;
    public $personal_correo;
    public $personal_tipo_sangre;
    public $emergencia_contacto;
    public $emergencia_direccion;
    public $emergencia_colonia;
    public $emergencia_codigo_postal;
    public $emergencia_estado;
    public $direccion_calle;
    public $direccion_numero;
    public $direccion_codigo_postal;
    public $direccion_colonia;
    public $direccion_estado;
    public $direccion_municipio;
    public $familiar_vive_con;
    public $familiar_personas_casa;
    public $familiar_dependencia;
    public $familiar_tipo_vivienda;
    public $familiar_numero_cuartos;
    public $familiar_dependientes;
    public $ingresos_padre;
    public $ingresos_madre;
    public $ingresos_hermanos;
    public $ingresos_propios;
    public $ingresos_total;
    public $procedencia_estado;
    public $procedencia_municipio;
    public $procedencia_escuela;
    public $procedencia_fecha_egreso;
    public $procedencia_promedio;
    public $padre_vive;
    public $padre_apellido_paterno;
    public $padre_apellido_materno;
    public $padre_nombre;
    public $padre_estudios;
    public $padre_ocupacion;
    public $madre_vive;
    public $madre_apellido_paterno;
    public $madre_apellido_materno;
    public $madre_nombre;
    public $madre_estudios;
    public $madre_ocupacion;
    public $registro_fecha;
    public $actualizacion_fecha;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // Required fields
            [['personal_apellido_paterno', 'personal_apellido_materno', 'personal_nombre', 
              'personal_fecha_nacimiento', 'personal_genero', 'personal_curp', 
              'personal_nacionalidad', 'personal_telefono', 'personal_correo'], 'required'],
            
            // Email validation
            ['personal_correo', 'email'],
            
            // String lengths
            [['personal_apellido_paterno', 'personal_apellido_materno', 'personal_nombre'], 'string', 'max' => 50],
            ['personal_curp', 'string', 'length' => 18],
            ['personal_telefono', 'string', 'length' => 10],
            ['personal_correo', 'string', 'max' => 100],
            ['personal_tipo_sangre', 'string', 'max' => 5],
            
            // Date validation
            [['personal_fecha_nacimiento', 'procedencia_fecha_egreso'], 'date', 'format' => 'php:Y-m-d'],
            
            // Enum validation for gender
            ['personal_genero', 'in', 'range' => ['M', 'F']],
            
            // Numeric fields
            [['ingresos_padre', 'ingresos_madre', 'ingresos_hermanos', 'ingresos_propios', 
              'ingresos_total', 'procedencia_promedio', 'familiar_numero_cuartos'], 'integer'],
            
            // Add more validation rules as needed for other fields
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'personal_apellido_paterno' => 'Apellido Paterno',
            'personal_apellido_materno' => 'Apellido Materno',
            'personal_nombre' => 'Nombre',
            'personal_fecha_nacimiento' => 'Fecha de Nacimiento',
            'personal_genero' => 'Género',
            'personal_curp' => 'CURP',
            'personal_nacionalidad' => 'Nacionalidad',
            'personal_telefono' => 'Teléfono',
            'personal_correo' => 'Correo Electrónico',
            'personal_tipo_sangre' => 'Tipo de Sangre',
            'emergencia_contacto' => 'Contacto de Emergencia',
            'emergencia_direccion' => 'Dirección de Emergencia',
            'emergencia_colonia' => 'Colonia (Emergencia)',
            'emergencia_codigo_postal' => 'Código Postal (Emergencia)',
            'emergencia_estado' => 'Estado (Emergencia)',
            'direccion_calle' => 'Calle',
            'direccion_numero' => 'Número',
            'direccion_codigo_postal' => 'Código Postal',
            'direccion_colonia' => 'Colonia',
            'direccion_estado' => 'Estado',
            'direccion_municipio' => 'Municipio',
            'familiar_vive_con' => 'Vive con',
            'familiar_personas_casa' => 'Personas en casa',
            'familiar_dependencia' => 'Dependencia económica',
            'familiar_tipo_vivienda' => 'Tipo de vivienda',
            'familiar_numero_cuartos' => 'Número de cuartos',
            'familiar_dependientes' => 'Dependientes económicos',
            'ingresos_padre' => 'Ingresos del padre',
            'ingresos_madre' => 'Ingresos de la madre',
            'ingresos_hermanos' => 'Ingresos de hermanos',
            'ingresos_propios' => 'Ingresos propios',
            'ingresos_total' => 'Ingresos totales',
            'procedencia_estado' => 'Estado de procedencia',
            'procedencia_municipio' => 'Municipio de procedencia',
            'procedencia_escuela' => 'Escuela de procedencia',
            'procedencia_fecha_egreso' => 'Fecha de egreso',
            'procedencia_promedio' => 'Promedio',
            'padre_vive' => 'Padre vive',
            'padre_apellido_paterno' => 'Apellido paterno (padre)',
            'padre_apellido_materno' => 'Apellido materno (padre)',
            'padre_nombre' => 'Nombre (padre)',
            'padre_estudios' => 'Estudios (padre)',
            'padre_ocupacion' => 'Ocupación (padre)',
            'madre_vive' => 'Madre vive',
            'madre_apellido_paterno' => 'Apellido paterno (madre)',
            'madre_apellido_materno' => 'Apellido materno (madre)',
            'madre_nombre' => 'Nombre (madre)',
            'madre_estudios' => 'Estudios (madre)',
            'madre_ocupacion' => 'Ocupación (madre)',
            'registro_fecha' => 'Fecha de registro',
            'actualizacion_fecha' => 'Fecha de actualización',
        ];
    }
}