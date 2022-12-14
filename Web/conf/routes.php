<?php


$routes = [
    // Front-End
    "account/login" => [
        'controller' => 'Account',
        'action' => "login"
    ],
    "account/register" => [
        'controller' => 'Account',
        'action' => 'register'
    ],
    /*
    "account/me" => [
        'controller' => "Account",
        'action' => 'me'
    ],
    DEPRECATED
    */
    "account/logout" => [
        'controller' => "Account",
        'action' => 'logout'
    ],
    "" => [
        'controller' => 'Main',
        'action' => 'index'
    ],

    // Legaly
    "legaly/terms" => [
        'controller' => "Legaly",
        'action' => 'tos'
    ],
    "legaly/privacy" => [
        'controller' => "Legaly",
        'action' => 'privacy'
    ],
    
    // Back-End
    
    "api/account/login" => [
        'controller' => "APIAccount",
        "action" => "login"
    ],
    "api/account/register" => [
        'controller' => 'APIAccount',
        'action' => 'register'
    ],
    /* "api/about" => [
        'controller' => 'APIGeneral',
        'action' => 'about'
    ], DEPRECATED*/

    // Admin panel
    "admin" => [
        "controller" => "Admin",
        "action" => "index"
    ]
];
