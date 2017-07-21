<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
            'username' => 'root',
            'password' => '',
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
            'appendTimestamp'=>true, // 静态资源管理添加文件修改时间戳
        ],
        'urlManager'=>[
            'enablePrettyUrl'=>true, // 美化url成site/index
            'showScriptName'=>false, // 隐藏入口文件
        ],
    ],
];
