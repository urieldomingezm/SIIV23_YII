<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=db;dbname=instituto_tecnologico',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',

    // Habilitar cache de esquema para mejor rendimiento
    'enableSchemaCache' => true,
    'schemaCacheDuration' => 3600,
    'schemaCache' => 'cache',
];
