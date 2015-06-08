<?php

namespace Jeylabs\TriplePivot\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class TriplePivot
 * @package Jeylabs\TriplePivot\Facades
 */
class TriplePivot extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() {
		return 'triple-pivot';
	}

}
