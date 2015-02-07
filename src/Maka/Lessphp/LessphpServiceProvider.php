<?php namespace Maka\Lessphp;

use Illuminate\Support\ServiceProvider;

class LessphpServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('maka/lessphp');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['less'] = $this->app->share(function($app)
		{
			return new Less();
		});
		
		$this->app->alias('less', 'Maka\Lessphp\Less');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
