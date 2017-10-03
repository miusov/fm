<?php
ob_start('ob_gzhandler');

require __DIR__ . '/../vendor/autoload.php';

use fw\core\Router;

require '../vendor/fw/libs/helpers.php';
require '../vendor/fw/libs/functions.php';

$query = rtrim($_SERVER['QUERY_STRING'], '/');

define('DEBUG', 1);  //1 - режим отладки, 0 - продакшн

define('WWW', __DIR__);
define('CORE', dirname(__DIR__) . '/vendor/fw/core');
define('ROOT', dirname(__DIR__));
define('LIBS', dirname(__DIR__) . '/vendor/fw/libs');
define('APP', dirname(__DIR__).'/app');
define('CACHE', dirname(__DIR__).'/tmp/cache');
define('LAYOUT', 'default');

new \fw\core\App;

Router::add('^page/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$',['controller'=>'Page']);
Router::add('^page/(?P<alias>[a-z-]+)$',['controller'=>'Page', 'action' => 'view']);

//defaults routs

Router::add('^admin$',['controller'=>'User', 'action'=>'index', 'prefix' => 'admin']);
Router::add('^admin/?(?<controller>[a-z-]+)/?(?<action>[a-z-]+)?$', ['prefix' => 'admin']);

Router::add('^$',['controller'=>'Main', 'action'=>'index']);
Router::add('^(?<controller>[a-z-]+)/?(?<action>[a-z-]+)?$');

Router::dispatch($query);