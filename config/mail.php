<?php

return [
    'driver' => env('MAIL_DRIVER', 'smtp'),
    'host' => env('MAIL_HOST', 'mail.majesticarts.com'),
    'port' => env('MAIL_PORT', 465),
    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'no-reply@majesticarts.com'),
        'name' => env('MAIL_FROM_NAME', 'Majestic arts'),
    ],
    'encryption' => env('MAIL_ENCRYPTION', 'null'),
    'username' => env('no-reply@majesticarts.com'),
    'password' => env("5x#6Wmv'UJA6X~f<"),
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => [
        'theme' => 'default',
        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],
    'log_channel' => env('MAIL_LOG_CHANNEL'),
];
