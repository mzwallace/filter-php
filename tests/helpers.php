<?php

/*use Illuminate\Database\Capsule\Manager as Capsule;

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

use Illuminate\Database\Eloquent\Model as Eloquent;*/

// USAGE: $instance->distinct()->lists($this->attribute);

use Illuminate\Support\Collection;

class Product
{

  public function distinct()
  {
    return $this;
  }

  public function lists($column)
  {
    return ['Jane', 'Baby Jane', 'Bea'];
  }

  public function get($columns = [])
  {
    return Collection::make([
      [
        $columns[0] => 1,
        $columns[1] => 'Jane'
      ],
      [
        $columns[0] => 2,
        $columns[1] => 'Baby Jane'
      ],
      [
        $columns[0] => 3,
        $columns[1] => 'Bea'
      ]
    ]);
  }

}
