<?php namespace MZW\FilterSystem;

use Illuminate\Support\Contracts\ArrayableInterface;

abstract class Filter implements FilterInterface, ArrayableInterface
{
  public $name;
  public $options;

  public function toArray()
  {
    throw new \Exception('toArray has not be implemented.');
  }
}
