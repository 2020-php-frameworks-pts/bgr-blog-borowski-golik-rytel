<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=bgr-blog',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@app/mailer',
            'useFileTransport' => false,
            'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => 'smtp.gmail.com',
            'username' => 'jk6629724@gmail.com',
            'password' => '-zyrafa142',
            'port' => '587',
            'encryption' => 'tls',
        ],
    ],
];
