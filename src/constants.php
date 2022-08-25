<?php
/**
 * Application constants
 * 
 * This file configures defines the constants used in this application :
 * - DEBUG
 * - ROOT
 * - DS
 *
 * @category   Setup
 * @package    W6\PhpDevEnv
 * @author     WEB6 Cloud
 * @copyright  2022 WEB6 Cloud
 * @link       https://github.com/web6-cloud/php-dev-env.git
 */

declare(strict_types=1);

namespace W6\PhpDevEnv;

/**
 * Debug mode
 * 
 * Set debug mode :
 * - true: display error messages
 * - false: log error messages
 * 
 * @var bool
 */
const DEBUG = true;

/**
 * Directory Separator
 * 
 * @var string
 */
const DS = DIRECTORY_SEPARATOR;

/**
 * Root folder
 * 
 * @var string
 */
define( 'W6_PHPDEVENV_ROOT', dirname(__DIR__) );
const ROOT = W6_PHPDEVENV_ROOT;
