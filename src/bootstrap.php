<?php
/**
 * Bootstrap Eloquent
 *
 * @package     erdiko/eloquent
 * @copyright   2012-2017 Arroyo Labs, Inc. http://www.arroyolabs.com
 * @author      John Arroyo <john@arroyolabs.com>
 */

use Illuminate\Database\Capsule\Manager as Capsule;  

$capsule = new Capsule;

$container = $app->getContainer();
$settings = $container->get('settings');

// Get db credentials from the database.json config
$dbConfig = $settings['database'];
$creds = $dbConfig['connections'][$dbConfig['default']];
$capsule->addConnection(array(
    'driver'    => $creds['driver'],
    'host'      => $creds['host'],
    'database'  => $creds['database'],
    'username'  => $creds['username'],
    'password'  => $creds['password'],
    'charset'   => $creds['charset'],
    'collation' => $creds['collation'],
    'prefix'    => $creds['prefix']
));

$capsule->bootEloquent();