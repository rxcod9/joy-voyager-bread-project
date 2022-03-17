<?php

return [

    /*
     * If enabled for voyager-bread-project package.
     */
    'enabled' => env('VOYAGER_BREAD_PROJECT_ENABLED', true),

    /*
     * The config_key for voyager-bread-project package.
     */
    'config_key' => env('VOYAGER_BREAD_PROJECT_CONFIG_KEY', 'joy-voyager-bread-project'),

    /*
     * The route_prefix for voyager-bread-project package.
     */
    'route_prefix' => env('VOYAGER_BREAD_PROJECT_ROUTE_PREFIX', 'joy-voyager-bread-project'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadProject\\Http\\Controllers',
    ],
];
