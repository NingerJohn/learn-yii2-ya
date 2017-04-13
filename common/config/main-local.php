<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=learnya',
            'username' => 'root',
            'password' => '1486',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'assetManager'=>[
            'bundles'=>[
                'yii\bootstrap\BootstrapAsset'=>[
                    'sourcePath'=>'@common/assets/bootstrap', // bootstrap新样式文件
                ]
            ],
        ],
        'urlManager'=>[
            'enablePrettyUrl'=>true,
            'showScriptName'=>false,
            'suffix'=>'.html',
        ],
    ],
];
