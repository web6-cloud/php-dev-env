<?php
/**
 * Application class
 * 
 * This class controls the application lifecycle :
 * - Singleton (only one instance is available)
 *
 * @category   App
 * @package    W6\PhpDevEnv
 * @author     WEB6 Cloud
 * @copyright  2022 WEB6 Cloud
 * @link       https://github.com/web6-cloud/php-dev-env.git
 */

declare(strict_types=1);

namespace W6\PhpDevEnv;

class App {

    private static $__instance = null;

    private function __construct() {
		
    }

    private function __clone() {
    }

    public static function getInstance() {
		if(!(self::$__instance instanceof self)){
			self::$__instance = new self();
		}
		return self::$__instance;
    }

}
