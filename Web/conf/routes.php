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
    "account/me" => [
        'controller' => "Account",
        'action' => 'me'
    ],
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
        'controller' => "Main",
        'action' => 'tos'
    ],
    "legaly/privacy" => [
        'controller' => "Main",
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
    "api/about" => [
        'controller' => 'APIGeneral',
        'action' => 'about'
    ],
];
