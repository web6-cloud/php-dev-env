<?php
/**
 * Application bootstrap
 * 
 * This file configures the framework :
 * - autoload
 * - constants
 * - debug mode
 * - launch app
 *
 * @category   Setup
 * @package    W6\PhpDevEnv
 * @author     WEB6 Cloud
 * @copyright  2022 WEB6 Cloud
 * @link       https://github.com/web6-cloud/php-dev-env.git
 */

declare(strict_types=1);

namespace W6\PhpDevEnv;

// Autoload
$autoloadPath = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
if( !file_exists($autoloadPath) ){
	trigger_error( 'Error: Autoload not found. Please follow installation instructions contained in the documentation (to install dependancies, please run the command `composer install` in root directory).', E_USER_ERROR );
}
require_once $autoloadPath;

// Constants
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'constants.php';

// Debug mode
if( DEBUG ){
	ini_set( 'display_errors', true );
	error_reporting( E_ALL );
} else {
	ini_set( 'display_errors', false );
	error_reporting( E_NONE );
}

// Launch App
App::init();
