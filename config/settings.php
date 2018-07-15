<?php

use Cekurte\Environment\Environment;

return [
    'settings' => [
        'displayErrorDetails' => Environment::get('DISPLAY_ERROR_DETAILS', false)
    ],
//    Home::class => function ($c) {
//        return new Home($c['view']);
//    }
];