<?php

/*
 * This file is part of Laravel Instagram.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | Instagram Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like.
    |
    */

    'connections' => [

        'main' => [
            'client_id' => '9cba91818eb745489326d58eb124d584',
            'client_secret' => 'ae7ae30a107c4c1baecd92fa93f3e645',
            'callback_url' => 'http://www.fable.co.id/',
        ],

        'alternative' => [
            'client_id' => '9cba91818eb745489326d58eb124d584',
            'client_secret' => 'ae7ae30a107c4c1baecd92fa93f3e645',
            'callback_url' => 'http://www.fable.co.id/',
        ],

    ],

];
