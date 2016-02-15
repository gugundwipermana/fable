<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        //
        
        $router->model('abouts', 'App\About');
        $router->model('blogs', 'App\Blog');
        $router->model('categorymenus', 'App\CategoryMenu');
        $router->model('covers', 'App\Cover');
        $router->model('djs', 'App\Dj');
        $router->model('events', 'App\Event');
        $router->model('guests', 'App\Guest');
        $router->model('menus', 'App\Menu');
        $router->model('reserves', 'App\Reserve');
        $router->model('users', 'App\User');


        $router->model('promos', 'App\Promo');
        $router->model('galleries', 'App\Gallery');

        $router->model('reservepromos', 'App\ReservePromo');
        $router->model('houses', 'App\House');
        $router->model('subscribes', 'App\Subscribe');

        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}
