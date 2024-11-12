<?php
namespace Ferreirajr\Adminfjr;
use Illuminate\Support\ServiceProvider;

class AdminFjrServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'teste');

        $this->publishes([
            __DIR__.'/../stubs/resources/Views' => resource_path('views'),
        ]);
        
    }

    public function register()
    {
        
    }

}
