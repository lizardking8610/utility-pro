<?php
/**
 * This file contains elements for theme support.
 *
 * @package      CDils\UtilityPro
 * @link         http://www.carriedils.com/utility-pro
 * @author       Gary Jones
 * @copyright    Copyright (c) 2017, Carrie Dils
 * @license      GPL-2.0+
 */

declare( strict_types = 1 );

namespace CDils\UtilityPro;

use BrightNucleus\Config\ConfigInterface;
use BrightNucleus\Config\ConfigTrait;
use BrightNucleus\Config\Exception\FailedToProcessConfigException;

/**
 * Class ThemeSupport.
 *
 * @package CDils\UtilityPro
 */
class ThemeSupport {
	use ConfigTrait;

	/**
	 * Initialise ThemeSupport object.
	 *
	 * @param ConfigInterface $config Config to parametrize the object.
	 *
	 * @throws FailedToProcessConfigException If the Config could not be parsed correctly.
	 */
	public function __construct( ConfigInterface $config ) {
		$this->processConfig( $config );
	}

	/**
	 * Register theme support items.
	 */
	public function register() {
		foreach ( $this->config->getArrayCopy() as $key => $value ) {
			add_theme_support( $key, $value );
		}
	}
}
