<?php


namespace thirdly\acl;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use thirdly\acl\Console\Install;
use thirdly\acl\Http\Middleware\Permission;
use thirdly\acl\Facades\Acl;
class AclBaseServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerResource();
        if ($this->app->runningInConsole()) $this->registerPublishing();

    }

    public function register()
    {
        $this->commands([
            Install::class
        ]);
    }

    protected function registerResource()
    {
        $this->registerFacade();
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->registerRoute();
        $this->app['router']->aliasMiddleware('has-permission', Permission::class);
    }

    protected function registerRoute()
    {
        return Route::group($this->routeValidate(), function () {
            $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
        });

    }

    protected function routeValidate()
    {

        return [
            'prefix' => Acl::route_Path(),
        ];
    }

    protected function registerPublishing()
    {
        $this->publishes([
            __DIR__ . '/../config/acl.php' => config_path('acl.php')
        ], 'acl-config');
        $this->publishes([
            __DIR__.'/OpenAPIAnotations/AclAnotations.php' => base_path('OpenAPIAnotations/AclAnotations.php')
        ] , 'acl-swagger');
    }

    private function registerFacade()
    {
        $this->app->singleton('Acl', function ($app) {
            return new \thirdly\acl\Acl();
        });
    }

}