<?php

namespace Jeylabs\TriplePivot;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

/**
 * Class TriplePivotServiceProvider
 * @package Jeylabs\TriplePivot
 */
class TriplePivotServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Bootstrap the application events.
	 */
	public function boot() {
	}

	/**
	 * Register the service provider.
	 */
	public function register() {
		$this->app->booting( function () {
			$loader = AliasLoader::getInstance();
			$loader->alias( 'TriplePivot', 'Jeylabs\TriplePivot\Facades\TriplePivot' );
		} );
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides() {
		return [ 'triple-pivot' ];
	}

}
