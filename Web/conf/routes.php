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
    "" => [
        'controller' => 'Main',
        'action' => 'index'
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