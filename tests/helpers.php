<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection(array(
  'host'      => 'localhost',
  'database'  => 'test',
  'username'  => 'root',
  'password'  => '',
  'collation' => 'utf8_general_ci',
  'charset'   => 'utf8',
  'driver'    => 'mysql',
  'prefix'    => '',
));

$capsule->bootEloquent();

use Illuminate\Database\Eloquent\Model as Eloquent;

class Product extends Eloquent {}
