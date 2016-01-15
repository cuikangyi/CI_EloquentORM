<?php

/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2016/1/15
 * Time: 9:14
 */
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Capsule\Manager as Capsule;

// require the ci database config
require_once APPPATH.'config/database.php';

//  Eloquent ORM
$capsule = new Capsule;

$capsule->addConnection(
    array(
        'driver'    => 'mysql',
        'host'      => $db['default']['hostname'],
        'database'  => $db['default']['database'],
        'username'  => $db['default']['username'],
        'password'  => $db['default']['password'],
        'charset'   => $db['default']['char_set'],
        'collation' => $db['default']['dbcollat'],
        'prefix'    => $db['default']['dbprefix']
    )
);
//boot Eloquent
$capsule->bootEloquent();