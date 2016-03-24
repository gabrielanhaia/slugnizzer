<?php namespace Slugnizzer\Slugnizzer;

use Illuminate\Support\ServiceProvider;

class SlugnizzerServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool $defer
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('slugnizzer', function($app)
        {
            return new \Slugnizzer\Slugnizzer();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}