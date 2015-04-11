<?php

return [
    // Local:
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2_quizie',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',

    // Production on heroku:
//    'class' => 'yii\db\Connection',
//    'dsn' => 'pgsql:host=localhost;port=5432;dbname=mydatabase',
//    'username' => 'root',
//    'password' => '',
//    'charset' => 'utf8',

];
