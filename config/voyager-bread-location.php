<?php

return [

    /*
     * If enabled for voyager-bread-location package.
     */
    'enabled' => env('VOYAGER_BREAD_LOCATION_ENABLED', true),

    /*
     * The config_key for voyager-bread-location package.
     */
    'config_key' => env('VOYAGER_BREAD_LOCATION_CONFIG_KEY', 'joy-voyager-bread-location'),

    /*
     * The route_prefix for voyager-bread-location package.
     */
    'route_prefix' => env('VOYAGER_BREAD_LOCATION_ROUTE_PREFIX', 'joy-voyager-bread-location'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadLocation\\Http\\Controllers',
    ],
];
