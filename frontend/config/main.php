<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'calendario/giorno' => 'calendario/giorno',
                'calendario/giorno/<anno:>/<mese:>/<giorno:>' => 'calendario/giorno-date',
                'calendario/settimana' => 'calendario/settimana',
                'calendario/settimana/<anno:>/<mese:>/<giorno:>' => 'calendario/settimana-date',
                'calendario/mese' => 'calendario/mese',
                'calendario/mese/<anno:>/<mese:>/<giorno:>' => 'calendario/mese-date',
                'calendario/anno' => 'calendario/anno',
                'calendario/anno/<anno:>/<mese:>/<giorno:>' => 'calendario/anno-date',
            ],
        ],

    ],
    'params' => $params,
];
