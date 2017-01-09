<?php namespace H34\Auth;

use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->registerAuthInstall();
	}

	public function boot()
	{
		// include __DIR__.'/routes.php';

		$this->loadViewsFrom(__DIR__.'/resources/views', 'auth');

		$this->publishes([
	        __DIR__.'/resources/views' => base_path('resources/views/auth'),
	    ], 'views');

	    $this->publishes([
			__DIR__ . '/database/migrations/' => base_path('/database/migrations'),
		], 'migrations');
	}

    public function registerAuthInstall(){
		$this->app->singleton('command.h34.auth.install', function($app){
			return $app[\H34\Auth\Console\Commands\AuthInstall::class];
		});

		$this->commands('command.h34.auth.install');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [
            Zizaco\Entrust\EntrustServiceProvider::class,
        ];
	}

}
