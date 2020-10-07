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
    ],
    'google' => [
        'id' => '591947943239-gjfo7e67injjrje6lgpcvbn5mqam3tmn.apps.googleusercontent.com',
        'secret'=> 'E1mFCdeoX3MyNXNOz-0MpEN8',
        'callback_url' => 'http://localhost:8080/gm-callback.php',
        'scope' => ['https://www.googleapis.com/auth/userinfo.profile','https://www.googleapis.com/auth/userinfo.email']
    ]
];