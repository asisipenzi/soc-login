<?php

return [
    'database' => [
        'dsn' => 'mysql:host=localhost;dbname=fblogin',
        'username' => 'root',
        'password' => '309397as'
    ],
    'fb' => [
        'id' => '1210438962688158',
        'secret' => 'ff05707c23eb64fee634f237d2b5a089',
        'version' => 'v2.9',
            'permission' => ['email'],
        'callback_url' => 'http://localhost:8080/facebook/fb-callback.php'
    ]
];