<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'ov27GUNda1j_4cA4NxeHHzyfNKwP4sII',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
//        'urlManager' => [
//            'enablePrettyUrl' => 'true',
//            'showScriptName' => 'false',
//            'enableStrictParsing' => 'true',
//            'scriptUrl' => '',
//            'rules' => [
//                '' => 'site/index',
//                'about' => 'site/about',
//                'contact' => 'site/contact',
//                'logout' => 'site/logout',
//                'signup' => 'site/signup',
//                'login' => 'site/login',
//                'request-password-reset' => 'site/request-password-reset',
//                'quizzes' => 'quiz/index',
//                'quizzes/create' => 'quiz/create',
//                'quiz/<id:\d+>' => 'quiz/view',
//                'quiz/<id:\d+>/edit' => 'quiz/update',
//                'quiz/<id:\d+>/delete' => 'quiz/delete',
//                'quiz/<quiz_id:\d+>/add_chapter' => 'chapter/create',
//                'quiz/<quiz_id:\d+>/<chapter_num:\d+>' => 'chapter/view',
//                'quiz/<quiz_id:\d+>/<chapter_num:\d+>/random20' => 'chapter/random20',
//                'quiz/<quiz_id:\d+>/<chapter_num:\d+>/edit' => 'chapter/update',
//                'quiz/<quiz_id:\d+>/<chapter_num:\d+>/delete' => 'chapter/delete',
//            ],
//        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
