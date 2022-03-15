<?php

namespace App\Providers;

use File;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';
    protected $namespace ='app\\Http\\Controllers';
    protected $Modules = "modules";


    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();
        $this->apiRoutes();
        $this->webRoutes();
        $this->modulesRoutes();
    }
    public function apiRoutes(){
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }
    public function webRoutes(){

        Route::middleware('web')

            ->group(base_path('routes/web.php'));

    }
    public function modulesRoutes(){

        $dirs = File::directories(base_path('modules'));
        foreach ($dirs as $key => $value){
            $namespace =  $this->Modules. '\\' . basename($value);
            Route::middleware("web")->namespace($namespace . '\\' . basename($value))
                ->group($value . '/routes/routes.php');
        }

    }
    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
