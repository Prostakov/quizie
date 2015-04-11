<?php


if (YII_ENV_PROD) {
    $url = parse_url(getenv("HEROKU_POSTGRESQL_BLUE_URL"));
    $dsn = 'pgsql:host='.$url['host'].';port='.$url['port'].';dbname='.substr($url["path"], 1);
    $username = $url["user"];
    $password = $url["pass"];
} else {
    $dsn = 'mysql:host=localhost;dbname=yii2_quizie';
    $username = 'root';
    $password = '1234';
}

return [
    'class' => 'yii\db\Connection',
    'dsn' => $dsn,
    'username' => $username,
    'password' => $password,
    'charset' => 'utf8',
];
