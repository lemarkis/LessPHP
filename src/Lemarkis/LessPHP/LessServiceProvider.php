<?php namespace Lemarkis\LessPHP;

use Illuminate\Support\ServiceProvider;

class LessServiceProvider extends ServiceProvider {


	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->app['less'] = $this->app->share(function($app)
		{
			return new Less($app['config'], $app['html']);
		});
		$this->publishes([
			__DIR__.'/config/config.php' => config_path('LessPHP.php'),
		]);
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('less');
	}

}
